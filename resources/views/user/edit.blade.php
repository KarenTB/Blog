@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Usuário') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('usuarios.update', ['usuario' => $user->id]) }}">
                            @csrf
                            @method('PUT')

                            @if(session('error'))
                                <div class="col-md-12 text-center alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ session('error') }}</strong>
                                </div>
                            @endif
                            @if(session('success'))
                                <div class="col-md-12 text-center alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ session('success') }}</strong>
                                </div>
                            @endif

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Permissão') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control @error('permission') is-invalid @enderror" name="permission">
                                        <option value="">Selecione A Permissão</option>
                                        <option value="basic" {{ $user->permission == 'basic' ? 'selected' : '' }}>Funcionario</option>
                                        <option value="advanced" {{ $user->permission == 'advanced' ? 'selected' : '' }}>Administrador/Supervisor</option>
                                    </select>

                                    @error('permission')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Situação') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control @error('activated') is-invalid @enderror" name="activated">
                                        <option value="">Selecione A Permissão</option>
                                        <option value="1" {{ $user->activated == 1 ? 'selected' : '' }}>Ativo</option>
                                        <option value="0" {{ $user->activated == 0 ? 'selected' : '' }}>Desativado</option>
                                    </select>

                                    @error('activated')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        <i class="fas fa-save"></i>
                                        {{ __('Salvar') }}
                                    </button>
                                </div>
                            </div>
                            <div class="form-group row mb-0 mt-2">
                                <div class="col-md-6 offset-md-4">
                                    <a  href="{{ route('usuarios.index') }}" class="btn btn-success btn-lg btn-block">
                                        <i class="fas fa-undo"></i>
                                        {{ __('Voltar') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection