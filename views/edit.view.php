<!DOCTYPE html>

<html lang="en">

<head>

    <style>
    header {
        background: #e3e3e3;
        padding: 2em;
        text-align: center;
    }
    </style>

    <meta charset="UTF-8">
    <title>Document</title>

</head>

<body>

<form method="POST" action="/update.php"> 
<h2>Editar: </h2>
<input type="hidden" name="id" value="<?= $user->id ?>">
<input type="text" name="name" value="<?= $user->name?>"><br>
<input type="submit" value="Submit">

</form> 


</body>

</html>