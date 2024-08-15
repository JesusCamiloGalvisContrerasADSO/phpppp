<?php

namespace App\Http\Controllers;

use App\Models\Permiso;
use App\Http\Requests\PermisoRequest;
use Spatie\Permission\Models\Permission;

class PermisoController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $permisos = Permission::paginate(10);

    return view("permisos.index", compact("permisos"));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view("permisos.create");
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(PermisoRequest $request)
  {
    $permiso = Permission::create($request->all());

    return redirect()->route("permisos.edit", $permiso->id);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit($id)
  {
    $permiso = Permission::where("id", $id)->first();

    return view("permisos.edit", compact("permiso"));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(PermisoRequest $request, $id)
  {
    $permiso = Permission::where("id", $id)->first();

    $permiso->update($request->all());

    return redirect()->route("permisos.index");
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy($id)
  {
    $permiso = Permission::where("id", $id)->first();
    $permiso->delete();
    return redirect()->route("permisos.index");
  }


  function posts($id)
  {
    // $permiso = Permiso::where("id", $id)->first();
    // $posts = $tag->post()->paginate(10);
    // dd($posts);
    // retornamos la vista de los post que tiene ese tag
  }
}
