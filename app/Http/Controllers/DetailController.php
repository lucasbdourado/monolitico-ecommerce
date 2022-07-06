<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Plan;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    //
    protected $repository;

    public function __construct(Detail $detail, Plan $plan)
    {
        $this->repository = $detail;
        $this->plan = $plan;
    }

    public function index($id)
    {
        if(!$plan = $this->plan->findOrFail($id))
            return to_route('plans.index');

        $details = $plan->details;

        return view('admin.details.index')->with([
            'plan' => $plan,
            'details' => $details
        ]);
    }

    public function create($id)
    {
        if(!$plan = $this->plan->findOrFail($id))
            return redirect()->back();

        return view('admin.details.create')->with('plan', $plan);
    }

    public function store($id, Request $request)
    {
        if(!$plan = $this->plan->findOrFail($id))
            return redirect()->back();

        $plan->details()->create($request->all());

        return to_route('details.index', $plan->id);
    }

    public function edit($id, $detail_id)
    {
        if(!$detail = $this->repository->findOrFail($detail_id))
            return redirect()->back();

        $plan = $this->plan->findOrFail($id);

        return view('admin.details.edit')->with([
            'detail' => $detail,
            'plan' => $plan
        ]);
    }

    public function update(Request $request, $id, $detail_id)
    {
        if(!$detail = $this->repository->findOrFail($detail_id))
            return redirect()->back();

        $plan = $this->plan->findOrFail($id);

        $detail->update($request->all());

        return to_route('details.index', $plan->id);
    }

    function destroy($id, $detail_id)
    {
        $this->repository->destroy($detail_id);

        $plan = $this->plan->findOrFail($id);

        return to_route('details.index', $plan->id);
    }
}
