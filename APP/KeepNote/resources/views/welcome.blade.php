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
            </nav>
        </header>

        <section class="Dashboard">
            <div class="home-content  animate__animated animate__fadeInLeft animate__slower">
                <h1>Hi, Welcome To <u>KeepNote </u></h1>
                <h3>Make Your Note Easier</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus excepturi omnis ipsam ipsum fuga quisquam vel fugit cumque provident eveniet sint nobis rem eaque repellendus facere ipsa, voluptas dolor numquam!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum maiores ullam facere reiciendis. Delectus eum animi distinctio impedit cupiditate, iste optio suscipit minima molestias temporibus in magni praesentium maxime corrupti?
                </p>


                <div class="btn-box">
                    <a href="{{ route('register') }}">Register</a>
                    <a href="{{ route('login') }}">Login</a>
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
                <h1>What You Want To Do</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae enim neque atque, quos modi maxime obcaecati ea nemo voluptatem voluptatibus vero magnam quas nisi fugiat, cumque quae, odit deleniti accusantium.</p>
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
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse laborum corporis culpa, aliquid labore magnam reprehenderit exercitationem praesentium numquam dolor, optio accusamus, cum fugit alias a non id natus ab.</p>
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
        <div id="judul" class="container text-center text-white">
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
                            <img src="..." class="rounded-5" alt="...">
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, deserunt quidem provident fugiat doloremque aspernatur. Debitis, iure repudiandae commodi ad praesentium nihil, veniam accusamus porro rerum consectetur ratione! Consequatur.</p>
                        <div class="sosmed">
                            <a href="">Instagram</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <h2 class="rounded-4">Designer</h2>
                        <h5>Istya Yulia Amnesti</h5>
                        <h5>233307019</h5>
                        <div class="text-center">
                            <img src="..." class="rounded-5" alt="...">
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla fuga placeat totam sint. Blanditiis sed sint beatae! Omnis, nesciunt adipisci. Sed mollitia rerum officiis recusandae iusto harum tempora culpa impedit.</p>
                        <div class="sosmed">
                            <a href="">Instagram</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <h2 class="rounded-4">Documenter</h2>
                        <h5>Vava Ahsanul Khuluk</h5>
                        <h5>233307029</h5>
                        <div class="text-center">
                            <img src="..." class="rounded-5" alt="...">
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus aperiam deserunt eius in quas a sed beatae at fugit voluptate natus, ex dicta voluptatum. Repudiandae eveniet nulla assumenda rem placeat culpa impedit.</p>
                        <div class="sosmed">
                            <a href="">Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
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