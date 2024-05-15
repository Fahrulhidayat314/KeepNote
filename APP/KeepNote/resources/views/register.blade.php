<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">
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
                
                <a href="#" class="logo">Note.Us</a>
            </div>
            

            <nav class="navbar ">
                <a href="welcome" class="active">Home</a>
                <a href="welcome">About</a>
                <a href="note">Note</a>
                <a href="calendar">Calendar</a>
            </nav> 
        </header>
        <section class="Home">
            <div class="home-content animate__animated animate__fadeInLeft animate__slower rounded-4">
            <div class="container text-center">
                <div class="row">
                    <div class="col-12">
                        <h1>Pendaftaran</h1>
                        <table class="tb1"><tr><td></td></tr></table>
                        
                        <form action="" method="post" id="registerForm">
                            <div class="input-group mb-4">
                                <span class="input-group-text" id="inputGroup-sizing-large">Nama Lengkap</span>
                                <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap Anda" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                              </div>
                            <div class="input-group mb-4">
                                <span class="input-group-text" id="inputGroup-sizing-large">Username</span>
                                <input type="text" id="regUsername" class="form-control" placeholder="Masukkan Username Anda" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                              </div>
                            <div class="input-group mb-4">
                                <span class="input-group-text" id="inputGroup-sizing-large">Email</span>
                                <input type="email" class="form-control" placeholder="Masukkan Email Anda" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                              </div>
                            <div class="input-group mb-4">
                                <span class="input-group-text" id="inputGroup-sizing-large">Nomor Handphone</span>
                                <input type="tel" class="form-control" placeholder="Masukkan Nomor Telephone Anda" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  pattern="[0-9]{4} [0-9]{4} [0-9]{4}" required>
                              </div>
                            <div class="input-group mb-4">
                                <span class="input-group-text" id="inputGroup-sizing-large">Password</span>
                                <input type="password" id="regPassword" class="form-control" placeholder="Masukkan Password Anda" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                              </div>
                            <div class="input-group mb-4">
                                <span class="input-group-text" id="inputGroup-sizing-large">Konfirmasi Password</span>
                                <input type="password" id="confirmPassword" class="form-control" placeholder="Konfirmasi Password Anda" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                              </div>
                            <div class="input-group mb-4">
                                <span class="input-group-text" id="inputGroup-sizing-large">Jenis Kelamin</span>
                                <select class="form-select" aria-label="Disabled select example">
                                    <option selected>Pilih Jenis Kelamin Anda</option>
                                    <option value="1">Pria</option>
                                    <option value="2">Wanita</option>
                                    <option value="3">Tidak Menjawab</option>
                                </select>
                            </div>
                            <div>
                                <a href=""><button type="submit">Daftar</button></a>
                                <a href=""><button type="reset">Reset</button></a>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    <div class="col-lg-8 text-center animate__animated animate__fadeInRight animate__slower" style="margin-top: 100px;"> 
        <img src="img/iconnnn.png" alt="" width="70%">
    </div>
    </section>

    </div>
</body>
</html>