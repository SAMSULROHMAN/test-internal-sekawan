@if (isset($kendaraan))
    {!! Form::hidden('id',$kendaraan->id) !!}
@endif

@if ($errors->any())
    <div class="form-group {{ $errors->has('nama_kendaraan') ? 'has-error' : 'has-success'}}">
@else
    <div class="form-group">
@endif

    {!! Form::label('nama_kendaraan', 'Nama Kendaraan:', ['class' => 'form-label']) !!}
    {!! Form::text('nama_kendaraan', null, ['class' => 'form-control']) !!}
    @if ($errors->has('nama_kendaraan'))
        <span class="help-block">{{ $errors->first('nama_kendaraan') }}</span>
    @endif
    </div>

    {!! Form::label('type_kendaraan', 'Type Kendaraan:', ['class' => 'form-label']) !!}
    {!! Form::text('type_kendaraan', null, ['class' => 'form-control']) !!}
    @if ($errors->has('type_kendaraan'))
        <span class="help-block">{{ $errors->first('type_kendaraan') }}</span>
    @endif
    </div>

    <div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>