<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Session;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();

        return view('admin.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nome' => 'required|unique:teams,name',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);

        $image = $request->imagem;
        $extension = $image->getClientOriginalExtension();
        $image_name = $request->nome . '.' . $extension;
        $image->move(public_path('images/liga'), $image_name);


        $team = new Team();
        $team->name = $request->nome;
        $team->image = $image_name;
        $team->save();


        Session::flash('success', 'Equipa adicionada!');
        return redirect()->route('admin.teams.index');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('admin.teams.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team, Request $request)
    {

        return view('admin.teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //

        $this->validate($request, [
            'nome' => 'required|unique:teams,name,'.$team->id,
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);

        $image = $request->imagem;

        // se imagem update imagem
        if ($image) {
            $extension = $image->getClientOriginalExtension();
            $image_name = $request->nome . '.' . $extension;
            $image->move(public_path('images/liga'), $image_name);
            $team->image = $image_name;
        }

        $team->name = $request->nome;
        $team->save();


        Session::flash('success', 'Equipa atualizada!');
        return redirect()->route('admin.teams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Team $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
        $team->delete();

        Session::flash('success', 'Equipa eliminada!');
        return back();
    }
}
