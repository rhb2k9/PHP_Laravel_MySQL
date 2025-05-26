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

    public function fetchProduct(Request $request){
        //select * from mobiles where Brand=$request('brand') and Model=$request('model')
        try{
            $result = Mobile::where('Brand', $request->input('brand'))
                            ->where('Model', $request->input('model'))
                            ->first();
            if ($result){
                return response()->json([
                    'message' => 'found',
                    'ram' => $result->Ram,
                    'storage' => $result->Storage,
                    'rate' => $result->Rate 
                ],200);
            }else{
                return response()->json(['message'=> 'Record do not exists']);
            }
            
        }catch (Exception $e){
            return response()->json(['error'=>$e->getMessage()],500);
        }
        

    }
    
    public function UpdateProduct(Request $request){
        //update Mobile set Ram=***, storage=***, Rate=*** where Brand=*** And Model=***
        try{
            Mobile::where('Brand', $request->input('brand'))
                   ->where ('Model', $request->input('model'))
                   ->update([
                    'Ram' => $request->input('ram'),
                    'Storage' => $request->input('storage'),
                    'Rate' => $request->input('rate')
                   ]);
            return response()->json(['message'=>'Record Updated Successfully'],200);
        }catch (Exception $e){
            return response()->json(['error'=>$e->getMessage()],500);
        }
    }

    public function DeleteProduct(Request $request){
        //delete from mobile where Brand=*** and Model=***
        try{
            Mobile::where ('Brand', $request->input('brand'))
                   ->where('Model', $request->input('model'))
                   ->delete();
            return response()->json(['message'=>'Record deleted Successfully'],200);
        }catch(Exception $e){
            return response()->json(['Error'=> $e->getMessage()],200);
        }
    }

}
