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

    public function atualizar(Request $request)
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


    public function changePasswordPost(Request $request) {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            // Current password and new password same
            return redirect()->back()->with("error","New Password cannot be same as your current password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
            'confirm_password' => 'required|string|min:8|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->password);
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
