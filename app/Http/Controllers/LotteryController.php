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


    public function add_on_store(Request $request){

        $already_lottery = LotterySet::where('lottery_id',$request->lottery_id)->whereDate('created_at',Carbon::today())->first();
        if(isset($already_lottery)){
            return redirect()->route('lottery.add_on_index')->with(['message'=>'Lottery already created for today','type'=>'error']);
        }else{
        date_default_timezone_set("Asia/Karachi");
        $dt = Carbon::now();
        $date = $dt->toDateString();
        $start_date = $date .' 14:00:00' ;
        $end_date = $date .' 14:30:00' ;
        $lottery_set = new LotterySet;
        $lottery_set->lottery_id = $request->lottery_id;
        $lottery_set->start_date = $start_date;
        $lottery_set->end_date = $end_date;
        $lottery_set->save();


        $date = $dt->toDateString();
        $start_date = $date .' 14:31:00' ;
        $end_date = $date .' 14:59:00' ;
        $lottery_set = new LotterySet;
        $lottery_set->lottery_id = $request->lottery_id;
        $lottery_set->start_date = $start_date;
        $lottery_set->end_date = $end_date;
        $lottery_set->save();



        $date = $dt->toDateString();
        $start_date = $date .' 15:00:00' ;
        $end_date = $date .' 15:30:00' ;
        $lottery_set = new LotterySet;
        $lottery_set->lottery_id = $request->lottery_id;
        $lottery_set->start_date = $start_date;
        $lottery_set->end_date = $end_date;
        $lottery_set->save();


        $date = $dt->toDateString();
        $start_date = $date .' 15:31:00' ;
        $end_date = $date .' 15:59:00' ;
        $lottery_set = new LotterySet;
        $lottery_set->lottery_id = $request->lottery_id;
        $lottery_set->start_date = $start_date;
        $lottery_set->end_date = $end_date;
        $lottery_set->save();

        $date = $dt->toDateString();
        $start_date = $date .' 16:00:00' ;
        $end_date = $date .' 16:30:00' ;
        $lottery_set = new LotterySet;
        $lottery_set->lottery_id = $request->lottery_id;
        $lottery_set->start_date = $start_date;
        $lottery_set->end_date = $end_date;
        $lottery_set->save();

        $date = $dt->toDateString();
        $start_date = $date .' 16:31:00' ;
        $end_date = $date .' 16:59:00' ;
        $lottery_set = new LotterySet;
        $lottery_set->lottery_id = $request->lottery_id;
        $lottery_set->start_date = $start_date;
        $lottery_set->end_date = $end_date;
        $lottery_set->save();


        $date = $dt->toDateString();
        $start_date = $date .' 17:00:00' ;
        $end_date = $date .' 17:30:00' ;
        $lottery_set = new LotterySet;
        $lottery_set->lottery_id = $request->lottery_id;
        $lottery_set->start_date = $start_date;
        $lottery_set->end_date = $end_date;
        $lottery_set->save();

        $date = $dt->toDateString();
        $start_date = $date .' 17:31:00' ;
        $end_date = $date .' 17:59:00' ;
        $lottery_set = new LotterySet;
        $lottery_set->lottery_id = $request->lottery_id;
        $lottery_set->start_date = $start_date;
        $lottery_set->end_date = $end_date;
        $lottery_set->save();


        $date = $dt->toDateString();
        $start_date = $date .' 18:00:00' ;
        $end_date = $date .' 18:30:00' ;
        $lottery_set = new LotterySet;
        $lottery_set->lottery_id = $request->lottery_id;
        $lottery_set->start_date = $start_date;
        $lottery_set->end_date = $end_date;
        $lottery_set->save();

        $date = $dt->toDateString();
        $start_date = $date .' 18:31:00' ;
        $end_date = $date .' 18:59:00' ;
        $lottery_set = new LotterySet;
        $lottery_set->lottery_id = $request->lottery_id;
        $lottery_set->start_date = $start_date;
        $lottery_set->end_date = $end_date;
        $lottery_set->save();



    }

        return redirect()->route('lottery.add_on_index')->with(['message'=>'Lottery created successfully for today','type'=>'success']);
    }

    public function add_on_index()
    {

        // lottery_set_id
        //
// return
//         DB::table('lottery_places')
//         ->count(DB::raw('DISTINCT user_id'));
        // ->get();
        // ->groupBy('id')


        $lottery = LotterySet::with('lottery','lottery_place')->orderBy('id','DESC')->get();
        return view('admin.lottery.add_on_index',compact('lottery'));
    }

    public function lottery_set_edit($id){
        $lottery_set = LotterySet::where('id',$id)->first();
        return view('admin.lottery.lottery_edit',compact('lottery_set'));
    }

    public function lottery_set_update(Request $request){

        LotterySet::where('id',$request->lottery_set_id)->update(['number_win'=>$request->lottery_number_select]);

        $lottery_win_user = LotteryPlace::where('lottery_set_id',$request->lottery_set_id)->where('number_select',$request->lottery_number_select)->get();

        // foreach($lottery_win_user as $item){
        //     return $item->number_select;
        // }
        // return $request->lottery_id;

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
