<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/note.css">
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
                <a href="" class="active" >Home</a>
                <a href="">About</a>
                <a href="note">Note</a> 
                <a href="calendar">Calendar</a>
            </nav> 
        </header>

            <div id="container">

                <div id="list-header">
                    <div id="addNoteDiv" onclick="popup()">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <div class="blankDiv"></div>
                    <div class="blankDiv"></div>
                </div>

                <div id="list-container">
                    <ul id="notes-list"></ul>
                </div>
            </div>

    </div>
            <script src="js/scriptNote.js"></script>
</body>
</html>