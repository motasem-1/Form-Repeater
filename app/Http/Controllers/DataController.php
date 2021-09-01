<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function save(Request $request)
    {
        /// check validation form
        $validate =$request->validate([
            'name.*'=>'required',
            'age.*'=>'required',
            'city.*' =>'required'
        ]);

       
       //dd($list_data);
        for ($i =0;$i< sizeof($request->all());$i++){
            $data = new Data();
          $data->name = $request->name[$i];
          $data->age = $request->age[$i];
            $data->city = $request->city[$i];

            $data->save();
          
        }
        return redirect()->back();
            
    }
}