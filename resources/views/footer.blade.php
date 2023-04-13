<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>&copy; {{ date('Y') }} Activity11</p>
                <a href="{{ route('home') }}" class="btn btn-primary">Home Page</a>
                <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
            </div>
        </div>
    </div>
</footer>

<style>
.footer {
    background-color: grey;
    color: white;
    text-align: center;
    padding: 10px;
    font-family: Helvetica;
}
</style>