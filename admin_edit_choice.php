<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(strlen($_SESSION['alogin'])=="")
    {    
    header("Location: index.php"); 
    }
    else
    { 
?>
<!DOCTYPE html>
<html lang="en"><head>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114312764-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114312764-1');
</script>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <meta name="author" content="Disease Prediction System ">

  <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/all.min.css" media="screen" >
  <title>PoultryDisease Prediction and Diagnosis System ||Admin Dashboard </title>



  <link href='https://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
  <link href="css/custom.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>




<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '221517861789129');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=221517861789129&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<style>
/*  body{*/
/*    background-color:#F0F0F0;*/
/*    width:auto;*/
/*    height:auto;*/
/*   align-items:center; */
/*  }*/
/*  .flex-p {*/
/*                display: flex;*/
/**/
/*flex-wrap: wrap;*/
/* justify-content:center;*/
/*       }*/
/*             .flex-p .content-p {*/
/*              flex-basis: 100%;*/
/*    max-width: 100%;*/
/*    padding: 21px;*/
/*    justify-content: center;*/
/*    margin-left: 100px;*/
/*}*/
/**/
/*.nnnnn .nnnnn1{*/
/*  */
/*  list-style-type: none;*/
/*  */
/*  padding: 4px;*/
/*  } */
/*  .nnnnn .nnnnn1 a{*/
/*  */
/*  color: white;*/
/*  */
/*  font-size: 16px;*/
/*  */
/*  text-decoration: none;*/
/*  */
/*  */
/*  font-weight: 800;*/
/*  */
/*  }*/
/*  .nnnnn .nnnnn1 a:hover*/
/*  {*/
/*   color:white;*/
/*  }*/
/*  .nnnnn .nnnnn1 button {background: blue;color:white;border-radius: 19px;}*/
/*  .nnnnn .nnnnn1 button:hover{background: #05011d;border-radius: 22px;transition: 0.5s;}*/
/*  </style>*/



</head>

<body>
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('link/topbar.php');?>

  <div class="content-wrapper">
                <div class="content-container">

                    <?php include('link/leftbar.php');?>



<div class="flex-p">
  <div class="content-p">

<!--      <div class="w3-container w3-green w3-cell w3-mobile">-->
<!--          <p>Hello W3.CSS Layout.</p>-->
<!--      </div>-->



      <html>

      <head>
          <title>W3.CSS</title>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
          <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
          <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
          <style>
              .mySlides {display:none;}
          </style>
      </head>



      <div class="w3-content w3-section w3-green" style="width:100%">
        
      
      <img class="mySlides" src="images/kuku1.jpg" style="width:100%">
      <img class="mySlides" src="images/kuku3.jpg" sstyle="width:100%">
      <img class="mySlides" src="images/kuku5.png" style="width:100%">
      <img class="mySlides" src="images/kuku6.png" style="width:100%">
      <img class="mySlides" src="images/kuku7.png" style="width:100%">

      <body>
      <script>
          var myIndex = 0;
          carousel();

          function carousel() {
              var i;
              var x = document.getElementsByClassName("mySlides");
              for (i = 0; i < x.length; i++) {
                  x[i].style.display = "none";
              }
              myIndex++;
              if (myIndex > x.length) {myIndex = 1}
              x[myIndex-1].style.display = "block";
              setTimeout(carousel, 2000); // Change image every 2 seconds
          }
      </script>
      </div>
    <div class="w3-container" >
      </div>

      </body>
      </html>






<!--      <div class="w3-container w3-red">-->
<!--          <h5>Footer</h5>-->
<!--      </div>-->

