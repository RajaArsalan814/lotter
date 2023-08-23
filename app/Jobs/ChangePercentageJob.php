<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\CarModel;

class ChangePercentageJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $percent;
    protected $data;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data, $percent)
    {
        $this->percent = $percent;
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach ($this->data as $key => $value) {
            $dataJob = CarModel::find($value->id);
            $input['gp'] =  (floatval($value->price) *  $this->percent / 100) + floatval($value->price);
            $input['percentage'] = $this->percent;
            if ($dataJob) {
                // Update the data with new values
                $dataJob->update($input);
            }
        }
    }
}
