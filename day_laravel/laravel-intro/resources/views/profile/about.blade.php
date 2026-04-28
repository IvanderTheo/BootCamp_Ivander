@extends('layouts.app')

@section('title', 'Tentang Saya')

@section('content')
<div class="card">
    <h1>📄 Tentang Saya</h1>

    <p>{{ $about['bio'] }}</p>

    <h2>Info</h2>
    <ul>
        <li><strong>Pengalaman:</strong> {{ $about['pengalaman'] }}</li>
        <li><strong>Pendidikan:</strong> {{ $about['pendidikan'] }}</li>
    </ul>

    <h2>Hobi</h2>
    @if(count($about['hobi']) > 0)
        <ul>
            @foreach($about['hobi'] as $index => $hobi)
                <li>{{ $index + 1 }}. {{ $hobi }}</li>
            @endforeach
        </ul>
    @else
        <p>Tidak ada hobi yang terdaftar.</p>
    @endif
</div>
@endsection