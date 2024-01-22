<?php

namespace App\Controllers;

use App\Models\UserModel;
use Framework\Request;

class AuthController extends \Framework\Controller
{
    public function login(Request $request)
    {

        $login = $request->getPostParams()['login'];
        $password = $request->getPostParams()['password'];
//        echo ($login.' '.$password);
        if (isset($login) and $login != '') {

            $userModel = new UserModel;

            $user = $userModel->getWhere(['email' => $login])[0];

            if ($user){
                if (MD5($password) == $user->password){
                    $_SESSION['login'] = $user->email;
                    $_SESSION['name'] = $user->name;
                    $_SESSION['surname'] = $user->surname;
                    $_SESSION['id'] = $user->id;
                    $_SESSION['msg'] = "Вы успешно вошли в систему";
                }
                else $_SESSION['msg'] = "Неправильный пароль";
            }
            else $_SESSION['msg'] = "Неправильный логин";
        }
        header('Location: /php_project/index.php?path=home');
        exit();
    }
    public function logout(Request $request){
        $_SESSION = null;
        $_SESSION['msg'] =  "Вы успешно вышли из системы";
        header('Location: /php_project/index.php?path=home');
        exit();
    }

}