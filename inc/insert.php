<?php

// Load the form helper class
require 'inc/FormHelper.php';


// Connect to the database
try {
    $db = new PDO('mysql:host=localhost;dbname=pokemon;port=8889', "root", "root");
} catch (PDOException $e) {
    print "Can't connect: " . $e->getMessage();
    exit();
}
// Set up exceptions on DB errors
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// The main page logic:
// - If the form is submitted, validate and then submit or show form 
// - If it's not submitted, display the form fields
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // If validate_form() returns errors, pass them to show_form()
    list($errors, $input) = validate_form();
    if ($errors) {
        show_form($errors);
    } else {
        // The submitted data is valid, so process it then load refresh page with javascript which leads back here..
        process_form($input); ?>

        <script type="text/javascript">
            window.location = "refresh.php";
        </script>

        <?php
    }
} else {
    // The form wasn't submitted, show form
     show_form();
}

function show_form($errors = array()) {
    // Set default to blank but it should be Pikachu!!!
    $defaults = array('name' => '');

    // Set up the $form object with default stuff
    $form = new FormHelper($defaults);

    //HTML and form display is included in a separate file 
    include 'inc/form.php';
}

function validate_form() {
    $input = array();
    $errors = array();

    // Name is required
    $input['name'] = trim($_POST['name'] ?? '');
    if (! strlen($input['name'])) {
        $errors[] = 'Please enter the name of the Pokemon.';
    }

    // Type must be included
    $input['type'] = trim($_POST['type'] ?? '');
    if (! strlen($input['type'])) {
        $errors[] = 'Please enter the Type of the Pokemon.';
    }
    //CP has to be included
    $input['cp'] = trim($_POST['cp'] ?? '');
    if (! strlen($input['cp'])) {
        $errors[] = 'Please enter the CP of the Pokemon.';
    }

    

    return array($errors, $input);
}

function process_form($input) {
    // use the global variable $db in function
    global $db;


    // Insert the new pokemon into the table
    try {
        $stmt = $db->prepare('INSERT INTO pokedex (name, type, cp)
                              VALUES (?,?,?)');
        $stmt->execute(array($input['name'], $input['type'],$input['cp']));
        // Tell the user that we added a pokemon to the pokedex
         print 'Added ' . htmlentities($input['name']) . ' to the database.';
        
    } catch (PDOException $e) {
        print "Couldn't add your pokemon to the database:" . $e->getMessage();
    }
    
}

?>


