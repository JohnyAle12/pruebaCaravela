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

                    <table class="table mt-3">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Fecha</th>
                          <th scope="col">Valor</th>
                          <th scope="col">Moneda</th>
                          <th scope="col">Pais</th>
                          <th scope="col">Estado</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($invoices as $invoice)
                        <tr>
                          <td>{{ $invoice->id }}</td>
                          <td>{{ $invoice->created_at }}</td>
                          <td>{{ $invoice->value }}</td>
                          <td>{{ $invoice->currency }}</td>
                          <td>{{ $invoice->country }}</td>
                          <td>{{ $invoice->state }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
