<?php

namespace App\Http\Controllers;

use App\DataTables\CoachesDataTable;
use App\Http\Resources\CityManagersResource;
use App\Http\Resources\CoachResource;
use App\Models\Coach;
use App\Http\Requests\StoreCoachRequest;
use App\Http\Requests\UpdateCoachRequest;
use App\Models\Manager;
use Yajra\DataTables\Facades\DataTables;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CoachesDataTable $dataTable)
    {
        if (request()->ajax()) {
            $data = CoachResource::collection(Coach::with('gym','gym.city')->get());
            return DataTables::of($data)
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->make(true);
        }
        return $dataTable->render('dashboard.coaches.index');
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
     * @param  \App\Http\Requests\StoreCoachRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCoachRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function show(Coach $coach)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function edit(Coach $coach)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCoachRequest  $request
     * @param  \App\Models\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCoachRequest $request, Coach $coach)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coach $coach)
    {
        //
    }
}