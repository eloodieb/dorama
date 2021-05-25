<?php

namespace Controller;

use Entity\Drama;
use ludk\Http\Request;
use ludk\Http\Response;
use ludk\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function display(Request $request): Response
    {
        $dramaRepo = $this->getOrm()->getRepository(Drama::class);;
        $items = array();

        if ($request->query->has('search')) {
            $items = $dramaRepo->findBy(array("shortDescription" => '%' . $request->query->get('search') . '%'));
        } else {
            $items = $dramaRepo->findAll();
        }
        $data = array('items' => $items);
        return $this->render('display.php', $data);
    }
}
