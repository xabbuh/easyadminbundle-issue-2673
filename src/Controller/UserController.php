<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\UserType;
use App\Entity\User;

class UserController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function number(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() and $form->isValid())
        {
            echo 'VALID!';
        }
        return $this->render('user.html.twig', ['form' => $form->createView()]);
    }
}
