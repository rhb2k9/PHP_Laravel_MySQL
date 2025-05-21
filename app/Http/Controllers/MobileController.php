<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use App\Models\Mobile;
use Exception;

class MobileController extends Controller
{
    //
    public function addNewProduct(Request $request)
    {
        //insert into mobiles values('','','','','');
        try {
            Mobile::create([
                'Brand' => $request->input('brand'),
                'Model' => $request->input('model'),
                'Ram' => $request->input('ram'),
                'Storage' => $request->input('storage'),
                'Rate' => $request->input('rate'),
            ]);
            return response()->json(['message'=>'Record Added Successfuly'],200);
        } catch (Exception $e) {
            return response()->json(['error'=> $e->getMessage()],500);
        }
    }
}
