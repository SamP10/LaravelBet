@extends('layouts.layout')
@section('sports')
    <div class="container">
    <h1>Football</h1>
        <form action="/betting/league" method="GET">
            <button type="submit" class="select-league">LEAGUE</button>
        </form>
        <form action="/betting/matches" method="GET">
            <button type="submit" class="select-match">MATCHES</button>
        </form>
    </div>
    <div class="container">
        <h1>Horse</h1>
        <form action="/betting/horses" method="GET">
            <button type="submit" class="select-horse">RACES</button>
        </form>
    </div>
@endsection
