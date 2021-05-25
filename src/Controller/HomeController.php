<?php

namespace Controller;

class HomeController
{
    public function dislpay()
    {
        global $dramaRepo;
        $items = array();

        if (isset($_GET['search'])) {
            $items = $dramaRepo->findBy(array("shortDescription" => '%' . $_GET['search'] . '%'));
        } else {
            $items = $dramaRepo->findAll();
        }
        include '../templates/display.php';
    }
}
