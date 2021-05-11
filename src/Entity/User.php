<?php

namespace Entity;

use ludk\Utils\Serializer;

class User
{
    public $id;
    public $pseudo;
    public $password;

    use Serializer;
}
