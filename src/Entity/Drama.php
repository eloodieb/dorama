<?php

namespace Entity;

use Entity\User;
use Entity\Genre;

class Drama
{
    public $id;
    public $title;
    public $shortDescription;
    public $longDescription;
    public $url_img1;
    public $url_img2;
    public $url_trailer;
    public $nbVote;
    public $country;
    public $yearRelease;
    public $create_at;
    public User $userId;
    public Genre $genreId;
}
