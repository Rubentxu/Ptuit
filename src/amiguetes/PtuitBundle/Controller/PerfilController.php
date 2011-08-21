<?php

namespace amiguetes\PtuitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use amiguetes\PtuitBundle\Entity\Perfil;
use amiguetes\PtuitBundle\Form\PerfilType;

/**
 * Perfil controller.
 *
 * @Route("/perfil")
 */
class PerfilController extends Controller {

    /**
     * Lists all Perfil entities.
     *
     * @Route("/", name="perfil")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('PtuitBundle:Perfil')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Perfil entity.
     *
     * @Route("/show", name="perfil_show")
     * @Template()
     */
    public function showAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $usuario = $this->get('security.context')->getToken()->getUser();
        
        $entity = $em->getRepository('PtuitBundle:Perfil')->find($usuario->getId());

        if (!$entity) {
            throw $this->createNotFoundException('No se pudo encontrar el Perfil del Usuario.');
        }       

        return array('entity' => $entity,);
    }

    /**
     * Displays a form to create a new Perfil entity.
     *
     * @Route("/new", name="perfil_new")
     * @Template()
     */
    public function newAction() {
        $entity = new Perfil();
        $form = $this->createForm(new PerfilType(), $entity);

        return array(
            'entity' => $entity,
            'form' => $form->createView()
        );
    }

    /**
     * Creates a new Perfil entity.
     *
     * @Route("/create", name="perfil_create")
     * @Method("post")
     * @Template("PtuitBundle:Perfil:new.html.twig")
     */
    public function createAction() {
        $entity = new Perfil();
        $request = $this->getRequest();
        $form = $this->createForm(new PerfilType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('perfil_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form' => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Perfil entity.
     *
     * @Route("/{id}/edit", name="perfil_edit")
     * @Template()
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PtuitBundle:Perfil')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Perfil entity.');
        }

        $editForm = $this->createForm(new PerfilType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Perfil entity.
     *
     * @Route("/{id}/update", name="perfil_update")
     * @Method("post")
     * @Template("PtuitBundle:Perfil:edit.html.twig")
     */
    public function updateAction($id) {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PtuitBundle:Perfil')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Perfil entity.');
        }

        $editForm = $this->createForm(new PerfilType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('perfil_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Perfil entity.
     *
     * @Route("/{id}/delete", name="perfil_delete")
     * @Method("post")
     */
    public function deleteAction($id) {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('PtuitBundle:Perfil')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Perfil entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('perfil'));
    }

    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

}
