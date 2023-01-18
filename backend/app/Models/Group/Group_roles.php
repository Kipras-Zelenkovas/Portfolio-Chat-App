<?php

namespace App\Models\Group;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group_roles extends Model
{
    use HasFactory, Uuids;

    protected $table = 'group_roles';
    protected $fillable = ['name'];
}
