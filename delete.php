<html>


<?php
$db= new PDO('mysql:host=localhost;dbname=pokemon;port=8889', "root", "root");
$id= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = pokeslayer($_POST["id"]);
    // processes input into database
   
    try {
        $stmt = $db->prepare('DELETE FROM pokedex WHERE id= 
                              VALUES (:id)');
        $stmt->bindParam(':id', $id);
    
        $stmt->execute();
        // tell the user they have been entered in the database
        header('location: PokemonTracking.php');
        
    } catch (PDOException $e) {
        print "Couldn't delete the pokemon from the database:" . $e->getMessage();
    }
    
  function pokeslayer($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

    
    
    ?>
<body>

<h2>Delete Pokemon</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  id: <input type="text" name="id">
  <br>
    <input type="submit" name="submit" value="Submit">  
</form>
    
</body> 
</html>