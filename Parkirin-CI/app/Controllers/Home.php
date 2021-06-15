<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('pages/demoMenu');
	}

	public function menuMasuk()
	{
		return view('pages/menuMasuk');
	}

	public function menuKeluar()
	{
		return view('pages/menuKeluar');
	}
}
