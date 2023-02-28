<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\create;


class UserController extends Controller
{
    function index(){

/*
      $data=[
        'name'=>'RamKumar',
        'age'=>'25'


      ]
      User::Create($data);

      $user=User::all();
      return $user;
      */

      DB::insert('insert into sathi1(name,age,phoneNumber) values(?,?,?)',['sita','23','98765430']);
      DB::insert('insert into sathi1(name,age,phoneNumber) values(?,?,?)',['Hasita','24','98765439']);




    $data=DB::table('sathi1')->get();
        echo "<pre>";
    var_dump($data);



/*$data=[

'name'=>'kumar',
'age'=>'34',
'phoneNumber'=>'98076543',

];
user::create($data);

$user=user::all();
*/



    }
}
