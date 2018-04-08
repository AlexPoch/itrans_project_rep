<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class WelcomeController extends Controller
{
    /**
     * @Route("/welcome", name="welcome")
     */
    public function index()
    {
        return $this->render('welcome/index.html.twig', [
            'controller_name' => 'WelcomeController',
        ]);
    }

    /**
     * @Route("/{lucky_number}",
     *      name="hello_page",
     *     defaults={"lucky_number" = "Simple number"}
     * )
     * @param string $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function hello(Request $request)
    {
        return $this->render('hello_page.html.twig',
            [
                'lucky_number' => $request->query->get('lucky_number', 'i don\'t have a lucky number '),
            ]);
    }
}
