<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Auth;
use Session;
use Str;
use Hash;
use Storage;
use App\Models\User;


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
            'nome' => 'required',
            'telefone' => 'nullable',
            'morada' => 'nullable',
            'cidade' => 'nullable',
            'pais' => 'nullable|exists:countries,id',
            'codigo_postal' => 'nullable|regex:/^\d{4}-\d{3}?$/',
            'nif' => 'nullable|numeric|digits:9',
            'nascimento' => 'nullable|date',
            'foto_perfil' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);

        $user = Auth::user();
        $photo = $request->foto_perfil;

        if($photo){
            $name_photo = 'Profile_photo-'.Auth::id().'-'.time() . '.'.$photo->getClientOriginalExtension();
            $photo->move(public_path('/images/users'),$name_photo);
            $user->image = $name_photo;
        }

        $user->name = $request->nome;
        $user->phone = $request->telefone;
        $user->address = $request->morada;
        $user->city = $request->cidade;
        $user->country_id = $request->pais;
        $user->postal_code = $request->codigo_postal;
        $user->nif = $request->nif;
        $user->birthdate = $request->nascimento;
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
            'nova_password' => 'required|string|min:8|confirmed',
        ]);

        if (!(Hash::check($request->atual_password, Auth::user()->password))) {
            Session::flash('error','A password atual não coincide com a password.');
            return redirect()->back();
        }

        if(strcmp($request->atual_password, $request->new_password) == 0){
            Session::flash('error','A nova password não pode ser igual à tua passowrd atual.');
            return redirect()->back();
        }

        $user = Auth::user();
        $user->password = bcrypt($request->nova_password);
        $user->save();

        Session::flash('success', 'A sua password foi atualizada!');
        return redirect()->back();
    }


    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
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
