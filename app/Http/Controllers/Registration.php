<?php
namespace App\Http\Controllers;

use App\Models\ConsumerModel;
use Illuminate\Contracts\View\View;

/**
 * Registration Controller
 */
class Registration extends Controller
{

	public function index(): View
	{
		$consumers = ConsumerModel::all();
		// return "Registration Controller show function";
		return view('registration.consumers_list', compact('consumers'));
		// return "Registration Controller index function";
	}

	public function create(): String
	{
		return "Registration Controller create function";
	}

	public function store(): String
	{
		return "Registration Controller store function";
	}

	public function show(): View
	{
		$consumers = ConsumerModel::all();
		// return "Registration Controller show function";
		return view('registration.consumers_list', compact('consumers'));
	}	

	public function edit(): String
	{
		return "Registration Controller edit function";
	}

	public function update(): String
	{
		return "Registration Controller update function";
	}

	public function destroy(): String
	{
		return "Registration Controller destroy function";
	}
}