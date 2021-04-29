@extends('layouts.layout')
@section('betting')
    <h1>League</h1>
    <table>
        <thead>
        <th>LOGO</th>
        <th>TEAM</th>
        <th>POINTS</th>
        <th>WINS</th>
        <th>LOSSES</th>
        <th>DRAWS</th>
        <th>GD</th>
        </thead>
        <tbody>
    @foreach($leagues as $league)
            @include('templates.football')
    @endforeach
        </tbody>
    </table>

@endsection
