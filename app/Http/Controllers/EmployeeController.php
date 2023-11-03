<?php

namespace App\Http\Controllers;
use Datatables;
use DB;
use DateTime;
use DateTimeZone;
use Log;
use Auth;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Roles;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
	
    
    public function index()
    {
		/*
		try {
			DB::connection()->getPdo();
			print_r("Connected successfully to: " . DB::connection()->getDatabaseName());
		} catch (\Exception $e) {
			die("Could not connect to the database.  Please check your configuration. Error:" . $e );
		}
		*/
		//echo 'Hi';
		$Employee=DB::table('Employee')->get();
		print_r($Employee);
    }
	
	
}
