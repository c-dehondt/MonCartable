<?php

namespace userBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use userBundle\Entity\user;

class userController extends Controller
{
    /**
     * @Route("/", name="user")
     */
    public function indexUserAction()
    {
       
        return $this->render('userBundle:User:index.html.twig');
    }

    /**
     * @Route("/profil", name="profil")
     */
    public function profilAction()
    {
       
        return $this->render('userBundle:User:profil.html.twig');
    }
    
}
