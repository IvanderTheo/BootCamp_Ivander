@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
<div class="card">
    <h1>Contact me</h1>
    <p>{{ $contacts['phone'] }}</p>
    <p>{{ $contacts['email'] }}</p>
</div>
@endsection