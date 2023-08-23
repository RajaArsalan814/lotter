<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LotterySet extends Model
{
    use HasFactory;

    public function lottery()
    {
        return $this->BelongsTo(Lottery::class, 'lottery_id', 'id');
    }
}
