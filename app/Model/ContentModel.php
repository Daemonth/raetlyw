<?php

namespace App\Model;

use App\Service\Util\Raetlyw;

class ContentModel extends BaseModel
{
    protected $table;
    protected $raetlyw;

    public function __construct(Raetlyw $raetlyw)
    {
        $this->table = $raetlyw::TABLE_CONTNETS;
    }

}