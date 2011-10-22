<?php

namespace Acme\FooBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return new Response('index');
    }

    public function barAction()
    {
        return new Response('bar');
    }

    public function generateAction()
    {
        return new Response($this->get('router')->generate('foo_generate'));
    }
}
