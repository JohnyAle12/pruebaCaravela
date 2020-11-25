@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Prueba técnica Johny Prieto</div>

                <div class="card-body">
                    @include('layouts.nav')
                    <div class="alert alert-info" role="alert">
                      El usuario no se encuentra activo, su solicitud de creación esta en proceso de activación.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
