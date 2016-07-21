<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="Home Page" content="Main page which describes the purpose and general structure">

    <title>Richard's Portfolio</title>







    

    


<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<link rel="stylesheet" href="css/normailize.css">
<link rel="stylesheet" href="css/style.css">
    <script src="js/ui.js"></script>







  
       <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/side-menu.css">
    <!--<![endif]-->
  


    

    

</head>
<body>
    






<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="#">ERRORS</a>

            <ul class="pure-menu-list">
                 <li class="pure-menu-item"><a href="index.html" class="pure-menu-link">Home</a></li>
                
            </ul>
        </div>
    </div> <!-- -->

    <div id="main">
        <div class="header">
            <h1>Error Tracking Page</h1>
            <h2>PHP & MYSQL error tracking project</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">Submit Error</h2>
           <?php include('inc/form.php'); ?>

            <h2 class="content-subhead">database connection</h2>
                <?php // include('inc/data.php'); ?>
                <?php // include('inc/connection.php'); ?>


            <h2 class="content-subhead">Database Table</h2>
            <style type = "text/css">
  table, th, td {border: 1px solid black};
 </style>
 </head>
 <body>
 <p>
 <?php
  try {
  $con= new PDO('mysql:host=localhost;dbname=pokemon;port=8889', "root", "root");
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $query = "SELECT * FROM pokedex";
 
  //first pass just gets the column names
  print "<table> \n";
  $result = $con->query($query);
  //return only the first row (we only need field names)
  $row = $result->fetch(PDO::FETCH_ASSOC);
  print " <tr> \n";
  foreach ($row as $field => $value){
   print " <th>$field</th> \n";
  } // end foreach
  print " </tr> \n";
  //second query gets the data
  $data = $con->query($query);
  $data->setFetchMode(PDO::FETCH_ASSOC);
  foreach($data as $row){
   print " <tr> \n";
   foreach ($row as $name=>$value){
   print " <td>$value</td> \n";
   } // end field loop
   print " </tr> \n";
  } // end record loop
  print "</table> \n";
  } catch(PDOException $e) {
   echo 'ERROR: ' . $e->getMessage();
  } // end try
 ?>
  
       
        </div>
    </div>
</div>








</body>
</html>
  <?php include ('inc/insert.php'); ?>
