<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        #background-video {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1000;
        }
    </style>
</head>
<body class="container bg-dark ">
<video id="background-video" loop muted autoplay>
        <source src="assets/img/video.mp4" type="video/mp4">
    </video>
    <?php
        $katakunci=(isset($_GET['katakunci']))?$_GET['katakunci']:"";
    ?>
    <header>
            <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
                <div class="container-fluid">
                <a class="navbar-brand" href="#">PERPUSTAKAAN </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="indexuser.php"> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Daftar Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    </ul>
                    </div>
                </div>
            </nav>
    </header>
    
    <main class="container">
        <div>
        <h1 class="text-white">Beranda Perpustakaan</h1>
        <p>
            <form class="float-end  d-flex" method="get">
                            <div class="col-auuto">
                                <input type="text" class="form-control" placeholder="search..." name="katakunci" id="katakunci" value="<?php echo $katakunci ?>" />
                            </div>
                            <div class="col-auto">
                                <input type="submit" name="cari" value="Search" class="btn btn-secondary">
                            </div>
                        </form>
        </p>
        
        </div>
        <br><br><br>
        <div class="container">
        <div class="slide" style="width: 18rem; height:30rem">
            <img src="assets/img/itachi.jpeg">
            <div class="card-body">
                <h5 class="card-title">Naruto</h5>
                <p class="card-text">Komik Jepang</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
    </div>
        </div>
        
        </main>
    
    <footer class='footer w-100  bg-tranparant'>
        <div class='text-center p-3 text-white'>
            copyright & copy by @graceDardanella ; Perpustakaan Digital 2024.
        </div>

    </footer>
</body>
</html>