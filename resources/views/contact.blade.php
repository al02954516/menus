<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="header">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('photos') }}">Photos</a></li>
            <li><a href="{{ route('contact') }}" class="active">Contact</a></li>
        </ul>
    </div>
<div class="body">
    <h1>Welcome to the contact page</h1>
    <h2>Contact information:</h2>
    <h3>Phone Number: XX589658<h3>
    <h3>Mail: example1@Activity11.com <h3>
    <h3>Address: Blvd. XXXX #1968 <h3>
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