<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost/apiTest/api/updateProducts/<?=$id?>" method="post">
        <input type="text" name="cat" id="cat">
        <button>save</button>
    </form>
    <script>
        const json = JSON.parse('<?=$json?>');
        console.log(json);
        const cat = document.querySelector('#cat');
        cat.value = json['Nomcat'];
    </script>
</body>
</html>