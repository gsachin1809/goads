<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfileImageModel extends Model
{
	use SoftDeletes;

	protected $table = 'profile_image';

    protected $dates = ['deleted_at'];
    // public $timestamps = true;
}
