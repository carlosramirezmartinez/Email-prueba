<?php

   //Introducir email
   $email = "prueba@mail.com";
   
   ValidarEmail($email);  

   function ValidarCaracter($string){
     $texto = str_split($string);

      foreach($texto as $caracter){
        if ($caracter=='.' || $caracter=='_' || $caracter=='-' || ($caracter>='a' && $caracter<='z') || ($caracter>='0' && $caracter<='9'));
        else 
         return false;      
      }  
      return true;
   }
   
   //Valido correo
   function emailCorrecto($email){
     $arroba= strrpos($email,"@");
     $prefijo = substr($email,0,$arroba);

     
     if((strlen($prefijo)>=5 && strlen($prefijo)<=32) && ValidarCaracter($prefijo))
       return true;
     return false;
   }
   
   //Valido dominio
   function dominioCorrecto($email){
     $arroba = strrpos($email,"@");
     $posicionPunto = strrpos($email,".");
     $tamaño = strlen($email);  
     $dominio = substr($email,$arroba+1); 
   
     if(($tamaño-1-$posicionPunto)>=2 && $arroba<$posicionPunto && ValidarCaracter($dominio))
       return true;
     return false;
   }
   
   //Validacion todo
   function ValidarEmail($email){    
        echo "Introduzca email: ".$email."<br>";     
        if(emailCorrecto($email) && dominioCorrecto($email)) {
          echo "El email es ok ✔️✔️✔️✔️✔️✔️✔️✔️✔️✔️";
        }
        else {
          echo "Intentelo de nuevo ❌❌❌❌❌❌❌❌❌";
        }
   }
   
  // echo var_dump(ValidarCaracter("Pepe_"));
?>