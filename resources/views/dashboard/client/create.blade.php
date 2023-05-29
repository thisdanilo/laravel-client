@extends('dashboard.layouts.master')

@section('title', 'Clientes')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-10">
                <ol class="breadcrumb float-sm-left">
                    <li class="breadcrumb-item">Clientes</li>
                    <li class="breadcrumb-item active">Cadastro</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')

    {{-- Respostas --}}
    @include('dashboard.partials.errors')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('client.store') }}" method="post">

                    {{-- Elementos Ocultos --}}
                    @csrf

                    {{-- Dados do clientes --}}
                    @include('dashboard.client.partials._client')

                    {{-- Endereço --}}
                    @include('dashboard.address.partials._address')

                    {{-- Botão --}}
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-plus fa-fw"></i> Cadastrar
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection

@section('footer-extras')
    <script src="{{ mix('js/client.js') }}"></script>
@endsection
