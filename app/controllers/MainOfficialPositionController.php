<?php

class MainOfficialPositionController extends BaseController {

	public function showRecords()
	{
		$officialPosition = DB::table('tblofficialposition')
			->where('status', '=', 'active')
			->get();

		return View::make('mainOfficial.official_position')
			->with('oPosition', $officialPosition);
	}

	public function getInfoByID()
	{
		if(Request::ajax()){
			$officialPosition = DB::table('tblofficialposition')
				->where('OfficialPositionID', '=', Input::get('id'))
				->get();

			return Response::json(array('position' => $officialPosition));

		}
	}


	public function addRecord()
	{
		/*DB::table('tblofficialposition')
				->insert(array(
					array(
						'OfficialPosition' => Input::get('txtOPosition'),
						'OfficialPositionCount' => Input::get('txtOPNumber')
						)
					));
			return Redirect::to('officialPosition');
					
*/
		if(Request::ajax()){
			DB::table('tblofficialposition')
				->insert(array(
					array(
						'OfficialPosition' => Input::get('posName'),
						'OfficialPositionCount' => Input::get('posNum')
						)
					));

			$officialPosition = DB::table('tblofficialposition')
				->where('status', '=', 'active')
				->get();

			return Response::json(array('position' => $officialPosition));
			 
		}
	}

	public function updateRecord()
	{

		if(Request::ajax()){
			DB::table('tblofficialposition')
				->where('OfficialPositionID', Input::get('txt1'))
				->update(array(
					'OfficialPosition' => Input::get('txt2'),
					'OfficialPositionCount' => Input::get('txt3')
					));
					

			$officialPosition = DB::table('tblofficialposition')
				->where('status', '=', 'active')
				->get();

			return Response::json(array('position' => $officialPosition));
		}
	}

	public function deleteRecord()
	{

		if(Request::ajax()){
			DB::table('tblofficialposition')
				->where('OfficialPositionID', '=', Input::get('txt1'))
				->update(array(
					'status' => 'inactive'
					));
					

			$officialPosition = DB::table('tblofficialposition')
				->where('status', '=', 'active')
				->get();

			return Response::json(array('position' => $officialPosition));
		}
	}

}
