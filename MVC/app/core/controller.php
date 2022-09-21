<?php

class controller
{
    protected function view($view)
    {
        if (file_exists("../app/view/" . $view . ".php")) {
             include "../app/view/" . $view . ".php";
        } else {
            include "../app/view/404.php";
        }
    }
}
