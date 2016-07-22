<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="Pokedex" content="Main page which describes the purpose and general structure">

    <title>Pokemon Database Project</title>

    


<link rel="stylesheet" href="styles/pure.php" type="text/css">

<link rel="stylesheet" href="styles/pokestyle.php" type="text/css">

</head>
    <style>
.custom-wrapper {
    background-color: skyblue;
    margin-bottom: 2em;
    -webkit-font-smoothing: antialiased;
    height: 10em;
    overflow:hidden;
    -webkit-transition: height 0.5s;
    -moz-transition: height 0.5s;
    -ms-transition: height 0.5s;
    transition: height 0.5s;
}

.custom-wrapper.open {
    height: 14em;
}

.custom-menu-3 {
    text-align: left;
}

.custom-toggle {
    width: 34px;
    height: 34px;
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    display: none;
}

.custom-toggle .bar {
    background-color: #777;
    display: block;
    width: 20px;
    height: 2px;
    border-radius: 100px;
    position: absolute;
    top: 18px;
    right: 7px;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -ms-transition: all 0.5s;
    transition: all 0.5s;
}

.custom-toggle .bar:first-child {
    -webkit-transform: translateY(-6px);
    -moz-transform: translateY(-6px);
    -ms-transform: translateY(-6px);
    transform: translateY(-6px);
}

.custom-toggle.x .bar {
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

.custom-toggle.x .bar:first-child {
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    transform: rotate(-45deg);
}

@media (max-width: 47.999em) {

    .custom-menu-3 {
        text-align: left;
    }

    .custom-toggle {
        display: block;
    }

}
        body {
            background-image: url(images/images/simple.png);
            color: black;
            
        }

</style>


<div class="custom-wrapper pure-g">
    <div class="pure-u-1 pure-u-md-1-3">
        <div class="pure-menu">
            <a href="#" class="pure-menu-heading custom-brand">Pokedex</a>
            <a href="#" class="custom-toggle" id="toggle"><s class="bar"></s><s class="bar"></s></a>
        </div>
    </div>
    <div class="pure-u-1 pure-u-md-1-3">
        <div class="pure-menu pure-menu-horizontal custom-can-transform">
            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="index.php" class="pure-menu-link">Home</a></li>
                <li class="pure-menu-item"><a href="PokemonTracking.php" class="pure-menu-link">Pokedex</a></li>
                
            </ul>
        </div>
    </div>
    
</div>
<script>
(function (window, document) {
var menu = document.getElementById('menu'),
    WINDOW_CHANGE_EVENT = ('onorientationchange' in window) ? 'orientationchange':'resize';

function toggleHorizontal() {
    [].forEach.call(
        document.getElementById('menu').querySelectorAll('.custom-can-transform'),
        function(el){
            el.classList.toggle('pure-menu-horizontal');
        }
    );
};

function toggleMenu() {
    // set timeout so that the panel has a chance to roll up
    // before the menu switches states
    if (menu.classList.contains('open')) {
        setTimeout(toggleHorizontal, 500);
    }
    else {
        toggleHorizontal();
    }
    menu.classList.toggle('open');
    document.getElementById('toggle').classList.toggle('x');
};

function closeMenu() {
    if (menu.classList.contains('open')) {
        toggleMenu();
    }
}

document.getElementById('toggle').addEventListener('click', function (e) {
    toggleMenu();
});

window.addEventListener(WINDOW_CHANGE_EVENT, closeMenu);
})(this, this.document);

</script>
  
    
    <body>
  
    
    
    
    
    
    
<div style="width: 90%; margin: auto; padding 10px">    
<h2 class="content-subhead">Pokemon Database</h2>
<p>This is a Pokemon database to track the combat power of Pokemon that you have collected in Pokemon Go.</p>
<p>You enter the name, type, and cp of your captured pokemon in the Pokedex by filling out the following form and then pressing the Update Pokedex button.</p>
    </div>
    <div style="width: 33%; margin: auto; padding 10px">
      </body>
<?php include('inc/insert.php'); ?>
      
    </div>
    <div style="width: 90%; margin: auto; padding 10px">
 <h2 class="content-subhead">Pokedex</h2>
<p>This is a Pokemon Database called the Pokedex. You can see all of your Pokemon listed in the order you submitted them.</p>
    </div>
<style type = "text/css"> table, th, td {border: 2px solid black}; </style>
 
 <body>
<div style="height: 33%; width: 90%">
<style type = "text/css"> table {width: 75%}; </style>
<style type = "text/css"> table {margin: 0 auto}; </style>
    <p>
        <?php include('inc/table.php'); ?>
    
    </p>
    
    
    
    
    
    </div>



</body>





