<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class amiguetesPtuitBundleEntityGrupoProxy extends \amiguetes\PtuitBundle\Entity\Grupo implements \Doctrine\ORM\Proxy\Proxy
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

    public function setNombre($nombre)
    {
        $this->__load();
        return parent::setNombre($nombre);
    }

    public function getNombre()
    {
        $this->__load();
        return parent::getNombre();
    }

    public function setUrl($url)
    {
        $this->__load();
        return parent::setUrl($url);
    }

    public function getUrl()
    {
        $this->__load();
        return parent::getUrl();
    }

    public function setDescripcion($descripcion)
    {
        $this->__load();
        return parent::setDescripcion($descripcion);
    }

    public function getDescripcion()
    {
        $this->__load();
        return parent::getDescripcion();
    }

    public function setLocalizacion($localizacion)
    {
        $this->__load();
        return parent::setLocalizacion($localizacion);
    }

    public function getLocalizacion()
    {
        $this->__load();
        return parent::getLocalizacion();
    }

    public function setLogo($logo)
    {
        $this->__load();
        return parent::setLogo($logo);
    }

    public function getLogo()
    {
        $this->__load();
        return parent::getLogo();
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

    public function setPrivacidad($privacidad)
    {
        $this->__load();
        return parent::setPrivacidad($privacidad);
    }

    public function getPrivacidad()
    {
        $this->__load();
        return parent::getPrivacidad();
    }

    public function addUsuarios(\amiguetes\PtuitBundle\Entity\Usuario $usuarios)
    {
        $this->__load();
        return parent::addUsuarios($usuarios);
    }

    public function getUsuarios()
    {
        $this->__load();
        return parent::getUsuarios();
    }

    public function addAdministradores(\amiguetes\PtuitBundle\Entity\Usuario $administradores)
    {
        $this->__load();
        return parent::addAdministradores($administradores);
    }

    public function getAdministradores()
    {
        $this->__load();
        return parent::getAdministradores();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nombre', 'url', 'descripcion', 'localizacion', 'logo', 'usuarios', 'creado', 'modificado', 'administradores', 'privacidad');
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