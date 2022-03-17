@extends('layouts.app')

@include('layouts.sidebar')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="card">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card-header">Lista de usuários</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>CPF</th>
                            <th>Nascimento</th>
                            <th>Nacionalidade</th>
                            <th>Ações</th>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->cpf }}</td>
                                <td>{{ $user->birthday }}</td>
                                <td>{{ $user->nationality }}</td>
                                <td class="d-flex gap-2">
{{--                                <a href="" class="btn btn-light p-2"></a>--}}
                                    <a href="/users/{{$user->id}}/edit" class="btn btn-light">Editar usuário</a>
                                    <form style="margin: 0;" method="POST" action="">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza?')">Deletar usuário</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
