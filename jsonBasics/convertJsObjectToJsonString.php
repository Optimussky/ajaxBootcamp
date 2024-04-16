<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Json Objects</title>
</head>
<body>

    <script>
        let info = {name: "Alex", age: 30, location:["USA", "UK"]};
        //console.log(info);

        let convert = JSON.stringify(info);
        console.log(convert);



    </script>

</body>
</html>