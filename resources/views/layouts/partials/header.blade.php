<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
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
                    <li class="{{ (Request::route()->getName() == 'database.index') ? 'active' : '' }}"><a href="{{route("database.index")}}">Esempio migrate</a></li>
                </ul>
            </nav>
            <a class="button" href="#">Candidati ora</a>
          </div>

        </div>
    </header>
