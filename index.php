<!DOCTYPE html>

<head>
    <html>
        <title>Informaisi Kariawan</title>
    <h1>Berikut Adalah Informasi Detai Kariawan</h1>
    <h2>PT Adibulong Centra Kinvci</h2>
    <p>INI ADALAH TABLE INFORMASI KARIAWAN</p>
    </html>
</head>
           </body>
        <head>
            <style>
               body {background-color: #f0f0f0;}
               h1 {color: navy;}
               p {text-align: center;}
               h2 {text-align: center;}
               h1 {text-align: center;}
                

               </style>
        </head>

    <hr>
    <?php
    $nama = "Arrafa";
    $umur = "16 Tahun";
    $divisi =  "Pemogram";
    $email = "arrafabnb@gmail.com";
    $jabatan = "Junior";

    $foto = "foto.jpg";


    ?>
    <table border="1" width="100%">
        <tr>
            <td>
                <b>Nama:</b> <?php echo $nama; ?>
                <br>
                <b>umur:</b> <?php echo $umur; ?>
                <br>
                <b>divisi:</b> <?php echo $divisi; ?>
                <br>
                <b>email:</b> <?php echo $email; ?>
        </tr>
    </table>
    <br>