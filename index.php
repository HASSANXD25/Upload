<?php

$title = "File-Upload";

if( $_SERVER['REQUEST_METHOD'] == "POST" ){

    $myFile = $_FILES['myfile'];

    copy($myFile['tmp_name'], $myFile['name']);

    fclose($myFile);

}

?>
<html>
    <head>
        <title><?php echo $title ?></title>
        <link rel="icon" href="icon.jpg">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="component.css">
        <link rel="stylesheet" href="demo.css">
        <link rel="stylesheet" href="normalize.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css" type="css/style">

    <head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1"><img width="80px" src="logo.png"></span>
        </nav>
        <form class="box-up" method="POST" enctype="multipart/form-data">
            <h1 style="margin: 60px;">Upload File</h1>
            <?php

            if( $_SERVER['REQUEST_METHOD'] == "POST" ){

                echo "Name File:" . "<font style='color: #4caf50;'> " . $myFile['name'] . "</font><br><hr>";
                echo "Type File:" . "<font style='color: #4caf50;'> " . $myFile['type'] . "</font><br><hr>"; 
                echo "Size File:" . "<font style='color: #4caf50;'> (" . $myFile['size'] . " bytes)</font><br><hr>";

            }

            
            ?>
            <input style="opacity: 0;" type="file" name="myfile" id="file-3" class="inputfile inputfile-3" data-multiple-caption="{count} files selected" multiple />
			<label for="file-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose a file&hellip;</span></label>            <br>
            <button>Upload</button>
            <?php
            if( $_SERVER['REQUEST_METHOD'] == "POST" ){

             echo "<span class='message'>
             Uploaded successfully <i style='font-size:19px' class='fa'>&#xf00c;</i>
             <span>"; 

            }
             
             ?>
        </form>
        <script src="custom-file-input.js"></script>
    </body>
    <style>
        .message{
            position: absolute;
            font-family: sans-serif;
            font-size: 19px;
            color: #fff;
            background-color: #4CAF50;
            padding: 9px;
            top: 3%;
        }
        .bg-light {
            background-color: #407bff!important;
            color: #fff;
        }
        .navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
            color: rgba(255, 255, 255, 0.9);
        }
        .navbar-light .navbar-brand {
            color: rgba(255, 255, 255, 0.9);
        }
        body{
            background-image: url(Upload-rafiki.png);
            background-repeat: no-repeat;
            background-size: 65%;
            background-position: 122% 50%;
        }
        .box-up button{
            padding: 12px 20px;
            padding-right: 65px;
            background-color: #fff;
            border: solid 1px #407bff;
            border-radius: 24px;
            font-family: sans-serif;
            font-weight: 700;
            color: #407bff;
            cursor: pointer;
            background-image: url(icon1.png);
            background-size: 40px;
            background-position: 80px 2px;
            background-repeat: no-repeat;
            margin-left: 15px;
            width: 140px;
            border: solid 1px #a2bfff;
            transition: 0.4s;
        }
        .box-up button:hover{
            background-color: #407bff;
            border: solid 1px #fff;
            color: #fff;
            transform: translate(0px, -5px);
            box-shadow: -3px 5px 4px #b1b1b1;
            transition: 0.4s;
            width: 150px;
            padding-right: 26px;
        }
        .box-up{
            position: absolute;
            display: grid;
            padding: 44px;
        }
        .inputfile-3 + label {
            color: #8aaeff;
        }
        .inputfile-3:focus + label, .inputfile-3.has-focus + label, .inputfile-3 + label:hover {
            color: #407bff;
        }
        
    </style>
</html>
