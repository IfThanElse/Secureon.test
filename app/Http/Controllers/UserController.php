<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\User;
//use App\Http\Controllers\AddressController;

class UserController extends Controller
{
	public function show()
	{
		return view('index');
	}    

	public function create(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'name' => 'required|max:60',
			'phone' => 'required',
			'email' => 'required|email',
			'ip' => 'required|ip',
			'mac' => 'required|max:14',
		]);

		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator);
		}

		// Тут вместо обращения к URL для GET запроса я вызываю метод второго контроллера, что на самом деле являеться признаком дурного кода(обращаться из метода к методу другого контролера), но для реализации "виртуального ответа" в Json формате, как для тестового задания подходит. 
		$a = AddressController::check($request->ip, $request->mac);

		$answerfromserver = json_decode($a);
		if ($answerfromserver->succses == 'true') {
			$user = new User();
			$user->name = $request->name;
			$user->email = $request->email;
			$user->phone = $request->phone;
			$user->ip = $request->ip;
			$user->mac = $request->mac;
			$user->save();
			
				
				return redirect()->route('Main-page')->with('status','Новый пользователь добавлен');
				echo '<script>alert("Succses - true. User added.");</script>';
			}
			else
			{
				return redirect()->route('Main-page')->with('status','Новый пользователь не добавлен');
				echo '<script>alert("Succses - false. User not added.");</script>';
			}
		

		

		//dd($request->all());
	}


}
