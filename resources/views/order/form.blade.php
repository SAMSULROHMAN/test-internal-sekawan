

{!! Form::label('Kendaraan', 'Kendaraan:', ['class'=>'control-label']) !!}

@if (count($kendaraan) > 0)
    {!! Form::select('id_kendaraan', $kendaraan,null, ['class' => 'form-control','id' => 'id_kendaraan','placeholder' => 'Pilih Kendaraan']) !!}
@endif


{!! Form::label('Driver', 'Driver:', ['class'=>'control-label']) !!}

@if (count($driver) > 0)
    {!! Form::select('id_driver', $driver,null, ['class' => 'form-control','id' => 'id_driver','placeholder' => 'Pilih Driver']) !!}
@endif

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>