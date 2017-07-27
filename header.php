<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
 <title></title>
 <style type="text/css">
   .container{
     margin: 0 auto;
     width: 600px;
     text-align: center;
   }
   .box{
     margin: 0 auto;
     padding: 20px;
   }
   form{
     text-align: center;
     width: 500px;
     margin: 0 auto;
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
   input[type=text]{
     width: 120px;
     border: 1px solid cadetblue;
     border-radius: 3px;
     padding: 2px;
   }
   input[type=password]{
     width: 120px;
     border: 1px solid cadetblue;
     border-radius: 3px;
     padding: 2px;
   }
   #short_hr{
     width: 50%;
   }
   #map{
    margin: auto;
    width: 500px;
    height: 400px;
   }
   .list{
     text-align: left;
     margin: 0 auto;
     width: 300px;
   }
   .logout{
     padding: 4px;
     border: 1px solid cadetblue;
     border-radius: 5px;
     text-decoration: none;
     background-color: cadetblue;
     color: white;
     font-size: 12pt;
     font-family: sans-serif;
   }
   .join{
     padding: 3px;
     border: 1px solid cadetblue;
     border-radius: 5px;
     text-decoration: none;
     background-color: cadetblue;
     color: white;
     font-size: 12pt;
     font-family: sans-serif;
     position: absolute;
     float: right;
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
