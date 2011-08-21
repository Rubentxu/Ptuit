<?php

namespace amiguetes\PtuitBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * MensajeRepository
 */
class MensajeRepository extends EntityRepository {

    public function findCronologia($id) {
        $dql = "SELECT  m , partial u.{id,nick,email} 
            FROM PtuitBundle:Mensaje m
            JOIN m.usuario u
            JOIN u.Seguidores s 
            WHERE s.id =:id
            AND m.usuario=u.id 
            OR m.usuario=:id 
            GROUP BY m.id 
            ORDER BY m.creado DESC";

        return $this->getEntityManager()
                        ->createQuery($dql)
                        ->setParameter("id", $id)
                        ->getResult(\Doctrine\ORM\Query::HYDRATE_OBJECT);
    }

    public function findMisPtuits($id) {
        $dql = "SELECT  m , partial u.{id,nick,email} 
            FROM PtuitBundle:Mensaje m
            JOIN m.usuario u            
            WHERE m.usuario=:id             
            GROUP BY m.id 
            ORDER BY m.creado DESC";

        return $this->getEntityManager()
                        ->createQuery($dql)
                        ->setParameter("id", $id)
                        ->getResult(\Doctrine\ORM\Query::HYDRATE_OBJECT);
    }

    public function findFavoritosDeUsuario($id) {
        $dql = "SELECT  u,m  FROM PtuitBundle:Mensaje m 
            JOIN m.usuarioDeFavoritos u 
            WHERE u.id=:id";

        return $this->getEntityManager()
                        ->createQuery($dql)
                        ->setParameter("id", $id)
                        ->getResult();
    }

    public function findReplicadosDeUsuario($id) {
        $dql = "SELECT  u,m FROM PtuitBundle:Mensaje m 
            JOIN m.replicadoPorUsuario u
            WHERE u.id=:id";

        return $this->getEntityManager()
                        ->createQuery($dql)
                        ->setParameter("id", $id)
                        ->getResult();
    }

    public function findMensajePadre() {
        $dql = "SELECT m, p FROM PtuitBundle:Mensaje m 
            JOIN m.padre p ";

        return $this->getEntityManager()
                        ->createQuery($dql)
                        ->getResult();
    }

}