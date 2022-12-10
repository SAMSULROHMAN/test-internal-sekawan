@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('components.sidebar')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Permohonan
                    <a href="{{ route('order.create') }}" class="btn btn-success btn-sm box-button float-right">Tambah</a>
                </div>

                <div class="card-body">
                    @include('_partial.flash_message')
                    <table class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Tgl Permohonan</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        {{ $order->approval }}
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
