<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php_project</title>
</head>
<body>
<?php

if (!$data['user'])

{
    echo '<form class="d-flex" method="post" action="/php_project/index.php?path=login">';
    echo '<input class="form-control me-2" type="text" placeholder="Логин" name="login" aria-label="Логин"/>';
    echo '<input class="form-control me-2" type="text" placeholder="Пароль" name="password" aria-label="Пароль"/>';
    echo '<button class="btn btn-outline-success" type="submit">Войти</button>';

    echo '</form>';
}
else {
    echo 'Привет, ' . $data['user']->name . ' ' . $data['user']->surname ;
    echo '<br><a href="/php_project/index.php?path=logout">Выйти</a>';

}
?>