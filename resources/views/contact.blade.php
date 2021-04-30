@extends('layouts.layout')
@section('contact')
<h1>Contact us:</h1>
    <p>Our support team are primed to answer any and all query you may have.<br> Please fill the form below to get in contact with a member of our team<br></p>
    <form>
        <h3>Query type:</h3>
        <select>
            <option name="Gaming">Gaming Query</option>
            <option name="Betting">Betting Query</option>
            <option name="Casino">Casino Query</option>
            <option name="Account">Account Query</option>
        </select><br>
        <textarea rows=5 cols=70 name="query">

        </textarea>
    </form>
@endsection
