<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/notes.css') }}">
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
        <div class="form">
            <form action="{{ route('notes.update', $notes->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="col-md-6 mb-4">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control fs-4" id="judul" @error('judul') is-invalid @enderror value="{{old('judul', $notes->judul)}}" style=" border: #3F2182 2px solid; font-weight: bold;" required>
                    @error('judul')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-12 mb-4">
                    <label for="konten bold">Konten</label>
                    <textarea class="form-control" name="konten" id="konten" @error('konten') is-invalid @enderror style="height: 500px; border: #3F2182 2px solid;">{{old('konten', $notes->konten)}}</textarea>
                    @error('konten')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="btn-boxA mt-3 mb-5">
                    <button type="submit" name="simpanCatatan" onsubmit="return confirm('Apakah Anda yakin ingin mengedit catatan ini?');">Save</button>
                    <button type="reset">Cancle</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>