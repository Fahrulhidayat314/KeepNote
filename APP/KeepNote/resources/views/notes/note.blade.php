<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/note.css') }}">
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

                <a href="{{ route('dashboard')}}" class="logo">KeepNote</a>
            </div>

            <nav class="navbar ">
                <a href="{{ route('dashboard')}}">Home</a>
                <a href="{{ url('/dashboard#homes') }}">Feature</a>
                <a href="{{ url('/dashboard#About') }}">About</a>
                <a href="{{ route('notes.index')}}">Note</a>
                <a href="{{ route('calenders.index')}}">Calendar</a>
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
            <h4 class="text-gray-500 text-base">Created at {{$note->created_at->format('l, j F Y')}} | Updated at {{$note->updated_at->diffForHumans()}}</h4>
            <p class="text-xl text-gray-900 pt-4">{{$note ['konten']}}</p>
            <div class="buttons py-3 w-96">
                <a class="button" href="{{ route('notes.index') }}">&laquo;Back to Notes</a>
                <form action="{{ route('notes.destroy', $note->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus catatan ini?');" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="rounded-lg bg-red-700 text-lg py-3 px-3 hover:underline text-slate-100" style="height:55px;">DELETE</button>
                </form>
                <a class="rounded-lg bg-blue-700 text-lg py-3 px-3 hover:underline text-slate-100" href="{{ route('notes.edit', $note->id) }}">EDIT</a>
            </div>
        </article>
    </div>
</body>

</html>