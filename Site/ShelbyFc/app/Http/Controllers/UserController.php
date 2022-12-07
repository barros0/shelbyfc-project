<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Auth;
use Session;
use Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function update_account(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'pais' => 'nullable|exists:countrys',
            'codigo_postal' => 'nullable',
            'nif' => 'nullable',
        ]);

        $user = Auth::user();

        if($request->photo){
            $photo = $request->photo;
            $name_photo = 'Profile_photo-'.Auth::id().'-'.Str::random(5) . '.png';
            Storage::put('users/' . $name_photo, $photo);
            $user->photo = $name_photo;
        }

        $user->nome = $request->nome;
        $user->nome = $request->nome;
        $user->nome = $request->nome;
        $user->nome = $request->nome;
        $user->address = $request->morada;
        $user->pais_id = $request->pais;
        $user->postal_code = $request->codigo_postal;
        $user->nif = $request->nif;
        $user->save();

        Session::flash('success', 'Os seus dados foram atualizados!');
        return back();
    }


    public function comprar_bilhete($gameid, Request $request)
    {

        $this->validate($request, [
            'quantity' => 'required|numeric|min:1',
        ]);

        $game = Game::findOrFail($gameid);

        $quantidade = $request->quantity;

        for ($i = 1; $i <= $quantidade; $i++) {
            $ticket = new Ticket();
            $ticket->user_id = Auth::id();
            $ticket->game_id = $gameid;
            $ticket->price = $game->ticket_price;
            $ticket->save();
        }


        return;
    }


    public function update_password(Request $request) {

        $validatedData = $request->validate([
            'atual_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
            'confirmacao_new_password' => 'required|string|min:8|confirmed',
        ]);

        if (!(Hash::check($request->atual_password, Auth::user()->password))) {
            Session::flash('error','A password atual não coincide com a password.');
            return redirect()->back()->with("error","Your current password does not matches with the password.");
        }

        if(strcmp($request->atual_password, $request->new_password) == 0){
            Session::flash('error','A nova password não pode ser igual à tua passowrd atual.');
            return redirect()->back();
        }

        $user = Auth::user();
        $user->password = bcrypt($request->new_password);
        $user->save();

        Session::flash('success', 'A sua password foi atualizada!');
        return redirect()->back();
    }


    public function index()
    {
        //
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
