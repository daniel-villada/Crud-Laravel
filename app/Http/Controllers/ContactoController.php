<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ContactoFormRequest;
use App\Contacto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class ContactoController extends Controller
{
    public function __construct()
    {
        
    }

    public function index(Request $request)
    {
        $query=trim($request->get('searchText'));
        $contacto= DB::table('contacto')->where('nombre_apellido','LIKE','%'.$query.'%')->paginate(10);
        return view('contacto.index',["contacto"=>$contacto, "searchText"=>$query]);
    }

    public function create()
    {
        return view('contacto.create');
    }
    public function store(ContactoFormRequest $request)
    {
        $contacto=new Contacto();
        $contacto->nombre_apellido=$request->Nombre;
        $contacto->direccion=$request->Direccion;
        $contacto->telefono=$request->Telefono;
        $contacto->email=$request->Email;
        $contacto->nacimiento=$request->BirthDate;
        $contacto->save();
        return Redirect::to('contacto'); 
    }
    public function show($id)
    {
        $contacto = Contacto::findOrFail($id);
        return view('contacto.show',['contacto'=>$contacto]);
    }
    public function edit($id)
    {
        $contacto = Contacto::findOrFail($id);
        // dd($contacto);
        return view('contacto.edit',['contacto'=>$contacto]);
    }
    public function update(ContactoFormRequest $request, $id)
    {
        $contacto = Contacto::findOrFail($id);
        $contacto->nombre_apellido=$request->Nombre;
        $contacto->direccion=$request->Direccion;
        $contacto->telefono=$request->Telefono;
        $contacto->email=$request->Email;
        $contacto->nacimiento=$request->BirthDate;
        $contacto->save();
        return Redirect::to('contacto');
    }
    public function destroy($id)
    {
        DB::table('contacto')->delete($id);
        return Redirect::to('contacto');
    }
}