<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\TrabalhaEm;
use AppBundle\Form\TrabalhaEmType;

/**
 * TrabalhaEm controller.
 *
 * @Route("/trabalhaem")
 */
class TrabalhaEmController extends Controller
{

    /**
     * Lists all TrabalhaEm entities.
     *
     * @Route("/", name="trabalhaem")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:TrabalhaEm')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new TrabalhaEm entity.
     *
     * @Route("/", name="trabalhaem_create")
     * @Method("POST")
     * @Template("AppBundle:TrabalhaEm:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new TrabalhaEm();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('trabalhaem_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a TrabalhaEm entity.
     *
     * @param TrabalhaEm $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TrabalhaEm $entity)
    {
        $form = $this->createForm(new TrabalhaEmType(), $entity, array(
            'action' => $this->generateUrl('trabalhaem_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TrabalhaEm entity.
     *
     * @Route("/new", name="trabalhaem_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new TrabalhaEm();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a TrabalhaEm entity.
     *
     * @Route("/{id}", name="trabalhaem_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:TrabalhaEm')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TrabalhaEm entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing TrabalhaEm entity.
     *
     * @Route("/{id}/edit", name="trabalhaem_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:TrabalhaEm')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TrabalhaEm entity.');
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
    * Creates a form to edit a TrabalhaEm entity.
    *
    * @param TrabalhaEm $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TrabalhaEm $entity)
    {
        $form = $this->createForm(new TrabalhaEmType(), $entity, array(
            'action' => $this->generateUrl('trabalhaem_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TrabalhaEm entity.
     *
     * @Route("/{id}", name="trabalhaem_update")
     * @Method("PUT")
     * @Template("AppBundle:TrabalhaEm:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:TrabalhaEm')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TrabalhaEm entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('trabalhaem_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a TrabalhaEm entity.
     *
     * @Route("/{id}", name="trabalhaem_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:TrabalhaEm')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TrabalhaEm entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('trabalhaem'));
    }

    /**
     * Creates a form to delete a TrabalhaEm entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('trabalhaem_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
