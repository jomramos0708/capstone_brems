<?php

class MainBusinessDetailsController extends BaseController {

	public function showRecords()
	{
		$businessDetails = DB::table('tblbusinessdetails')
			->join('tblbusinesstype', 'tblbusinessdetails.BusinessTypeID', '=', 'tblbusinesstype.BusinessTypeID')
			->get();

		$businessType = DB::table('tblbusinesstype')
			->get();

		return View::make('mainBusiness.bus_detail')
			->with('bDetails', $businessDetails)
			->with('bType', $businessType);
	}

}
