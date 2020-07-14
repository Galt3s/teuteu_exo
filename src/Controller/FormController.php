<?php
namespace App\Controller;

use App\Entity\Form;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;


class FormController extends AbstractController
{
    public function new(Request $request)
    {
        // creates a form object and initializes some data for this example
        $contact = new form();
        $form = $this->createFormBuilder($contact)
            ->add('formulaire', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Create form'])
            ->getForm();

        return $this->render('pages/contact.html.twig', [
            'form' => $form->createView(),
        ]);    }
}
