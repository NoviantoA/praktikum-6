<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Biodata</title>
</head>

<body>

    <form action="" name="formpost" method="POST">
        <table align="center" border="1" cellpadding="0" cellspacing="0">
            <tr align="center">
                <td>
                    <h2>
                        <b>Form Biodata</b>
                    </h2>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="400" border="0" cellpadding="0" cellspacing="10" align="center">
                        <tr>
                            <td>Nama</td>
                            <td> : </td>
                            <td><input type="text" name="nama[]" size="40"></td>
                        </tr>
                        <tr>
                            <td>Tempat Tanggal Lahir</td>
                            <td> : </td>
                            <td><input type="text" name="tgl[]" size="40"></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td> : </td>
                            <td>
                                <input type="radio" name="jk" value="Laki-laki"> <label for="laki">Laki-laki</label>
                                <input type="radio" name="jk" value="Perempuan"><label for="Perempuan">Perempuan</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Hobi</td>
                            <td> : </td>
                            <td><input type="text" name="hobi[]" size="40"></td>
                        </tr>
                        <tr>
                            <td colspan="4" align="center"><input type="submit" name="btnsubmit" value="Simpan"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>

</body>
<center>
    <table border="1" cellpadding="2" cellspacing="4">
        <?php
        $nama=$_POST["nama"];
        $tgl=$_POST["tgl"];
        $jk=$_POST["jk"];
        $hobi=$_POST["hobi"];
        foreach($nama as $key =>$val){
            ?>
        <tr>
            <td align="center" colspan="2">
                <?php
                    echo '<b>Hasil Biodata yang di Inputkan</b>';
                    ?>
            </td>
        </tr>
        <tr>
            <td><?php echo 'Nama'; ?> </td>
            <td><?php echo $nama[$key]; ?></td>
        </tr>
        <tr>
            <td><?php echo'Tempat Tanggal Lahir';?></td>
            <td><?php echo $tgl[$key];?></td>
        </tr>
        <tr>
            <td><?php echo'Jenis Kelamin';?></td>
            <td><?php echo $jk;?></td>
        </tr>
        <tr>
            <td><?php echo'Hobi';?></td>
            <td><?php echo $hobi[$key];?></td>
        </tr>
        <?php
        }
        ?>

    </table>
</center>

</html>