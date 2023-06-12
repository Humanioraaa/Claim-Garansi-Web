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
        <form method="POST"  action="{{ route('login')}}">
        @csrf  
        <h1>Daftar Dulu Bego</h1>

          <input type="text" placeholder="Name" id="name" name="name" />
          <input type="email" placeholder="Email" id="email" name="email"/>
          <input type="password" placeholder="Password" id="password" name="password" />
          <button>Daftar</button>
          <div class="login-tombol">
            <a href="#">atau</a>
            <button id="login-mobile">Login</button>
          </div>
        </form>
      </div>

      <!-- login -->
      <div class="form-container login-container">
        <form method="POST" action="{{ route('login')}}">
          @csrf
          <h1>Login Sini Njing</h1>
          <input type="email" placeholder="Email" id="email" name="email"/>
          <input type="password" placeholder="Password" id="password" name="password"/>
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
            <h1 class="title">Oi Goblog</h1>
            <p>Kalo Udah Punya Akun Klik Sini Ngentot</p>
            <button class="ghost" id="login">
              Login
              <i class="lni lni-arrow-left login"></i>
            </button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1 class="title">Ini Buat Daftar</h1>
            <p>Kalo Belom Punya Akun Ya Daftar Dulu Ogeb.</p>
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
