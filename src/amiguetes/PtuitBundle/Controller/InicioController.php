<?php

namespace amiguetes\PtuitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use amiguetes\PtuitBundle\Entity\Mensaje;

class InicioController extends Controller {

    public function indexAction() {

        $usuario = $this->get('security.context')->getToken()->getUser();

        $mensaje = new Mensaje();
        $formulario = $this->createFormBuilder($mensaje)
                ->add('texto', 'textarea')
                ->getForm();

        $id = $usuario->getId();

        $em = $this->getDoctrine()->getEntityManager();
        $mensajes = $em->getRepository('PtuitBundle:Mensaje')
                ->findCronologia($id);
        $favoritos=$em->getRepository('PtuitBundle:Mensaje')
                ->findFavoritosDeUsuario($id);
        $replicados=$em->getRepository('PtuitBundle:Mensaje')
                ->findReplicadosDeUsuario($id);        
        
        return $this->render('PtuitBundle:Inicio:index.html.twig', 
             array('mensajes' => $mensajes,
            'usuario' => $usuario,
            'favoritos'=>$favoritos,
            'replicados'=>$replicados,            
            'form' => $formulario->createView()));
    }

}
