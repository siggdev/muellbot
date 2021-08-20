<?php

namespace App\Http\Controllers;

use App\Models\TrashType;
use App\Repositories\TrashTypeRepository;
use Illuminate\Http\Request;

class TrashTypeController extends Controller
{
    private $trash_type_repo;

    /**
     * Display a listing of the resource.
     *
     */
    public function __construct() {
        $this->trash_type_repo = new TrashTypeRepository();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trash_types = $this->trash_type_repo->getAllTrashTypesPaginate();
        return view('trash_type.index')->with([
            'trash_types' => $trash_types
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TrashType  $trashType
     * @return \Illuminate\Http\Response
     */
    public function show(TrashType $trashType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrashType  $trashType
     * @return \Illuminate\Http\Response
     */
    public function edit(TrashType $trashType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TrashType  $trashType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrashType $trashType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrashType  $trashType
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrashType $trashType)
    {
        //
    }
}
