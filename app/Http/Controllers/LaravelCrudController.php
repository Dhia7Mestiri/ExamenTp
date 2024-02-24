<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LaravelCrudController extends Controller
{
    ////
 function index(){
    
    $data = array(
        'list' => DB::table('crud')->get()
        
        );
        return view('crud.index',$data);
    }
    function delete($id){
        echo $id;
        $delete = DB:: table('crud')->where('id',$id)->delete();
        if($delete){
            return redirect('crud');}else{echo'fail';}
        }
function add(Request $request)
{
   
$request->validate([
    'name'=>'required',
    'prenom'=>'required',
    'biographie'=>'required',
    'commentaire'=>'required',
    ]);
    
    $query = DB::table('crud')->insert([
        'name'=>$request->input('name'),
        'prenom'=>$request->input('prenom'),
        'biographie'=>$request->input('biographie'),
        'commentaire'=>$request->input('commentaire'),
        ]);
        if($query){
        return back()->with('success','Les données sont bien insérés');
        }
        else{
        return back()->with('fail',' un problème est survenu, les données ne sont bien
        
        insères');
        return $request->input();
}
}
function edit($id){
    $row =DB::table('crud')
->where('id',$id)
->first();
$data = ['info'=>$row];
return view('crud.edit',$data);
    }
function update(Request $request){
        $request->validate([
            'name'=>'required',
            'prenom'=>'required',
            'biographie'=>'required',
            'commentaire'=>'required',
            ]);
            $updating = DB::table('crud')->where('id',$request->input('id'))->update([
    'name'=>$request->input('name'),
    'prenom'=>$request->input('prenom'),
    'biographie'=>$request->input('biographie'),
    'commentaire'=>$request->input('commentaire'),
]); if($updating){
    return redirect('crud');}else{echo'fail';}
        }

}