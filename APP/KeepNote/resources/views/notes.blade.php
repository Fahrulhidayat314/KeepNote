<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/notes.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&family=Mate:ital@0;1&family=Nanum+Myeongjo&display=swap" rel="stylesheet">
    <link rel="icon" href="img/vecteezy_3d-logo.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Noteus</title>
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
        <div class="form">
            <form action="" method="get">
                <div class="col-md-4 mb-4">
                    <label for="validationCustom01" class="form-label"></label>
                    <input type="text" name="judul" class="form-control fs-4" id="validationCustom01" style=" border: #3F2182 2px solid; font-weight: bold;" required>
                </div>

                <div class="form-floating">
                    <textarea class="form-control" name="konten" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 500px"></textarea>
                    <label for="floatingTextarea2">
                    </label>

                </div>

                <div class="btn-boxA mt-3 mb-5">
                    <button type="submit" name="simpanCatatan">Save</button>
                    <button type="reset">Cancle</button>
                </div>
            </form>

            @foreach ($notes as $note)
            <div class="py-3">
                <article class="py-3 px-8 border-b border-gray-300 bg-slate-50">
                    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{$note ['judul']}}</h2>
                    <h4 class="text-gray-500 text-base">Created at {{$note->created_at->format('l, j F Y')}}</h4>
                    <p class="text-lg text-gray-900 ">{{Str::limit($note ['konten'], 300)}}</p>
                    <div class="button py-3">
                        <a class="text-blue-400" href="/note/{{$note['id']}}">Read More&raquo;</a>
                    </div>
                </article>
            </div>
            @endforeach

        </div>
    </div>
</body>
<div class="footer">
    <div class="container text-center" style="padding: 20px;">
        <div class="row">
            <div class="col-6 col-sm-6">
                <h5>@Fahrul Hidayattulloh</h5>
                <h5>@Istya Yulia Amnesti</h5>
                <h5>@Vava Ahsanul Khuluk</h5>
            </div>
            <div class="col-6 col-sm-6">
                <h5>233307011 | TI-2A</h5>
                <h5>233307019 | TI-2A</h5>
                <h5>233307029 | TI-2A</h5>
            </div>
        </div>
    </div>
</div>

</html>