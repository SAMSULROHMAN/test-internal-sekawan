@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('components.sidebar')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Form Update Driver
                    <a href="{{ route('driver.index') }}" class="btn btn-success btn-sm box-button float-right">Kembali</a>
                </div>

                <div class="card-body">
                   {!! Form::model($driver,['method' => 'PATCH','action' => ['KendaraanController@update',$driver->id]]) !!}
                        @include('driver.form',['submitButtonText' => 'Update'])
                   {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
