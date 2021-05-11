<?php

namespace Entity;

use ludk\Utils\Serializer;

class Genre
{
    public $id;
    public $name;

    use Serializer;
}
