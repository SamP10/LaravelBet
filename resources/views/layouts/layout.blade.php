<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <!-- Style Sheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
</head>
<body>
<div class="page-wrapper">
    <div class="nav-bar">
            <img src="{{asset('images/logo.png')}}" width=10% class="nav-item">
            <h2 class="nav-item"><a href="/">Home</a></h2>
            <h2 class="nav-item"><a href="/myaccount">My Account</a></h2>
            <h2 class="nav-item"><a href="/mybets">My Bets</a></h2>
            <h2 class="nav-item"><a href="/gaming">Gaming</a></h2>
            <h2 class="nav-item"><a href="/betting">Betting</a></h2>
            <h2 class="nav-item"><a href="/casino">Casino</a></h2>
            <h2 class="nav-item"><a href="/contact">Contact</a></h2>

                <h2 class="nav-item"><a href="/contactstaff">Contact Staff</a></h2>
                <h2 class="nav-item"><a href="/betadmin">Betadmin</a></h2>
                <h2 class="nav-item"><a href="/promotions">Casino</a></h2>

</div>
</div>
    @yield('gaming')
</body>
