@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('components.sidebar')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Driver
                    <a href="{{ route('driver.create') }}" class="btn btn-success btn-sm box-button float-right">Tambah</a>
                </div>

                <div class="card-body">
                    @include('_partial.flash_message')
                    <table class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama Driver</td>
                                <td>Opsi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($driver as $driver)
                                <tr>
                                    <td>{{ $driver->id }}</td>
                                    <td>{{ $driver->nama_driver }}</td>
                                    <td>
                                        <div class="box-button">
                                            {!! link_to('driver/'.$driver->id.'/edit','Edit',['class' => 'btn btn-warning btn-sm']) !!}
                                        </div>
                                        <div class="box-button">
                                            {!! Form::open(['method'=> 'DELETE','action' => ['DriverController@destroy',$driver->id]]) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    </td>
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
