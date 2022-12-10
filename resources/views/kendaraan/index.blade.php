@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('components.sidebar')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Kendaraan
                    <a href="{{ route('kendaraan.create') }}" class="btn btn-success btn-sm box-button float-right">Tambah</a>
                </div>

                <div class="card-body">
                    @include('_partial.flash_message')
                    <table class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama Kendaraan</td>
                                <td>Type Kendaraan</td>
                                <td>Opsi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kendaraan as $kendaraan)
                                <tr>
                                    <td>{{ $kendaraan->id }}</td>
                                    <td>{{ $kendaraan->nama_kendaraan }}</td>
                                    <td>{{ $kendaraan->type_kendaraan }}</td>
                                    <td>
                                        <div class="box-button">
                                            {!! link_to('kendaraan/'.$kendaraan->id.'/edit','Edit',['class' => 'btn btn-warning btn-sm']) !!}
                                        </div>
                                        <div class="box-button">
                                            {!! Form::open(['method'=> 'DELETE','action' => ['KendaraanController@destroy',$kendaraan->id]]) !!}
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
