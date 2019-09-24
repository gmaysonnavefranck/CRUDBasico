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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

<div class="container-fluid">

<div class="col-md-6">
    <form method="POST" action="/insert.php"> 
    <div class="form-group">
    
    <label>Onomatopeias animalescas:</label>
    <input type="text" class="form-control" name="name">
    </div>
    <input class="btn btn-primary" type="submit" value="Submit">

    </form> 



    <ol>    
        <?php foreach($users as $user): ?>
            <li>
            
            
                <?=  $user->name    ?>
                <a href="/delete.php?id=<?= $user->id ?>">🗑️</a>
                <a href="/edit.php?id=<?= $user->id ?>">✏️</a>
            
            </li>
        <?php endforeach; ?>    
    </ol>
    <!-- Content here -->
    </div>
    </div>
</body>

</html>

