<!DOCTYPE html>
<html>
<head>
<style>
button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ccc;
}

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>
</head>
<body>

<h2>Example of the dyanmic buttons</h2>
<p>Click to open the quiz</p>

<button class="accordion">Question one</button>
<div class="panel">
  <p><a href="#">Click 1</a></p>
  <p>What is the name of the language for creating interactive web sites?</p>
</div>

<button class="accordion">Question two</button>
<div class="panel">
  <p><a href="#">Click 2</a></p>
  <p>What is the best php framework to be use for large scale web apps?</p>
</div>

<button class="accordion">Question three</button>
<div class="panel">
  <p><a href="#">Click 3</a></p>
  <p>Name the javascript framework for both the front and backend of web devs?</p>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}
</script>

</body>
</html>
