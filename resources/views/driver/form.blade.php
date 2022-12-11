@if (isset($driver))
    {!! Form::hidden('id',$driver->id) !!}
@endif

@if ($errors->any())
    <div class="form-group {{ $errors->has('nama_driver') ? 'is-invalid' : 'is-valid'}}">
@else
    <div class="form-group">
@endif

    {!! Form::label('nama_driver', 'Nama Driver:', ['class' => 'form-label']) !!}
    {!! Form::text('nama_driver', null, ['class' => 'form-control']) !!}
    @if ($errors->has('nama_driver'))
        <span class="is-invalid">{{ $errors->first('nama_driver') }}</span>
    @endif
    </div>

    <div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>
