<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: "Century Gothic";
        }

        .nav{
            height: 10vh;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0% 3.5%;
            background-color: #f7f7f7;
            position: sticky;
            top: 0;
            box-sizing: border-box;
        }

        .nav a{
            text-decoration: none;
            color: #737373;
            font-size: large;
            transition: 0.2s color;
            margin: 0 2%;
            height: 100%;
        }

        .nav a:hover{
            color: black;
        }
        .action{
            display: flex;
            justify-content: flex-start;
            align-items: center;
            width: 100%;
        }

    </style>
    @yield('style')
</head>
<body>
        @yield('content')
</body>
</html>