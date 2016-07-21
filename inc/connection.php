<?php
try {
$db = new PDO("mysql:host=localhost;dbname=tracking;port=8889","root","root");
} catch (Exception $e) {
echo "unable to connect to database";
    exit;
}

try {
    $errorslist = $db->query("SELECT * FROM issues");
    } catch (Exception $e) {
    echo '<p>"data not loaded"</p>';
    exit;
}

var_dump($errorslist->fetchALL(PDO::FETCH_ASSOC));

?>

