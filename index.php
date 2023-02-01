<?php
include "header.php";
?>
<form action="search.php" method="POST">

<style>
    body {
      background-image: url('background.jpeg');
      background-size: cover;
      background-blur: 10px;
    }
    .search-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    
    .search-box {
      display: flex;
      align-items: center;
      width: 50%;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 10px;
      box-shadow: 2px 2px 10px #ccc;
      margin-left:20px;
    }
    
    .search-input {
      border: none;
      border-radius: 5px 0 0 5px;
      padding: 10px;
      width: 90%;
      font-size: 18px;
    }
    
    .search-button {
      border: none;
      border-radius: 5px 5px 5px 5px;
      background-color: #4CAF50;
      color: #fff;
      margin-left:10px ;
      padding: 10px 20px ;
      font-size: 18px;
      cursor: pointer;
    }
    h1{
      font-size: 100px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-weight: 700;
    
    color:white;
    text-shadow:20px  20px rgba(0,0,0,0.7);
     }
     .box{
      margin:0px 0px 0px 0px;
      background-color:rgba(185, 0, 0,0.7);
      padding-right:0px;
      border:none;
      border-radius:20px 20px 20px 20px;
      
      
     }
  </style>
</head>
<body >
 
  <div class="search-container">
 <div class="box"><h1>M A R V E L</h1></div>
    <div class="search-box">
      <input type="text" name="search" class="search-input" placeholder="Search...">
      <button class="search-button" name="Search">Go</button>
    </div>
  </div>
<!-- </body> -->
    <!-- <input type ="text" name="search" class="search" placeholder="Search">
    <button type="submit" name="Search" calss="Search">Search</button>
</form>
<h1>Front page</h1>
<h2>All articles</h2>
<style>
    /* Add your CSS styling here */
    .search{
      display: flex;
      justify-content: center;
      align-items: center;
      /* height: 100vh; */
    /* } */
    
    /* .search{ */
      display: flex;
      align-items: center;
      width: 50%;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 10px;
      box-shadow: 2px 2px 10px #ccc;
    }
    
    /* .search-input {
      border: none;
      border-radius: 5px 0 0 5px;
      padding: 10px;
      width: 60%;
      font-size: 18px;
    } */
    
    .Search{
      border: none;
      border-radius: 0 5px 5px 0;
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      font-size: 18px;
      cursor: pointer;
    }
  </style> -->

    </body>
</html>