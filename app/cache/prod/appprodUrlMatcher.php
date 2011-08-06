<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // _cronologia
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_cronologia');
            }
            return array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\InicioController::indexAction',  '_route' => '_cronologia',);
        }

        // ptuit
        if (rtrim($pathinfo, '/') === '/ptuit') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ptuit');
            }
            return array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\MensajeController::indexAction',  '_route' => 'ptuit',);
        }

        // ptuit_show
        if (0 === strpos($pathinfo, '/ptuit') && preg_match('#^/ptuit/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\MensajeController::showAction',)), array('_route' => 'ptuit_show'));
        }

        // ptuit_new
        if ($pathinfo === '/ptuit/new') {
            return array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\MensajeController::newAction',  '_route' => 'ptuit_new',);
        }

        // ptuit_create
        if ($pathinfo === '/ptuit/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ptuit_create;
            }
            return array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\MensajeController::createAction',  '_route' => 'ptuit_create',);
        }
        not_ptuit_create:

        // ptuit_edit
        if (0 === strpos($pathinfo, '/ptuit') && preg_match('#^/ptuit/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\MensajeController::editAction',)), array('_route' => 'ptuit_edit'));
        }

        // ptuit_update
        if (0 === strpos($pathinfo, '/ptuit') && preg_match('#^/ptuit/(?P<id>[^/]+?)/update$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ptuit_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\MensajeController::updateAction',)), array('_route' => 'ptuit_update'));
        }
        not_ptuit_update:

        // ptuit_favorito
        if (0 === strpos($pathinfo, '/ptuit') && preg_match('#^/ptuit/(?P<id>[^/]+?)/favorito$#x', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ptuit_favorito;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\MensajeController::addFavoritoAction',)), array('_route' => 'ptuit_favorito'));
        }
        not_ptuit_favorito:

        // ptuit_borra_favorito
        if (0 === strpos($pathinfo, '/ptuit') && preg_match('#^/ptuit/(?P<id>[^/]+?)/delete/favorito$#x', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ptuit_borra_favorito;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\MensajeController::deleteFavoritoAction',)), array('_route' => 'ptuit_borra_favorito'));
        }
        not_ptuit_borra_favorito:

        // ptuit_replicar
        if (0 === strpos($pathinfo, '/ptuit') && preg_match('#^/ptuit/(?P<id>[^/]+?)/replicar$#x', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ptuit_replicar;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\MensajeController::addUsuarioReplicanteAction',)), array('_route' => 'ptuit_replicar'));
        }
        not_ptuit_replicar:

        // ptuit_borra_reptuit
        if (0 === strpos($pathinfo, '/ptuit') && preg_match('#^/ptuit/(?P<id>[^/]+?)/delete/replicar$#x', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ptuit_borra_reptuit;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\MensajeController::deleteUsuarioReplicanteAction',)), array('_route' => 'ptuit_borra_reptuit'));
        }
        not_ptuit_borra_reptuit:

        // ptuit_delete
        if (0 === strpos($pathinfo, '/ptuit') && preg_match('#^/ptuit/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ptuit_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\MensajeController::deleteAction',)), array('_route' => 'ptuit_delete'));
        }
        not_ptuit_delete:

        // registro
        if ($pathinfo === '/registro') {
            return array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\SecurityController::registroAction',  '_route' => 'registro',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // login_check
        if ($pathinfo === '/seguridad/login_check') {
            return array('_route' => 'login_check');
        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
