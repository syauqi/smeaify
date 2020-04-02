<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Rekayasa Perangkat Lunak | SMKN 1 Ciamis</title>
  </head>

  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">
  <a class="navbar-brand" href="#">Login Siswa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link active" href="login.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="sr-only">(current)</span></a>
      <!-- <a class="nav-item nav-link" href="registration.php">Daftar</a> -->
      <!-- <a class="nav-item nav-link" href="admin-login.php">Admin</a> -->
      </div>
    </div>
  </div>
</nav>
    <!-- End Navbar -->






    <div class="row">
        <div class="col-11 wrapper mx-auto">
            <div class="row mx-auto my-auto">
                <div class="col-md-6">
                    <img src="login.png class="img-sign-in" alt="">
                </div>
                <div class="col-md-6 mx-auto "><br> <br> <p class="txtlogin">Log-in Sekarang!</p>
                <form action="cek_login.php" method="post">
                    <div class="form-group">
                        <label for="Username" class="txtlogin2">Username atau Email.</label>
                        <input type="text"  required="required" class="form-control " id="username" name="username" aria-describedby="emailHelp" placeholder="Enter username or email.">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="txtlogin2">Password.</label>
                        <input type="password"  required="required" class="form-control" name="password" id="login" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" onclick="showpassword()" id="login">
                        <label class="form-check-label" style="font-family: 'Montserrat', sans-serif;" for="exampleCheck1">Lihat Password</label>
                        <p id="warninginfo"  style="color : red; display:none;">Capslock nya nyala tuh! </p>
                    </div>
                    <script>
                        function showpassword() {
                            var x = document.getElementById("login");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                            }
                    </script>
                    <script>
                        // Get the input field
var input = document.getElementById("login");

// Get the warning text
var text = document.getElementById("warninginfo");

// When the user presses any key on the keyboard, run the function
input.addEventListener("keyup", function(event) {

  // If "caps lock" is pressed, display the warning text
  if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});
                        </script>

                         <script>
                        // Get the input field
var input = document.getElementById("login");

// Get the warning text
var text = document.getElementById("warninginfo");

// When the user presses any key on the keyboard, run the function
input.addEventListener("keyup", function(event) {

  // If "caps lock" is pressed, display the warning text
  if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});
                        </script>

<script>
                        // Get the input field
var input = document.getElementById("username");

// Get the warning text
var text = document.getElementById("warninginfo");

// When the user presses any key on the keyboard, run the function
input.addEventListener("keyup", function(event) {

  // If "caps lock" is pressed, display the warning text
  if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});
                        </script>
                    <button type="submit" style="font-family: 'Montserrat', sans-serif;" class="btn btnlogin btn-block">Submit</button>
                    </form></div>
                </div>
            </div>
        </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>