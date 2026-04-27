@extends('layouts.app')
@section('title', 'Listagem de usuários')

@section('content')
    <h1 class="title">{{ $greeting }}</h1>
    <img src="{{ Vite::asset('resources/images/images.jpg') }}" alt="">
    @foreach($users as $user)
        <div class="user-name">{{ $user->name }} ({{ $user->email }})</div>
    @endforeach


    {{ $users->links() }}
@endsection

