<?php

class LoginController extends BaseController {

	public function index()
	{
		return View::make('login.login');
	}

	public function loginVerification()
	{
		$username = Input::get('username');
		$password = Input::get('password');

		$result = DB::table('tblofficialdetails')
			->where('Username', '=', Input::get('username'))
			->where('Password', '=', Input::get('password'))
			->count();

		if($result == 1)
		{
			$result2 = DB::table('tblofficialdetails')
				->where('Username', '=', Input::get('username'))
				->where('Password', '=', Input::get('password'))
				->join('tblofficialposition', 'tblofficialdetails.OfficialPositionID', '=', 'tblofficialposition.OfficialPositionID')
				->get();



			Session::put('username', $username);
			Session::put('password', $password);
			Session::put('firstname', $result2[0]->OfficialFName);
			Session::put('lastname', $result2[0]->OfficialLName);
			Session::put('position', $result2[0]->OfficialPosition);
			Session::put('image', $result2[0]->Image);

			if($result2[0]->Admin == 1)
			{
				Session::put('admin', 'Admin');
			}
			else
			{
				Session::put('admin', 'Not Admin');	
			}

			return Redirect::to('dashboard');
		}
		else
		{
			echo '<script>alert("User does not exists");</script>';
			//return Redirect::to('/');
		}
	}

	public function Logout()
	{
		return Redirect::to('/');
	}

}