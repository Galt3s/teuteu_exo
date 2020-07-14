<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController {
    /**
     * @Route("/index", name="default")
     * @return Response
     */

    public function index()
    {
        return $this->render('pages/index.html.twig', []);
    }

    /**
     * @Route("/about", name="about.index")
     * @return Response
     */

    public function about()
    {
        return $this->render('pages/about.html.twig', []);

    }
    /**
     * @Route("/contact", name="contact.index")
     * @return Response
     */

    public function contact ()
    {
        return $this->render('pages/contact.html.twig', []);
    }

}