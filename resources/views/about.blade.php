<!DOCTYPE html>
<html>
<head>
    <title>About page</title>
</head>
<body>
<h1>Hello <?= $name?>!</h1>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li><?= $task?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
