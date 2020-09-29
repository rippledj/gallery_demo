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
        <!-- Latest compiled and minified JavaScript -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <!-- Styles -->
	      <link rel="stylesheet" href="css/app.css" />

    </head>
    <body class="antialiased">

      <div id="container" class="container">

        <!-- User Headmat -->
        <div class="row headmat">
          <div class="col-xs-3">
            <img class="user-avatar" src="images/profile.jpeg">
          </div>
          <div class="col-xs-6">
            <h1>Nick Reynolds</h1>
            <h2>Bio</h2>
            <p class="user-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu mi sed massa viverra pellentesque. Nulla ornare vulputate ligula in tempus. Nunc pellentesque nibh a ex eleifend pulvinar. Quisque bibendum ipsum ut mauris malesuada, sit amet mollis turpis viverra.<p>
          </div>
          <div class="col-xs-3">
            <div class="contact">
              <h2>Phone</h2>
              <a href="tel:555-555-5555">555-555-5555</a>
              <h2>Email</h2>
              <a href="mailto:nick.reynolds@domain.ca">nick.reynolds@domain.ca</a>
            </div>
          </div>
        </div>

        <div class="gallery-wrapper">

          <div class="row gallery">

              <div class="gallery-item col-xs-12 col-sm-4">
                <img class="item-img" src="images/landscape1.jpeg">
                <div class="item-footer">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu mi sed massa viverra pellentesque.</p>
                  <div class="row">
                    <div class="col-xs-6">
                      <i class="fa fa-heart"></i>
                    </div>
                    <div class="col-xs-6 text-right">
                      <span class="item-date">2020-01-01</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="gallery-item col-xs-12 col-sm-4">
                <img class="item-img" src="images/landscape2.jpeg">
                <div class="item-footer">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu mi sed massa viverra pellentesque.</p>
                  <div class="row">
                    <div class="col-xs-6">
                      <i class="fa fa-heart"></i>
                    </div>
                    <div class="col-xs-6 text-right">
                      <span class="item-date">2020-01-01</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="gallery-item col-xs-12 col-sm-4">
                <img class="item-img" src="images/landscape3.jpeg">
                <div class="item-footer">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu mi sed massa viverra pellentesque.</p>
                  <div class="row">
                    <div class="col-xs-6">
                      <i class="fa fa-heart"></i>
                    </div>
                    <div class="col-xs-6 text-right">
                      <span class="item-date">2020-01-01</span>
                    </div>
                  </div>
                </div>
              </div>

          </div>

          <div class="row gallery">

              <div class="gallery-item col-xs-12 col-sm-4">
                <img class="item-img" src="images/landscape4.jpeg">
                <div class="item-footer">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu mi sed massa viverra pellentesque.</p>
                  <div class="row">
                    <div class="col-xs-6">
                      <i class="fa fa-facebook"></i>
                    </div>
                    <div class="col-xs-6 text-right">
                      <span class="item-date">2020-01-01</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="gallery-item col-xs-12 col-sm-4">
                <img class="item-img" src="images/landscape5.jpeg">
                <div class="item-footer">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu mi sed massa viverra pellentesque.</p>
                  <div class="row">
                    <div class="col-xs-6">
                      <i class="fa fa-heart"></i>
                    </div>
                    <div class="col-xs-6 text-right">
                      <span class="item-date">2020-01-01</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="gallery-item col-xs-12 col-sm-4">
                <img class="item-img" src="images/landscape6.jpeg">
                <div class="item-footer">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu mi sed massa viverra pellentesque.</p>
                  <div class="row">
                    <div class="col-xs-6">
                      <i class="fa fa-heart"></i>
                    </div>
                    <div class="col-xs-6 text-right">
                      <span class="item-date">2020-01-01</span>
                    </div>
                  </div>
                </div>
              </div>

          </div>

        </div>
    </body>
</html>
