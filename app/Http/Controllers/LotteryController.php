<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lottery;
use App\Models\LotterySet;
use App\Models\LotteryPlace;
use Carbon\Carbon;

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
        // return $request->all();

        $already_lottery = LotterySet::where('lottery_id',$request->lottery_id)->whereDate('created_at',Carbon::today())->first();
        if(isset($already_lottery)){

            return redirect()->route('lottery.add_on_index')->with(['message'=>'Lottery already created for today','type'=>'error']);
        }else{
            date_default_timezone_set("Asia/Karachi");
        $dt = Carbon::now();
        $date = $dt->toDateString();
        $start_date = $date .' 01:00:00' ;
        $end_date = $date .' 01:30:00' ;
        $lottery_set = new LotterySet;
        $lottery_set->lottery_id = $request->lottery_id;
        $lottery_set->start_date = $start_date;
        $lottery_set->end_date = $end_date;
        $lottery_set->save();


        $date = $dt->toDateString();
        $start_date = $date .' 01:31:00' ;
        $end_date = $date .' 01:59:00' ;
        $lottery_set = new LotterySet;
        $lottery_set->lottery_id = $request->lottery_id;
        $lottery_set->start_date = $start_date;
        $lottery_set->end_date = $end_date;
        $lottery_set->save();



        $date = $dt->toDateString();
        $start_date = $date .' 02:00:00' ;
        $end_date = $date .' 02:30:00' ;
        $lottery_set = new LotterySet;
        $lottery_set->lottery_id = $request->lottery_id;
        $lottery_set->start_date = $start_date;
        $lottery_set->end_date = $end_date;
        $lottery_set->save();


        $date = $dt->toDateString();
        $start_date = $date .' 02:31:00' ;
        $end_date = $date .' 02:59:00' ;
        $lottery_set = new LotterySet;
        $lottery_set->lottery_id = $request->lottery_id;
        $lottery_set->start_date = $start_date;
        $lottery_set->end_date = $end_date;
        $lottery_set->save();

        $date = $dt->toDateString();
        $start_date = $date .' 03:00:00' ;
        $end_date = $date .' 03:30:00' ;
        $lottery_set = new LotterySet;
        $lottery_set->lottery_id = $request->lottery_id;
        $lottery_set->start_date = $start_date;
        $lottery_set->end_date = $end_date;
        $lottery_set->save();

        $date = $dt->toDateString();
        $start_date = $date .' 03:31:00' ;
        $end_date = $date .' 03:59:00' ;
        $lottery_set = new LotterySet;
        $lottery_set->lottery_id = $request->lottery_id;
        $lottery_set->start_date = $start_date;
        $lottery_set->end_date = $end_date;
        $lottery_set->save();

        $date = $dt->toDateString();
        $start_date = $date .' 04:00:00' ;
        $end_date = $date .' 04:30:00' ;
        $lottery_set = new LotterySet;
        $lottery_set->lottery_id = $request->lottery_id;
        $lottery_set->start_date = $start_date;
        $lottery_set->end_date = $end_date;
        $lottery_set->save();


    }

        return redirect()->route('lottery.add_on_index')->with(['message'=>'Lottery created successfully','type'=>'success']);
    }

    public function add_on_index()
    {

     $lottery = LotterySet::with('lottery')->get();
        return view('admin.lottery.add_on_index',compact('lottery'));
    }

    public function lottery_set_edit($id){
        $lottery_set = LotterySet::where('id',$id)->first();
        return view('admin.lottery.lottery_edit',compact('lottery_set'));
    }

    public function lottery_set_update(Request $request){
        LotterySet::where('id',$request->lottery_set_id)->update(['number_win'=>$request->lottery_number_select]);
        return redirect()->route('lottery.add_on_index')->with(['message'=>'Lottery Win ','type'=>'success']);
    }

    public function my_lottery(){

        $user_id = auth()->id();

        $my_lottery = LotteryPlace::with('lottery','lottery_set')->where('user_id',$user_id)->get();
        return view('admin.lottery.my_lottery',compact('my_lottery'));
    }

    public function all_lotteries(){

        $all_lotteries = LotteryPlace::with('lottery')->get();
        return view('admin.lottery.all_lotteries',compact('all_lotteries'));
    }
}
