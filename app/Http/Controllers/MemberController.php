<?php

namespace App\Http\Controllers;


use Inertia\Inertia;

use Auth;
use App\Member;
use Carbon\Carbon;


use Illuminate\Http\Request;

class MemberController extends Controller
{


    public function index()
    {

        $members = Member::all();
        
        return Inertia::render('Reports',[
            'members' => $members
        ]);
    }

    public function reports($name,$data)
    {

        return $name.''.$data;
        
    }


    public function store(Request $request)
    {
      

       try {

            $member = new Member;
            $member->title = $request->title;
            $member->name = $request->name;
            $member->address = $request->address;
            $member->unit = $request->unit;
            $member->year = $request->year;
            $member->dob = $request->dob;
            $member->matrial_status = $request->status;
            $member->province = $request->province;
            $member->district = $request->district;
            $member->number = $request->number;
            $member->growth = $request->growth;
            $member->occupation = $request->occupation;
            $member->save();

            return response()->json([
                'status' => 'success',
                 'msg' => $request->name.' has been successfully added.', 
                 'data' => $member 
            ]);


       } catch (\Throwable $th) {
          return response()->json([
              'status' => 'error',
               'msg' => $th
          ]);
       }

       
    
    }


}
