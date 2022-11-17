<!DOCTYPE html>
<!--Configuratie HTML, CSS talen-->
<html lang="nl">
<!--Importeren van Quicksand lettertype-->
<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>

<body>
<!--Stijlen van navigatie balk-->
<style>
/* CSS Importeer bestand via stylesheet */

    .navigatiePlaatsing {
        font-family: "Quicksand";
        margin-right: 5%;
    }

    .navigatieDeelHome {
        background-color: yellowgreen;
        color: red;
        border-radius: 20px;
        padding: 10px;
    }

    .navigatieDeelBurger {
        background-color: orange;
        color: cyan;
        padding: 10px;
        border-radius: 20px;
    }

    .navigatieDeelPolitie {
        background-color: blue;
        color: cyan;
        padding: 10px;
        border-radius: 20px;
    }

    .navigatieDeelAmbulance {
        background-color: yellow;
        color: orangered;
        padding: 10px;
        border-radius: 20px;
    }

    .navigatieDeelBrandweer {
        background-color: red;
        color: cyan;
        padding: 10px;
        border-radius: 20px;
    }

    .navigatieDeelKMAR {
        background-color: darkblue;
        color: cyan;
        padding: 10px;
        border-radius: 20px;
    }

    .navigatieDeelUM {
        background-color: gray;
        color: cyan;
        padding: 10px;
        border-radius: 20px;
    }

    .navigatieDeelRB {
        background-color: yellow;
        color: darkgreen;
        padding: 10px;
        border-radius: 20px;
    }

    .navigatieDeelOverig {
        background-color: palevioletred;
        color: cyan;
        padding: 10px;
        border-radius: 20px;
    }

    .navigatieDeelContact {
        background-color: blue;
        color: cyan;
        padding: 10px;
        border-radius: 20px;
    }

    .div1 {
        background: #800000;
        padding-top: 25px;
        padding-bottom: 25px;
        border-radius: 20px;
        text-align: center;
    }

    .fotonavigatiebalk {
        margin-top: 25px;
    }
</style>

<!--Plaatsen en configureren van navigatie balk-->
<div class="div1">
    <nav>
        <!--Start knop-->
        <a class="navigatieDeelHome navigatiePlaatsing" href="/">Start</a>

        <a class="navigatieDeelBurger navigatiePlaatsing" href="/">Burger</a>

        <!--Prioriteit hulpdiensten-->
        <a class="navigatieDeelPolitie navigatiePlaatsing" href="/">Politie</a>
        <a class="navigatieDeelAmbulance navigatiePlaatsing" href="/">Ambulance</a>
        <a class="navigatieDeelBrandweer navigatiePlaatsing" href="/">Brandweer</a>

        <!--Prioriteit hulpdiensten + overig-->
        <a class="navigatieDeelKMAR navigatiePlaatsing" href="/">KMar</a>
        <a class="navigatieDeelUM navigatiePlaatsing" href="/">Unmarked</a>
        <a class="navigatieDeelRB navigatiePlaatsing" href="/">Reddingsbrigade</a>

        <a class="navigatieDeelOverig navigatiePlaatsing" href="/">Overig</a>

        <!--Contact knop-->
        <a class="navigatieDeelContact navigatiePlaatsing" href="/" >Contact</a>
    </nav>
    <img class="fotonavigatiebalk" src="https://media.discordapp.net/attachments/1038098714981585037/1040697174587088947/VORTA_TUMBNAIL.png?width=1202&height=676" alt="geenactie">
</div>

<!--Einde navigatie balk-->


</body>
</html>