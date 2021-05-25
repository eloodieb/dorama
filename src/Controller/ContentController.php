<?php

namespace Controller;

use Entity\Drama;

class ContentController
{
    public function create()
    {
        global $genreRepo;
        global $dramaRepo;
        global $manager;

        $genres = $genreRepo->findAll();
        if (
            isset($_SESSION['user'])
            && isset($_POST['title'])
            && isset($_POST['shortDescription'])
            && isset($_POST['longDescription'])
            && isset($_POST['url_img1'])
            && isset($_POST['url_img2'])
            && isset($_POST['url_trailer'])
            && isset($_POST['country'])
            && isset($_POST['yearRelease'])
            && isset($_POST['genreId'])
        ) {
            $errorMsg = NULL;
            $dramaWithThisTitle = $dramaRepo->findBy(['title' => $_POST['title']]);
            if ($dramaWithThisTitle == $_POST['title']) {
                $errorMsg = "Drama already exists.";
            }
            if ($errorMsg) {
                include "../templates/newDrama.php";
            } else {
                $genre = $genreRepo->find($_POST['genreId']);
                $newDrama = new Drama;
                $newDrama->title = trim($_POST['title']); //trim permet d'enlever les espaces inutiles au début et à la fin
                $newDrama->shortDescription = trim($_POST['shortDescription']);
                $newDrama->longDescription = trim($_POST['longDescription']);
                $newDrama->url_img1 = trim($_POST['url_img1']);
                $newDrama->url_img2 = trim($_POST['url_img2']);
                $newDrama->url_trailer = trim($_POST['url_trailer']);
                $newDrama->country = $_POST['country'];
                $newDrama->yearRelease = $_POST['yearRelease'];
                $newDrama->create_at = date('d-m-Y');
                $newDrama->genreId = $genre;
                $newDrama->userId = $_SESSION['user'];
                $manager->persist($newDrama);
                $manager->flush();
                header('Location:/display');
            }
        } else {
            include "../templates/newDrama.php";
        }
    }
}
