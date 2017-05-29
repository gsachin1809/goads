<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Adsregistrationforcompany extends Model
{
	use SoftDeletes;

	protected $table = 'ads_registration_company';

    protected $dates = ['deleted_at'];
    
    public static function store($request)
    {

    	
        $ads_company = new Adsregistrationforcompany;
    	$ads_company->user_email =  Auth::user()->email;
        $ads_company->company_name = $request->company_name;
        $ads_company->company_principal = $request->company_principal;
        $ads_company->company_pan_number = $request->company_pan_number;
        $ads_company->tan_number = $request->tan_number;
        $ads_company->fax = $request->fax;
        $ads_company->company_email = $request->company_email;
        $ads_company->iec_number = $request->iec_number;
        $ads_company->contact_number = $request->contact_number;
        $ads_company->authorized_person = $request->authorized_person;
        $ads_company->gender = $request->gender;
        $ads_company->person_dob = $request->person_dob;
        $ads_company->person_contact = $request->person_contact;
        $ads_company->alter_number = $request->alter_number;
        $ads_company->marital_status = $request->marital_status;
        $ads_company->business_address = $request->business_address;
        $ads_company->perment_address = $request->perment_address;
        $ads_company->citizanship = $request->citizanship;
        $ads_company->pan_number = $request->pan_number;
        $ads_company->pan_number_file = $request->pan_number_file;
        $ads_company->photo = $request->photo;
        $ads_company->doc_type = $request->doc_type;
        $ads_company->file_name = $request->file_name;
        
    	
    	$ads_company->save();

    	
    }
}
