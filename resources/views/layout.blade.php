<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UBLOG</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="container mt-5">
    <header>
        <h1 class="text-black"><a href="/" class="text-decoration-none text-dark">UBLOG</a></h1>
        <p class="fw-bold text-secondary">Laravel</p>
    </header>
    <main class="row mt-5">
        <article class="col">
            @yield('content')
        </article>
        <aside class="col mt-4">

            <form method="POST" acction="{{ url('/') }}">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <textarea class="form-control" name="body" id="body" cols="30" rows="10"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </aside>
    </main>

</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</html>
