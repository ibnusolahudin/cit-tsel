<?php

namespace App\AgnBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;

class AgnAssignmentRepo extends EntityRepository{
    
    public function getResp()
    {
        $q = $this->findAll();
        //$resp = $q->getResult();
        echo $q;
        return $q;
        
    }
}
