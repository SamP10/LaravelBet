@extends('layouts.layout')
@section('betting')
    <h1>Horses</h1>
    @foreach($horses as $horse)
        <div class="container">
            @include('templates.horses')
        </div>
    @endforeach
    {!! $horses->links() !!}
@endsection
