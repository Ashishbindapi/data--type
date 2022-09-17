<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text"name="name"placeholder="Name">
        <button type="submit"name="submit">Submit</button>
        <h1>Data type is:</h1>
        <?php
            if(isset($_POST['submit']))
            {
                $name = $_POST['name'];
                echo gettype($name);
            }
        ?>
    </form>
</body>
</html>
