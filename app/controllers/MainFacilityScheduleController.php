<?php

class MainFacilityScheduleController extends BaseController {

	public function showRecords()
	{
		return View::make('mainFacility.fac_schedule');
	}

}
