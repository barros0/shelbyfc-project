<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Ticket;
use App\Models\withdraw;
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
            'foto_perfil' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ],
        [
            'codigo_postal.regex' => 'O formato do código de postal é inválido.',
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

    public function remove_photo()
    {
        $user = Auth::user();
        $user->image = 'noimage.png';
        $user->save();

        Session::flash('success', 'A sua fotografia foi removida!');
        return redirect()->back();
    }

    public function buy_ticket($gameid, Request $request)
    {

        $this->validate($request, [
            'quantity' => 'required|numeric|min:1',
        ]);

        $game = Game::AvaliableTicket()->findOrFail($gameid);

        if(!empty(Auth::user()->subscribed)){
            $price = $game->ticket_price_partner;
        }
        else{
            $price =  $game->ticket_price;
        }

        $quantidade = $request->quantity;

        $total = $quantidade * $price;

        for ($i = 1; $i <= $quantidade; $i++) {
            $ticket = new Ticket();
            $ticket->user_id = Auth::id();
            $ticket->game_id = $gameid;
            $ticket->price = $price;
            $ticket->save();
        }

        Session::flash('success','Bilhete aquirido, Bom Jogo!');
        return redirect('tickets');
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
     * @param int $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //

        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable|min:8',
            'password_confirmation' => 'nullable|same:password',
        ]);


        $user->name = $request->nome;
        $user->email = $request->email;
        $user->save();

        Session::flash('success', 'Dados atualizado!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

        $user->delete();

        Session::flash('success', 'Utilizador eliminado!');
        return back();
    }

    public function dowithdraw(Request $request){
        $request->validate(['iban' => 'required|iban'  ],
            ['iban.iban' => 'O IBAN deve ser um Número de Conta Bancária Internacional (IBAN) válido.'
         ]);



        $user = Auth::user();

        if($user->balance < 10){
            Session::flash('alert', 'Necessita de pelo menos 10€ na sua conta para fazer um levantamento.');
            return back();
        }

        $withdraw = new withdraw();
        $withdraw->user_id = Auth::id();
        $withdraw->iban = $request->iban;
        $withdraw->value = $user->balance;
        $withdraw->save();

        $user->balance = 0;
        $user->save();


        Session::flash('alert','Tranferência registada, deverá receber o valor na sua conta bancaria dentro de alguns dias.');
        return back();
    }

    public function apostas(){

        return view('perfil.bets');
    }




}
