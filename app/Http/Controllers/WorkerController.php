<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkerStoreRequest;
use App\Worker;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Worker::query()
            ->paginate(request()->perPage ?? $this->perPage);
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
     * @param  \App\Http\Requests\WorkerStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkerStoreRequest $request)
    {
        $worker = Worker::create(
            $request->only(['name', 'employee_number'])
        );

        return $worker;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function show(Worker $worker)
    {
        return $worker;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function edit(Worker $worker)
    {
        return $worker;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\WorkerStoreRequest  $request
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function update(WorkerStoreRequest $request, Worker $worker)
    {
        $worker->update(
            $request->only(['name', 'employee_number'])
        );

        return $worker;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Worker $worker)
    {
        Worker::destroy($worker->id);
        return response()->json(null, 204);
    }
}
