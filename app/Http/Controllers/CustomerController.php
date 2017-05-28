<?php

namespace App\Http\Controllers;

use Auth;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Profile;
use App\Models\ProfileImageModel;
use App\Models\AboutUser;
use App\Models\Ads;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // $useremail =  Auth::user()->email;
    
    public function index()
    {
        return view('customer.chat');
    }


    public function myprofile()
    {
        
        if((Auth::user()) != null){
            $useremail =  Auth::user()->email;
            $profile = Profile::where('email',$useremail)->first();
            $profileimage = ProfileImageModel::where('email',$useremail)->first();

            if(count($profile))
            {
                
                  return view('customer.myprofile')->with('profile', $profile)->with('profileimage', $profileimage);
            }
            return view('customer.myprofile');
        }
    }

    public function chat()
    {
        return view('customer.chat');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function uploadimage(Request $request)
    {   
        
        $useremail =  Auth::user()->email;
        $profileimage = $request->file('profileimage');

        $filename = date("dmyhms").'.jpg';
        
        echo "line 58";
        echo $profileimage;

        if($profileimage)
            echo "<br>file get successfull";
        else
            echo " <br>file get failed";

        if(Image::make($profileimage->getRealPath())->save('upload\profileimage\\'.$filename))
            echo " <br>upload successfull";
        else
            echo " <br> file get failed";

        $profileimage = ProfileImageModel::where('email',$useremail)->first();
        $profileimage->photo = $filename;
        $profileimage->save();

        // echo "<br> profram end end";
        // echo $this->upload->display_errors();
        // die;

        return redirect('myprofile');
    }
    

    public function createads()
    {
        return view('customer.typeofads');
    }

    public function adsregistration(Request $request)
    {
        $typeofads = $request->typeofads;
        return view('customer.registration')->with('typeofads', $typeofads);
        
    }

    public function payumoney(Request $request)
    {
        $typeofads = $request->typeofads;
        return view('customer.payumoney')->with('typeofads', $typeofads);
        
    }

    public function newads()
    {
        return view('customer.newads');
    }

    public function package()
    {
        return view('customer.package');
    }
    public function make_payment(Request $request)
    {
        
         if($request->payment_for == "registration")
            {
                $ads = Ads::display($request->ads_id);

                return view('customer.package')->with('ads',$ads);
            }
            else if($request->payment_for == "package")
            {
                return redirect("/index");
            }
            else
                return redirect("/index");
       
    }



    public function payment(Request $request)
    {

        
            if($request->payment_for == "registration")
            {
                $ads_id = Ads::store($request);
                $result = AboutUser::store($request, $ads_id);
                
                return view('customer.payumoney')->with([
                                                    'payment_amount' => "500",
                                                    'payment_for' => "registration",
                                                    'ads_id' => $ads_id
                                                 ]);

            }
            else if($request->payment_for == "package")
            {
                
                $result = Ads::package($request);

                if($request->package == "free")
                    return redirect('/index');

                switch ($request->package) {
                    case 'silver':
                        $amount = "12";
                    break;
                    case 'gold':
                        $amount = "24";
                    break;
                    case 'platinum':
                        $amount = "36";
                    break;
                    case 'diamond':
                        $amount = "60";
                    break;
                    case 'royal':
                        $amount = "120";
                    break;
                   
                   default:
                       return redirect('/index');
                   break;
                    }
               
                return view('customer.payumoney')->with([
                                                    'payment_amount' => "$amount GBP",
                                                    'payment_for' => "$request->package package"
                                                 ]);


        
            }
            else
                return redirect('/index');

        

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if((Auth::user()) != null){
            $useremail =  Auth::user()->email;
            $profile = Profile::where('email',$useremail)->first();
            if(count($profile))
            {
                $profile->first_name = $request->first_name;
                $profile->middle_name = $request->middle_name;
                $profile->last_name = $request->last_name;
                $profile->contact_number = $request->contact_number;
                $profile->gender = $request->gender;
                $profile->place_of_business = $request->place_of_business;
                $profile->marital_status = $request->marital_status;
                $profile->pan_number = $request->pan_number;
                $profile->type_of_occupation = $request->type_of_occupation;
                $profile->save();
                return redirect('myprofile');
                
            }
            return view('customer.updateprofile');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function myads()
    {
        $ads = Ads::userads();
        return view('customer.myads')->with('ads',$ads);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        if((Auth::user()) != null){
            $useremail =  Auth::user()->email;
            $profile = Profile::where('email',$useremail)->first();
            if(count($profile))
            {
                return view('customer.updateprofile')->with('profile', $profile);
            }
            return view('customer.updateprofile');
        }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
}
