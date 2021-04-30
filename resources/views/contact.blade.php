@extends('layouts.layout')
@section('contact')
<h1>Contact us:</h1>
    <p>Our support team are primed to answer any and all query you may have.<br> Please fill the form below to get in contact with a member of our team<br></p>
    <form action="" method="">
        <h3>Query type:</h3>
        <select>
            <option name="Gaming">Gaming Query</option>
            <option name="Betting">Betting Query</option>
            <option name="Casino">Casino Query</option>
            <option name="Account">Account Query</option>
        </select><br>
        <textarea rows=5 cols=70 name="query"></textarea><br>
        <button type="submit">Submit Ticket</button>
    </form>
    <h3>Alternatively contact us on our weekday 9am-5pm phone line:<br>
    <i>0113 794 1523</i></h3>
@endsection
