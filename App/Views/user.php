<?php require 'app/views/header.php'?>
    <h1>Профиль пользователя:</h1>
    <ul>
        <table bgcolor="aqua" border="1">
            <tr>
                <td>Имя</td>
                <td><?=$data[0]->name?></td>
            </tr>
            <tr>
                <td>Фамилия</td>
                <td><?=$data[0]->surname?></td>
            </tr>
            <tr>
                <td>e-mail</td>
                <td><?=$data[0]->email?></td>
            </tr>
        </table>
    </ul>
<?php require 'app/views/footer.php'?>