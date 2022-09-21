<?php

class LoginModel extends DatabaseConnection
{
    public function getLogin()
    {
        if (isset($_REQUEST['email']) && isset($_REQUEST['password'])) {
            if (($_REQUEST['email'] == 'suriya@gmail.com') && ($_REQUEST['password'] == 'suriya2412!')) {
                return 'login';
            }
        }
    }
}
