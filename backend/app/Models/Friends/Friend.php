<?php

namespace App\Models\Friends;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory, Uuids;

    protected $table = 'friend';
    protected $fillable = ['user_1', 'user_2'];
}
