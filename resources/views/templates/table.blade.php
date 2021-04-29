<strong>{{$table->game}}</strong><br>
<b>Table Number: {{$table->table_no}}</b><br>
<b>Minimum Bet: {{$table->min_bet}}</b>
<br>
<form action="/table/{{$table->id}}" method="GET">
    <button type=submit class="select-game">PLAY</button>
</form>
