<!DOCTYPE html>
<html>
<head>
<style>
body {font-family: Arial;}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}

/* Style the close button */
.topright {
    float: right;
    cursor: pointer;
    font-size: 20px;
}

.topright:hover {color: red;}
</style>
</head>
<body>

<p>Dynamic div content changing</p>
<div id="cover-whole">
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Home')" id="defaultOpen">Home</button>
  <button class="tablinks" onclick="openCity(event, 'About')">About</button>
  <button class="tablinks" onclick="openCity(event, 'Register')">Register</button>
</div>

<div id="Home" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">x</span>
  <h3>Home</h3>
  <p>Welcome to the home page of the website.</p>
</div>

<div id="About" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">x</span>
  <h3>About</h3>
  <p>Welcome to the about page of the website.</p> 
</div>

<div id="Register" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">x</span>
  <h3>Register</h3>
  <p>Welcome to the register page of the web site.</p>
</div>
</div>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html> 
