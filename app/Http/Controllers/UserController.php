<?php

namespace App\Http\Controllers;
    use ResetsPasswords;

use DB;
use Hash;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use App\Http\Requests\CreateUtilisateursRequest;
use Illuminate\Pagination\LengthAwarePaginator;

class UserController extends Controller
{
	public function index()
    {
        $user = User::all();

        return view('showuser', ['utilisateur' => $user]);
    }

    public function show($id)

       {
       $user = User::find($id);
    return view('showut', ['utilisateur' => $user]);
       }

    function destroy($id)

{

$utilisateur = User::findOrfail($id);
$utilisateur->delete();
return("Suppression Avec Succés");
}


public function edit($id)
{
	$user = User::findOrfail($id);
	return view('edituser', ['utilisateur' => $user]);
}

public function update($id, CreateUtilisateursRequest $request)
{
    
    
    

$user = User::findOrfail($id);
  
  $user->update(['name' => $request->name]);
  $user->update(['type' => $request->type]);
  $user->update(['email' => $request->email]);
  $user->update(['password' => bcrypt($request->password)]);
  return ('succées');

/*$user = User::findOrfail($id);

	$user->update($request->all());
	return ('succées');*/
}


}
