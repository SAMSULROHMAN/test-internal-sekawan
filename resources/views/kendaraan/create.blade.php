@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('components.sidebar')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Form Tambah Kendaraan
                    <a href="{{ route('kendaraan.index') }}" class="btn btn-success btn-sm box-button float-right">Kembali</a>
                </div>

                <div class="card-body">
                   {!! Form::open(['url' => 'kendaraan']) !!}
                        @include('kendaraan.form',['submitButtonText' => 'Simpan'])
                   {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
