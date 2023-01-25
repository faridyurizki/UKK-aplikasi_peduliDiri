<?php
    if (isset($_POST['daftar'])){
        $nik = $_POST['nik'];
        $name = $_POST['name'];
        $text = $nik.",".$name."\n";
       
            if($nik == '' and $name == ''){
                echo "<script>alert ('data tidak boleh kosong') </script>";
            } else {
                $fp = fopen('config.txt', 'a+');
                
                if(fwrite($fp, $text)){
                    echo "<script>alert ('anda berhasil mendaftar') </script>";
                }
        
            }


    }
    ?>

<html>
    <form action="" method="post">
    <br><br><br><br><br><br><br><br><br><br><br><br>
        <table align="center" >
            <tr>
                <td><input type="text" name="nik" placeholder="NIK" required ></td>
            </tr>
            <tr>
                <td><input type="text" name="name" placeholder="nama lengkap" required></td>
            </tr>
            <tr>
                <td>
                <input type="submit" name="daftar" value="saya belum punya akun">
                <input type="submit" name="masuk" value="masuk">
                </td>
            </tr>
        </table>
    </form>

</html>