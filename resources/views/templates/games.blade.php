<strong>{{ $game->name }}</strong>
<p>Company: {{ $game->company }}</p>
@if($game->jackpot!=0)
  <b>JACKPOT!</b><br>
@endif
@if($game->game_id==1)
    <b>SCRATCH-CARD</b>
@elseif($game->game_id==2)
    <b>SLOT</b>
@elseif($game->game_id==3)
    <b>INSTANT-WIN</b>
@endif
<form action="/game/{{$game->id}}" method="GET">
    <button type=submit class="select-game">PLAY</button>
</form>
