<?php

namespace App\Models\Group;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group_tags extends Model
{
    use HasFactory, Uuids;

    protected $table = 'group_tag';
    protected $fillable = ['group_id', 'tag_id'];
}
