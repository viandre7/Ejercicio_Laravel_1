
@if(session('status'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <h2>{{ session('status') }}</h2>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

@endif