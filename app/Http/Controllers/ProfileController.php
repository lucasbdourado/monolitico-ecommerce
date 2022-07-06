<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    protected $repository;

    public function __construct(Profile $profile, Permission $permission)
    {
        $this->repository = $profile;
        $this->permission = $permission;
    }

    public function index()
    {
        $profiles = $this->repository->all();

        return view("admin.profiles.index")->with('profiles', $profiles);
    }

    public function create()
    {
        return view("admin.profiles.create");
    }

    public function store(Request $request)
    {
        $this->repository->create($request->all());

        return to_route('profiles.index');
    }

    public function edit($id)
    {
        if(!$profile = $this->repository->findorFail($id)){
            return to_route('profiles.index');
        }

        return view('admin.profiles.edit')->with('profile', $profile);
    }

    public function update($id, Request $request)
    {
        if(!$profile = $this->repository->findOrFail($id))
            return to_route('profiles.index');

        $profile->update($request->all());

        return to_route('profiles.index');
    }

    function destroy($id)
    {
        $this->repository->destroy($id);

        return to_route('profiles.index');
    }

    public function show($id)
    {
        if(!$profile = $this->repository->findOrFail($id))
            return to_route('plans.index');

        $permissions = $profile->permissions;

        return view('admin.profiles.show')->with([
            'profile' => $profile,
            'permissions' => $permissions
        ]);
    }
}
