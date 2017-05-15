<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Profile;


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
        //
        

        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                return redirect('customer/myprofile');
                
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
    public function show($id)
    {
        //
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
                // echo $profile;
                // die;
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
