<?php

namespace App\Models\Group;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group_member extends Model
{
    use HasFactory, Uuids;

    protected $table = 'group_member';
    protected $fillable = ['group_id', 'user_id', 'group_role_id'];
}
