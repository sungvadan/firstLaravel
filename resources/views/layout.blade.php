<!doctype html>
<html lang="en">
<head>
    <title>@yield('title', 'Laracast')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.css">
    <style type="text/css">
        .is-completed {
            text-decoration: line-through;
        }
    </style>
</head>
<body>

    <div class="container">
        @yield('container')

    </div>

    <ul>
        <li><a href="/">Homme page</a></li>
        <li><a href="/contact">Contact us</a></li>
        <li><a href="/about">About us</a></li>
    </ul>

</body>
</html>
