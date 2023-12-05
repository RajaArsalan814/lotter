<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Setting;
use App\Http\Controllers\Admin\AdminController;

class win_lottery extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'win:lottery';

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

        $classA = new AdminController();
        $classA->cron_call_lottery_win();
        \Log::info('Cron Job Done for lottery win');

        // $setting = Setting::first();
        // $i=$setting->win;
    }
}
