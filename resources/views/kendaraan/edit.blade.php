@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('components.sidebar')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Form Update Kendaraan
                    <a href="{{ route('kendaraan.index') }}" class="btn btn-success btn-sm box-button float-right">Kembali</a>
                </div>

                <div class="card-body">
                   {!! Form::model($kendaraan,['method' => 'PATCH','action' => ['KendaraanController@update',$kendaraan->id]]) !!}
                        @include('kendaraan.form',['submitButtonText' => 'Update'])
                   {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
