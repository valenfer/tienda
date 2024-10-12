@extends('connect.master')
@section('title','Registro')
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
                <form action="{{ route('register') }}" method="GET">
                    @csrf
                    <h1 class="text-center">Datos de registro</h1>
                    
                    <label for="nombre">Nombre:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa-regular fa-user"></i>
                            </div>
                        </div>
                        <input type="text" name="nombre" id="" class="form-control">
                    </div>
                    
                    <label for="apellido">Apellido:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa-regular fa-user"></i>
                            </div>
                        </div>
                        <input type="text" name="apellido" id="" class="form-control">
                    </div>
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
                <label for="passwordRep">Repite password:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa-solid fa-key"></i>
                        </div>
                    </div>
                    <input type="password" name="passwordRep" id="" class="form-control">
                </div>
                <br>
                <button type="submit" class="btn btn-info">Registrar</button>
            </form>
            <a href="{{ url('login')}}">Ya tengo cuenta, login</a>

        </div>
    </div>
@stop