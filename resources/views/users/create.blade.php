@extends('layouts.app')
@section('title', 'Cadastro de usuário')

@section('content')
    <h1>Cadastro de usuário</h1>
    <form action="">
        <div>
            <label for="">Nome:</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Email:</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="">Senha:</label>
            <input type="password" name="password">
        </div>
        <div>
            <button type="submit">Cadastrar</button>
        </div>
        
    </form>
@endsection