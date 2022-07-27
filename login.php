<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <div class="container">
          <h1>Login</h1>
            <form method="POST" action="../index.php">

                <!-- tipe hidden tidak akan tampil pada website --> 
                <input name="tujuan" type="hidden" value="LOGIN" >

                <br>
                <label>Username</label>

                <br>
                <input name="username" type="text">
                <br>

                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password">
                <br>

                <br>
                <button>Login</button>
                
                <p>
                    <br>
                  <a href="daftar.php">Daftar di sini</a>
                  jika belum memiliki akun.
                </p>
            </form>
        </div>
    </body>
</html>