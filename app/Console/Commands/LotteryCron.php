<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\LotteryController;

class LotteryCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lottery:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // return Command::SUCCESS;

        \Log::info("Cron is working fine!");
        $classA = new LotteryController();
        $classA->cron_call_function();
        // LotteryController::cron_call_function();

        /*

           Write your database logic we bellow:

           Item::create(['name'=>'hello new']);

        */
    }
}
