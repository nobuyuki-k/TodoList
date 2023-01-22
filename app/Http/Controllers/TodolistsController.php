<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todolist;

class TodolistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $Todolists = Todolist::all();

        
        return view('Todolists.index', [
            'Todolists' => $Todolists,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $todolist = new Todolist;

        return view('Todolists.create', [
            'todolist' => $todolist,
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $todolist = new Todolist;
        $todolist->content = $request->content;
        $todolist->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $todolist = Todolist::findOrFail($id);
        
        return view('Todolists.show', [
            'todolist' => $todolist,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $todolist = Todolist::findOrFail($id);

        
        return view('Todolists.edit', [
            'todolist' => $todolist,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $todolist = Todolist::findOrFail($id);
        
        $todolist->content = $request->content;
        $todolist->save();

        return redirect('/');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $todolist = Todolist::findOrFail($id);
        
        $todolist->delete();

        
        return redirect('/');
    }
}
