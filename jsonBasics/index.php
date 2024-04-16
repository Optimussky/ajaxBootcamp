<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Json Basics</title>
</head>
<body>


<script>
    let data = '{"name": "Shakil Khan","age" :25, "something": true, "countries":["One","Two","Three","Four"] }';
    let convert = JSON.parse(data);
    console.log(convert);
    
    console.log("name: " + convert.name);
    console.log("age: " + convert.age);
    console.log("something: " + convert.something);
    console.log("countries: " + convert.countries);
</script>
</body>
</html>