<?php
$today = date('Y-m-d');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/vecteezy_3d-logo.png">
    <script src="https://cdn.tailwindcss.com"></script>
    </style>
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
            </nav>
        </header>
        <?php
        $i = 1;
        ?>
        <h1>Calendar</h1>
        <hr>
        <center>
            <div>
                <div style="display: flex; justify-content: center; align-items: center;">
                    <div class="input mt-5 bg-purple-200" style="margin-left: 50px;">
                        <div class="container">
                            <h2 class="mt-4">Aktivitas</h2>
                            <form action="{{ route('calenders.store')}}" method="post">
                                @csrf
                                <div class="input-group mb-3 mt-5 input-group-lg">
                                    <label class="input-group-text" for="aktivitas" id="inputGroup-sizing-lg">Aktivitas</label>
                                    <input type="text" name="aktivitas" id="aktivitas" class="form-control" @error('aktivitas') is-invalid @enderror value="{{old('aktivitas')}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                    @error('aktivitas')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="input-group mb-3 input-group-lg">
                                    <label class="input-group-text" for="tanggal_mulai" id="inputGroup-sizing-lg">Tanggal Mulai</label>
                                    <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control" @error('tanggal_mulai') is-invalid @enderror value="{{old('tanggal-mulai')}}" required min="{{$today}}"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                    @error('tanggal_mulai')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="input-group mb-3 input-group-lg">
                                    <label class="input-group-text" for="tanggal_akhir" id="inputGroup-sizing-lg">Tanggal Akhir</label>
                                    <input type="date" name="tanggal_akhir" id="tanggal_akhir" class="form-control" @error('tanggal_akhir') is-invalid @enderror value="{{old('tanggal_akhir')}}" required min="{{$today}}"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                    @error('tanggal_akhir')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="btn-boxA">
                                    <button class=" mt-5" type="submit" name="simpan" onsubmit="return confirm('Apakah Anda yakin ingin menambah aktivitas baru?');">Simpan</button>
                                    <button class=" mt-5" type="reset">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </div>

    <script>
        $(document).ready(function() {
            var calender = $('#calendar').fullCalendar({
                editable: true,
            });
        });
    </script>
</body>

</html>