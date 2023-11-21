<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LotterySet extends Model
{
    use HasFactory;

    protected $fillable=['start_date','end_date','lottery_id'];

    public function lottery()
    {
        return $this->BelongsTo(Lottery::class, 'lottery_id', 'id');
    }


    /**
     * Get all of the comments for the LotterySet
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lottery_place()
    {
        return $this->hasMany(LotteryPlace::class, 'lottery_set_id', 'id');
    }
}
