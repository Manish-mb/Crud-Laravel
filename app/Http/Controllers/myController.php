<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\crud;


class myController extends Controller
{
   public function index(){
    $crud = crud::get();
        return view('crud.index',['crud'=>$crud]);
    }
  public  function insertuser(){
         return view('crud.insertuser');
    
    }
    public function store(Request $request){
       
        //dd($request->all());
        // validation --
       $request->validate([
          'firstname' => 'required',
          'lastname' => 'required'
       ]); 

       $crud = new crud;
       $crud->firstname = $request->firstname;
       $crud->lastname = $request->lastname;

       $crud->save();
       return back()->withSuccess('Data Insert !!');

    }
    public function edit($id){
        $crud = crud::where('id',$id)->first();

        return view('crud.edit',['crud'=> $crud]);
        
    }

    public function update(Request $request, $id){
         
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required'
         ]); 

         $crud = crud::where('id',$id)->first();
  
         $crud->firstname = $request->firstname;
         $crud->lastname = $request->lastname;
  
         $crud->save();
         return back()->withSuccess('Data Update !!');

    }
    public function delete($id){

       $crud = crud::where('id',$id)->first();
       $crud->delete('id', $id);

       return back()->withSuccess('Data Deleted !!');
    }
}
