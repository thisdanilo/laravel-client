@extends('dashboard.layouts.master')

@section('title', 'Clientes')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-10">
                <ol class="breadcrumb float-sm-left">
                    <li class="breadcrumb-item">Clientes</li>
                    <li class="breadcrumb-item active">Ver</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                {{-- Dados do clientes --}}
                @include('dashboard.client.partials._client', ['show' => true])

                {{-- Endereço --}}
                @include('dashboard.address.partials._address', [
                    'address' => $client->address,
                    'show' => true,
                ])

                <div class="row">
                    <div class="col-sm-2">
                        <a href="{{ route('client.edit', $client->id) }}" class="btn btn-primary">
                            <i class="fas fa-pen"></i> Editar
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
