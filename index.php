<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
</head>
<body ng-controller="appController">
<div>
    <div id="nav"><a href="#about" id="ref_about">About</a> <a href="#project" id="ref_project">Projects</a> <a
            href="#contact" id="ref_contact">Contacts</a></div>
</div>
<div id="welcome" class="text-center">
    <h1 ng-bind="texts">Site-portfolio of VirtusX</h1>
    <a class="glyphicon glyphicon-chevron-down" href="#about" id="down"></a>
</div>
<script>
    var app = angular.module('app', []);
    app.controller('appController', function ($scope) {
        $scope.texts = "Welcome to VirtusX portfolio";
    })
</script>
<div class="container-fluid full-block" id="about">
    <p class="text-center">Who am i?</p>
    <p>I am Vladyslav Andrieiev (aka VirtusX), a fourth-year student Taras Shevchenko National University of
        Luhansk. </p>
    <p>
        I have studied some object-oriented programming language (C#, Java, PHP)
        and JavaScript with some framework (JQuery, AJAX, AngularJS). And of course - HTML, CSS and Bootstrap</p>
    <p class="text-center">CURRENTLY I AM SEARCHING FOR A JOB</p>
</div>
<div class="container-fluid full-block project" id="project">
    <a href="https://github.com/VirtusX"><img src="https://assets-cdn.github.com/images/modules/logos_page/Octocat.png"></a>
    <p>For now, I don't have too many projects, only training projects that I have done for self-study</p>
    <p class="text-center">So, this is my favourite projects</p>
    <div class="text-center"><a class="glyphicon glyphicon-menu-down" href="#first_project"></a></div>
</div>
<div class="container-fluid full-block project" id="first_project">
    <div class="text-center"><a href="https://github.com/VirtusX/ProjectLAMA">ProjectLama</a></div>
    <div class="text-center"><p>ProjectLama is audio player, written in C# based on WPF</p>
        <p>There is nothing much to say - this is just music player with five themes</p></div>
    <div class="center-block"><img class="screen" src="scr1.PNG">
        <img class="screen" src="scr2.PNG"></div>
</div>
<div class="container-fluid full-block project">
    <div class="text-center"><a href="https://github.com/VirtusX/WebSiteProject">WebSiteProject</a></div>
    <div class="text-center"><p>Well, there is even less to be said. It's site template of social setwork, </p>
        <p> based on Java servlets, Hibernate with using MySQL. Oh, and i have ported it to
            <a href="https://github.com/VirtusX/WebProjectCS">ASP.NET</a>!</p>
    </div>
    <div class="center-block"><img src="wsp1.jpg" class="screen">
        <img src="wsp2.jpg" class="screen"></div>
</div>
<div class="container-fluid full-block project">
    <div class="text-center"><a href="https://github.com/VirtusX/AnCyclopaedia">AnCyclopaedia</a></div>
    <div class="text-center"><p>AnCyclopaedia is app-template based on UWP</p>
        <p>This is anatomic encyclopedia and... well, you may read it below</p>
    </div>
    <div class="center-block"><img class="screen" src="scr4.PNG">
        <img class="screen" src="scr5.PNG">
    </div>

</div>
<div class="container-fluid full-block" id="contact">
    <div class="text-center"><p>Well well well, you read so far and you still don't want leave this site?</p>
        <p>Maybe you are my future employer? In this case, please - contact me: </p>
        <p class="contacts">Phone number: +38(050)846-07-49</p>
        <p class="contacts">Email: <a href="mailto:virtus.x13@gmail.com">virtus.x13@gmail.com</a></p>
        <p id="thanks">Thanks for attention!</p></div>
</div>
</body>
</html>
