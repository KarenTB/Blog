@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 m-2 d-flex flex-row-reverse">
            <a href="{{ route('usuarios.create') }}" class="btn btn-success mr-2"><i class="fas fa-plus-circle"></i> Novo</a>
        </div>
        <div class="col-md-12 table-responsive-sm">
            <table class="table table-striped">
                <thead style="background: #1ABC9C" class="text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Situação</th>
                    <th scope="col">Permissões</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if($user->activated == 1)
                                <span class="badge badge-success">Ativo</span>
                            @else
                                <span class="badge badge-danger">Desativado</span>
                            @endif
                        </td>
                        <td>{{ $user->permission == 'basic' ? 'Funcionario(a)' : 'Administrador' }}</td>
                        <td>
                            <div class="row">
                                <a href="{{ route('usuarios.edit', ['usuario' => $user->id]) }}" class="btn btn-primary"><i class="fas fa-user-edit"></i> Editar</a>

                                @if($user->activated == 1)
                                    <a href="{{ url('situation_user/'.$user->id) }}" class="btn btn-danger ml-1"><i class="fas fa-user-times"></i> Desativar</a>
                                @else
                                    <a href="{{ url('situation_user/'.$user->id) }}" class="btn btn-success ml-1"><i class="fas fa-user-plus"></i> Ativar</a>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection