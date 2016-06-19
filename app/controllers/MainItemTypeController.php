<?php

class MainItemTypeController extends BaseController {

	public function showRecords()
	{
		$itemType = DB::table('tblitemtype')
			->where('status', '=', 'active')
			->get();

		return View::make('mainItem.item_type')
			->with('iType', $itemType);
	}

	public function getInfo()
	{
		if(Request::ajax())
		{
			$itemType = DB::table('tblitemtype')
				->where('ItemTypeID', '=', Input::get('id'))
				->get();

			return Response::json(array('itemType' => $itemType));
		}
	}

	public function addRecord()
	{
		if(Request::ajax())
		{
			DB::table('tblitemtype')
				->insert(array(
						'ItemType' => Input::get('txtIType')
					));

			$itemType = DB::table('tblitemtype')
				->where('status', '=', 'active')
				->get();

			return Response::json(array('itemType' => $itemType));
		}
	}

	public function updateRecord()
	{
		if(Request::ajax())
		{
			DB::table('tblitemtype')
				->where('ItemTypeID', '=', Input::get('etxt1'))
				->update(array(
						'ItemType' => Input::get('etxt2')
					));

			$itemType = DB::table('tblitemtype')
				->where('status', '=', 'active')
				->get();

			return Response::json(array('itemType' => $itemType));
		}
	}

	public function deleteRecord()
	{
		if(Request::ajax())
		{
			DB::table('tblitemtype')
				->where('ItemTypeID', '=', Input::get('dtxt1'))
				->update(array(
						'status' => 'inactive'
					));

			$itemType = DB::table('tblitemtype')
				->where('status', '=', 'active')
				->get();

			return Response::json(array('itemType' => $itemType));
		}
	}

}
