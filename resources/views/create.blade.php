@extends('layouts.app')

@include('layouts.sidebar')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="container">
                <div class="card">
                    <div class="card-header">Criar novo usuário</div>
                    <div class="card-body">
                        <form method="POST" action="/users">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input class="form-control" type="text" name="name" id="name" required>
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">CPF</label>
                                <input class="form-control" type="text" name="cpf" id="cpf" required>
                                @error('cpf')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" name="email" id="email" required>
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Data de nascimento</label>
                                <input class="form-control" type="date" name="birthday" id="birthday" required>
                                @error('birthday')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Nacionalidade</label>
                                <input class="form-control" type="text" name="nationality" id="nationality" required>
                                @error('nationality')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Telefone</label>
                                <input class="form-control" type="phone" name="phone_number" id="phone_number" required>
                                @error('phone_number')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input class="form-control" type="password" name="password" id="password" required>
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
