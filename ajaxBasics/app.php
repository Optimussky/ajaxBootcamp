<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript</title>
</head>
<body>

<div class="myClass" >Uno</div>

<div id="myId">Dos</div>

<div id="myName">Tres</div>

<script>

const myClass = document.querySelector(".myClass");
      myClass.innerHTML = "<h1> My class Message</h1>";

const myId = document.getElementById("myId");
        myId.innerHTML = "<p><i> Pasa pasa</i></p>";


const myName = document.querySelector("#myName");
      myName.innerHTML = "<b> My name tag</b>";

</script>
    
</body>
</html>