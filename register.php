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
        <title>Register Ke Perpustakaan Digital</title>
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
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
        }
        </style>
    </head>
    <body class="bg-primary">

    <video id="background-video" loop muted autoplay>
        <source src="assets/img/video.mp4" type="video/mp4">
    </video>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">  <!-- yang kutambai / kuubah -->
                                <div class="card shadow-lg border-0 rounded-lg mt-5 text-white bg-secondary" >  <!-- yang kutambai / kuubah -->
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register Perpustakaan Digital</h3></div>
                                    <div class="card-body">
                                        <form method="post">
                                        <?php
                                            if(isset($_POST['register'])) {
                                                $nama = $_POST['nama'];
                                                $email = $_POST['email'];
                                                $alamat = $_POST['alamat'];
                                                $no_telepon = $_POST['no_telepon'];
                                                $username = $_POST['username'];
                                                $level =$_POST['level'];
                                                $password = md5($_POST['password']);

                                                $insert = mysqli_query($koneksi, "INSERT INTO user(nama,email,alamat,no_telepon,username,password,level) VALUES('$nama','$email','$alamat','$no_telepon','$username','$password','$level')");
                                                if($insert){
                                                    echo '<script>alert("Selamat, register berhasil. Silahkan Login"); location.href="login.php"</script>';
                                                }else{
                                                    echo '<script>alert("Register gagal, Silahkan ulangin kembali.");</script>';

                                                }
                                            }
                                        ?>
                                        <form method="post">
                                            <div class="form-group">
                                                <label class="small mb-2">Nama Lengkap</label>
                                                <input class="form-control py-4" type="text" required name="nama" placeholder="Masukkan Nama Lengkap" />
                                            </div>
                                             <div class="form-group">
                                                <label lass="small mb-1">Email</label>
                                                <input class="form-control py-4" type="text" required name="email" placeholder="Masukkan Email" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">No. Telepon</label>
                                                <input class="form-control py-4" type="text" required name="no_telepon" placeholder="Masukkan No. Telepon" />
                                            </div>
                                             <div class="form-group">
                                                <label class="small mb-1">Alamat</label>
                                                <textarea name="alamat" rows="5" required class="form-control"></textarea>
                                            </div>
                                              <div class="form-group">
                                                <label class="small mb-1">Username</label>
                                                <input class="form-control py-4" type="username" required name="username" placeholder="Masukkan Username" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="inputPassword" required name="password" type="password" placeholder="Masukkan Password"/>
                                            </div>
                                              <!-- yang kutambai / kuubah -->
                                            <div class="mb-3 row">
            <div class="col-sm-10 offset-2">
                <input type="checkbox" class="form group" id="show-password"> Tampilkan Password
            </div>
        </div>
                                                <div class="form-group">
                                                <label class="small mb-1">Level</label>
                                                <select name="level" required class="form-select py-2">
                                                <option value="peminjam">Peminjaman</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-outline-warning" type="submit" name="register" value="register">Register</button>
                                                <a class="btn btn-success" href="login.php">Login</a>
                                                </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small">
                                            &copy; 2024 Perputakaan Digital.
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