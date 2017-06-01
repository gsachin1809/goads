<?php

namespace App\Http\Controllers;

use Auth;
use Image;
use App\Mail\mailsending;	
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use App\Models\Profile;
use App\Models\ProfileImageModel;
use App\Models\AboutUser;
use App\Models\Ads;
use App\Models\Adsregistrationforindividual;
use App\Models\Adsregistrationforcompany;


class TestController extends Controller
{
 
    public function index()
    {
    	echo "<pre>";
    	echo "hello";

    	Mail::to('gsachin1809@gmail.com')->send(new mailsending);

    	// Mail::send('email.sample',['name' => 'sachin'],function($message){
    	// 	$message->to('gsachin1809@gmail.com','sachin gupta')->from('welcome@goads.co')->subject('welcome');
    	// });

    	if(Mail::failures()){
    		echo "<br>fail";
    	}
    	echo "comp;eted";
    	die;
        return view('customer.chat');
    }


}