<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="/css/calendar.css">
<title><?= isset($title) ? h($title) : 'Mon calendrier' ?></title>
</head>
<body>

<nav class="navbar navbar-dark bg-primary mb-3">
    <a href="/index.php" class="navbar-brand">Mon calendrier</a>
</nav>