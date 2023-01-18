<?php

namespace App\Models\Additional;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory, Uuids;

    protected $table = 'message';

    protected $fillable = [
        'content', 
        'friend', 
        'group',
    ];

    protected $hidden = [
        'friend',
        'group',
    ];
}
