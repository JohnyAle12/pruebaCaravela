@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Prueba técnica Johny Prieto</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @include('layouts.nav')

                    <div>
                      <form action="{{ route('invoce.store') }}" method="POST">
                        @csrf

                        <label>Valor</label>
                        <input type="text" name="value" class="form-control">
                        <label>Moneda</label>
                        <input type="text" name="currency" class="form-control">
                        <label>Pais</label>
                        <input type="text" name="country" class="form-control">
                        <br>
                        <button class="btn btn-success">Guardar</button>
                      </form>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
