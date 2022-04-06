@extends('layout')

@section('title', 'Portafolio')

@section('content')

    <div class="container">
        <div class=" d-flex justify-content-between align-items-center mb-3">
            <h1 class="display-4">@lang('Portafolio')</h1>
            @auth
            <a class="btn btn-primary" href="{{ route('projects.create') }}">Crear proyecto</a>
            @endauth
        </div>
        
        <p class="load text-secondary">Proyectos realizados. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        
        <ul class="list-group">
            @forelse($projects as $project)
                <li class="list-group-item mb-3 border-0 shadow-sm">
                    <a style="text-decoration:none" class="d-flex justify-content-between align-items-center" 
                        href="{{ route('projects.show', $project) }}">
                        <span class="text-secondary font-weight-bold"> {{ $project -> title }}  </span>
                        <span class="text-black-50"> {{ $project -> created_at -> format('d/m/Y') }} </span>
                    </a>
                </li>
            @empty
                <li class="list-group-item mb-3 border-0 shadow-sm">No hay información</li>
               
            @endforelse
            
            <!-- {{ $projects->links() }} -->
        </ul>
    </div>


@endsection