<!--<div id="organswrapper">-->
<!--    <div id="frt_base">-->
<!--        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1100px" height="1370" viewBox="0 0 1390 1370" xml:space="preserve">-->
<!--            <image overflow="visible" width="750" height="1370" xlink:href="images/homepage.jpg" ></image>-->
<!---->
<!---->
<!--            <a href="add_disease.php"><path id="frt_1" d="M418.334,70C416.668,38,382,19,363,19c-30.833,0-50.167,31.5-53.167,44.5c-1.915,8.295-2.833,23.5-2.5,28.167s1,12.333,0.667,16.167c2.04,7.695,6.667,23,6.667,33c0.667,5.167,1.167,12.5,3.333,18.833c3,4,22.5,23.333,44.167,23.333s36.5-8.667,45.708-23c2.625-5.625,5-15.25,4.75-18.625c-0.708-5.125,4.708-28.042,5.709-32.708C419.001,101.334,420,102,418.334,70z"/>-->
<!--</a>-->
<!---->
<!---->
<!--<a href="add_disease.php"> <path id="frt_2" d="M340.5,102.25c8.561,0,14.5-4.197,14.5-9.375s-5.939-9.375-14.5-9.375S325,87.697,325,92.875S331.939,102.25,340.5,102.25z"/></a>-->
<!--<a href="add_disease.php">  <path id="frt_3" d="M388.5,102.25c8.561,0,15.5-4.197,15.5-9.375s-6.939-9.375-15.5-9.375S374,87.697,374,92.875S379.939,102.25,388.5,102.25z"/></a>-->
<!--<a href="add_disease.php">  <path id="frt_4" d="M299.833,106c-4,4-1.833,17-0.833,20.667s5.833,14.667,7.167,15.833s5.167,4.833,8.5-1.667c0-10-4.627-25.305-6.667-33C307,106,303.833,102,299.833,106z"/></a>-->
<!--<a href="add_disease.php">  <path id="frt_5" d="M412.625,141.375c3.75,6.375,8.875,3.25,10-1.75s7.625-7.875,6.75-23.625s-8.041-11.667-11.041-7.333C417.333,113.333,411.917,136.25,412.625,141.375z"/></a>-->
<!--<a href="add_disease.php">   <path id="frt_6" d="M355.375,105.25c-0.375,3.125-5,6.375-5.625,13.125c-0.438,4.731,6.25,7.5,10.25,6.5c5,2.625,6.75,0.625,9.875-0.625c5.75,0.875,8-3.25,8-7.75s-4.375-6.75-4.875-12.25s-3.375-7.625-3.125-13.5s-2.375-9.875-6.086-9.875c-5.21,0-6.289,7.875-5.914,10.625S355.75,102.125,355.375,105.25z"/></a>-->
<!--<a href="add_disease.php">  <path id="frt_7" d="M374.25,133.25c-2.256-2.723-6.231-1.652-7.875-0.75c-0.882,0.484-3.5,0.875-5.125-0.375s-6.125-0.125-7.375,1.625s-11.75,5.125-12.625,8.125s8.625,3.25,11,4.125s4.5,3.75,13.125,3.75s10.966-2.787,13.25-3.25s8.125-1.125,8.5-3.5S377.875,137.625,374.25,133.25z"/></a>-->
<!--<a href="add_disease.php"> <path id="frt_8" d="M307.667,244.167c15.667-0.833,41.167-2.166,45.333,3.667s15.834,6,19.667,0s38.028-6.245,50.833-4.333c4.95,0.739,9.833,0.81,14.438,0.363c10.976-1.066,20.373-5.078,25.342-10.017c-8.889,0.081-18.524-5.195-31.03-10.721C416.125,216,407.625,207.25,407,204.5s0.125-34.5,0.875-44.5c-9.208,14.333-24.041,23-45.708,23S321,163.667,318,159.667c2.167,6.333,1.5,29.833,0.75,45.333c-8.5,15.25-40,24-48,27.5c2.042,1.655,10.695,6.598,20.857,9.508C296.793,243.493,302.373,244.448,307.667,244.167z"/></a>-->
<!--<a href="add_disease.php">           <path id="frt_9" d="M486.5,295c-2.018-20.749-37.75-48.25-48.562-51.137c-4.605,0.447-9.488,0.376-14.438-0.363c-12.805-1.911-47-1.667-50.833,4.333s-15.5,5.833-19.667,0s-29.667-4.5-45.333-3.667c-5.294,0.281-10.873-0.674-16.059-2.159c-8.004,3.48-46.033,26.426-52.127,58.308c-0.459,2.402-0.744,4.852-0.814,7.351c-1,35.667,0.003,72.11-0.165,85.722c0.383-0.096,9.666,25.111,12.166,30.778S255.75,442,259.25,448.75C267.5,456.5,306,474,332.5,467s36.5-6.244,65,0.128s52.668-2.794,73.084-27.211c1.25-3.25,4.75-11.75,5.333-15s2.667-6.999,4.084-9.749s7.455-21.675,8.005-21.176C488.678,380.65,487.667,307.001,486.5,295z"/></a>-->
<!--<a href="add_disease.php"><path id="frt_10" d="M397.5,467.128C369,460.756,359,460,332.5,467s-65-10.5-73.25-18.25c3.5,6.75,2,12,3.75,17.75s5,21.334,0.5,41.501s-1.667,35.666-0.5,40.166c0.785,3.029,2.326,5.001,1.419,8.813C276,568.5,294.834,591.5,364.917,591.5s86.417-20.498,98.75-33.499c-1.666-4.5-0.501-12,2.499-21.167s-3.499-44.667-3.833-52.833s2.501-21.5,2.751-27.584s4.25-13.25,5.5-16.5C450.168,464.334,426,473.5,397.5,467.128z"/></a>-->
<!--<a href="add_disease.php"><path id="frt_11" d="M364.917,591.5c-70.083,0-88.917-23-100.498-34.52c-0.44,1.852-1.458,4.137-3.419,7.188c-2.708,4.214-5.009,15.491-6.673,27.332c10.34,9.027,56.21,47.939,84.084,82.636c8.255-3.802,35.957-5.104,49.606-0.453c28.214-33.03,74.964-71.046,85.649-79.515c-1-13.666-8.334-31.667-10-36.167C451.334,571.002,435,591.5,364.917,591.5z"/></a>-->
<!--<a href="add_disease.php"><path id="frt_12" d="M338.412,674.136c7.636,9.505,13.921,18.693,17.755,26.864c1-2.167,2.75-2.833,6.833-3.167s5.75,0.834,6.917,1.584c3.8-7.69,10.229-16.519,18.101-25.734C374.368,669.031,346.667,670.334,338.412,674.136z"/></a>-->
<!--<a href="add_disease.php"> <path id="frt_13" d="M239.48,300.316c6.094-31.882,44.123-54.828,52.127-58.308c-10.162-2.91-18.816-7.853-20.857-9.508c-8,3.5-15.5,2-26.75,4.25S202.5,250,190.5,274.5s-9.5,57-9.25,65.75c0.034,1.202,0.012,2.258-0.058,3.222C194.058,328.083,224.9,324.345,239.48,300.316z"/></a>-->
<!--<a href="add_disease.php"> <path id="frt_14" d="M486.5,295c13.5,30.001,46.022,30.211,58.595,48.439c-0.768-3.438-1.004-7.947-0.345-14.439c1.931-19.007-4.875-52.125-17.875-68.5s-53.125-26.75-63.595-26.654c-4.969,4.939-14.366,8.951-25.342,10.017C448.75,246.75,484.482,274.251,486.5,295z"/></a>-->
<!--<a href="add_disease.php"> <path id="frt_15" d="M238.667,307.667c0.07-2.499,0.354-4.949,0.814-7.351c-14.58,24.029-45.423,27.768-58.288,43.156c-0.437,6.049-2.914,8.093-7.442,14.778C168.5,366,158.5,397.5,155,409.5c-0.507,1.738-0.896,3.229-1.221,4.551c-1.413,17.735,10.718,25.876,24.421,31.618c11.394,4.774,24.501,8.306,33.45,1.543c0.711-1.544,1.634-3.368,2.85-5.712c3.5-6.75,23.363-47.953,24.001-48.111C238.669,379.777,237.667,343.334,238.667,307.667z"/></a>-->
<!--<a href="add_disease.php"> <path id="frt_16" d="M549.573,445.669c14.284-5.985,25.869-14.57,23.177-33.919c-1.625-11.25-17.875-51.25-22-57.25c-2.265-3.294-4.53-6.027-5.655-11.061C532.522,325.211,500,325.001,486.5,295c1.167,12.001,2.178,85.65,1.506,98.992c0.108,0.098,20.827,42.675,23.494,48.175C520.012,455.281,536.009,451.353,549.573,445.669z"/></a>-->
<!--<a href="add_disease.php"> <path id="frt_17" d="M178.2,445.669c-13.704-5.742-25.834-13.883-24.421-31.618c-1.917,7.803-1.51,9.506-8.779,18.699c-5.907,7.47-15.794,29.063-22.538,48.927c15.882-28.244,68.495,4.695,75.547,19.871c6.154-16.332,11.13-43.69,11.49-47.172c0.245-2.366,0.814-4.26,2.15-7.163C202.702,453.975,189.594,450.443,178.2,445.669z"/></a>-->
<!--<a href="add_disease.php"><path id="frt_18" d="M606,485.25c-2.028-7.858-4.954-16.438-9.03-24.074c-4.97-9.31-16.414-30.066-17.72-32.176c-3.25-5.25-5.336-9.194-6.5-17.25c2.692,19.349-8.893,27.934-23.177,33.919c-13.564,5.684-29.562,9.612-38.073-3.502c2.667,5.5,7,11.333,7,17.333c0,1.363,1.692,13.781,4.385,25.354c2.187,9.396,5.372,18.235,6.115,20.146C527.5,492,591.5,448,606,485.25z"/></a>-->
<!--<a href="add_disease.php"><path id="frt_19" d="M122.462,481.677c-2.96,8.722-5.318,17.111-6.462,23.823c-2.028,11.896-8.779,39.212-16.707,62.487c-1.735,5.094-3.563,9.992-5.337,14.495c1.722,9.015,32.508,23.476,42.632,18.606c1.457-2.714,2.764-5.01,3.745-6.587c4.667-7.5,11.917-19.251,24.917-35.251s25.5-39.75,32-55.75c0.255-0.629,0.508-1.285,0.76-1.953C190.958,486.372,138.345,453.433,122.462,481.677z"/></a>-->
<!--<a href="add_disease.php"> <path id="frt_20" d="M632.833,581.061c-2.89-7.644-5.897-16.096-8.083-21.561c-4-10-12.75-51-18.75-74.25C591.5,448,527.5,492,529,505c7,18,35.75,60.25,40.375,65.875s16.49,23.007,19.5,28.25C595.414,609.279,634.667,590.667,632.833,581.061z"/></a>-->
<!--<a href="add_disease.php"> <path id="frt_21" d="M93.956,582.482c-5.112,12.975-9.774,22.651-10.456,24.143c-0.886,1.939-1.456,3.337-2.977,4.62c9.057,0.416,28.988,8.686,43.015,19.44c2.127-7.809,8.37-20.88,13.05-29.598C126.464,605.958,95.678,591.497,93.956,582.482z"/></a>-->
<!--<a href="add_disease.php"> <path id="frt_22" d="M648.75,611.25c-8.5-4-5.75-8.25-9.5-15c-1.7-3.061-4.019-8.847-6.417-15.189c1.834,9.606-37.419,28.219-43.958,18.064c1.544,2.689,5.188,10.48,8.506,17.668c3.15,6.824,6.007,13.104,6.494,13.957C618.75,618.834,640.333,610.666,648.75,611.25z"/></a>-->
<!--<a href="add_disease.php"><path id="frt_23" d="M67.75,616.375c-13.375,3.75-33.125,20.25-37.75,23.25s-7.75,8.375-11.875,10.5s-4.125,8.625,0,10.5s9.625,0.125,13-1.5s9.042-8.457,15.5-10.5c3.788-1.198,7.625-1.5,7.625,0.125s-8.5,22.375-9.125,25.5s-3.875,13.875-5.875,21.125s-5.5,21.25-6.75,29.25s0.875,11.75,5.125,12.625s7.875-7.625,8.646-10.625s2.854-12.75,3.979-15.5s6.625-18.75,8-22s2.375-8.625,4.375-7.75s-0.375,5.875-1.75,9.75S53.75,715.875,53,719.75s-5,19.75-5.25,22.5s-1.875,8.75,2.75,10.5s7.75-1.875,9.5-5.625S65.375,729.5,67.375,721s5.75-19.5,7.125-24s2.125-8,3.875-7.875s1.5,2.5,0.75,4.75S73,714.5,72,719.5s-4.25,16.125-5.375,20.375s-1.75,9.25,2.5,10.75s6.875-1.5,8.75-4.75s7.875-21.5,9.369-27.125s4.756-18.5,6.131-22.375s2.5-5.625,3.625-5.5s0.25,2.625-1.125,7s-5.375,18.5-7.125,25s-2.25,9.625,0,12s7.083-0.541,8.25-2.541s3-11,5.667-16.333c1.676-3.352,3.669-11.246,6.53-19.381c1.691-4.808,4.336-9.699,5.636-13.786c3.5-11,4.333-18.833,7-28.5s0.167-11.667,1-20.167c0.096-0.975,0.344-2.156,0.705-3.481c-14.027-10.755-33.958-19.024-43.015-19.44C78.612,612.857,75.198,614.287,67.75,616.375z"/></a>-->
<!--<a href="add_disease.php"> <path id="frt_24" d="M702.25,641.25c-2.75-3.75-17.5-11.5-21.75-14.5c-2.125-1.5-7.938-4.375-14.281-7.375S653,613.25,648.75,611.25c-8.417-0.584-30,7.584-44.875,19.5c1,1.75-0.875,7.125,0.125,16.25s4.125,23.25,6.375,32.125s7,18.375,8.5,22.875s9.403,29.364,12.625,32c2.75,2.25,7.5,0.75,8.25-2.75s-1.625-10.875-2.5-14.125s-5.625-19.25-6.5-21.75s-2-5.125-0.25-5.125s2.125,2.75,3.25,5.625s5.875,19.5,6.875,24.125s4.5,17,6.25,21.75s5,10,9,9.75s4.875-4.75,5.125-8.375s-5.875-23.5-6.375-27.625s-5.375-19.25-6.125-21.25s-1.375-5,0.625-5.125s2.875,5.625,3.75,8.625s9.75,31.875,10.25,35.5s2.625,14.5,6,17.75c2.744,2.643,5.625,3.875,8.625,0.875s2.25-10,0.875-15.25s-4.625-21.125-5.5-25s-6.375-20.875-7.25-24s-2.125-5.375-1.125-5.75s2.25,1.125,3.5,5.25s6.625,20.5,8.375,25.5s1.5,11.625,4.125,17.375s7,7.625,10.625,7.125s4.277-7.391,4.375-10.125s-4.75-20.5-6.25-27.375s-5.25-16.625-6.5-23s-7.375-23.375-8.625-26s-0.625-4.75,2.5-3.875s9.25,2.625,13,7.625s10.875,6.75,13.375,7s8.5,0.375,9.25-6.375S705,645,702.25,641.25z"/></a>-->
<!--<a href="add_disease.php"> <path id="frt_25" d="M254.327,591.5c-2.021,14.389-3.102,29.611-2.827,34c0.5,8-6.5,46-11.5,70c-3.981,19.107-12.131,56.915-14.375,92.478c-0.575,9.105,0.172,18.063,0.375,26.522c0.845,35.062,9.541,55.489,16.139,69.427c35.654,13.2,53.799,56.767,88.484,34.358c2.478-11.204,8.03-39.965,9.627-52.285c1.75-13.5,10.083-66.333,11.815-88.167s1.269-38.833,0.435-43.166s-0.167-12.667-0.417-21.334s3.083-10.166,4.083-12.333c-3.834-8.171-10.12-17.359-17.755-26.864C310.538,639.439,264.667,600.527,254.327,591.5z"/></a>-->
<!--<a href="add_disease.php"> <path id="frt_26" d="M388.018,673.683c-7.872,9.216-14.301,18.044-18.101,25.734c1.167,0.75,3.083,5.083,4.333,8.083s1,20.75-0.25,31.5s1.5,59.75,3.75,71s8.417,55.334,10.084,67.001s5.166,31.5,7.166,39.833c36.334,25.833,52.479-20.023,89.334-33.168c5.667-10,13.999-27.333,15.999-52.333c0.874-10.926,1.603-27.168,0.824-43.078c-1.002-20.493-3.844-40.436-5.157-47.754c-2.333-13-14.834-82.834-17-92.667s-4.333-40-5.333-53.666C462.981,602.637,416.231,640.652,388.018,673.683z"/></a>-->
<!--<a href="add_disease.php"> <path id="frt_27" d="M242.139,883.927c1.212,2.56,2.353,4.901,3.361,7.073c6.5,14,6,37.5,6.5,61c0.078,3.657,0.262,7.679,0.348,11.921c10.591,44.449,51.024,21.223,68.904,3.938c0.325-1.35,0.929-2.658,1.373-3.483c0.875-1.625,2.125-10.625,3.375-16.625s2-18.5,4-26.75c0.175-0.721,0.386-1.643,0.623-2.715C295.938,940.693,277.793,897.127,242.139,883.927z"/></a>-->
<!--<a href="add_disease.php"> <path id="frt_28" d="M395,916.834c2,8.333,4.333,14.167,4.333,24s4,22.167,5.167,25c17.417,18.167,61,46.833,69.25-8.834c0-11.5,3.25-39.334,3.584-50.334s1.333-13,7-23C447.479,896.811,431.334,942.667,395,916.834z"/></a>-->
<!--<a href="add_disease.php"><path id="frt_29" d="M252.348,963.921c0.085,4.202,0.072,8.622-0.239,13.122c-1.393,20.15-4.799,41.913-4.109,52.957c1,16,4.5,62,7.5,83s6.875,83,7.125,87.5c0.06,1.082,0.008,2.26-0.107,3.478c6.992-11.484,36.463-9.869,44.754-6.101c-1.079-3.858-2.297-10.522-2.438-15.043c-0.167-5.333,7.5-47.167,8.333-58.333s3.667-29.5,4.333-33.333s5.75-17.168,9.5-25.918s3.5-20,2.5-27.25s-3.75-45.75-4.5-51.375s-2.25-13.125-3.5-15.125c-0.615-0.984-0.563-2.333-0.248-3.642C303.372,985.144,262.939,1008.37,252.348,963.921z"/></a>-->
<!--<a href="add_disease.php"><path id="frt_30" d="M404.5,965.834c1.167,2.833-1.25,16.416-4.25,33.916s-4.083,48.751-3.083,56.751s9.667,28.833,11.833,35s0.667,8.833,2,20.833s7.167,47.334,9,59s1.5,21-0.667,27.167C426,1194,462,1191.5,465.5,1207c-0.75-4.25-1.75-10-1-22.25s5-60.25,8.25-87.75s6.75-82,4.5-96.5s-3.5-32-3.5-43.5C465.5,1012.667,421.917,984.001,404.5,965.834z"/></a>-->
<!--<a href="add_disease.php"> <path id="frt_31" d="M262.518,1203.978c-0.363,3.847-1.388,8.108-1.768,11.147c-0.5,4,2.125,8.625,1.375,15.875c-0.034,0.332-0.091,0.67-0.146,1.008c12.665-4.423,40.242,8.668,48.998,21.075c1.177-7.814,1.063-15.23-0.478-19.082c-1.667-4.166-2.167-7.167-0.833-12.5s-0.667-18.667-1.833-21.834c-0.178-0.482-0.368-1.097-0.562-1.79C298.981,1194.108,269.51,1192.493,262.518,1203.978z"/></a>-->
<!--<a href="add_disease.php"> <path id="frt_32" d="M419.333,1198.501c-2.167,6.167-3.166,21-2.666,22.667s0.833,9.333-1,13.499s-1.667,13.334-0.667,21.5c6-13.583,37-29.917,50-23.667c-2-5.5-2.25-5.75-1-9.25s2.25-12,1.5-16.25C462,1191.5,426,1194,419.333,1198.501z"/></a>-->
<!--<a href="add_disease.php"> <path id="frt_33" d="M261.979,1232.008c-1.15,7.047-6.68,15.393-10.854,23.742c-4.375,8.75-13,19.375-21,28.25s-10.375,26.375-10.125,29.5s3.125,5.875,6.125,5.5c0,1.125,1,2.875,4.25,2.5c0.25,2,0,6.25,8.25,5c4,4.875,7.875,4.625,10.75,1.75c5.292,6.314,10.383,6.492,15.75,5.809c4.375-0.558,11.125-7.809,12.25-10.559s2.25-3.875,5.875-6.75c1.972-1.563,3.795-4.086,5.156-8.824c1.141-3.973,1.957-10.098,2.261-12.758c0.667-5.833,0.667-10.834,4.5-21.334c8.667-3.667,14-10.333,15.5-18.833c0.113-0.642,0.215-1.28,0.311-1.918C302.221,1240.676,274.645,1227.585,261.979,1232.008z"/></a>-->
<!--<a href="add_disease.php"><path id="frt_34" d="M415,1256.167c1,8.166,12,15,15,16.5s3,4.167,3.833,7s2.834,10.667,3.834,21s6.25,15.749,8.666,17.666s2.834,3,3.667,4.667s3.417,6.083,11.167,9.75s14.999-1.167,16.749-4.75c4.5,4.5,11.084,0.416,12.25-2.084c4.916,1.416,7.834-3.25,7.917-5.166c1.583,0.334,3.584-1.082,4.25-2.582c0.833,0.334,2.5,0.666,5-3.334s-3-17.5-4.167-21.667s-9.666-14.833-16.333-21.833s-7.833-11.333-12.5-18.667S467,1238,465,1232.5C452,1226.25,421,1242.584,415,1256.167z"/></a>-->


            <!-- <rect class="go_bck go_bck_malefemale" x="587.5" y="1023.5" fill="#72B8FC" stroke="#6a6a6a" vector-effect="non-scaling-stroke" width="287" height="272"/> -->


        </svg>
    </div>
