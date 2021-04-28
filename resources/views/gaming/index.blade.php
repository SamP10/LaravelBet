@extends('layouts.layout')
@section('gaming')
<h1>Games</h1>
@foreach($games as $game)
    <div class="container">
        @include('templates.games')
    </div>
@endforeach
{!! $games->links() !!}
@endsection
