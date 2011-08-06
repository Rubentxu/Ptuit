<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_cronologia' => true,
       'ptuit' => true,
       'ptuit_show' => true,
       'ptuit_new' => true,
       'ptuit_create' => true,
       'ptuit_edit' => true,
       'ptuit_update' => true,
       'ptuit_favorito' => true,
       'ptuit_borra_favorito' => true,
       'ptuit_replicar' => true,
       'ptuit_borra_reptuit' => true,
       'ptuit_delete' => true,
       'registro' => true,
       'login' => true,
       'login_check' => true,
       'logout' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_cronologiaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\InicioController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getptuitRouteInfo()
    {
        return array(array (), array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\MensajeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/ptuit/',  ),));
    }

    private function getptuit_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\MensajeController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/ptuit',  ),));
    }

    private function getptuit_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\MensajeController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/ptuit/new',  ),));
    }

    private function getptuit_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\MensajeController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/ptuit/create',  ),));
    }

    private function getptuit_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\MensajeController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/ptuit',  ),));
    }

    private function getptuit_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\MensajeController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/ptuit',  ),));
    }

    private function getptuit_favoritoRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\MensajeController::addFavoritoAction',), array (  '_method' => 'get',), array (  0 =>   array (    0 => 'text',    1 => '/favorito',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/ptuit',  ),));
    }

    private function getptuit_borra_favoritoRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\MensajeController::deleteFavoritoAction',), array (  '_method' => 'get',), array (  0 =>   array (    0 => 'text',    1 => '/delete/favorito',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/ptuit',  ),));
    }

    private function getptuit_replicarRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\MensajeController::addUsuarioReplicanteAction',), array (  '_method' => 'get',), array (  0 =>   array (    0 => 'text',    1 => '/replicar',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/ptuit',  ),));
    }

    private function getptuit_borra_reptuitRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\MensajeController::deleteUsuarioReplicanteAction',), array (  '_method' => 'get',), array (  0 =>   array (    0 => 'text',    1 => '/delete/replicar',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/ptuit',  ),));
    }

    private function getptuit_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\MensajeController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/ptuit',  ),));
    }

    private function getregistroRouteInfo()
    {
        return array(array (), array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\SecurityController::registroAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/registro',  ),));
    }

    private function getloginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'amiguetes\\PtuitBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function getlogin_checkRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/seguridad/login_check',  ),));
    }

    private function getlogoutRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }
}