<!-- 
    <div id="bck_base">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1390px" height="1370" viewBox="0 0 1390 1370" xml:space="preserve">
            <image overflow="visible" width="750" height="1370" xlink:href="images/male2.png" ></image>

            <a href="add_deasease_head.php"> <path id="bck_1"  d="M412.806,156.076c3.058-18.988,9.442-66.107,10.527-83.743C424.666,50.667,394.333,17,362,17c-27.334,0-58.5,32-58,52.667c0.19,7.875,2,33,2.333,36.333c0.239,2.389,4.332,32.016,7.459,49.645C324,176.667,402.611,176.486,412.806,156.076z"/></a>

            <a href="add_deasease_head.php"> <path id="bck_2" d="M459.833,228c-28-9.5-48.999-27.333-49.999-29.5s0.166-30.667,1.5-34.5c0.248-0.713,0.773-3.584,1.472-7.924c-10.194,20.41-88.806,20.59-99.013-0.432c1.235,6.962,2.32,12.053,2.957,12.855c1.555,1.958,2.93,28.364,0.5,31.5c-7.805,10.073-31.475,20.792-49.208,27.5C289.75,221.5,441.908,224.22,459.833,228z"/></a>

            <a href="add_deasease_head.php"> <path id="bck_3" d="M501,353c2.836-16.7,6.264-36.969,4.097-48.71c-0.125-0.68-0.266-1.336-0.43-1.956c-3-11.333-7.667-52-44.834-74.333c-17.925-3.78-170.083-6.5-191.792-0.5c-39.458,21.5-44.542,68.75-45.542,74.5s0.5,26.25,2.25,36.75s8.25,29.583,4.625,66.375c1.125,0,1.5,3.5,1.875,6.125s4.25,16.75,9.25,23s9.25,25,13.25,32.5c4.468,5.507,41.373,10.639,83.746,11.485c9.657,0.193,19.599-1.733,29.504-1.776c9.978-0.044,19.919,1.793,29.499,1.512c39.579-1.163,72.98-6.345,77.196-11.47c2.613-5.708,6.414-14.637,7.473-18.167c1.5-5,2.666-9.167,4.833-12.667s7.833-18.083,8.666-21.083s2.167-9.417,3.334-9.5C497,389.667,498,370.667,501,353z"/></a>

            <a href="add_deasease_head.php"><path id="bck_4" d="M396.499,477.97c-9.58,0.281-19.521-1.556-29.499-1.512c-9.906,0.043-19.847,1.969-29.504,1.776c-42.373-0.846-79.277-5.978-83.746-11.485c4,7.5,6.5,19,8.5,37.75s-2.25,32-3.25,37.75s-0.227,23.88,1.25,28c1.412,3.939,3.607,9.041-0.422,15.812c6.278-9.18,30.556-16.657,56.643-16.657c29.53,0,31.03,10.279,51.53,10.279c19,0,26-10.042,51.526-10.166c25.239-0.123,43.853,7.19,48.379,16.593c-0.532-1.279-0.915-2.17-1.072-2.61c-0.834-2.333-1.166-6.167-0.333-8.167s2.667-12.833,2.833-19s-3.667-30-4.667-34.833s1.667-28.5,2.334-33.333s3-14.667,4.333-16.833c0.392-0.637,1.273-2.456,2.361-4.833C469.479,471.625,436.078,476.807,396.499,477.97z"/></a>
            <a href="add_deasease_head.php"><path id="bck_5" d="M419.526,569.518C394,569.642,387,579.684,368,579.684c-20.5,0-22-10.279-51.53-10.279c-26.087,0-50.365,7.477-56.643,16.657c-0.185,0.311-0.366,0.62-0.578,0.938c-6,9-12,51.75-11.5,64s-2.5,24-4,32.5c0,19,7.324,25.063,15.316,37.142C279.76,751.914,317.235,774.904,351.5,741c2.75-2.875,6.75-8.875,7.75-11.625s2-3.25,4.375-3.25s3.75,1.125,4.25,2.875s3.792,8.5,7.292,11.334c37.774,39.903,74.878,12.96,94.414-18.404c8.533-13.701,14.134-14.93,14.134-38.43c-1.558-8.437-3.389-18.087-4.048-21.667c-1.167-6.333-0.5-24.333-2.666-42.667c-1.622-13.732-6.051-25.594-8.521-31.664c-0.206-0.505-0.398-0.97-0.574-1.393C463.379,576.708,444.765,569.395,419.526,569.518z"/></a>
            <a href="add_deasease_head.php"> <path id="bck_6" d="M222.5,302c1-5.75,6.083-52.999,45.542-74.5c-8.126,3.074-15.006,5.307-18.542,6.25c-8.263,2.203-41.894,9.408-53.5,19.5c-17.25,15-26,35-27.5,62.75c-0.721,13.331,0,25.833,0,34.5C178.333,326.25,202.667,324.333,222.5,302z"/></a>
            <a href="add_deasease_head.php">            <path id="bck_8" d="M224.75,338.75c-1.75-10.5-3.25-31-2.25-36.75c-19.833,22.333-44.167,24.25-54,48.5c-6.833,10.667-18.25,33.75-20,44s-4.5,20-7.25,27.75c-3.98,34.526,10.693,40.75,26.143,46.43c16.538,6.08,29.232,0.639,38.288-15.131c1.1-2.171,2.2-4.311,3.152-6.215c3.5-7,16.417-34.458,17.292-37.333s2.125-4.875,3.25-4.875C233,368.333,226.5,349.25,224.75,338.75z"/></a>
            <a href="add_deasease_head.php"> <path id="bck_9" d="M560.107,468.68c14.466-5.319,29.127-11.117,27.667-40.179c-2.005-7.583-4.833-13.009-8.024-28.751c-3.706-18.282-14.001-39.975-21.24-51.583c-14.472-12.836-37.362-26.802-53.413-43.878c2.167,11.742-1.261,32.011-4.097,48.71c-3,17.667-4,36.667-2.999,52.083C499.168,405,500.75,408,502,410.75c1.086,2.39,15.767,34.99,21.069,46.274C532.186,470.092,544.849,474.29,560.107,468.68z"/></a>
            <a href="add_deasease_head.php"> <path id="bck_10" d="M167.393,468.68c-15.45-5.68-30.124-11.904-26.143-46.43c-2.75,7.75-1.75,15.25-6.5,23.5s-0.75,6.5-9.75,20c-4.221,6.332-8.992,20.141-13.178,35.472c-1.258,4.606-2.463,9.351-3.584,14.07c3.399-5.935,6.601-22.609,50.438-11c10.714,2.837,31.865,11.173,26.897,27.549c2.671-7.794,4.745-15.229,6.308-21.617c2.547-10.41,3.739-18.036,3.953-19.891c0.5-4.333,0.833-7.333,1.5-9.333s2.167-9.833,2.333-13.167c0.122-2.427,3.069-8.474,6.014-14.285C196.625,469.319,183.931,474.76,167.393,468.68z"/></a>
            <a href="add_deasease_head.php"><path id="bck_11" d="M568.824,504.292c39.135-10.364,46.681,1.813,50.268,8.767c-0.214-1.377-0.413-2.655-0.592-3.809c-2.75-17.75-17.75-47-19.5-49.75s-8.25-16.5-10.25-26.75c-0.298-1.528-0.625-2.92-0.976-4.249c1.46,29.062-13.201,34.86-27.667,40.179c-15.259,5.61-27.921,1.412-37.038-11.656c0.798,1.699,1.386,2.92,1.681,3.476c2.25,4.25,2.25,4.75,2.177,7.75s2.823,14.25,4.073,19.5c1.179,4.95,0.139,15.905,7.558,38.93C541.114,514.447,559.768,506.69,568.824,504.292z"/></a>
            <a href="add_deasease_head.php"> <path id="bck_12" d="M158.676,504.292c-43.837-11.609-47.038,5.065-50.438,11c-3.104,13.064-5.568,25.943-6.738,35.208c-2.207,17.467-8.379,42.596-11.756,56.062c-0.875,6.021,6.182,9.66,17.564,14.473c11.004,4.653,23.67,4.044,26.295,0.232c10.117-17.065,26.772-37.525,39.896-61.517c4.95-9.049,8.926-18.728,12.073-27.909C190.541,515.465,169.39,507.129,158.676,504.292z"/></a>
            <a href="add_deasease_head.php"><path id="bck_13" d="M620.191,621.035c8.857-3.745,15.074-6.784,16.994-10.783c-1.959-5.819-4.01-12.795-5.436-20.252c-3.039-15.895-9.573-57.137-12.658-76.941c-3.587-6.955-11.133-19.131-50.268-8.767c-9.056,2.398-27.71,10.155-30.267,22.388c0.45,1.397,0.928,2.833,1.442,4.32c9,26,30,55.25,45.5,79.5c2.965,4.638,5.481,8.858,7.625,12.689C599.133,625.104,611.447,624.732,620.191,621.035z"/></a>
            <a href="add_deasease_head.php"><path id="bck_14" d="M107.309,621.035c-11.382-4.813-18.439-8.452-17.564-14.473c-1.215,4.844-2.068,8.179-2.244,9.105c-0.667,3.5-4.164,10.214-6.167,18.333c-0.375,1.692-2.811,3.547-5.5,4.5C79.5,637.75,120.411,656.865,121,659c-1-4-1.25-8,7-27c1.483-3.416,3.387-6.993,5.604-10.733C130.979,625.079,118.313,625.688,107.309,621.035z"/></a>
            <a href="add_deasease_head.php"> <path id="bck_15" d="M648,637.75c-3.5-0.5-4-8.25-5.25-12.25c-0.702-2.246-3.058-7.8-5.564-15.248c-1.92,3.999-8.137,7.038-16.994,10.783c-8.745,3.698-21.058,4.07-27.066,2.155c9.067,16.197,11.432,25.37,12.375,29.144c0.527,2.109,0.643,3.571,0.461,4.91c8.146-4.652,34.231-16.276,43.574-19.125C648.977,637.944,648.459,637.815,648,637.75z"/></a>
            <a href="add_deasease_head.php"><path id="bck_16" d="M75.833,638.5c-3.168,1.123-14.167,7-17.833,8.5s-5.833,6.5-10.167,9s-8.333,6-9,8.833s-5.5,4.333-5.5,7.333s2,5.333,6.879,6s12.621-8,14.121-9.5s2.5,0.5,1.833,2.333s-5.667,15-6.833,19.834c-1.167,4.833-3.833,17-4.5,21s-3,20.999-3.333,23.999s-3.333,15,1.167,18.334s7.833-2.334,9.833-7.667s1.5-11.833,2.667-14.5s4.333-19,6.333-22.5s2.833,1.166,1.667,4.166S59.333,729.833,59.333,732s-1.833,14-2.5,18s-1.333,14,0,18.167s7.167,1.666,9-0.5s3.667-11.167,4.5-16.5s1-14.167,2.531-20S76.5,714.834,78.333,712s3.833,0.334,3.333,2.5s-2.333,9.5-4,16.333s-1.5,14.5-3,21.334S71.5,764.5,74.667,768s6.5,0.833,8.5-1.667S87.5,753,88.833,744.5s4.667-21.166,5.833-25.166c1.167-4.001,3.5-7.834,5.333-7.5c1.833,0.333-0.167,6-1,9.166s-5,20.667-5.167,26.334s2.5,7.833,5.667,6.5s4.333-6,5-8.834s2.667-8.666,3.167-12s4.167-16.166,6.167-20.334c2-4.166,2.833-9.332,6.673-27.332C124.346,667.333,122,663,121,659C120.411,656.865,79.5,637.75,75.833,638.5z"/></a>
            <a href="add_deasease_head.php"> <path id="bck_17" d="M675.668,654.333c-2.333-1-7.918-8.083-12.668-10.083c-4.127-1.738-9.761-4.982-13.464-6.132c-9.342,2.85-35.428,14.474-43.574,19.125c-0.221,1.623-0.881,3.065-1.795,5.257c-1.667,4-0.666,16.167,0.334,19.5c1,3.334,4.166,22.334,5.833,26s3,8.167,3.667,10.5s7.667,32,10.167,34.333s5.666,1.834,7-0.5s0.5-7.5,0-10.833s-1.667-9.833-2-12.5s-2.334-10.5-3.334-14.166c-1-3.667,1.334-3.668,3-1.5c1.666,2.166,3.334,8.666,4.167,11.833s3.5,16.166,4.333,20.666s2.834,17.667,5.834,20.834s5.666,3.333,8.166,1s1.167-7.333,0.834-10.167s-2.5-19.166-2.834-23s-3.833-14.334-4.666-20.5s2.666-1.834,3-0.5s4.166,14.833,4.666,18.333s3,15.667,3.5,22.667s3.667,13,4.834,14.5s6,2.167,7.5,0s1.166-5.667,1-9.333s-1.5-22.167-1.5-25.667s-4.5-19.834-5-23.5s1.333-1.834,2-0.166c0.667,1.666,4.999,19.166,5.833,22.833s1.166,7.333,1.833,12s3.833,9,6.333,10.333s5.5-1.166,6.5-3.833s-1.5-15.167-1.833-23.333s-1.5-11.334-2.167-14c-0.667-2.667-3-18.167-3.833-22.5c-0.833-4.334-6.666-19-7.666-21.834s4.166,0.5,5.666,2.833s7.5,5.5,10.5,5.333s5.667-1.667,6-5.333s-3.833-4.5-5.833-9.833C684.556,659.146,678.001,655.333,675.668,654.333z"/></a>
            <a href="add_deasease_head.php"> <path id="bck_18" d="M259.066,720.642c-7.993-12.078-15.316-18.142-15.316-37.142c-1.5,8.5-8.25,43-9.75,54s-3,14.5-7.25,46.75s-1.25,76,2.75,93.5S242.25,914,244.75,927c14.239,23.213,32.047,27.719,48.263,28.709c17.666,1.079,33.441-2.949,40.654-15.376c1.667-5.833,6-44.5,8.167-58s9.5-61.333,10.5-78.667s1-34.999,0.167-40.999s-1.625-16.292-1-21.667C317.235,774.904,279.76,751.914,259.066,720.642z"/></a>
            <a href="add_deasease_head.php"> <path id="bck_19" d="M375.167,740.334C376,746.168,375.25,750.5,374,769s3.25,73.25,6.5,86.75s7,38,8.75,56.25c1.093,11.397,3.356,23.087,5.571,32.39c8.43,9.247,24.089,12.271,39.666,11.319c15.283-0.934,32.867-4.996,46.759-24.891c0.889-5.953,1.705-9.622,2.004-10.818c0.75-3,10.75-28,13.5-41.25s4.25-43.083,5.25-58.083s-4.499-54.001-5.833-61.667s-3.833-29.666-5.166-35.833s-4.334-21.667-4.834-25.667c-0.218-1.739-1.254-7.511-2.452-14c0,23.5-5.601,24.729-14.134,38.43C450.045,753.294,412.941,780.237,375.167,740.334z"/>
            <a href="add_deasease_head.php"><path id="bck_20" d="M293.013,955.709c-16.216-0.99-34.024-5.496-48.263-28.709c2.5,13,3.25,32.25,4.25,53.5c0.655,13.917-0.084,29.658-1.164,42.445c2.574-20.91,19.106-19.136,35.64-17.488c16.633,1.658,33.267,3.272,35.69,9.876c-1.167-5.5,0.667-11.167,3-16s3.167-17.833,4-28.833s5.833-24.334,7.5-30.167C326.455,952.76,310.679,956.788,293.013,955.709z"/></a>
            <a href="add_deasease_head.php"><path id="bck_21" d="M434.486,955.709c-15.577,0.951-31.235-2.072-39.666-11.319c1.332,5.594,2.646,10.325,3.679,13.61c2.75,8.75,2.25,34.25,5.5,40.5c2.566,4.935,3.723,9.253,3.484,15.155c6.028-4.677,22.368-6.785,36.539-8.198c13.658-1.361,29.354,1.297,35.854,14.047c-1.023-13.899-1.763-29.888-1.628-46.754c0.15-18.787,1.656-32.959,2.996-41.932C467.354,950.713,449.77,954.775,434.486,955.709z"/></a>
            <a href="add_deasease_head.php"> <path id="bck_22" d="M283.476,1005.457c-16.533-1.647-33.065-3.422-35.64,17.488c-0.569,6.737-1.232,12.655-1.836,17.055c-1.75,12.75-5,46-2.5,60s8.75,70.5,9,91.75c2.411,11.598,18.52,15.432,31.624,15.948c13.165,0.52,23.325-2.338,25.624-16.146c1.52-12.183,2.896-25.104,3.086-31.552c0.333-11.333,8.333-24,12.833-37.334s0.5-46.666-1.167-65.5s-4.167-36.333-5.333-41.833C316.743,1008.729,300.109,1007.115,283.476,1005.457z"/></a>
            <a href="add_deasease_head.php"> <path id="bck_23" d="M444.023,1005.457c-14.171,1.413-30.511,3.521-36.539,8.198c-0.064,1.573-0.221,3.253-0.484,5.095c-1.25,8.75-7,65.25-7.5,84.75s7.5,36,10.5,40s3.75,15.5,4,21.75c0.127,3.173,1.801,16.722,3.811,30.928c5.639,7.736,15.869,11.903,25.566,11.521c11.76-0.464,25.932-3.604,30.46-12.624c0.124-3.28,0.257-6.378,0.413-9.074c0.75-13,4.75-46.75,7.5-74s3-44.75,1-62.25c-0.92-8.055-2-18.392-2.872-30.246C473.377,1006.754,457.682,1004.096,444.023,1005.457z"/></a>
            <a href="add_deasease_head.php"> <path id="bck_24" d="M284.124,1207.698c-13.104-0.517-29.212-4.351-31.624-15.948c0.25,21.25,4.125,51.5,4.25,58.125s-1.25,26.75-1,28.625s0.25,3.75-0.875,3.75c6.082,14.415,4.342,25.212,3.644,34.406c-0.388,5.104,0.181,9.513,1.315,14.177c10.5-13.499,47.957-20.15,48.229-7.491c-0.177-6.154-1.244-13.505-2.062-20.509c-1.5-12.834,1.833-27.333,2.167-31.167s-4.5-18.5-5.833-25.5s2.167-19.166,4.167-31.333c0.862-5.245,2.096-14.051,3.247-23.281C307.448,1205.36,297.289,1208.218,284.124,1207.698z"/></a>
            <a href="add_deasease_head.php"><path id="bck_25" d="M443.377,1207.698c-9.697,0.383-19.927-3.784-25.566-11.521c1.949,13.775,4.213,28.17,5.69,34.323c3,12.5,1,17.833-1.833,26.667s-2.334,14.333-1.334,21.999s0.667,17.5,0.5,24.5c-0.097,4.075-2.111,11.312-2.63,18.029c5.397-8.651,37.767-2.677,48.526,9.038c0.54-0.488,1.031-0.948,1.458-1.357c0.771-4.053,1.114-8.488,0.792-12.721c-0.999-13.15-1.991-21.145,2.987-33.769c-0.096-0.073-0.193-0.146-0.301-0.221C469.5,1281.167,470,1270,470,1261s1.25-24.25,2.25-32c0.792-6.143,1.114-21.391,1.587-33.926C469.309,1204.095,455.137,1207.234,443.377,1207.698z"/></a>
            <a href="add_deasease_head.php"> <path id="bck_26" d="M259.833,1330.833C262.167,1333,272.5,1340,283,1342.512s19.167-1.512,23-7.179c1.741-2.574,2.21-6.868,2.062-11.991C307.791,1310.683,270.333,1317.334,259.833,1330.833z"/></a>
            <a href="add_deasease_head.php"> <path id="bck_27" d="M418.204,1321.696c-0.372,4.823,0.025,9.38,2.463,12.305c6.573,7.889,13.334,10.333,26.667,7.166c9.396-2.231,15.716-7.104,19.396-10.433C455.971,1319.02,423.602,1313.045,418.204,1321.696z"/></a>
            <a href="add_deasease_head.php"><path id="bck_28" d="M258.519,1316.656c0.699-9.194,2.438-19.991-3.644-34.406c-1.125,0-2.875,1.375-3.125,2.625s-2.375,0.625-4,0.125s-6.625,4.5-6.75,5.125s-0.25,1.25-2.25,1.125s-5.75,3.125-5.875,4.125s-1.208,1.792-2.875,1.958s-4.167,3-5.167,5.334s0.833,4.833,1.667,9.166s6.667,9.333,18.833,12.167s12.167,4.666,14.5,6.833C258.699,1326.169,258.13,1321.761,258.519,1316.656z"/></a>
            <a href="add_deasease_head.php"> <path id="bck_29" d="M468.981,1316.656c0.321,4.232-0.021,8.668-0.792,12.721c0.792-0.758,1.396-1.358,1.812-1.71c2.167-1.834,16-5.666,21.5-7.5s7.333-7.166,7.666-10.166s0.5-2.667,1.834-5.834s-5.167-7.5-6-7.5s-2,0-2-1.5s-3.667-4.333-5.167-4.333s-3-1-3.5-2.5s-6.667-3.833-8.833-3.5c-2.058,0.316-1.715-0.571-3.533-1.946C466.991,1295.512,467.982,1303.506,468.981,1316.656z"/></a>
           




            <rect class="go_frt go_frt_malefemale" x="587.5" y="1023.5" fill="#72B8FC" stroke="#6a6a6a" vector-effect="non-scaling-stroke" width="287" height="272"/>

            <g id="bck_spots"></g>
        </svg> -->
    </div>
