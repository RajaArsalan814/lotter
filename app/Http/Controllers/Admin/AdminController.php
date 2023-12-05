<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use DB;
use DataTables;
use Mail;
use Carbon\Carbon;
use Session;
use App\Models\LotterySet;
use App\Models\LotteryPlace;
use App\Models\Setting;
use App\Http\Controllers\LotteryController;


class AdminController extends Controller
{

   public function dashboard(Request $request)
    {

        $user_id = Auth::user()->id;
        $user = User::where('id',$user_id)->first();

        $total_users_by_agents = User::where('type','user')->where('user_id',$user_id)->count();
        $total_agents = User::where('type','agent')->count();
        $total_users = User::where('type','user')->count();

        $already_lottery = LotterySet::whereDate('created_at',Carbon::today())->first();
        $setting = Setting::first();

       return view('admin/dashboard',compact('user','total_users','total_agents','total_users_by_agents','already_lottery','setting'));
    }

    public function who_win(Request $request){

            $setting = Setting::first();
            if(isset($setting)){
                $setting->win = $request->win;
                $setting->save();
            }else{
                $setting = new Setting;
                $setting->win = $request->win;
                $setting->save();
            }
            return redirect()->back()
            ->with(['message'=>'Scenario update successfully','type'=>'success']);
        }


    public function change_status(Request $request)
    {
        $statusChange = User::where('id',$request->id)->update(['status'=>$request->status]);
        if($statusChange)
        {
            return array('message'=>'User status  has been changed successfully','type'=>'success');
        }else{
            return array('message'=>'User status has not changed please try again','type'=>'error');
        }

    }


    public function profile()
   {
    // return $link = Session::get('link');
     return view('admin.profile');
   }

   public function profileUpdate(Request $request)
   {
        $user = User::find(auth()->user()->id);
        $input = $request->except(['profile','_token'],$request->all());

        if($request->hasFile('profile'))
        {
            $img = Str::random(20).$request->file('profile')->getClientOriginalName();
            $input['profile'] = $img;
            $request->profile->move(public_path("documents/profile/"), $img);
        }

        $user->update($input);

        return redirect()->back()
                ->with(['message'=>'User update successfully','type'=>'success']);
   }


   public function list()
   {
      $users = User::get();
      return view("admin.list2",compact('users'));
   }

   public function cron_call_lottery_win(){

        $currentDatetime = now();
        // run this query in cron after every half hour
        $setting = Setting::first();
        $i=$setting->win;
        switch($i){

            case 'highest':

                 $lottery_set = LotterySet::has('lottery_place')->with(['lottery_place' => function ($query) {
                    $query
                    ->groupBy('lottery_set_id','number_select')
                    ->select('lottery_set_id','number_select', DB::raw('SUM(quantity) as total_quantity'))
                    ->orderByDesc('total_quantity')->take(1);
                }])->where('number_win',NULL)->whereDate('created_at', now()->toDateString())
                ->where('end_date','>', $currentDatetime)
                ->first();
            break;

            case 'second_highest':

                $lottery_set = LotterySet::has('lottery_place')->with(['lottery_place' => function ($query) {
                    $query
                    ->groupBy('lottery_set_id','number_select')
                    ->select('lottery_set_id','number_select', DB::raw('SUM(quantity) as total_quantity'))
                    ->orderByDesc('total_quantity')->skip(1)->take(1);
                }])->where('number_win',NULL)->whereDate('created_at', now()->toDateString())
                ->where('end_date','>', $currentDatetime)
                ->first();
            break;

            case 'third_highest':

                $lottery_set = LotterySet::has('lottery_place')->with(['lottery_place' => function ($query) {
                    $query
                    ->groupBy('lottery_set_id','number_select')
                    ->select('lottery_set_id','number_select', DB::raw('SUM(quantity) as total_quantity'))
                    ->orderByDesc('total_quantity')->skip(2)->take(1);
                }])->where('number_win',NULL)->whereDate('created_at', now()->toDateString())
                ->where('end_date','>', $currentDatetime)
                ->first();
            break;

            case 'fourth_highest':

                $lottery_set = LotterySet::has('lottery_place')->with(['lottery_place' => function ($query) {
                    $query
                    ->groupBy('lottery_set_id','number_select')
                    ->select('lottery_set_id','number_select', DB::raw('SUM(quantity) as total_quantity'))
                    ->orderByDesc('total_quantity')->skip(3)->take(1);
                }])->where('number_win',NULL)->whereDate('created_at', now()->toDateString())
                ->where('end_date','>', $currentDatetime)
                ->first();
            break;

            case 'second_lowest':

                $lottery_set = LotterySet::has('lottery_place')->with(['lottery_place' => function ($query) {
                    $query
                    ->groupBy('lottery_set_id','number_select')
                    ->select('lottery_set_id','number_select', DB::raw('SUM(quantity) as total_quantity'))
                    ->orderBy('total_quantity')->skip(1)->take(1);
                }])->where('number_win',NULL)->whereDate('created_at', now()->toDateString())
                ->where('end_date','>', $currentDatetime)
                ->first();
            break;

            case 'lowest':

                $lottery_set = LotterySet::has('lottery_place')->with(['lottery_place' => function ($query) {
                    $query
                    ->groupBy('lottery_set_id','number_select')
                    ->select('lottery_set_id','number_select', DB::raw('SUM(quantity) as total_quantity'))
                    ->orderBy('total_quantity')->take(1);
                }])->where('number_win',NULL)->whereDate('created_at', now()->toDateString())
                ->where('end_date','>', $currentDatetime)
                ->first();
            break;

            case 'no_win':
            break;

            default:
                echo "no";
        }
        if(!empty($lottery_set->lottery_place) AND isset($lottery_set)){
            foreach($lottery_set->lottery_place as $item){
                $number_win =  $item->number_select;
                $lottery_set_id =  $item->lottery_set_id;
            }

            $number_win;
            $lottery_set_id;
            $call_function = new LotteryController();
            $call_function->lottery_set_update($lottery_set_id,$number_win);
        }
        // Query end for cron job which will be use for user win
   }
}
