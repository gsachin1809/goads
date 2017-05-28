<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Adsregistrationforindividual extends Model
{
	use SoftDeletes;

	protected $table = 'ads_registration_individual';

    protected $dates = ['deleted_at'];
    public $timestamps = false;

    public static function store($request)
    {

    	
    	$about_user = new AboutUser;
    	$about_user->user_email =  Auth::user()->email;
    	$about_user->ads_id = $ads_id;
    	$about_user->mission = $request->mission;
    	$about_user->vission = $request->vission;
    	$about_user->about_me = $request->about_me;
    	$about_user->contact_name = $request->contact_person;
    	$about_user->contact_number = $request->contact_number;
    	$about_user->save();

    	
    }
}
