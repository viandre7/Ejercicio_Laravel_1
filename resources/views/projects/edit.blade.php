@extends('layout')

@section('title', 'Proyecto | ' .$project->title)

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                
                @include('partials.validation-error')
                
                <form class="bg-white py-3 px-4 shadow rounded"
                    method="POST" action="{{ route('projects.update', $project) }}">

                    @method('PATCH')
                    <h1 class="">Editar {{ $project->title}}</h1>
                    <br>

                    @include('projects._form', [ 'btnText' => 'Actualizar' ])
                
                </form>

            </div>
        </div>
    </div>
@endsection