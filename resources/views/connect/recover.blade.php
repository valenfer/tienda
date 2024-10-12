@extends('connect.master')
@section('title','Recuperación de contraseña')
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
                <h1 class="text-center">Recuperación de contraseña</h1>
                <label for="email">Inserta correo electrónico de registro :</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                    </div>
                    <input type="email" name="email" id="" class="form-control">
                </div>
                <br>
                
                <br>
                <button type="submit" class="btn btn-info">Enviar enlace</button>
            </form>
            <a href="{{ url('login')}}">Login</a>

        </div>
    </div>
@stop