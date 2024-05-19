
    <style>
        p{
            margin-top:-8px;
            margin-bottom:-7px;
            width: 100%;
            height: 780px;
            background: url(images/web.jpg);
            text-align: center;
            color: #3a6cf4;
            font-weight: 700;
            font-size: 3.5em;
        }
    </style>
<?php 
    $email="g231210041@ogr.sakarya.edu.tr";
    $pass="g231210041";
    if($_POST["email"]==$email && $_POST["password"]==$pass)
    {
        echo ("<p>hoşgeldin g231210041</p>");
        header("refresh: 5; url=../index.html");
    }
    else
    {
        echo ("<p>hatali giriş</p>");
        header("refresh: 5; url=index.php");
    }
?>