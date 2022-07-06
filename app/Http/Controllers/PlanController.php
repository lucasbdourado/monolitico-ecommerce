<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PlanController extends Controller
{
    //
    protected $repository;

    public function __construct(Plan $plan)
    {
        $this->repository = $plan;
    }

    public function index()
    {
        $plans = $this->repository->all();

        return view("admin.plans.index")->with('plans', $plans);
    }

    public function create()
    {
        return view("admin.plans.create");
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['url'] = Str::kebab($request->name);

        $this->repository->create($data);

        return to_route('plans.index');
    }

    public function edit($id)
    {
        if(!$plan = $this->repository->findorFail($id)){
            return to_route('plans.index');
        }

        return view('admin.plans.edit')->with('plan', $plan);
    }

    public function update($id, Request $request)
    {
        if(!$plan = $this->repository->findOrFail($id))
            return to_route('plans.index');
        $plan->update($request->except(['_token']));

        return to_route('plans.index');
    }

    function destroy($id)
    {
        $this->repository->destroy($id);

        return to_route('plans.index');
    }
}
