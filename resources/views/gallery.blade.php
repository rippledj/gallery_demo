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

        <!-- Photo gallery wrapper div -->
        <div id="gallery-wrapper" class="gallery-wrapper">
        </div>

      </div>
      <script>

        // Accepts the response array and modifies the content
        // in the DOM
        function modifyPhotosDOM(content){
          num_photos = content.length;
          num_rows = Math.ceil(num_photos / 3);
          // Create required number of rows
          for (var x = 0; x < num_rows; x++){
            var row = document.createElement("div");
            row.className = "row gallery";
            row.id = "gallery-row-" + x;
            var elem = document.getElementById("gallery-wrapper");
            elem.appendChild(row);
          };
          // Put each item div in place
          x_col = 1;
          x_row = 0;
          for(index in content) {
            var col = document.createElement("div");
            col.className = "gallery-item col-xs-12 col-sm-4";
            col.id = "gallery-item-" + x_col;
            var row = document.getElementById("gallery-row-" + x_row);
            //var p = document.createElement("p");
            col.innerHTML = content[index].title;
            row.appendChild(col);
            if (x_col % 3 == 0){
              x_row++;
              x_col++;
            }
            else x_col++;
          }
        }

        // Accepts the response array and modifies the content
        // in the DOM
        function modifyUserDOM(content){
          for(item in content){
          }
        }

        // Makes Asyncronous call to API
        function ajax(url) {
        return new Promise(function(resolve, reject) {
          var xhr = new XMLHttpRequest();
          xhr.onload = function() {
            resolve(this.responseText);
          };
          xhr.onerror = reject;
          xhr.open('GET', url);
          xhr.send();
          });
        }

        // Call the photo gallery API and wait for response
        ajax("api/gallery")
        .then(function(response) {
          // Decode JSON response
          // Decode the lesson base64 and JSON
          var content = JSON.parse(response);
          // Code depending on result
          modifyPhotosDOM(content);
        })
        .catch(function() {
          // An error occurred
          alert("Error!")
        });
      </script>

    </body>
</html>
