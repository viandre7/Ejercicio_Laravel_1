@extends('layout')

@section('title')
    Home
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1 class="display 4 text-primary">Desarrollo web</h1>
                <p class="lead text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Atque, nobis officiis illum perferendis sapiente similique laudantium fugiat, non repudiandae, 
                    iste nulla culpa qui id at! Sapiente dolor nobis ipsum libero!</p>
                    
                    <div class="d-flex justify-content-between btn-block align-items-center">  
                        <a class="btn btn-lg btn-primary" href="{{ route('contact') }}">Contáctame</a>
                        <a class="btn btn-lg btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>
                    </div>
            </div>

            <div class="col-12 col-md-6">
                <img class="img-fluid mt-4" src="img/home.svg" alt="Desarrollo Web">
            </div>

        </div>
    </div>

@endsection