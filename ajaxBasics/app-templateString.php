<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript</title>
</head>
<body>


<div id="myId"></div>



<script>

const name = "Shakil Khan";
const country = "Pakistan";
const myId = document.querySelector('#myId');
      //myId.innerHTML = "My name is: " + name;
      myId.innerHTML = `<h1>My name is: ${name} and I'm from ${country}</h1>`;


</script>
    
</body>
</html>