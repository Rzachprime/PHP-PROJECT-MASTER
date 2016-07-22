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
           <style type="text/css">
               body {
    background-image: url(images/images/simple.png);
    background-color: bisque;
    background-position: center;
    background-attachment: fixed;
    
            color: black;
               }
               
        </style>
    <div style="width: 90%; margin: auto; padding 10px">    
    <div id="main">
        <div class="header">
            <h1>Richard's Web Project</h1>
            <h2>A PHP site for CodeLouisville</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">Hi My name is Richard</h2>
            <p>
                I like Pokemon Go. I decided to make a database to track my Pokemon collection.
            </p>

            <h2 class="content-subhead">Website map</h2>
            <p>
                This is the home page. The Pokedex page has input for updating pokemon in the database and it shows the table of pokemon I have collected. 
            </p>

            <h2 class="content-subhead">This website is responsive</h2>
            <p>
                You can test this websites responsiveness by altering the size of your browser window or by opening it on a portable device such as a cellphone or tablet pc.
            </p>
        </div>
    </div>
        </div>



</body>
</html>
