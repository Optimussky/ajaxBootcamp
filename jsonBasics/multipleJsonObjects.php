<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Json Objects</title>
</head>
<body>

    <script>
        let data = '[{"name": "Shakil Khan", "age": 25, "something": true}, {"name": "Alex", "age": 20, "something": false}, {"name": "Rahul", "age": 30, "something": true}]';

        let convert = JSON.parse(data);
        //console.log(convert);

        convert.forEach(function(info){
            console.log(info.name, info.age, info.something);
        });

    </script>

</body>
</html>