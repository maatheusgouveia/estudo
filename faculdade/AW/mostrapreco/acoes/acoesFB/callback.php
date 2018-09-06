<?php
     
     require 'fb.php';

     $helper = $fb->getRedirectLoginHelper();

     try{

         $_SESSION['fb_token'] = (string) $helper->getAccessToken();

     }catch(Facebook\Exceptions\FacebookResponseException $e){

         echo "erro :" . $e->getMessage();

     }catch(Facebook\Exceptions\FacebookSDKException $e){

         echo 'ERRO sdk :'. $e->getMessage(); 

     }

     header('location:index.php');