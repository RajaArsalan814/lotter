<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LotteryPlace extends Model
{
    use HasFactory;

    public function lottery()
    {
        return $this->belongsTo(Lottery::class, 'lottery_id', 'id');
    }

    public function lottery_set()
    {
        return $this->belongsTo(LotterySet::class, 'lottery_set_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


}
