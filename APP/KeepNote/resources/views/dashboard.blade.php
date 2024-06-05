<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&family=Mate:ital@0;1&family=Nanum+Myeongjo&display=swap" rel="stylesheet">
    <link rel="icon" href="img/vecteezy_3d-logo.png">
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
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </nav>
        </header>

        <section class="Dashboard">
            <div class="home-content  animate__animated animate__fadeInLeft animate__slower">
                <h1>Hi {{auth()->user()->name}}, Welcome To <u>KeepNote </u></h1>
                <h3>Make Your Note Easier</h3>
                <p>Keep Note adalah sebuah aplikasi digital yang dirancang untuk membantu pengguna mencatat, mengedit, menyimpan, menghapus catatan dengan efisien. Dengan fitur-fitur antarmuka yang intuitif, aplikasi ini menjadi alat yang sangat berguna bagi pelajar, profesional, dan siapa saja yang perlu mencatat ide, tugas, atau informasi penting lainnya. Seiring perkembangan teknologi, catatan-catatan yang dulunya terbatas pada kertas kini dapat disimpan dalam format digital. Hal ini memungkinkan akses yang lebih mudah dan fleksibilitas dalam pengelolaan informasi.</p>
                <div class="btn-box">
                    <a href="#homes">Features</a>
                    <a href="#About">About</a>
                </div>
            </div>
            <div class="image">
                <img class="icon animate__animated animate__fadeInUp animate__slower" src="img/vecteezy_3d-icon.png.png" alt="">
            </div>
        </section>
    </div>


    <div id="homes">
        <div id="fitur" class="container text-center text-white">
            <div id="Jhome" class="rounded-3 animate__animated animate__fadeInDown animate__slower">
                <h1>Write and Planing</h1>
                <h1>What you want to do</h1>
                <p>Perlu mengingat untuk mengatur kegiatan? perlu mengatur to do list? perlu menyelesaikan tugas yang harus dilakukan? Atur pengingat berbasis waktu untuk memastikan Anda tidak pernah melewatkan apa pun.</p>
            </div>
            <div class="row g-3" style="margin-left: 13%; width: 1200px;">
                <div id="ft1" class="col-5 rounded-3 animate__animated animate__fadeInLeft animate__slower" style="background: linear-gradient(to right, #26154b, #311d5c); margin-right: 5px;">
                    <div class="p-4">
                        <h1 class="rounded-4">Notes</h1><br>
                        <img src="/img/vecteezy_3d-note.png" alt="" width="25%"><br><br>
                        <p>Disini kita bisa membuat
                            apasaja catatan yang kita butuhkan. Membuat sebuah to-do list yang akan dibuat dan sebagai catetan apasaja yang telah dilakukan dan belum dilakukan</p>
                        <div class="btn-boxA">
                            <a href="{{ route('notes.index')}}">Started</a>
                        </div>
                    </div>
                </div>

                <div id="ft2" class="col-5 rounded-3 animate__animated animate__fadeInRight animate__slower" style="background: linear-gradient(to right, #26154b, #311d5c);">
                    <div class="p-3">
                        <h1 class="rounded-4">Calendar</h1><br>
                        <img src="/img/vecteezy_calendar.png" alt="" width="29%"><br><br>
                        <p>Fitur pendukung yang kita gunakan yaitu kalender. Kalender digunakan untuk menyusun waktu dan tanggal yang akan digunakan dalam membuat note.</p><br>
                        <div class="btn-boxA">
                            <a href="{{ route('calenders.index')}}">Started</a>
                        </div>
                    </div>
                </div>

                <div id="ft3" class="col-10 rounded-3 animate__animated animate__fadeInUp animate__slower" style="background: linear-gradient(to right, #26154b, #311d5c); width: 1010px;">
                    <div class="p-4">
                        <h1 class="rounded-4">Add Notes</h1>
                        <div class="container">
                            <div class="row">
                                <div class="col-10 col-sm-10">
                                    <p>Pada menu ini, kita bisa membuat catatan, mengedit catatan, menghapus catatan. Buat catatan sebagai penginggat apa saja yang harus dilakukan, disini!</p>
                                </div>
                                <div class="col-2 col-sm-2">
                                    <img src="/img/vecteezy_3d-logo.png" width="90%" alt="" style="margin-top: 20px;">

                                </div>
                            </div>
                        </div>
                        <div class="btn-boxA text-center ">
                            <a href="{{ route('notes.create') }}">Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="About">
        <div id="judul" class="container text-center text-white ">
            <div id="subjudul" class="rounded-3">
                <h1>Introduce</h1>
                <h1>The KeepNote's Team</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis omnis animi a exercitationem consequuntur doloribus id tempora praesentium, unde dolores nam porro iusto earum placeat quibusdam, perspiciatis rerum quia amet!</p>
            </div>
            <div class="container text-center">
                <div id="team" class="row align-items-center">
                    <div class="col-4">
                        <h2 class="rounded-4">Programer</h2>
                        <h5>Fahrul Hidayattulloh</h5>
                        <h5>233307011</h5>
                        <div class="text-center">
                            <img src="img/233307011.JPG" class="rounded-5" alt="..." height="200px">
                        </div>
                        <p class="m-2">bertugas untuk membuat program web, merancang, mengembakan situs web yang telah telah dibuat designer</p>
                        <div class="sosmed">
                            <a href="https://www.instagram.com/fahrulhidayattulloh/">Instagram</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <h2 class="rounded-4">Designer</h2>
                        <h5>Istya Yulia Amesti</h5>
                        <h5>233307019</h5>
                        <div class="text-center">
                        <img src="img/233307019.JPG" class="rounded-5" alt="..." height="200px">
                        </div>
                        <p class="m-2"> bertugas untuk membuat desain awal tampilan web, membuat database yang dibantu oleh uji coba dan dokumentasi</p>
                        <div class="sosmed">
                            <a href="https://www.instagram.com/_iiistya/">Instagram</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <h2 class="rounded-4">Documenter</h2>
                        <h5>Vava Ahsanul Khuluk</h5>
                        <h5>233307029</h5>
                        <div class="text-center">
                            <img src="img/233307029.JPG" class="rounded-5" alt="..." height="200px">
                        </div>
                        <p class="m-2"> bertugas sebagai pendemo web yang telah dibuat dan menguji coba apakah web tersebut bisa digunakan dengan baik atau tidak.</p>
                        <div class="sosmed">
                            <a href="https://www.instagram.com/Antony00/">Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>