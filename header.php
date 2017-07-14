<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
 <title></title>
 <style type="text/css">
   .container{
     margin: 0 auto;
     width: 600px;
   }
   .box{
     margin: 0 auto;
     padding: 20px;
   }
   form{
     text-align: left;
   }
   body{
     font-size: 14pt;
     height: 100%;
   }
   html{
     height: 100%;
     margin: 0;
     padding: 0;
   }
   #map{
    width: 500px;
    height: 400px;
   }
   .logout{
     padding: 3px;
     border: 1px solid cadetblue;
     border-radius: 5px;
     text-decoration: none;
     background-color: cadetblue;
     color: white;
     font-size: 12pt;
     font-family: sans-serif;
   }
   .logout:hover{
     border-color: lightblue;
     background-color: lightblue;
     color: black;
     cursor: pointer;
   }
 </style>
 <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body>
