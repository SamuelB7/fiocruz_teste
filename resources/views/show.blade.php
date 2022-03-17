@extends('layouts.app')

@include('layouts.sidebar')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="card">
                <div class="card-header">Editar usuário {{$user->name}}</div>
                <div class="card-body">
                    <div>
                        <h5>Nome</h5>
                        <p>{{ $user->name }}</p>
                    </div>
                    <div>
                        <h5>Email</h5>
                        <p>{{ $user->email }}</p>
                    </div>
                    <div>
                        <h5>Nacionalidade</h5>
                        <p>{{ $user->nationality }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
