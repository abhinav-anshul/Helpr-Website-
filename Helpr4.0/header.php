<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">

<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  /* padding: 20px 10px; */
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 8px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 2px;
}

.header a.logo {
  /*font-size: 5px;
  font-weight: bold; */
 
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dimgray;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}        
</style>
</head>
<body>

<div class="header">
  <a href="home.php" class=""><img src = ""></a>
  <div class="header-right">
    <a class="active" href="product.php">Product</a>
    <a href="#contact">Idea</a>
    <a href="stories.php">Stories</a>
    <a href="contact.php">Contact</a>
  </div>
</div>



</body>
</html>