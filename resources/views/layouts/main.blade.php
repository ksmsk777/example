<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
{{--
<?php
$menuArr = array();

$menuArr['Main'] = array(
    "Title" => "Main",
    "Href" => " route('main.index') ",
);

$menuArr['Posts'] = array(
    "Title" => "Posts",
    "Href" => "route('post.index')",
);

$menuArr['About'] = array(
    "Title" => "About",
    "Href" => "route('about.index')",
);

$menuArr['Contacts'] = array(
    "Title" => "About",
    "Href" => " route('about.index') ",
);

$url = $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];




    ?>--}}



                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">My First Laravel Project</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">

                            <li class="nav-item active">
                                <a class="nav-link " href="{{route('main.index')}}">Main <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('post.index')}}">Posts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('about.index')}}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('bikes.index')}}">Bikes</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('task.index')}}">Tasks</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="{{route('contact.index')}}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>


    </div>
    @yield('content')

</div>
</body>
</html>
