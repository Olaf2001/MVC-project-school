<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
<section class="travelJourney">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-white">Adres & Route</h2>
                <p class="text-white">
                    Dit wordt de beste route die er bestaat. Ga eerst naar links daarna rechts. Geef volle gas
                    rechtdoor, trek aan de handrem en als er geen andere auto staat geparkeerd, staat u mooi
                    netjes in het parkeervak.
                </p>
                <a target="_blank" href="https://www.google.nl/maps/dir//Happyland,+3400+Klosterneuburg,+Oostenrijk/@48.3095117,16.3272682,17z/data=!4m17!1m7!3m6!1s0x476d0f035c8a624d:0x3300bbdf9986a3ed!2sHappyland!3b1!8m2!3d48.3094917!4d16.3293934!4m8!1m0!1m5!1m1!1s0x476d0f035c8a624d:0x3300bbdf9986a3ed!2m2!1d16.3293935!2d48.3094917!3e3">
                    <button class="btn btn-light">Plan uw route</button>
                </a>
                <ul>
                    <h3 class="text-white">Adres</h3>
                    <ul class="text-white">
                        <li>Happystraat 5</li>
                        <li>1234 HL</li>
                        <li>Happyplaats</li>
                        <li>Nederland</li>
                    </ul>
                </ul>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <iframe class="location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2653.6536811141164!2d16.32726821560965!3d48.30951172923755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d0f035c8a624d%3A0x3300bbdf9986a3ed!2sHappyland!5e0!3m2!1snl!2snl!4v1558599001186!5m2!1snl!2snl" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
</body>
</html>