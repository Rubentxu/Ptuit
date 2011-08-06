<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class amiguetesPtuitBundleEntityMensaje_InternoProxy extends \amiguetes\PtuitBundle\Entity\Mensaje_Interno implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setCreado($creado)
    {
        $this->__load();
        return parent::setCreado($creado);
    }

    public function getCreado()
    {
        $this->__load();
        return parent::getCreado();
    }

    public function setModificado($modificado)
    {
        $this->__load();
        return parent::setModificado($modificado);
    }

    public function getModificado()
    {
        $this->__load();
        return parent::getModificado();
    }

    public function setTexto($texto)
    {
        $this->__load();
        return parent::setTexto($texto);
    }

    public function getTexto()
    {
        $this->__load();
        return parent::getTexto();
    }

    public function setRecibidosDeUsuario(\amiguetes\PtuitBundle\Entity\Usuario $recibidosDeUsuario)
    {
        $this->__load();
        return parent::setRecibidosDeUsuario($recibidosDeUsuario);
    }

    public function getRecibidosDeUsuario()
    {
        $this->__load();
        return parent::getRecibidosDeUsuario();
    }

    public function setEnviadosAUsuario(\amiguetes\PtuitBundle\Entity\Usuario $enviadosAUsuario)
    {
        $this->__load();
        return parent::setEnviadosAUsuario($enviadosAUsuario);
    }

    public function getEnviadosAUsuario()
    {
        $this->__load();
        return parent::getEnviadosAUsuario();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'creado', 'modificado', 'texto', 'recibidos_de_Usuario', 'enviados_a_Usuario');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}