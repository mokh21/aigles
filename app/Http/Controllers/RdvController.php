<?php 
namespace App\Http\Controllers;
use Mail;
use App\Rdv;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Request;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Requests\CreateRdvRequest;


class RdvController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  { 
    $rdv = Rdv::all();
    return view('rdv', ['rdv' => $rdv]);

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(CreateRdvRequest $request)
  {
    Rdv::create($request->all());
 return ("Insertion Avec Succés");

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
  public function showrdv()
  {
    $date_rdv = Rdv::findOrfail($date_rdv);
    return view('showrdv', ['showrdv' => $date_rdv]);
  }


}

?>