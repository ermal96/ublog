<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UBLOG</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="container bg-light mt-5">
    <header>
        <h1><a href="/" class="text-decoration-none fw-bolder text-danger">UBLOG</a></h1>
        <p class="fw-bold text-secondary">Laravel</p>
    </header>
    <main class="row mt-5">
        <article class="col-8">
            @yield('content')
        </article>
        <aside class="col-4 ">
            <h3 class="card-title">Create Post</h3>

            <form class="mt-4" method="POST" acction="{{ url('/') }}">
                @csrf
                <div class="mb-3">
                    <input type="text" placeholder="Title" name="title" class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" placeholder="Body" name="body" id="body" cols="30"
                        rows="10"></textarea>
                </div>

                <button type="submit" class="btn btn-danger">Create</button>
            </form>
        </aside>
    </main>

</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</html>
