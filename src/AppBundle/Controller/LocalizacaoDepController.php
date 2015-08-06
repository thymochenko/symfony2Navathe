<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\LocalizacaoDep;
use AppBundle\Form\LocalizacaoDepType;

/**
 * LocalizacaoDep controller.
 *
 * @Route("/localizacaodep")
 */
class LocalizacaoDepController extends Controller
{

    /**
     * Lists all LocalizacaoDep entities.
     *
     * @Route("/", name="localizacaodep")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:LocalizacaoDep')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new LocalizacaoDep entity.
     *
     * @Route("/", name="localizacaodep_create")
     * @Method("POST")
     * @Template("AppBundle:LocalizacaoDep:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new LocalizacaoDep();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('localizacaodep_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a LocalizacaoDep entity.
     *
     * @param LocalizacaoDep $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(LocalizacaoDep $entity)
    {
        $form = $this->createForm(new LocalizacaoDepType(), $entity, array(
            'action' => $this->generateUrl('localizacaodep_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new LocalizacaoDep entity.
     *
     * @Route("/new", name="localizacaodep_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new LocalizacaoDep();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a LocalizacaoDep entity.
     *
     * @Route("/{id}", name="localizacaodep_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:LocalizacaoDep')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LocalizacaoDep entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing LocalizacaoDep entity.
     *
     * @Route("/{id}/edit", name="localizacaodep_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:LocalizacaoDep')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LocalizacaoDep entity.');
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
    * Creates a form to edit a LocalizacaoDep entity.
    *
    * @param LocalizacaoDep $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(LocalizacaoDep $entity)
    {
        $form = $this->createForm(new LocalizacaoDepType(), $entity, array(
            'action' => $this->generateUrl('localizacaodep_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing LocalizacaoDep entity.
     *
     * @Route("/{id}", name="localizacaodep_update")
     * @Method("PUT")
     * @Template("AppBundle:LocalizacaoDep:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:LocalizacaoDep')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LocalizacaoDep entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('localizacaodep_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a LocalizacaoDep entity.
     *
     * @Route("/{id}", name="localizacaodep_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:LocalizacaoDep')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find LocalizacaoDep entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('localizacaodep'));
    }

    /**
     * Creates a form to delete a LocalizacaoDep entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('localizacaodep_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
