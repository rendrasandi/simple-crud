<?php namespace App\Http\Controllers;

use View;
use File;
use Response;
use App\Biodata;
use Storage;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Redirect;


use Illuminate\Http\Request;

class BiodataController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 
	public function index()
	{
		return view('biodata.create');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('biodata.create');
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	protected $rules = [
			'name' => ['required'],
			'email' => ['required'],
			'dateofbirth' => ['required'],
			'alamat' => ['required'],
	];

	public function store(Request $request)
	{
	  $this->validate($request, $this->rules);
	  date_default_timezone_set('Asia/Jakarta');
	  $name 	   = $_POST['name'];
      $email 	   = $_POST['email'];
      $dateofbirth = $_POST['dateofbirth'];
      $alamat 	   = $_POST['alamat'];
	  //$name_element = Input::only('name');
	  //$data = json_encode(['Example 1','Example 2','Example 3',]);
	  $fileName = $name . '-' . date("dmYGis") . '.txt';
	  Storage::put($fileName, $name.','.$email.','.$dateofbirth.','.$alamat);
	
 		return redirect('biodata/success');
	}	
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	 
	public function edit()
	{
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		//
	}

	public function success()
	{
		return view('biodata/success');
		
	}
	public function detail($value)
	{
		$file = $value;
		$contents = File::get(storage_path('files/'.$file.'.txt'));
		$myArray = explode(',', $contents);
     	$name = $myArray[0];
     	$email = $myArray[1];
     	$dateofbirth = $myArray[2];
     	$alamat = $myArray[3];
		

		$data = [
	    	'name'  => $name,
	    	'email'   => $email,
	    	'dateofbirth' => $dateofbirth,
	    	'alamat' => $alamat
		];

		return view::make('biodata/detail')->with($data);
		
	}

/*	public function get_data($value) 
	{
		
		$file = $value;
		$contents = File::get(storage_path('files/'.$file.'.txt'));
		$myArray = explode(',', $contents);
     	$name = $myArray[0];
     	$email = $myArray[1];
     	$dateofbirth = $myArray[2];
     	$alamat = $myArray[3];

     	//echo $alamat;
  		$data = [
	    	'name'  => $name,
	    	'email'   => $email,
	    	'dateofbirth' => $dateofbirth,
	    	'alamat' => $alamat
		];

        
        //$data = $contents;
        return view::make('biodata/detail')->with($data);
	}
	*/

}
