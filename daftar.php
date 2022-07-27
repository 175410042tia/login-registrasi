<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <div class="container">
          <h1>Daftar</h1>
            <form method="POST" action="../index.php">

                <input type="hidden" name="tujuan" value="DAFTAR">

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
                <label>Profile Name</label>
                <br>
                <input name="profilename" type="text">
                <br>

                <br>
                <label>Address</label>
                <br>
                <textarea name="alamat"></textarea>
                <br>

                <br>
                <button>Daftar</button>
                <p>
                  <a href="login.php">Login di sini</a>
                </p>
            </form>
        </div>
    </body>
</html>