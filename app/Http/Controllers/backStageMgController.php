<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;
class backStageMgController extends Controller
{
    public function index(){
    	return view('backStageMg.index');
    }


    public function myValidate(Requests\backStageMgRequest $request){
    	//处理数据
    	//$result = DB::select('select *from test');
    	dump($_POST);
    	$sql = 'select id from test where name=\''.$_POST['account'].'\''.  'and password=\''.$_POST['password'].'\'';
    	$result = DB::select($sql);
    	dump($result);
       	return $result	;
    }
}
