<?php

namespace App\Models\Additional;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory, Uuids;

    protected $table = 'roles';
    protected $fillable = ['name'];
}
