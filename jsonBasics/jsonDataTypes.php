<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Json Objects</title>
</head>
<body>

    <script>
        let data = '{"name": "Alex", "age": 30,"salary": null, "sports": false, "locations": ["UK","USA","PAK","INDIA"]}';

        let convert = JSON.parse(data);
        console.log(convert);
        console.log(convert['age']);
        console.log(convert.locations);
        console.log(convert['locations']);

        

    </script>

</body>
</html>