<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobStoreRequest;
use App\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queryBuilder = $this->order(Job::query());
        return $queryBuilder->paginate(
            request()->perPage ?? $this->perPage
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\JobStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobStoreRequest $request)
    {
        $job = Job::create(
            $request->only([
                'title',
                'customer_name',
                'inquiry_number',
                'type',
                'amount',
                'quantity',
                'material',
                'weight',
                'start_date',
                'end_date',
            ])
        );

        return $job;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        return $job;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\JobStoreRequest  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(JobStoreRequest $request, Job $job)
    {
        $job->update(
            $request->only([
                'title',
                'customer_name',
                'inquiry_number',
                'type',
                'amount',
                'quantity',
                'material',
                'weight',
                'start_date',
                'end_date',
                ])
        );

        return $job;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        Job::destroy($job->id);
        return response()->json(null, 204);
    }
}
