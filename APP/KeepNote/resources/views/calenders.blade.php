<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/calendar.css">
    <link rel="stylesheet" href="css/fullcalendar.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/fullcalendar.min.js"></script>
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
                <a href="/" class="logo">Note.Us</a>
            </div>
            <nav class="navbar ">
                <a href="/welcome" class="active">Home</a>
                <a href="{{ url('/welcome#homes') }}">Feature</a>
                <a href="{{ url('/welcome#About') }}">About</a>
                <a href="/notes">Note</a>
                <a href="/calenders">Calendar</a>
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
                    <div class="cal mt-5">
                        <div class="container">
                            <div id="calendar" class="mb-5"></div>
                        </div>
                    </div>
                    <div class="input mt-5 bg-purple-200" style="margin-left: 50px;">
                        <div class="container">
                            <h2 class="mt-4">Aktivitas</h2>
                            <form action="" method="post">
                                <div class="input-group mb-3 mt-5 input-group-lg">
                                    <label class="input-group-text" for="aktivitas" id="inputGroup-sizing-lg">Aktivitas</label>
                                    <input type="text" name="aktivitas" id="aktivitas" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                </div>
                                <div class="input-group mb-3 input-group-lg">
                                    <label class="input-group-text" for="tanggal_mulai" id="inputGroup-sizing-lg">Tanggal Mulai</label>
                                    <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                </div>
                                <div class="input-group mb-3 input-group-lg">
                                    <label class="input-group-text" for="tanggal_akhir" id="inputGroup-sizing-lg">Tanggal Akhir</label>
                                    <input type="date" name="tanggal_akhir" id="tanggal_akhir" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                </div>
                                <div class="btn-boxA">
                                    <button class=" mt-5" type="submit" name="simpan">Simpan</button>
                                    <button class=" mt-5" type="reset">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered border-primary mb-5" style="width: 1800px; text-align: center;">
                    <thead>
                        <tr>
                            <th scope="col">Nomor</th>
                            <th scope="col">Aktivitas</th>
                            <th scope="col">Tanggal Mulai</th>
                            <th scope="col">Tanggal Berakhir</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($calenders as $calender)
                        <tr>
                            <th scope="row">{{$i}}</th>
                            <td>{{$calender ['aktivitas']}}</td>
                            <td>{{$calender->tanggal_mulai}}</td>
                            <td>{{$calender->tanggal_akhir}}</td>
                            @if ($calender['status'] == 1)
                            <td>
                                <p class="text-lg bg-green-500">Selesai</p>
                            </td>
                            <td>
                                <a class="rounded bg-red-500 text-slate-100 py-2 px-2 hover:underline" href="">Hapus</a>
                            </td>
                            @else
                            <td>
                                <p class="text-lg bg-red-500">Belum Selesai</p>
                            </td>
                            <td>
                                <a class="rounded bg-red-500 text-slate-100 py-2 px-2 hover:underline" href="">Hapus</a>
                                |
                                <a class="rounded bg-green-500 text-slate-100 py-2 px-2 hover:underline" href="">Selesai</a>
                            </td>
                            @endif
                        </tr>
                        <?php $i++; ?>
                        @endforeach
                    </tbody>
                </table>
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