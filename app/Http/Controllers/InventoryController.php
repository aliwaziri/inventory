<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customertable;
use App\producttable;
use App\purchasetable;
use App\salestable;
use DB;
use Illuminate\Support\Facades\Input;

class InventoryController extends Controller
{
	Public function customer()
	{
		Return view('customer');
	}
	Public function insertcustomer(Request $request)
	{
         
         $articles = new customertable;
         $articles->cid = $request->input('cid');
         $articles->cname = $request->input('cname');
         $articles->cphonenumber = $request->input('cphonenumber');
         $articles->save();


        $users = customertable::all();
        return view('/displaycustomer',['users' =>$users]) ;



    
 
            
	}

	Public function product()
	{
		Return view('product');
	}

	Public function insertproduct(Request $request)
	{

         $articles = new producttable;
         $articles->pid = $request->input('pid');
         $articles->pname = $request->input('pname');
         $articles->cost = $request->input('cost');
         $articles->quantity = $request->input('quantity');
         $articles->save();
         return redirect('product')->with('info','Saved!');  

	}
	Public function purchase()
	{

		
		$producttable = producttable::all();
		Return view('purchase',compact('producttable'));

		
	}
	Public function insertpurchase(Request $request)
	{

        $articles = new purchasetable;
        $articles->puid = $request->input('puid');
        $articles->pid = $request->input('pid');
        $articles->quantity = $request->input('quantity');
        $articles->save();


        
        
        
       DB::table('producttables')
       ->where('pid', Input::get('pid') )
       ->increment('quantity', Input::get('quantity'));
        
         

        return redirect('purchase')->with('info','Saved!');

    }

    Public function sales()
    {

        $producttable = producttable::all();
        $customertable = customertable::all();


        Return view('sales',compact('producttable','customertable'));
    }

    Public function insertsales(Request $request)

    {
        
        $articles = new salestable;
        $articles->sid = $request->input('sid');
        $articles->pid = $request->input('pid');
        $articles->cid = $request->input('cid');
        $articles->quantity = $request->input('quantity');


        $articles->save();




       DB::table('producttables')
       ->where('pid', Input::get('pid') )
       ->decrement('quantity', Input::get('quantity'));



        return redirect('sales')->with('info','Saved!');
    }


    Public function delete($id)
    {

        customertable::where('cid',$id)
        ->delete();

        // $data = customertable::find($id);
        // $data->delete();


         return redirect('/')->with('info','Deleted!');

    }

    Public function edit($cid)
    {

    $data = customertable::find($cid);
      return view('editcustomer',compact('data'));


    }



}
