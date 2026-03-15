@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
<div class="card">
    <h1>💼 Portfolio Saya</h1>

    <p>Total Project: <strong>{{ count($projects) }}</strong></p>

    @foreach($projects as $project)
        <div class="project">
            <h2>{{ $project['nama'] }}</h2>
            <p>{{ $project['deskripsi'] }}</p>

            <p><strong>Teknologi:</strong></p>
            @foreach($project['teknologi'] as $tech)
                <span class="badge">{{ $tech }}</span>
            @endforeach

            <p style="margin-top: 0.5rem;">
                <strong>Status:</strong>
                @if($project['status'] === 'Selesai')
                    <span class="badge success">✔ {{ $project['status'] }}</span>
                @else
                    <span class="badge warning">⚠ {{ $project['status'] }}</span>
                @endif
            </p>
        </div>
    @endforeach

</div>
@endsection