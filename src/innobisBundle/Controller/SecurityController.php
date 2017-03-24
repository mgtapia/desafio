<?php

namespace innobisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use innobisBundle\Entity\Forms;
use innobisBundle\Form\FormsType;
use innobisBundle\Entity\FormsAns;
use innobisBundle\Form\FormsAnsType;

class SecurityController extends Controller
{
	public function checkAction() {
		
	}
    public function formsAction()
    {
    	$forms = $this->getDoctrine()->getRepository("innobisBundle:Forms")->findAll();
    	return $this->render('innobisBundle:Default:forms.html.twig', array("forms"=>$forms));
    }
 	public function formAction($id)
    {
        $user = $this->getUser()->getId();       
        $formAns = $this->createCreateForm(new FormsAns());
        $form = $this->getDoctrine()->getRepository("innobisBundle:Forms")->find($id); 
        $ans = $this->getDoctrine()->getRepository("innobisBundle:FormsAns")->findAll(); 
        $check = $this->getDoctrine()->getRepository('innobisBundle:FormsAns')->findBy(array('formID' => $id, 'userID' => $user));

        if ($check) { $check = 'Si'; } else { $check = 'No'; }

    	return $this->render('innobisBundle:Default:form.html.twig', 
            array('form'=>$form, 'formAns'=>$formAns->createView(),'check'=>$check, 'ans'=>$ans));
    }
    private function createCreateForm(FormsAns $entity) 
    {
        $form = $this->createForm(new FormsAnsType(), $entity, array(
                'action' => $this->generateUrl('innobis_createform'),
                'method' => 'POST'
            ));
        return $form;
    }
    public function createAction(Request $request)
    {
        $formAns = new FormsAns();
        $form = $this->createCreateForm($formAns);
        $form->handleRequest($request);

        if($form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($formAns);
            $em->flush();

            $this->addFlash('mensaje','Se ha enviado tu respuesta');
            return $this->redirectToRoute('innobis_forms');
        }

       return $this->render('innobisBundle:Default:form.html.twig', array('form'=>$form->createView()));
    }
}
