<?php

class MainBusinessTypeController extends BaseController {

	public function showRecords()
	{
		$businessType = DB::table('tblbusinessType')
			->where('status', '=', 'active')
			->get();

		return View::make('mainBusiness.bus_type')
			->with('btype', $businessType);
	}

	public function getBusinessTypeInfo(){
		if(Request::ajax()){
			$businessType = DB::table('tblbusinessType')
				->where('BusinessTypeID', '=', Input::get('id'))
				->get();
			return Response::json(array('bType' => $businessType));
		}
	}

	public function addRecord(){
		/*DB::table('tblbusinessType')
			->insert(array(
				'BusinessType' => Input::get('txtBusType')
				));
		return Redirect::to('businessType');*/

		if(Request::ajax()){
			DB::table('tblbusinessType')
				->insert(array(
					array(
						'BusinessType' => Input::get('bt')
						)
					));

			$businessType = DB::table('tblbusinessType')
				->where('status', '=', 'active')
				->get();

			return Response::json(array('btype' => $businessType));
		}
	}

	public function updateRecord(){
		if(Request::ajax()){
			DB::table('tblbusinessType')
				->where('BusinessTypeID', '=', Input::get('str1'))
				->update(array(
						'BusinessType' => Input::get('str2')
					));
			$businessType = DB::table('tblbusinessType')
				->where('status', '=', 'active')
				->get();

			return Response::json(array('btype' => $businessType));
		}
	}

	public function deleteRecord(){
		if(Request::ajax()){
			DB::table('tblbusinessType')
				->where('BusinessTypeID', '=', Input::get('str1'))
				->update(array(
						'status' => 'inactive'
					));
				
			$businessType = DB::table('tblbusinessType')
				->where('status', '=', 'active')
				->get();

			return Response::json(array('btype' => $businessType));
		}
	}

}