</div>
<div class="clear"></div>
 
</div>
</div>




      </div>
    </div><!--preview-->

</div>
</div>




  <div class="scroll-top"><span class="scroll-top-icon"></span></div>

<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title">Modal Window Example!</h3>
      </div> 
      <div class="modal-body">
        <p>You can open a modal window like this one instead of opening a link.</p>
        <p class="alert alert-success">You can write as much information as you want in the modal window including <strong>clickable links</strong> and large images.</p>
        <p>Please read the description for more information.</p>
      </div>
    </div>
  </div> 
</div><!-- end mymodal -->

  <span id="organs-tip"></span>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!-- <script src="https://www.humananatomyillustrations.com/assets/js/bootstrap.min.js"></script> -->
<script src="js/malefemale.min.js"></script>
<script src="js/jquery/jquery-2.2.4.js"></script>


<script src="js/malefemale.min.js"></script>
  
  <!--scroll-top script-->
<script>
  $(function(){$(document).on( 'scroll', function(){ if ($(window).scrollTop() > 600) {$('.scroll-top').addClass('show');} else {$('.scroll-top').removeClass('show');}});$('.scroll-top').on('click', scrollToTop);});function scrollToTop() {verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;element = $('body');offset = element.offset();offsetTop = offset.top;$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');}
</script>
<script src="js/jquery-2.2.4.min.js"></script>

<script src="js/main.js"></script>
<script>
    $(function($) {
        $(".js-states").select2();
        $(".js-states-limit").select2({
            maximumSelectionLength: 2
        });
        $(".js-states-hide").select2({
            minimumResultsForSearch: Infinity
        });
    });
</script>
</body>

    <!-- <div class="w3-container w3-red">
        <h5 styl=""Footer</h5>
    </div> -->
    </html>
<?PHP } ?>