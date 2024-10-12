@extends('connect.master')
@section('title','login')
@section('content')
    <div class="box box_login shadow">
        <div class="header">
            <a href="{{ url('/')}}">
                <img src="{{ url('/static/images/logo.svg')}}" alt="">
            </a>
        </div>
        <br>
        <div class="inside">
            <form action="{{ route('login') }}" method="GET">
                @csrf
                <label for="email">Correo electrónico:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                    </div>
                    <input type="email" name="email" id="" class="form-control">
                </div>
                <br>
                <label for="password">Password:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa-solid fa-key"></i>
                        </div>
                    </div>
                    <input type="password" name="password" id="" class="form-control">
                </div>
                <br>
                <button type="submit" class="btn btn-info">Acceder</button>
            </form>
        </div>
        <a href="{{ url('register')}}">Registrarse</a>
        <a href="{{ url('recover')}}">Recuperar contraseña</a>
    </div>
@stop