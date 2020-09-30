<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Gallery Demo - Joseph Lee</title>
        <!-- Favicon -->
	      <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <!-- Latest compiled and minified JQuery and Bootstrap.js -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <!-- Styles -->
	      <link rel="stylesheet" href="css/app.css" />

    </head>
    <body class="antialiased">

      <div id="container" class="container">

        <!-- User Headmat -->
        <div id="headmat" class="row headmat">
          <div class="col-xs-3">
            <img id="avatar" class="user-avatar" src="">
          </div>
          <div class="col-xs-6">
            <h1 id="name"></h1>
            <h2>Bio</h2>
            <p id="bio" class="user-description"><p>
          </div>
          <div id="contact" class="col-xs-3">
            <div class="contact">
              <h2>Phone</h2>
              <a id="phone" href="tel:555-555-5555"></a>
              <h2>Email</h2>
              <a id="email"href="mailto:nick.reynolds@domain.ca"></a>
            </div>
          </div>
        </div>

        <!-- Photo gallery wrapper div -->
        <div id="gallery-wrapper" class="gallery-wrapper">
        </div>

      </div>
      <!-- Load the DOM loader Javascript -->
      <script src="js/dom_loader.js"></script>
    </body>
</html>
