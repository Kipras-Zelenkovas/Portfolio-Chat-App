<?php

namespace App\Models\Group;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group_req extends Model
{
    use HasFactory, Uuids;

    protected $table = 'group_req';
    protected $fillable = ['group_id', 'user_id'];
}
