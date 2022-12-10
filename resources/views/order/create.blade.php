@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('components.sidebar')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Form Permohonan
                    <a href="{{ route('order.index') }}" class="btn btn-success btn-sm box-button float-right">Kembali</a>
                </div>

                <div class="card-body">
                   {!! Form::open(['url' => 'order']) !!}
                        @include('order.form',['submitButtonText' => 'Buat'])
                   {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
