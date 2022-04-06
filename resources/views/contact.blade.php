@extends('layout')

@section('title', 'Contac')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                
                <form class="shadow bg-white rounded py-3 px-4"
                method="POST" action="contacto">
                @csrf
                    <h1 class="display-4">@lang('Contact')</h1>
                    <hr>

                    <div class="form-group py-1">
                        <label for="name">Nombre</label>
                        <input class="form-control shadow-sm bg-light @error('name') is-invalid @else border-0 @enderror" 
                            type="text" name="name" 
                            placeholder="Nombre" 
                            value="{{ old('name') }}"
                            name="name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
        
                    <div class="form-group py-1">
                        <label for="email">Email</label>
                        <input class="form-control shadow-sm bg-light @error('email') is-invalid @else border-0 @enderror"
                            type="email" name="email" 
                            placeholder="Email" value="{{ old('email') }}"
                            name="email">
                            <span class="invalid-feedback">
                                <strong>
                                    {!! $errors->first('email', '<small>:message</small><br>') !!}
                                </strong>
                            </span>
                    </div>
        
                    <div class="form-group py-1">
                        <label for="subject">Asunto</label>
                        <input class="form-control shadow-sm bg-light @error('subject') is-invalid @else border-0 @enderror"
                            name="subject" placeholder="Asunto" 
                            value="{{ old('subject') }}" name="subject">
                        <span class="invalid-feedback">
                            <strong>
                                {!! $errors->first('subject', '<small>:message</small><br>') !!}
                            </strong>
                        </span>
                    </div>
        
                    <div class="form-group py-1">
                        <label for="message">Mensaje</label>
                        <textarea name="message" placeholder="Mensaje"
                                class="form-control shadow-sm bg-light @error('message') is-invalid @else border-0 @enderror" >
                                {{ old('message') }}</textarea>
                        <span class="invalid-feedback">
                            <strong>
                                {!! $errors->first('message', '<small>:message</small><br>') !!}
                            </strong>
                        </span>
                    </div>
                    <br>
                    
                    <div class="text-center">
                        <button class="btn btn-primary btn-lg btn-block text-center">@lang('Send')</button>
                    </div>
                </form> 
            </div>
        </div>
        
    </div>
@endsection