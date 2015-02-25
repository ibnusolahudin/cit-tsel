<?php

namespace App\AgnBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\AgnBundle\Entity\AgnMenusets;
use App\AgnBundle\Form\AgnMenusetsType;

/**
 * AgnMenusets controller.
 *
 * @Route("/menusets")
 */
class AgnMenusetsController extends Controller
{

    /**
     * Lists all AgnMenusets entities.
     *
     * @Route("/", name="menusets")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppAgnBundle:AgnMenusets')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new AgnMenusets entity.
     *
     * @Route("/", name="menusets_create")
     * @Method("POST")
     * @Template("AppAgnBundle:AgnMenusets:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new AgnMenusets();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('menusets_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a AgnMenusets entity.
     *
     * @param AgnMenusets $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(AgnMenusets $entity)
    {
        $form = $this->createForm(new AgnMenusetsType(), $entity, array(
            'action' => $this->generateUrl('menusets_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new AgnMenusets entity.
     *
     * @Route("/new", name="menusets_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new AgnMenusets();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a AgnMenusets entity.
     *
     * @Route("/{id}", name="menusets_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppAgnBundle:AgnMenusets')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AgnMenusets entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing AgnMenusets entity.
     *
     * @Route("/{id}/edit", name="menusets_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppAgnBundle:AgnMenusets')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AgnMenusets entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a AgnMenusets entity.
    *
    * @param AgnMenusets $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(AgnMenusets $entity)
    {
        $form = $this->createForm(new AgnMenusetsType(), $entity, array(
            'action' => $this->generateUrl('menusets_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing AgnMenusets entity.
     *
     * @Route("/{id}", name="menusets_update")
     * @Method("PUT")
     * @Template("AppAgnBundle:AgnMenusets:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppAgnBundle:AgnMenusets')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AgnMenusets entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('menusets_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a AgnMenusets entity.
     *
     * @Route("/{id}", name="menusets_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppAgnBundle:AgnMenusets')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find AgnMenusets entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('menusets'));
    }

    /**
     * Creates a form to delete a AgnMenusets entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('menusets_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
