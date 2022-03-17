@extends('layouts.app')

@include('layouts.sidebar')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="container">
                <div class="card">
                    <div class="card-header">Editar usuário {{$user->name}} </div>
                    <div class="card-body">
                        <form method="POST" action="/users/{{$user->id}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input class="form-control" type="text" name="name" id="name" value="{{$user->name}}">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input class="form-control" type="text" name="cpf" id="cpf" value="{{$user->cpf}}">
                                @error('cpf')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" name="email" id="email" value="{{$user->email}}">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="birthday">Data de nascimento</label>
                                <input class="form-control" type="date" name="birthday" id="birthday" value="{{$user->birthday}}">
                                @error('birthday')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nationality">Nacionalidade</label>
                                <input class="form-control" type="text" name="nationality" id="nationality" value="{{$user->nationality}}">
                                @error('nationality')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <label for="">Telefones</label>
                            @foreach($user->phoneNumber as $phone_number)
                                <div class="form-group">
                                    <input class="form-control" type="phone" name="phone_number[]" id="phone_number" value="{{$phone_number->number}}">
                                    @error('phone_number')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            @endforeach
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input class="form-control" type="password" name="password" id="password" >
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
