<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&family=Mate:ital@0;1&family=Nanum+Myeongjo&display=swap" rel="stylesheet">
    <link rel="icon" href="img/vecteezy_3d-logo.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Noteus</title>

    <style>
        :root {
            --shadow: 0 2px 2px rgb(0 0 0 / 0.5);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        body {
            background-image: url(/img/bghero.png);
            background-size: cover;
            background-position: center;
            height: 110vh;
        }

        .hero p,
        h1,
        h3 {
            color: white;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 10%;
            background: rgb(43, 20, 66) !important;
            backdrop-filter: blur(5px);
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
            backdrop-filter: blur(100px);
            text-shadow: var(--shadow);
            opacity: 0.7;
        }

        .logo {
            font-size: 35px;
            color: rgb(207, 110, 207);
            text-decoration: none;
            font-weight: 600;
            margin-top: 40%;
            opacity: 130%;
        }

        .navbar a {
            font-size: 23px;
            text-decoration: none;
            color: #ededed;
            font-weight: 500;
            margin-left: 35px;
            font-family: Arial, Helvetica, sans-serif;
            opacity: 130%;
        }

        .navbar a:hover {
            color: rgb(207, 110, 207);
            font-weight: bold;
            font-size: 24px;
            transition: all .3s ease-in-out;
            opacity: 130%;
        }

        .container h1 {
            font-size: 58px;
            font-weight: 700;
            color: #3F2182;
            font-family: Mate;
            margin-top: 100px;
        }

        .container hr {
            background-color: #3F2182;
            margin-bottom: 40px;
            opacity: 200%;
        }

        .btn-boxA button,
        div .buttons .button {
            display: inline-flex;
            width: 150px;
            height: 50px;
            justify-content: center;
            align-items: center;
            background: plum;
            border: 3px solid rgb(63, 34, 92);
            border-radius: 8px;
            font-size: 19px;
            color: #3F2182;
            text-decoration: none;
            font-weight: 600;
            animation-delay: 0.3s;
        }

        .btn-boxA button:hover,
        div .buttons .button:hover {
            background: #3F2182;
            border: 3px solid #fff;
            color: #ededed;
        }
    </style>
</head>

<body>
    <div class="hero">
        <header class="header">
            <div>

                <a href="#" class="logo">Note.Us</a>
            </div>

            <nav class="navbar ">
                <a href="/welcome" class="active">Home</a>
                <a href="{{ url('/welcome#homes') }}">Feature</a>
                <a href="{{ url('/welcome#About') }}">About</a>
                <a href="/notes">Note</a>
                <a href="/calenders">Calendar</a>
            </nav>
        </header>
    </div>

    <div class="container">
        <h1>
            <center>
                Note
                <hr style="border: 3px solid;">
            </center>
        </h1>
        <article class="py-3 px-8 border-b border-gray-300 bg-slate-100">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{$note ['judul']}}</h2>
            <h4 class="text-gray-500 text-base">Created at {{$note->created_at->format('l, j F Y')}}</h4>
            <p class="text-xl text-gray-900 pt-4">{{$note ['konten']}}</p>
            <div class="buttons py-3 w-96">
                <a class="button" href="/notes">&laquo;Back to Notes</a>
                <a class="rounded-lg bg-red-700 text-lg py-3 px-3 hover:underline text-slate-100" href="">DELETE</a>
                <a class="rounded-lg bg-blue-700 text-lg py-3 px-3 hover:underline text-slate-100" href="">EDIT</a>
            </div>
        </article>
    </div>
</body>

</html>