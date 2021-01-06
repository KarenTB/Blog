<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index()
    {
        $users = User::paginate(10);

        return view('user.usuarios', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'permission' => 'required|in:basic,advanced'
        ]);
        $data = $request->all();
        $data['password'] = Hash::make('12345678');
        $data['activated'] = 1;

        if (!$this->model->create($data))
            return back()->with('error', 'Não foi possivel inserir.');

        return back()->with('success', 'Usuário inserido com sucesso (Senha Padrão: 1 a 8).');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = $this->model->find($id);

        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'permission' => 'required|in:basic,advanced',
            'activated' => 'required'
        ]);
        $data = $request->all();

        if (!$user = $this->model->find($id))
            return back()->with('error', 'Usuário não encontrado');

        if (!$user->update($data))
            return back()->with('error', 'Não foi possivel atualizar.');

        return back()->with('success', 'Atualizado com sucesso.');
    }

    public function toggleSituation($id)
    {
        $user = $this->model->find($id);
        $user->activated = $user->activated == 1 ? 0 : 1;
        $user->save();

        $users = User::paginate(10);

        return view('user.usuarios', compact('users'));
    }
}
