<strong>{{$sport->away_team}}</strong><br>
<strong>VS</strong><br>
<strong>{{$sport->home_team}}</strong>
<form action="/betting/{{$sport->id}}" method="GET">
    <button type=submit class="select-BET">BET</button>
</form>
