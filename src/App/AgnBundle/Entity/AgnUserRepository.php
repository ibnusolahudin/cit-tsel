<?php

namespace App\AgnBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;

class AgnUserRepository extends EntityRepository implements UserProviderInterface
{
    public function loadUserByUsername($username)
    {
        $q = $this
            ->createQueryBuilder('u')
            ->where('u.userName = :username')
            ->setParameter('username', $username)
            ->getQuery();

        try {
            // The Query::getSingleResult() method throws an exception
            // if there is no record matching the criteria.
            $user = $q->getSingleResult();
        } catch (NoResultException $e) {
            $message = sprintf(
                'Username "%s" is not found.',
                $username
            );
            throw new UsernameNotFoundException($message, 0, $e);
        }
        
        return $user;

    }

    public function refreshUser(UserInterface $user)
    {
        $class = get_class($user);
        if (!$this->supportsClass($class)) {
            throw new UnsupportedUserException(
                sprintf(
                    'Instances of "%s" are not supported.',
                    $class
                )
            );
        }

        return $this->find($user->getUserId());
    }

    public function supportsClass($class)
    {
        return $this->getEntityName() === $class
            || is_subclass_of($class, $this->getEntityName());
    }
    
    public function execProcedure()
    {
        $uid = 2;
        $stmt = $this->getEntityManager()->getConnection()->prepare('BEGIN :result := is_expired(:uid); END;');
        $stmt->bindValue('uid', $uid);
        $stmt->bindParam(':result', $returnValue,SQLT_NUM, 5);
        $stmt->execute();
        
        return $returnValue;
//        $query = $this->createQueryBuilder('DUAL')->select("is_expired(2) as res");
//        die(var_dump($query->getQuery()->getResult()));
    }
}
