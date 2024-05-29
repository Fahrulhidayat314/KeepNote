<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fullcalendar.css') }}">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/moment.min.js"></script>
    <script src="../js/fullcalendar.min.js"></script>
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
        </header>
        <?php
        $i = 1;
        ?>
        <h1>Calendar</h1>
        <hr>


        <center>
            <div>
                <div style="justify-content: center; align-items: center;">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show col-6" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="cal mt-5">
                        <div class="container">
                            <div id="calendar" class="mb-2"></div>
                        </div>
                    </div>
                    <div class="btn-boxA py-3">
                        <a href="{{ route('calenders.create') }}">Tambah Rencana</a>
                    </div>
                </div>
        </center>
        <div class="row">
            @foreach($calenders as $calender)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <h5 class="card-header text-center font-bold text-lg">{{ $calender->aktivitas }}</h5>
                    <div class="card-body">
                        <h5 class="card-title">Dimulai: {{ $calender->tanggal_mulai }} | Berakhir: {{ $calender->tanggal_akhir }}</h5>
                        @if($calender->status == 0)
                        <div class="bg-danger my-3 p-2 rounded">
                            <p class="card-text text-light">Aktivitas {{ $calender->aktivitas }} BELUM SELESAI</p>
                        </div>
                        <div class="d-flex justify-content-center gap-2">
                            <form action="{{ route('calenders.destroy', $calender->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus aktivitas ini?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                            <form action="{{ route('calenders.activate', $calender->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menyelesaikan aktivitas ini?');">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-success">Selesai</button>
                            </form>
                        </div>
                        @else
                        <div class="bg-success my-3 p-2 rounded">
                            <p class="card-text text-light">Aktivitas {{ $calender->aktivitas }} SUDAH SELESAI</p>
                        </div>
                        <div class="d-flex justify-content-center gap-2">
                            <form action="{{ route('calenders.destroy', $calender->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus aktivitas ini?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center my-5">
            {{ $calenders->links() }}
        </div>
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