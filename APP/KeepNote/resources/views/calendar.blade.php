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
    <title>Noteus</title>
</head>
<body>
    <div class="hero">
        <header class="header">
            <div>
                <a href="#" class="logo">Note.Us</a>
            </div>
            <nav class="navbar ">
                <a href="/" class="active">Dashboard</a>
                <a href="calendar">Feature</a>
                <a href="/">About</a>
                <a href="note">Note</a>
                <a href="calendar">Calendar</a>
            </nav> 
        </header>  

        <h1>Calendar</h1><hr>
        
        <div class="cal">
            <div class="container">
                <div id="calendar"></div>
            </div>
        </div> 

    </div> 

    <script>
        $(document).ready(function(){
            var calender = $('#calendar').fullCalendar({
                editable:true,
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