<?php

namespace Controller;

use Entity\Drama;
use Entity\Genre;
use ludk\Http\Request;
use ludk\Http\Response;
use ludk\Controller\AbstractController;

class ContentController extends AbstractController
{
    public function create(Request $request): Response
    {
        $genreRepo = $this->getOrm()->getRepository(Genre::class);
        $dramaRepo = $this->getOrm()->getRepository(Drama::class);
        $manager = $this->getOrm()->getManager();

        $genres = $genreRepo->findAll();
        if (
            $request->getSession()->has('user')
            && $request->request->has('title')
            && $request->request->has('shortDescription')
            && $request->request->has('longDescription')
            && $request->request->has('url_img1')
            && $request->request->has('url_img2')
            && $request->request->has('url_trailer')
            && $request->request->has('country')
            && $request->request->has('yearRelease')
            && $request->request->has('genreId')
        ) {
            $errorMsg = NULL;
            $dramaWithThisTitle = $dramaRepo->findBy(['title' => $request->request->get('title')]);
            if ($dramaWithThisTitle == $request->request->get('title')) {
                $errorMsg = "Drama already exists.";
            }
            if ($errorMsg) {
                $data = array('errorMsg' => $errorMsg, 'genres' => $genres);
                return $this->render('newDrama.php', $data);
            } else {
                $genre = $genreRepo->find($request->request->get('genreId'));
                $newDrama = new Drama;
                $newDrama->title = trim($request->request->get('title')); //trim permet d'enlever les espaces inutiles au début et à la fin
                $newDrama->shortDescription = trim($request->request->get('shortDescription'));
                $newDrama->longDescription = trim($request->request->get('longDescription'));
                $newDrama->url_img1 = trim($request->request->get('url_img1'));
                $newDrama->url_img2 = trim($request->request->get('url_img2'));
                $newDrama->url_trailer = trim($request->request->get('url_trailer'));
                $newDrama->country = $request->request->get('country');
                $newDrama->yearRelease = $request->request->get('yearRelease');
                $newDrama->create_at = date('d-m-Y');
                $newDrama->genreId = $genre;
                $newDrama->userId = $request->getSession()->get('user');
                $manager->persist($newDrama);
                $manager->flush();
                return $this->redirectToRoute('display');
            }
        } else {
            $data = array('genres' => $genres);
            return $this->render('newDrama.php', $data);
        }
    }
}
