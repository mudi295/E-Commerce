<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Selamat Datang</title>
</head>

<body>

    @include('template.nav')
    <form class="d-flex mt-2" action="/produk/search" method="GET">
        @if (Session::has('status'))
        <div class="alert alert-secondary text-center"><span>{{ Session::get('status') }}</span></div>
        @endif
        <input class="ms-auto search rounded me-2" type="search"  name="search" value="{{ old('search') }}" placeholder="Cari Produk" aria-label="Search">
        <button class="btn asd btn-outline-dark me-2 mb-2" type="submit">Cari</button>
    </form>
    @include('template.card')
    @include('template.footer')

    


</body>

</html>
