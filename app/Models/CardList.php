<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardList extends Model
{
    use HasFactory;

    protected $fillable = [
        'board_id',
        'name',
    ];


    public function cards()
    {
        return $this->hasMany(Card::class);
    }
}
