<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('user/user_edit');
    }


    // Remove this
    public static function checkPermissions( $type, $status, array $options[] )
    {

      switch ($type){

        case "Album":
          $status == "Paid" ? return true : return false;
          break;


      }

    }

}
