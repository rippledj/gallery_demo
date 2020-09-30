
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
    // Create the item div
    var item = document.createElement("div");
    item.className = "gallery-item col-xs-12 col-sm-4";
    item.id = "gallery-item-" + x_col;
    var row = document.getElementById("gallery-row-" + x_row);
    // Append the image div
    var img_div = document.createElement("div");
    img_div.className = "item-img-div";
    img_div.id = "item-img-div-" + index;
    item.appendChild(img_div);
    // Append the image
    var img = document.createElement("img");
    img.className = "item-img";
    img.src = "http://localhost/" + content[index].img_filepath;
    img_div.appendChild(img);
    // Append the image title
    var title = document.createElement("span");
    title.className = "item-title";
    title.innerHTML= content[index].title;
    img_div.appendChild(title);
    // Append the item footer
    var footer = document.createElement("div");
    footer.className = "item-footer";
    // Append description to footer
    desc = document.createElement("p");
    desc.innerHTML = content[index].description;
    footer.appendChild(desc);
    // Append sub footer
    sub_footer = document.createElement("div");
    sub_footer.className = "row";
    sub_footer_col1 = document.createElement("div");
    // Append columns to sub footer
    sub_footer_col1.className = "col-xs-6";
    sub_footer_col2 = document.createElement("div");
    sub_footer_col2.className = "col-xs-6";
    // Append like button
    like = document.createElement("i");
    like.className = "fa fa-heart icon";
    sub_footer_col1.appendChild(like);
    // Append date
    date = document.createElement("span");
    date.className = "item-date pull-right";
    date.innerHTML = content[index].date;
    sub_footer_col2.appendChild(date);
    // Append the two columns to main row
    img_div.appendChild(footer);
    footer.appendChild(sub_footer);
    sub_footer.appendChild(sub_footer_col1);
    sub_footer.appendChild(sub_footer_col2);
    // Append the item to the row
    row.appendChild(item);
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
