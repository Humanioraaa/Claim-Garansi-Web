<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login-style.css" />
  </head>
  <body>

  <!-- Regist -->
    <div class="container" id="container">
      <div class="form-container register-container">
        <form method="POST"  action="{{ route('register') }}">
        @csrf  
        <h1>Ini Form Regist</h1>

          <input type="text" placeholder="Name" id="name" name="name" required/>
          <input type="email" placeholder="Email" id="email" name="email" required/>
          <input type="password" placeholder="Password" id="password" name="password" required />
          <button>Daftar</button>
          <div class="login-tombol">
            <a href="#">atau</a>
            <button id="login-mobile">Login</button>
          </div>
        </form>
      </div>

      <!-- login -->
      <div class="form-container login-container">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <h1>Silahkan Login</h1>
          <input type="email" placeholder="Email" id="email" name="email" required/>
          <input type="password" placeholder="Password" id="password" name="password" required/>
          <div class="content">
            <div class="checkbox">
              <input type="checkbox" name="checkbox" id="checkbox" />
              <label>Ingat Saya </label>
            </div>
            <div class="pass-link">
              <a href="#">Reset Pass</a>
            </div>
          </div>
          <button>Login</button>
          <div class="daftar-tombol">
            <a href="#">atau</a>
            <button id="register-mobile">Daftar</button>
          </div>
        </form>
      </div>

      <!-- overlay -->

      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1 class="title">Halooo</h1>
            <p>Kalo Udah Punya Akin Sini</p>
            <button class="ghost" id="login">
              Login
              <i class="lni lni-arrow-left login"></i>
            </button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1 class="title">Ini Buat Daftar</h1>
            <p>Kalo Belom Punya Akun Sini</p>
            <button class="ghost" id="register">
              Daftar
              <i class="lni lni-arrow-right register"></i>
            </button>
          </div>
        </div>
      </div>
    </div>

    <script src="assets/js/script.js"></script>
  </body>
</html>
