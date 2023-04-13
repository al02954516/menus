<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('app/public/css/app.css') }}">
</head>
<body>
<div class="header">
    <ul>
        <li @if(request()->routeIs('home')) class="active" @endif><a href="{{ route('home') }}">Home</a></li>
        <li @if(request()->routeIs('photos')) class="active" @endif><a href="{{ route('photos') }}">Photos</a></li>
        <li @if(request()->routeIs('contact')) class="active" @endif><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</div>
<div class="body">
<h1>Welcome to the home page</h1>
</div>
    @include('footer')
    
</body>

</html>

<style>
.header {
    background-color: lightgray;
    height: 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
    font-family: Helvetica;
}

.header ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.header li {
    margin-right: 20px;
}

.header a {
    color: black;
    text-decoration: none;
}

.header .active a {
    text-decoration: underline;
}

.body {
    background-color: #d3d3d3;
    padding: 30px;
    font-family: Helvetica;
}
</style>