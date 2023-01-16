<!DOCTYPE html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="love.css">
    
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("love.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>


</head>
<body>
    <div class="container">
 <div class="form-group">
   <p></p>
      <label for="comment">Say something about me</label>
    
<form method="post" action="dataload.php" >
 <textarea class="form-control" rows="5" id="comment" type="text" name="name"></textarea>
  <h1></h1>
 
 
<input class="btn btn-success" type="submit" value="submit" />
</form>
</body>
</html>
