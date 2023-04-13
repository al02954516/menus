<!DOCTYPE html>
<html>
<head>
    <title>Photos</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    
</head>
<body>
<div class="header">
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('photos') }}" class="active">Photos</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</div>
<div class="body">
    <h1>Welcome to the photos page</h1> 
    <img src="https://cdn.wallpaperhub.app/cloudcache/b/d/7/6/4/b/bd764bb25d49a05105060185774ba14cd2c846f7.jpg" width="450" height="300">
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

.header a.active {
    text-decoration: underline;
}

.body {
    background-color: #d3d3d3;
    padding: 30px;
    font-family: Helvetica;
}
</style>