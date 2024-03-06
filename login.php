<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login ke Perpustakaan Digital</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style>
        body {
            margin: 0;
            padding: 0;
        }
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

        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
        }
    </style>
    </head>
    <body>
    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="btn btn-info" href="indexuser.php">Back Home</a>
                                            </div>
    <video id="background-video" loop muted autoplay>
        <source src="assets/img/video.mp4" type="video/mp4">
    </video>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container ">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 ">  <!-- yang kutambai / kuubah -->
                                <div class="card shadow-lg border-0 rounded-lg mt-5 text-white bg-secondary">  <!-- yang kutambai / kuubah -->
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4 ">Login Perpustakaan Digital</h3></div>
                                    <div class="card-body">
                                    <?php
                                        if(isset($_POST['login'])) {
                                            $username = $_POST['username'];
                                            $password = md5($_POST['password']);

                                            $data = mysqli_query($koneksi, "SELECT * FROM user where username='$username' and password='$password'");
                                            $cek = mysqli_num_rows($data);
                                            if($cek > 0){
                                                $_SESSION['user'] = mysqli_fetch_array($data);
                                                echo '<script>alert("Selamat datang, Login berhasil"); location.href="index.php";</script>';
                                            }else{
                                                echo '<script>alert("Maaf, Username atau Password salah")</script>';
                                            }
                                        }
                                        ?>
                                        <form method="post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Username</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="text" name="username" placeholder="Enter username"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="inputPassword" name="password" type="password" placeholder="Enter password address"/>
                                            </div>
                    <!-- yang kutambai / kuubah -->
            <div class="mb-3 row">
            <div class="col-sm-10 offset-2">
                <input type="checkbox" class="form-group" id="show-password"> Tampilkan Password
            </div>
        </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-success" type="submit" name="login" value="login">Login</button>
                                                <a class="btn btn-outline-warning" href="register.php">Register</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small">
                                            &copy; 2024 Perpustakaan Digital.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin=" anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
          <!-- yang kutambai / kuubah -->
        <script>
        $(document).ready(function() {
            $('#show-password').click(function() {
                if ($(this).is(':checked')) {
                    $('#inputPassword').attr('type', 'text');
                } else {
                    $('#inputPassword').attr('type', 'password');
                }
            });
        });
    </script>
    </body>
</html>