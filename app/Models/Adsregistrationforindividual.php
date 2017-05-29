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
    
    public static function store($request)
    {
         
    	$ads_individual = new Adsregistrationforindividual;
    	$ads_individual->user_email =  Auth::user()->email;
    	$ads_individual->pan_number = $request->pan_number;
    	$ads_individual->pan_number_file = $request->pan_number_file;
        $ads_individual->adhar_card = $request->adhar_card;
    	$ads_individual->adhar_card_file = $request->adhar_card_file;
        $ads_individual->dl_number = $request->dl_number;
        $ads_individual->dl_number_file = $request->dl_number_file;
    	
    	$ads_individual->save();

    	
    }
}
