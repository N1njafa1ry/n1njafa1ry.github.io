fetch("header.html")
  .then(response => response.text())
  .then(content => {
    document.getElementById("header").innerHTML = content;
  });
