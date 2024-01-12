<!DOCTYPE html>
<html lang="en">
    <head>
        <mata charset="UTF-8">
        <mata name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Selamat Datang!</title>
    </head>
    <body>
       <h1>SELAMAT DATANG!</h1>
       <h2>Anda telah terdaftar sebagai: </h2>
       <br>
       <?php
       $firstName = $_POST["first-name"];
           $lastName = $_POST["last-name"];
           $namaLengkap = $firstName . " " . $lastName;
           echo "Nama Lengkap: $namaLengkap"; 
           ?>

        <br><?php $gender = $_POST["gender"];
            echo "Jenis Kelamin: $gender";?>

        <br><?php $nationality = $_POST["nationality"];
            echo "kewarganegaraan: $nationality" ?>

        <br> <?php $languange = $_POST["languange"];
                echo "bahasa yang dikuasai: " . implode(", ",$languange); ?>

        <br> <?php $bio = $_POST["bio"];
            echo "Bio Anda: $bio"; ?>
        
    </body>
</html>