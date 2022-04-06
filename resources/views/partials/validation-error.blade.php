
    @if( $errors -> any() )
        <div class="alert alert-danger">
            @foreach( $errors -> all() as $error)
                <ul class="m-0">
                    <li class="m-0">{{ $error }}</li>
                </ul>
            @endforeach
        </div>
    @endif