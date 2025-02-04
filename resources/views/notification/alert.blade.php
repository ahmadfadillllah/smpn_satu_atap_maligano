@if ($errors->has('nikname'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ $errors->first('nikname') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if ($errors->has('email'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ $errors->first('email') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if ($errors->has('name'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ $errors->first('name') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if ($errors->has('files'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ $errors->first('files') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
