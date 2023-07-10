<?php
require 'functions.php';
// ketika tombol register di klik maka .......
if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
        alert('selamat anda berhasil melakukan registrasi ....');
    </script>";
} else {
    echo "<script>
        alert('registrasi anda gagal ......');
    </script>";
}
}


// ketika tombbol login di klik maka ....
if (isset($_POST["login_user"])) {
  // Ambil username dan password dari input ...
  $username_login = $_POST["username-login"];
  $password_login = $_POST["password-login"];

  // Cek apakah username dari input ada di DB...
  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username_login'"); 
  if (mysqli_num_rows($result) === 1) {

      $data = mysqli_fetch_assoc($result);
    // Cek password ..
    if (password_verify($password_login,$data["password"])) {
      header("Location:index.html");
      exit;
    }
  }
  $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/login.css" />
    <title>CW Transport</title>
    <link rel="icon" type="image/x-icon" href="image/logo1.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
</head>
<body>
  <form action="" method="post">
    <!-- login ..... -->
  <section>
      <div class="row">
        <div class="col-sm-12 col-lg-7">
          <img src="image/login.jpg" class="img-fluid img-login" alt="image-login" />
        </div>
        <div class="col-sm-12 col-lg-4 login-form">
          <div class="login-box mx-auto p-3">
            <form method="post">
              <h1 class="mb-5 login-text">Login</h1>
              <div class="mb-3">
                <label for="username-login" class="form-label">username</label>
                <input type="text" class="form-control" name="username-login" id="username-login" />
              </div>
              <div class="mb-3">
                <label for="login-password" class="form-label">Password</label>
                <input type="password" name="password-login" class="form-control" id="password-login"/>
              </div>
              <div class="mb-5 form-check">
                <input type="checkbox" class="form-check-input" name="login-coockie" id="login-coockie"/>
                <label class="form-check-label" for="login-coockie">Check me out</label>
              </div>
              <div class="d-grid gap-2 col-lg-8 col-md-4 mx-auto mb-3">
               <button type="submit" class="btn-login" name="login_user">login</button>
              </div>
              <div class="d-grid gap-2 col-lg-8 col-md-4 mx-auto">
                <button type="button" class="btn-login register" data-bs-toggle="modal" data-bs-target="#staticBackdrop">sign up</button>
              </div>
              </section>
              <!-- akhir loginn -->
                <section>
                </form>
                   <!-- Modal........... -->
              <form action="" method="post" >
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Register</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <!-- form register ...... -->
                      <div class="row mb-3">
                        <!-- masukan nama lengkap ..... -->
                        <div class="col">
                          <input type="text" class="form-control" name="first-name" placeholder="First name" aria-label="First name" required />
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" name="last-name" placeholder="Last name" aria-label="Last name" required />
                        </div>
                      </div>
                      <!-- akhir nama lengkap .... -->

                      <!-- masukan email    -->
                      <div class="col mb-3">
                        <input type="email" class="form-control" name="email-register" id="email-register" placeholder="masukan email ...." required />
                      </div>
                      <!--  akhir email  ...... -->

                      <!-- masukan no hp  -->
                      <div class="col mb-3">
                        <input type="text" class="form-control" name="no_handphone" id="no_handphone" placeholder="masukan nomor Hp ...." required/>
                      </div>
                      <!-- akhir no hp  -->

                      <!-- input password -->
                      <div class="col mb-3">
                        <input type="password" class="form-control" name="password_register" id="password_register" placeholder="new password ...." required />
                      </div>

                      <!-- validasi possword -->
                      <div class="col mb-3">
                        <input type="password" class="form-control" name="password2_register" id="second_password" placeholder="password verification ...." required/>
                      </div>

                      <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" name="address_register" id="address_register" style="height: 100px" required></textarea>
                        <label for="address_register">address</label>
                      </div>

                      <!-- akhir form register...... -->
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" name="register" class="btn btn-success">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- akhir modal ...... -->
                </section>
                </form>
              <!-- modal register -->
 
  <script src="script1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>