<?php

namespace App\Controllers;

// use App\Models\StaffModel;

class Home extends BaseController

{
	protected $staffModel;
	// public function __construct()
	// {
	// 	$this->staffModel = new StaffModel();
	// }
	public function index()
	{
		$data = [
			'title' => 'Home',
			'staff' => $this->staffModel->getDosen()
		];
		return view('Pages/HomePage', $data);
	}

	public function home()
	{
		$data = [
			'title' => 'Home',
			'staff' => $this->staffModel->getDosen()
		];
		return view('Pages/HomePage', $data);
	}

	//--------------------------------------------------------------------

}
