<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use App\Category;
use App\Subcategory;
class SubcategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$subcategorys = new subcategory();
		$subcategorys = subcategory::all();
		$categorys = new Category();
		$categorys = Category::all();
		//$subcategory = DB::table('category')->find();
		return view('subcategory.index' , array('subcategorys'=> $subcategorys,'categorys'=> $categorys));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categorys = new Category();
		$categorys = Category::all();

		return view('subcategory.createCategory',['categorys'=>$categorys]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$subcategory = new subcategory();
		$subcategory->name = Input::get('name');
		$subcategory->under_category_id = Input::get('under_category_id');
		$subcategory->save();
	   return redirect()->route('subcategory-list');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
}