<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        .completed {
            text-decoration: line-through;
        }

        .error {
            border-color: red;
        }

    </style>

</head>

<body>


<div class="jumbotron text-center">
    <h1>My First Bootstrap Page</h1>
    <p>Resize this responsive page to see the effect!</p>
</div>

<div class="container">
    @yield('contents')
</div>

</body>

</html>
