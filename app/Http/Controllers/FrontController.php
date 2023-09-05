<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CarModel;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use DB;
use Hash;
use DataTables;
use Session;
use Carbon\Carbon;
use App\Models\Lottery;
use App\Models\LotteryPlace;
use App\Models\LotterySet;

use DateTime;


class FrontController extends Controller
{


    public function index()
    {
        $setting = Setting::first();


        return view('front.index',compact('setting'));
    }
    public function user_login(Request $request)
    {
        return view('login');

    }


    public function userRegister(Request $request)
    {
        return view('register');
    }

    public function forgotPasswords()
    {
        return view('forgot-password');
    }
    public function resetpassword($id)
    {

        return view('resetpasswords-password',compact('id'));
    }


    public function loginAdminProcess(Request $request)
    {
        // return $request->all();


        if (Auth::attempt(array('phone_number' => $request->phone_number, 'password' => $request->password,'status'=>1)))
        {

            $user = User::where('phone_number',$request->phone_number)->first();
            if($user->type=='user'){
                return redirect('home_page')->with(array('message'=>'Login success','type'=>'success'));
            }
                return redirect('admin/dashboard')->with(array('message'=>'Login success','type'=>'success'));

        }else{
            return redirect()->back()->with(array('message'=>'Invalid email or Password','type'=>'error'));
        }
    }


    public function RegisterProcess(Request $request)
    {

        $token = Str::random(40);
        $validator = Validator::make($request->all(), [
           'email' => 'required|email|unique:users',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with(array('message'=>'This email is already exists','type'=>'error'));
        }

        $users = $request->except(['password','password_confirmation'],$request->all());
        if($request->hasFile('profile'))
        {
            $img = Str::random(20).$request->file('profile')->getClientOriginalName();
            $users['profile'] = $img;
            $request->profile->move(public_path("documents/profile"), $img);
        }


        $users['type'] ='admin';
        $users['role_id'] ='Administrator';


        $users['password'] = Hash::make($request->password);
        $user = User::create($users);
        $user->assignRole('Administrator');
        if($user)
        {
            return redirect()->back()->with(array('message'=>'account created succssfully Please check your email','type'=>'success'));

        }else{
            return redirect()->with(array('message'=>'Somethig wrong please try again','type'=>'error'));
        }


    }


    public function forgotPassword(Request $request)
    {
        if($request->has("email")){
            $user = User::where('email',$request->email)->get()->first();
            if($user)
            {
                $first_name = $user->first_name??'';
                $last_name = $user->last_name??'';
                $email = $user->email;
                $fourRandomDigit = time().rand(1000,9999);
                User::where('email',$request->email)->update(['remember_token'=>$fourRandomDigit]);
                $data = array('otp'=>$fourRandomDigit);
               $send = Mail::send("admin/mail2", $data, function($message) use($email,$first_name,$last_name) {
                    $message->to($email, $first_name." ".$last_name)->subject('You have requested to reset your password');
                    $message->from('robertsonalexander40@gmail.com','Test');
                });
                return redirect()->back()->with(['message'=>"A password reset link has been sent to your email",'type'=>'success']);
            }else{
                return redirect()->back()->with(['message'=>"Invalid Email",'type'=>'error']);
            }
        }else
        {
            return redirect()->back()->with(['message'=>"Please provide emai",'type'=>'error']);
        }
    }

    public function updatePassword(Request $request)
    {
        if($request->has("remember_token"))
        {
            if($request->has("password"))
            {
                $user = User::where('remember_token',$request->remember_token)->get()->first();
                if($user)
                {
                    User::where('remember_token',$request->remember_token)->update(['remember_token'=>time().rand(1000,9999),'password'=>Hash::make($request->password)]);
                    return redirect('/')->with(['message'=>"Password reset Successfully",'type'=>'success']);
                }else
                {
                    return redirect()->back()->with(['message'=>"Invalid token please try again",'type'=>'error']);
                }
            }else
            {
                return redirect()->back()->with(['message'=>"Please enter password",'type'=>'error']);
            }
        }else
        {

            return redirect()->back()->with(['message'=>"Please provide reset password token",'type'=>'error']);
        }
    }


    public function search(Request $request)
    {
        $search = CarModel::where('status',1);
        if($request->modal_name !=null)
        $search->where('modal_name', 'like', "%$request->modal_name%");
        // $search->where('modal_name',$request->modal_name);
        if($request->price != null)
        // $search->Orwhere('price',$request->price);
        $search->where('price', 'like', "%$request->price%");


       $search = $search->get();
       $setting = Setting::first();
        return view('front.index',compact('search','setting'));
    }

    public function getProducts(Request $request)
    {
       return $search = CarModel::where('status',1)->where('modal_name', 'like', "%$request->modal_name%")->get();

    }

    public function searchProduct($id)
    {
        $search = CarModel::where('status',1)->where('id',$id)->get();
        $setting = Setting::first();
        return view('front.index',compact('search','setting'));
    }

    public function home_page(){


        $current_time = time();

        $new_time = $current_time + 30 * 60;
        date_default_timezone_set("Asia/Karachi");

        $start_time =  date('H:i:s');
        $end_time =  date('H:i:s', $new_time);

// $lottery_set = LotterySet::whereTime('start_date' ,'>', $start_time)->get();

// DB::table('lottery_sets')->whereTime('start_date', '>=', $start_time)->get();
// $rows = DB::table('lottery_sets')->whereBetween('start_date', [$start_time,$end_time])->get();

$currentDateTime = Carbon::now();
$currentDate = Carbon::today();

$lottery = LotterySet::with('lottery')->whereTime('start_date', '<=', $currentDateTime)
    ->whereTime('end_date', '>=', $currentDateTime)
    ->whereDate('start_date',$currentDate)
    ->get();

        return view('website.index',compact('lottery'));
    }

    public function next_page(){

        return view('website.lotteries');
    }

    public function hit_me(Request $request){

        $data = $request->all();
        return view('website.second_page',compact('data'));
    }

    public function submit_data(Request $request){


        if(Auth::user()){

        $lottery = Lottery::where('name',$request->lottery_name)->first();
        if($lottery->id=='1')
        {

            $total_quantity_with_price = array_sum($request->quantity)*11;
            $total_credit = Auth::user()->total_credit;
            if($total_credit >= $total_quantity_with_price ){
                $user_id = auth()->id();
                $data =  $request->all();

                $save_data=[];
                foreach($data['number_select'] as $key=>$desc){
                    $save_data[]=[
                        'lottery_id' => $lottery->id,
                        'user_id' => $user_id,
                        'number_select'=>$desc,
                        'quantity'=>$data['quantity'][$key],
                        'lottery_set_id'=>$request->lottery_set_id,
                    ];
                }
                LotteryPlace::insert($save_data);

                $new_credit = $total_credit - $total_quantity_with_price;
                User::where('id',$user_id)->update(['total_credit'=>$new_credit]);
                return redirect()->route('home_page')
                ->with(['message'=>'Lottery Create Successfully','type'=>'success']);
            }else{
                return redirect()->route('home_page')
                ->with(['message'=>'You have less credit','type'=>'error']);

            }

        }


        }

        return redirect()->back()
        ->with(['message'=>'please login for lottery purchase','type'=>'error']);
    }

}
