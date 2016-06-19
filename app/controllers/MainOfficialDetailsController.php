<?php

class MainOfficialDetailsController extends BaseController {

	public function showRecords()
	{
		$officialDetails = DB::table('tblofficialdetails')
			->join('tblofficialposition', 'tblofficialdetails.OfficialPositionID', '=', 'tblofficialposition.OfficialPositionID')
			->where('tblofficialdetails.status', '=', 'active')
			->get();

		$officialPosition = DB::table('tblofficialposition')
			->where('status', '=', 'active')
			->get();

		return View::make('mainOfficial.official_detail')
			->with('oDetails', $officialDetails)
			->with('oPosition', $officialPosition);
	}

	public function getInfo()
	{
		if(Request::ajax()){
			$officialDetails = DB::table('tblofficialdetails')
				->join('tblofficialposition', 'tblofficialdetails.OfficialPositionID', '=', 'tblofficialposition.OfficialPositionID')
				->where('tblofficialdetails.status', '=', 'active')
				->where('OfficialID', '=', Input::get('id'))
				->get();

			return Response::json(array('oDetails' => $officialDetails));
		}
	}

	public function addRecord()
	{
		if(Request::ajax()){

			DB::table('tblofficialdetails')
				->insert(array(
						'OfficialLName' => Input::get('txtLName'),
						'OfficialFName' => Input::get('txtFName'),
						'OfficialMName' => Input::get('txtMName'),
						'OfficialPositionID' => Input::get('txtPosition'),
						'OfficialTermStart' => Input::get('txtStart'),
						'OfficialTermEnd' => Input::get('txtEnd')
					));


			$officialDetails = DB::table('tblofficialdetails')
				->join('tblofficialposition', 'tblofficialdetails.OfficialPositionID', '=', 'tblofficialposition.OfficialPositionID')
				->where('tblofficialdetails.status', '=', 'active')
				->get();

			return Response::json(array('oDetails' => $officialDetails));

		}
	}

	public function updateRecord()
	{
		if(Request::ajax())
		{
			DB::table('tblofficialdetails')
				->where('OfficialID', '=', Input::get('etxtID'))
				->update(array(
						'OfficialLName' => Input::get('etxtLName'),
						'OfficialFName' => Input::get('etxtFName'),
						'OfficialMName' => Input::get('etxtMName'),
						'OfficialPositionID' => Input::get('etxtPosition'),
						'OfficialTermStart' => Input::get('etxtStart'),
						'OfficialTermEnd' => Input::get('etxtEnd')
					));

			$officialDetails = DB::table('tblofficialdetails')
				->join('tblofficialposition', 'tblofficialdetails.OfficialPositionID', '=', 'tblofficialposition.OfficialPositionID')
				->where('tblofficialdetails.status', '=', 'active')
				->get();

			return Response::json(array('oDetails' => $officialDetails));
		}
	}

	public function deleteRecord()
	{
		if(Request::ajax())
		{
			DB::table('tblofficialdetails')
				->where('OfficialID', '=', Input::get('dtxtID'))
				->update(array(
						'status' => 'inactive'
					));

			$officialDetails = DB::table('tblofficialdetails')
				->join('tblofficialposition', 'tblofficialdetails.OfficialPositionID', '=', 'tblofficialposition.OfficialPositionID')
				->where('tblofficialdetails.status', '=', 'active')
				->get();

			return Response::json(array('oDetails' => $officialDetails));
		}
	}

}
