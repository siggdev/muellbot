<?php

namespace App\Http\Controllers;

use App\Commands\TrashTypeCommand;
use App\Models\TrashType;
use App\Repositories\TrashTypeRepository;
use Illuminate\Http\Request;

class TrashTypeController extends Controller
{
    private $trash_type_repo;
    private $trash_type_com;

    /**
     * Display a listing of the resource.
     *
     */
    public function __construct() {
        $this->trash_type_repo = new TrashTypeRepository();
        $this->trash_type_com = new TrashTypeCommand();
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
        return view('trash_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => ['required', 'regex:/[\s\-\w^\d]/', 'min:3', 'max:25', 'unique:trash_types,name'],
                'description' => ['nullable'],
                'with_article' => ['required', 'regex:/[\s\-\w^\d]/', 'min:5', 'max:30'],
                'color' => ['required', 'regex:/^#[0-9a-fA-F]{6}$/'],
                'text_color' => ['required', 'regex:/^#[0-9a-fA-F]{6}$/'],
            ],
            [
                'name.required' => 'Der Name des Mülltyps muss angegeben werden.',
                'name.regex' => 'Der Name des Mülltyps darf nur aus Buchstaben, Leerzeichen und Bindestrichen bestehen.',
                'name.min' => 'Der Name des Mülltyps muss länger als 2 Zeichen sein.',
                'name.max' => 'Der Name des Mülltyps darf nicht länger als 25 Zeichen sein.',
                'name.unique' => 'Der Name ist bereits vergeben',
                'with_article.required' => 'Der Name des Mülltyps muss angegeben werden.',
                'with_article.regex' => 'Der Name des Mülltyps darf nur aus Buchstaben, Leerzeichen und Bindestrichen bestehen.',
                'with_article.min' => 'Der Name des Mülltyps muss länger als 5 Zeichen sein.',
                'with_article.max' => 'Der Name des Mülltyps darf nicht länger als 30 Zeichen sein.',
                'color.required' => 'Die Kennfarbe muss angegebenwerden',
                'color.regex' => 'Die Kennfarbe hat kein gültiges Format',
                'text_color.required' => 'Die Textfarbe muss angegebenwerden',
                'text_color.regex' => 'Die Textfarbe hat kein gültiges Format',
            ]
        );

        $trash_type = $this->trash_type_com->store($request->all());

        return redirect('/trash_types')->withSuccess('Der neue Mülltyp ' . $trash_type->name . ' wurde gespeichert');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TrashType  $trashType
     * @return \Illuminate\Http\Response
     */
    public function show(TrashType $trashType)
    {
        return view('trash_type.show')->with([
            'trash_type' => $trashType,
        ]);
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
