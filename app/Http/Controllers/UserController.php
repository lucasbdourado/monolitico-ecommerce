<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index()
    {
        if(!Auth::check()){
            return view('login.index');
        }

       return to_route('welcome');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if(Gate::denies('admin')){
                return to_route('welcome');
            }else{
                return to_route('dashboard.index');
            }
        }
        return redirect()->back()->withErrors('Suas credenciais de acesso não estão corretas.');
    }

    public function create()
    {
        return view('login.create');
    }

    public function register(Request $request)
    {
        $data = $request->except(['_token']);
        $data['password'] = Hash::make($data['password']);
        $this->model->create($data);

        return to_route('login');
    }

    public function list(Request $request)
    {
        $search = $request->search;
        $users = $this->model->getUsers(search: $request->search ?? null);

        return view('admin.users.list')->with('users', $users);
    }

    public function add()
    {
        return view('admin.users.add');
    }

    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        $data['password'] = Hash::make($data['password']);
        $this->model->create($data);

        return to_route('users.list');
    }

    public function edit($id, Request $request)
    {
        if(!$user = $this->model->findorFail($id)){
            return redirect()->route('user.list');
        }

        return view('admin.users.edit')->with('user', $user);
    }

    public function update($id, Request $request)
    {
        if(!$user = $this->model->findOrFail($id))
            return redirect()->route('user.list');
        $user->update($request->except(['_token', 'password']));

        return to_route('users.list');
    }

    function destroy($id, Request $request)
    {
        $this->model->destroy($id);

        return to_route('users.list');
    }
}
