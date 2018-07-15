<!DOCTYPE html>
<html>
<head>
<?php include 'header.php'?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 10px;
    margin-bottom: 18px;
    resize: vertical;
    
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 2px;
    background-color: #FF8172;
    padding: 40px;
    padding-left: 150px;
    padding-right: 150px;
}
</style>
</head>
<body>

<h3><center>Contact Form</center></h3>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="your name">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="your last name">

    <label for="country">City</label>
    <select id="country" name="country">
      <option value="bhubaneshwar">Bhubaneshwar</option>
      <option value="mumbai">Mumbai</option>
      <option value="delhi">Delhi</option>
      <option value="banglore">Banglore</option>
      <option value="pune">Pune</option>
    </select>

    <label for="subject">Write something to us</label>
    <textarea id="subject" name="subject" placeholder="enter text" style="height:100px"></textarea>

    <input type="submit" value="SUBMIT >">
  </form>
</div>

</body>
</html>
