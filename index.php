<?php
     //  simpan file variable ini dengan contoh variable.php

     /** Menyimpan nama arrafa dalam varible $nama
      * karana type datanya adalah staring (teks)
    * maka penulisanya denagn tanda kutip"  
    
     **/  
     
   $name = "Arrafa,";
   echo $name;
   echo "<br>"; // Buat baris baru 

    // simpan umur arrafa dalam variable $umur 

   $umur = "16,";
   echo $umur;
   echo "<br>"; // Buat dalam variable umur 

   // simpan tanggal lahir arrafa dalam variable
   
   $tanggalahir = strtotime("19 November 2010");
   echo date("j M Y", $tanggalahir);
   echo "<br>"; // Buat baris baru

   // simpan jawaban benar (true) atau salah (false)
   $Mentalpejuang = true;
   echo"MentalPejuang,";
   $mentalpemberani = false;
   echo"mentalpemberani";
   

   
  
?>