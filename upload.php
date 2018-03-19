<?php
   if(isset($_FILES['fileToUpload'])){
      $errors= array();
      $file_name = $_FILES['fileToUpload']['name'];
      $file_size =$_FILES['fileToUpload']['size'];
      $file_tmp =$_FILES['fileToUpload']['tmp_name'];
      $file_type=$_FILES['fileToUpload']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['fileToUpload']['name'])));
      
      $expensions= array("txt","doc","pdf","docx","php");
      
      if(in_array($file_ext,$expensions)== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 209715200){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"C:\xampp\htdocs\astro\".$file_name);
         echo Success;
      }else{
         print_r($errors);
      }
   }
?>
