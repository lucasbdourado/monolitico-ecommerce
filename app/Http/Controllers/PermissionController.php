<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    //
    public function __construct(Permission $permission)
    {
        $this->repository = $permission;
    }

    public function index()
    {
        $permissions = $this->repository->all();

        return view("admin.permissions.index")->with('permissions', $permissions);
    }

    public function create()
    {
        return view("admin.permissions.create");
    }

    public function store(Request $request)
    {
        $this->repository->create($request->all());

        return to_route('permissions.index');
    }

    public function edit($id)
    {
        if(!$permission = $this->repository->findorFail($id)){
            return to_route('permissions.index');
        }

        return view('admin.permissions.edit')->with('permission', $permission);
    }

    public function update($id, Request $request)
    {
        if(!$permission = $this->repository->findOrFail($id))
            return to_route('permissions.index');

        $permission->update($request->all());

        return to_route('permissions.index');
    }

    function destroy($id)
    {
        $this->repository->destroy($id);

        return to_route('permissions.index');
    }
}
