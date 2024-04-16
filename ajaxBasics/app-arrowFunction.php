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

const greetings = () =>{
    console.log(`Hello!`);
}

const display = myName =>{
    console.log(`My name is: ${myName} and I'm from ${country}`);
}

const info = ()=> {
    console.log(`Hello how are you!`);
}

function myInfo1(){
    console.log('Hello myInfo function');
}

const myInfo2 = () =>{
    console.log('Hello my arrow function');
}

const name = "Shakil Khan";
const country = "Pakistan";
info();
display(name, country);
greetings();
myInfo1();
myInfo2();

</script>
    
</body>
</html>