@extends('layout')

@section('title', 'Proyecto | ' .$project -> title)

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">

            <div class="bg-white p-5 shadow rounded">
                <h1>{{ $project -> title }}</h1>

                <p class="text-secondary">{{ $project -> description }}</p>
                <p class="text-black-50">{{ $project -> created_at -> diffForHumans() }}</p>

                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('projects.index') }}">Regresar</a>

                    @auth
                        <div class="btn-group">
                            <a class="btn btn-primary" href="{{ route('projects.edit', $project) }}">
                                Editar</a>
                            <a class="btn btn-danger ml-3" href="#" onclick="document.getElementById('delete-project').
                                submit()">
                                Eliminar</a>
                        </div>  

                        <form id="delete-project" method="POST" class="d-none"
                            action="{{route('projects.destroy', $project) }}">
                            @csrf @method('DELETE')
                        </form>
                        
                    @endauth   
                </div>
                
            </div>
        </div>
    </div>
</div>
    

@endsection