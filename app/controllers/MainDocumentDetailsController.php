<?php

class MainDocumentDetailsController extends BaseController {

	public function showRecords()
	{
		$documentDetails = DB::table('tbldocumentdetails')
			->get();

		return View::make('mainDocument.doc_detail')
			->with('dDetails', $documentDetails);
	}

	public function addRecord()
	{

		if(Request::ajax())
		{

			$newName = time().Input::file('fileTemplate')->getClientOriginalName();

			Input::file('fileTemplate')->move(public_path().'/bower_components/admin-lte/dist/images/', $newName);

			DB::table('tbldocumentdetails')
				->insert(array(
						'DocumentName' => Input::get('txtDocName'),
						'DocumentFee' => Input::get('txtFee'),
						'DocumentTemplate' => $newName
					));

			$documentDetails = DB::table('tbldocumentdetails')
			->get();

			return Response::json(array('oDetails' => $documentDetails));
		}

			

			//return Redirect::to('documentDetails');
		
	}

}
