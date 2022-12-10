<div class="col-md-4">
    <div class="card">
        <div class="card-header">Menu</div>

        <ul class="list-group list-group-flush">
            @if (Auth::check())
                <li class="list-group-item">
                    <a href="{{ route('kendaraan.index') }}">Kendaraan</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('driver.index') }}">Driver</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('request.index') }}">Persetujuan</a>
                </li>
            @endif
            <li class="list-group-item">
                <a href="{{ route('order.index')}}">Permohonan</a>
            </li>
        </ul>
    </div>
</div>