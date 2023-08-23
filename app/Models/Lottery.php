<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lottery extends Model
{
    use HasFactory;

    protected $table="lotteries";


    /**
     * Get all of the comments for the Lottery
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lottery_set()
    {
        return $this->hasMany(LotterySet::class, 'lottery_id', 'id');
    }
}
