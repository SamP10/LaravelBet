@extends('layouts.layout')
@section('matches')
    <h1>Matches</h1>
    <table>
        <thead>
        <th>MATCH</th>
        <th>HOME TEAM</th>
        <th>AWAY TEAM</th>
        <th>ODDS HOME</th>
        <th>ODDS AWAY</th>
        <th>AMOUNT</th>
        </thead>
        <tbody>
    @foreach($matches as $match)
        @include('templates.match')
    @endforeach
        </tbody>
    </table>
    @endsection
