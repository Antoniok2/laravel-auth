@extends('layouts.main-layout')

@section('content')


    @auth
        <h1>{{ Auth::user() -> name }}</h1>
        <a class="btn btn-primary" href="{{ route('logout') }}">LOGOUT</a>
        @else
        <h1>Registrati o effettua il log-in se vuoi entrare nel mio sito</h1>
    @endauth

    <h2>Registrati</h2>
    <form action="{{ route('register') }}" method="POST">

        @method('POST')
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name"> <br>
        <label for="email">E-mail</label>
        <input type="text" name="email"> <br>
        <label for="password">Password</label>
        <input type="password" name="password"> <br>
        <label for="password_confirmation">Password confirm</label>
        <input type="password" name="password_confirmation"> <br>
        <br>
        <input class="btn btn-primary" type="submit" value="REGISTER">

    </form>

    <br><br>

    <h2>Login</h2>
    <form action="{{ route('login') }}" method="POST">

        @method('POST')
        @csrf

        <label for="email">E-mail</label>
        <input type="text" name="email"> <br>
        <label for="password">Password</label>
        <input type="password" name="password"> <br>
        <br>
        <input class="btn btn-primary" type="submit" value="LOGIN">

    </form>
    
@endsection