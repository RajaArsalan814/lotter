<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lottery;
use App\Models\LotterySet;
use App\Models\LotteryPlace;
use App\Models\User;
use Carbon\Carbon;
use DB;
class LotteryController extends Controller
{
    public function index(){

        $lottery = Lottery::get();
        return view('admin.lottery.index',compact('lottery'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lottery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //   return $request->all();

        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'amount' => 'required',
        // ]);

        $lottery = new Lottery;
        $lottery->name = $request->name;
        $lottery->amount = $request->amount;
        $lottery->status = $request->status;
        $lottery->save();
        return redirect()->route('lottery.index')->with(['message'=>'Lottery created successfully','type'=>'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lottery = Lottery::find($id);
        return view('admin.lottery.show',compact('lottery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

         $lottery = Lottery::find($id);
         return view('admin.lottery.edit',compact('lottery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // return $request->all();
        $lottery = Lottery::find($request->id);
        $lottery->name = $request->name;
        $lottery->amount = $request->amount;
        $lottery->status = $request->status;
        $lottery->save();
        return redirect()->route('lottery.index')
                ->with(['message'=>'Lottery update successfully','type'=>'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lottery::find($id)->delete();
        return redirect()->route('lottery.index')
                        ->with(['message'=>'Lottery delete successfully','type'=>'success']);
    }

    public function add_on()
    {
        $lottery = Lottery::get();
        return view('admin.lottery.add_on',compact('lottery'));
    }

    public function cron_call_function(){
        $already_lottery = LotterySet::whereDate('created_at',Carbon::today())->first();
        if(isset($already_lottery)){
            \Log::info("Lottery Already Created for today!");
        }else{
            date_default_timezone_set("Asia/Karachi");
            $dt = Carbon::now();
            $date = $dt->toDateString();
            $lottery_id=[1,2,3];
            $starttime = '9:00';  // your start time
            $endtime = '9:30';  // End time
            $duration = '30';  // split by 30 mins

            $array_of_time = array ();
            $start_time    = strtotime ($starttime); //change to strtotime
            $end_time      = strtotime ($endtime); //change to strtotime

            $add_mins  = $duration * 60;

            while ($start_time <= 1701709200) // loop between time
            {

                                    $lottery_id;
                    foreach($lottery_id as $item){
                            $array_of_time[] = array(
                                'start_date' => $date .' '. date("H:i:s", $start_time),
                                'end_date' => $date .' '. date("H:i:s", $end_time),
                                'lottery_id' => $item
                            );
                        }
                        $start_time += $add_mins; // to check endtie=me
                        $end_time += $add_mins; // to check endtie=me
                    }
                    LotterySet::insert($array_of_time);
        }
    }


    // public function add_on_store(Request $request){

    //     $already_lottery = LotterySet::where('lottery_id',$request->lottery_id)->whereDate('created_at',Carbon::today())->first();
    //     if(isset($already_lottery)){
    //         return redirect()->route('lottery.add_on_index')->with(['message'=>'Lottery already created for today','type'=>'error']);
    //     }else{
    //     date_default_timezone_set("Asia/Karachi");
    //     $dt = Carbon::now();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 09:00:00' ;
    //     $end_date = $date .' 09:30:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 09:31:00' ;
    //     $end_date = $date .' 09:59:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 10:00:00' ;
    //     $end_date = $date .' 10:30:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 10:31:00' ;
    //     $end_date = $date .' 10:59:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 11:00:00' ;
    //     $end_date = $date .' 11:30:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 11:31:00' ;
    //     $end_date = $date .' 11:59:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 12:00:00' ;
    //     $end_date = $date .' 12:30:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 12:31:00' ;
    //     $end_date = $date .' 12:59:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 13:00:00' ;
    //     $end_date = $date .' 13:30:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 13:31:00' ;
    //     $end_date = $date .' 13:59:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 14:00:00' ;
    //     $end_date = $date .' 14:30:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 14:31:00' ;
    //     $end_date = $date .' 14:59:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 15:00:00' ;
    //     $end_date = $date .' 15:30:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 15:31:00' ;
    //     $end_date = $date .' 15:59:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 16:00:00' ;
    //     $end_date = $date .' 16:30:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 16:31:00' ;
    //     $end_date = $date .' 16:59:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 17:00:00' ;
    //     $end_date = $date .' 17:30:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 17:31:00' ;
    //     $end_date = $date .' 17:59:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 18:00:00' ;
    //     $end_date = $date .' 18:30:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 18:31:00' ;
    //     $end_date = $date .' 18:59:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 19:00:00' ;
    //     $end_date = $date .' 19:30:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 19:31:00' ;
    //     $end_date = $date .' 19:59:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 20:00:00' ;
    //     $end_date = $date .' 20:30:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 20:31:00' ;
    //     $end_date = $date .' 20:59:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 21:00:00' ;
    //     $end_date = $date .' 21:30:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 21:31:00' ;
    //     $end_date = $date .' 21:59:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 22:00:00' ;
    //     $end_date = $date .' 22:30:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 22:31:00' ;
    //     $end_date = $date .' 22:59:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 23:00:00' ;
    //     $end_date = $date .' 23:30:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     $date = $dt->toDateString();
    //     $start_date = $date .' 23:31:00' ;
    //     $end_date = $date .' 23:59:00' ;
    //     $lottery_set = new LotterySet;
    //     $lottery_set->lottery_id = $request->lottery_id;
    //     $lottery_set->start_date = $start_date;
    //     $lottery_set->end_date = $end_date;
    //     $lottery_set->save();

    //     }

    //     return redirect()->route('lottery.add_on_index')->with(['message'=>'Lottery created successfully for today','type'=>'success']);
    // }

    public function add_on_index()
    {

        // lottery_set_id
        //
// return
//         DB::table('lottery_places')
//         ->count(DB::raw('DISTINCT user_id'));
        // ->get();
        // ->groupBy('id')
        // return
        // return   LotteryPlace::withcount(['users'])->get();

        $lottery = LotterySet::withcount(['lottery','lottery_place as total_users' => function ($query) {

            $query->select(DB::raw('count(distinct(user_id))'));

        },'lottery_place as total_quantity' => function ($query) {

            $query->select(DB::raw('sum(quantity)'));

        }])->orderBy('id','DESC')->get();

        return view('admin.lottery.add_on_index',compact('lottery'));
    }

    public function lottery_set_edit($id){

        // return LotteryPlace::where('lottery_set_id',$id)->orderBy('quantity')->first();
        $lottery_set = LotterySet::where('id',$id)->first();
        return view('admin.lottery.lottery_edit',compact('lottery_set'));
    }

    public function lottery_set_update(Request $request){
        //  return $request->all();

        $data =  LotteryPlace::where('lottery_set_id',$request->lottery_set_id)->orderBy('quantity')->first();

        LotterySet::where('id',$request->lottery_set_id)->update(['number_win'=>$data->number_select]);

        $lottery_win_user = LotteryPlace::where('lottery_set_id',$request->lottery_set_id)->where('number_select',$data->number_select)->get();

        $participant_users = LotteryPlace::where('lottery_set_id',$request->lottery_set_id)->orderBy('id','DESC')->get();

        foreach($participant_users as $key=>$desc){
            if($desc->lottery_id=='3'){

                $number_select = strrev($desc->number_select);
                if($number_select == $request->lottery_number_select) {
                    $total_price =   $desc->quantity * 500;
                    $previous_credit = User::where('id',$desc->user_id)->value('total_credit');
                    $new_price_value =  $previous_credit+$total_price;
                    User::where('id',$desc->user_id)->update(['total_credit'=> $new_price_value]);
                }
            }
        }

        foreach($lottery_win_user as $key=>$desc){


            if($desc->lottery_id=='1'){

                $total_price =   $desc->quantity * 100;
                $previous_credit = User::where('id',$desc->user_id)->value('total_credit');
                $new_price_value =  $previous_credit+$total_price;
                User::where('id',$desc->user_id)->update(['total_credit'=> $new_price_value]);
            }elseif($desc->lottery_id == '2'){

                $total_price =   $desc->quantity * 1000;
                $previous_credit = User::where('id',$desc->user_id)->value('total_credit');
                $new_price_value =  $previous_credit+$total_price;
                User::where('id',$desc->user_id)->update(['total_credit'=> $new_price_value]);

            }elseif($desc->lottery_id == '3'){


                $ai_number_win = $request->lottery_number_select;
                $total_price =   $desc->quantity * 2000;
                $previous_credit = User::where('id',$desc->user_id)->value('total_credit');

                $new_price_value =  $previous_credit+$total_price;
                User::where('id',$desc->user_id)->update(['total_credit'=> $new_price_value]);

            }

            // $save_data[]=[
            //     'lottery_id' => $lottery->id,
            //     'user_id' => $user_id,
            //     'number_select'=>$desc,
            //     'quantity'=>$data['quantity'][$key],
            //     'lottery_set_id'=>$request->lottery_set_id,
            // ];
        }

        return redirect()->route('lottery.add_on_index')->with(['message'=>'Lottery Win ','type'=>'success']);
    }

    public function my_lottery(){

        $user_id = auth()->id();
        $all_user_ids = User::where('user_id',$user_id)->pluck('id');


        $my_lottery = LotteryPlace::with('lottery','lottery_set')->where('user_id',$user_id)->orderBy('id','DESC')->get();
        $all_user_lottery  = LotteryPlace::with('lottery','lottery_set')->whereIN('user_id',$all_user_ids)->orderBy('id','DESC')->get();

        return view('admin.lottery.my_lottery',compact('my_lottery','all_user_lottery'));
    }

    public function all_lotteries(){

        $all_lotteries = LotteryPlace::with('lottery')->get();
        return view('admin.lottery.all_lotteries',compact('all_lotteries'));
    }
}

// lottery create by admin

// agent create users

// auto lotery win by users

// agent add credit to users data

//
