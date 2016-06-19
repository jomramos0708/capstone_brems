<?php

class MainFacilityDetailsController extends BaseController {

	public function showRecords()
	{
		$facilityDetails = DB::table('tblfacilitydetails')
			->get();

		return View::make('mainFacility.fac_detail')
			->with('fDetails', $facilityDetails);
	}

}
