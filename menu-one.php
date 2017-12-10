<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet">
<style>
body {margin:0;}

.icon-bar {
    width: 70%;
    background-color: #555;
    overflow: auto;
}

.icon-bar a {
    float: left;
    width: 15%;
    text-align: center;
    padding: 12px 0;
    transition: all 0.3s ease;
    color: white;
    font-size: 25px;
    text-decoration: none;
}

.icon-bar a:hover {
    background-color: #000;
}

.active {
    background-color: #4CAF50 !important;
}
p{
  color: red;
  margin: 0px auto;
  text-decoration: underline;;
}

.second-menu{
  margin-top: 20px;
  width: 35px;
  padding-left: 20px;
  margin-left: 20px;
  height: 5px;
  background-color: black;
  margin: 6px 0;
}
fieldset{
  width: 70%;
  padding: 0px;
}

</style>
<body>
<p>Menu one of the website</p>
<div class="icon-bar">
  <a class="active" href="#">Home<i class="fa fa-home"></i></a> 
  <a href="#">About<i class="fa fa-search"></i></a> 
  <a href="#">Account<i class="fa fa-envelope"></i></a> 
  <a href="#">Settings<i class="fa fa-globe"></i></a>
  <a href="#">Help<i class="fa fa-trash"></i></a> 
</div>
<fieldset>
<legend>The second menu for websites</legend>
<div class="second-menu"></div>
<div class="second-menu"></div>
<div class="second-menu"></div>
</fieldset>

</body>
</html> 
