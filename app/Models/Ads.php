<?php

namespace App\Models;

use Image;
use Auth;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ads extends Model
{
	use SoftDeletes;

	protected $table = 'ads';

    protected $dates = ['deleted_at'];
    // public $timestamps = false;

    public static function store($request)
    {

    	$adsimage = $request->file('adsimage');
        $filename = date("dmyhms").'.jpg';
        $location = 'upload/ads/'.$filename;
        Image::make($adsimage->getRealPath())->save($location);

    	//Image::make($adsimage->getRealPath())->save('upload\ads\\'.$filename);
    	
    	$ads = new Ads;

    	$ads->product_name = $request->product_name;
    	$ads->product_desc = $request->description;
    	$ads->product_price = $request->price;
    	$ads->product_discount = $request->discount;
    	$ads->product_category = $request->categories;
    	$ads->status = "aproved";
    	$ads->image = $filename;
    	$ads->save();

    	return $ads->id;
	
    }
    public static function display($ads_id)
    {

    	$ads = Ads::where('ads_id',$ads_id)->first();
    	
    	if(count($ads))
    		return $ads;
    	else
    		return false;
    }

    public static function showads($ads_id)
    {

        $adsdetails = DB::table('ads')
            ->join('about_users', 'ads.ads_id', '=', 'about_users.ads_id')
            ->where('ads.ads_id','=',$ads_id)
            ->select('ads.*', 'about_users.*')
            ->first();

        if(count($adsdetails))
            return $adsdetails;
        else
            return false;
    }

    public static function package($request)
    {

    	$ads_id = $request->ads;
    	$ads = Ads::where('ads_id',$ads_id)->update(['package' => $request->package]);
    	
    }
    public static function userads()
    {

        $userEmail = Auth::user()->email;
        $userads = DB::table('ads')
            ->join('about_users', 'ads.ads_id', '=', 'about_users.ads_id')
            ->where('about_users.user_email',$userEmail)
            ->select('ads.*')
            ->get();


        return $userads;
        
    }

    public static function allads()
    {

        $userads = DB::table('ads')
            ->join('about_users', 'ads.ads_id', '=', 'about_users.ads_id')
            ->select('ads.*')
            ->get();


        return $userads;
        
    }
}
