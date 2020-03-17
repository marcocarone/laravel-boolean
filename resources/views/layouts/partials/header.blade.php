<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="wrapper">
          <div class="left">
            <img src="https://www.boolean.careers/images/common/logo.png" alt="logo Boolean">
          </div>
          <div class="right">
            <nav>
                <ul>
                    <li class="{{ (Request::route()->getName() == 'home') ? 'active' : '' }}"><a  href="{{route("home")}}">Home</a></li>
                    <li><a href="#">Corso</a></li>
                    <li class="{{ (Request::route()->getName() == 'studente.index') ? 'active' : '' }}"><a  href="{{route("studente.index")}}">Dopo il corso</a></li>
                    <li><a href="#">Lezione gratuita</a></li>
                </ul>
            </nav>
            <a class="button" href="#">Candidati ora</a>
          </div>

        </div>
    </header>
