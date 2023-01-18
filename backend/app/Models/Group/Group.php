<?php

namespace App\Models\Group;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory, Uuids;

    protected $table = 'group';
    protected $fillable = ['name', 'about', 'owner', 'age_restriction', 'closed'];
}
