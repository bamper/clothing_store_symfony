<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Clothes;
use AppBundle\Form\ClothesType;

/**
 * Clothes controller.
 *
 * @Route("/clothes")
 */
class ClothesController extends Controller
{

    /**
     * Lists all Clothes entities.
     *
     * @Route("/", name="clothes")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Clothes')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Clothes entity.
     *
     * @Route("/", name="clothes_create")
     * @Method("POST")
     * @Template("AppBundle:Clothes:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Clothes();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('clothes_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Clothes entity.
     *
     * @param Clothes $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Clothes $entity)
    {
        $form = $this->createForm(new ClothesType(), $entity, array(
            'action' => $this->generateUrl('clothes_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Clothes entity.
     *
     * @Route("/new", name="clothes_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Clothes();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Clothes entity.
     *
     * @Route("/{id}", name="clothes_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Clothes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Clothes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Clothes entity.
     *
     * @Route("/{id}/edit", name="clothes_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Clothes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Clothes entity.');
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
    * Creates a form to edit a Clothes entity.
    *
    * @param Clothes $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Clothes $entity)
    {
        $form = $this->createForm(new ClothesType(), $entity, array(
            'action' => $this->generateUrl('clothes_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Clothes entity.
     *
     * @Route("/{id}", name="clothes_update")
     * @Method("PUT")
     * @Template("AppBundle:Clothes:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Clothes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Clothes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('clothes_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Clothes entity.
     *
     * @Route("/{id}", name="clothes_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Clothes')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Clothes entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('clothes'));
    }

    /**
     * Creates a form to delete a Clothes entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('clothes_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
