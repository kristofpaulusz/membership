<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $primary = ["user_id", "club_id"];
    public $incrementing = false;

    protected $fillable = [
        'user_id',
        'club_id',
    ];
}
