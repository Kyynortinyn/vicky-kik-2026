@extends('layouts.app')

@section('title', $title)

@section('content')
    <h2>Selamat Datang, {{ $user }}!</h2>

    <h3>Daftar Tugas:</h3>
    <ul>
        @foreach($items as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    @if(count($items) > 5)
        <p>Tugas kamu banyak banget!</p>
    @else
        <p>Tugas kamu masih santai.</p>
    @endif
@endsection
