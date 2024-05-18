<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>METEHAN KÖSE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="navbar-holder">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-4">
            <div class="container">
                <a class="navbar-brand" href="../index.html"><span>METEHAN </span> KÖSE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.html">Hakkımda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../memleketim.html">Memleketim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="../takımımız.html">Takımımız</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="../ilgiAlanlarim.html">İlgi Alanlarım</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="../egitimCV.html">Eğitim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="../iletisim.html">İletişim</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link"  href="../sosyelmedya.html">Sosyal Medya</a>
                    </li>
                    
                </ul>
                <form class="d-flex">
                <button class="btn btn-outline-success">
                    <a href="./index.php" class="loginAtag">Giriş</a>
                </button>
                </form>
                </div>
            </div>
        </nav>
    </div>

    <div class="container col-6" id="form_container">
      <form method="POST" action="login.php">
        <label for="email">email :</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="password"> password:</label>
        <input type="password" id="password" name="password" ><br><br>

        <input type="submit" value="GIRIS">
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>