@extends('layouts.layout')
@section('casino')
    <h1>Casino</h1>
    @foreach($tables as $table)
        <div class="container">
            @include('templates.table')
        </div>
    @endforeach
    {!! $tables->links() !!}
@endsection
