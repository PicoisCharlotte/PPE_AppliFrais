<?php

namespace FraisBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ComptableRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ComptableRepository extends EntityRepository
{
     public function connexionComptable($login , $mdp){
        $queryBuilder = $this->_em->createQueryBuilder()->select('c')->from($this->_entityName, 'c');
        $queryBuilder->where('c.login= :login')->setParameter('login' , $login)
                ->andWhere('c.mdp = :mdp')->setParameter('mdp', $mdp) ;
        
        $lesComptables = $queryBuilder->getQuery()->getResult() ;
        
        //$return = "" ; 
//        foreach($lesComptables as $unComptable){
//            $return = $unComptable ;
//        }
        
        if ($lesComptables != null){
            return $lesComptables ;
        } else {
            return false ;
        }
    }
}
