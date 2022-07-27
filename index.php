<?php 
    $servername = "localhost";
    $database = "user"; 
    $username = "root";
    $password = ""; 
    $conn = mysqli_connect($servername, $username, $password, $database);

    if(isset($_POST["tujuan"])){

        $tujuan = $_POST["tujuan"];
        
        if($tujuan == "LOGIN"){
            $username = $_POST["username"];
            $password = $_POST["password"];
            
            $query_sql = "SELECT * FROM tabel_daftar
                                   WHERE username = '$username' AND password = '$password'";
            
            $result = mysqli_query($conn, $query_sql);

            if(mysqli_num_rows($result) > 0){
                echo "<h1>Selamat Datang, ".$username."!</h1>";
            }else{
                echo "<h2>Username atau Password Salah!</h2>";
            }
    
        }else{
            $username = $_POST["username"];
            $password = $_POST["password"];
            $profilename = $_POST["profilename"];
            $address = $_POST["address"];

            $query_sql = "INSERT INTO tabel_daftar (username, password, profilename, address) 
                                               VALUES ('$username', '$password', '$profilename', '$address')";

            if (mysqli_query($conn, $query_sql)) {
                echo "
                        <h1>Username '$username' berhasil terdaftar</h1>
                        <a href='pages/login.php'>Login</h1>
                    ";
            } else {
                echo "Pendaftaran Gagal : " . mysqli_error($conn);
            }
        }
    }
    mysqli_close($conn);
?>