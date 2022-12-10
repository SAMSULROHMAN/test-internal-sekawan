@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('components.sidebar')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Persetujuan
                </div>

                <div class="card-body">
                    @include('_partial.flash_message')
                    <table class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Tgl Permohonan</td>
                                <td>Approve</td>
                                <td>Opsi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($approve as $approve)
                                <tr>
                                    <td>{{ $approve->id }}</td>
                                    <td>{{ $approve->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        {{ $approve->approval }}
                                    </td>
                                    <td>
                                        <div class="box-button">
                                            {!! Form::open(['method'=> 'PATCH','action' => ['RequestController@update',$approve->id]]) !!}
                                            {!! Form::submit('Approve', ['class' => 'btn btn-success btn-sm']) !!}
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
