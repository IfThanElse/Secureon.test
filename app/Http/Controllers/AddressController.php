<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressController extends Controller
{
	public static function check($ip, $mac)
	{	
		
		$ipmacArr = [
			["ip" => "111.111.111.111", "mac" => "e4:R4:u7:6t:5r"],
			["ip" => "151.15.16.161", "mac" => "e4:F4:u7:6t:5r"],
			["ip" => "167.141.111.141", "mac" => "e4:R5:u7:6t:5r"],
			["ip" => "111.111.111.131", "mac" => "Z4:R4:u7:6t:5r"],

		]; 
		$data['succses'] = 'false'; 
		foreach ($ipmacArr as $ipmac) {
			if ($ipmac['ip'] == $ip && $ipmac['mac'] == $mac) 
				{
					$data['succses'] = 'true';
					break;
				}
		}	
				
		return json_encode($data);	
		
				

			
		


    	//return back()->json(['Succses' => 'true']) 'Succses' => 'false']
	}
}
