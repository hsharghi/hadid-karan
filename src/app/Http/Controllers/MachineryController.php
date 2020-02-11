<?php

namespace App\Http\Controllers;

use App\Http\Requests\MachineryStoreRequest;
use App\Machinery;

class MachineryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queryBuilder = $this->order(Machinery::query());
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
     * @param  \App\Http\Requests\MachineryStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MachineryStoreRequest $request)
    {
        $machinery = Machinery::create(
            $request->only(['name', 'type'])
        );

        return $machinery;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Machinery  $machinery
     * @return \Illuminate\Http\Response
     */
    public function show(Machinery $machinery)
    {
        return $machinery;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Machinery  $machinery
     * @return \Illuminate\Http\Response
     */
    public function edit(Machinery $machinery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\MachineryStoreRequest  $request
     * @param  \App\Machinery  $machinery
     * @return \Illuminate\Http\Response
     */
    public function update(MachineryStoreRequest $request, Machinery $machinery)
    {
        $machinery->update(
            $request->only(['name', 'type'])
        );

        return $machinery;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Machinery  $machinery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Machinery $machinery)
    {
        Machinery::destroy($machinery->id);
        return response()->json(null, 204);
    }
}
