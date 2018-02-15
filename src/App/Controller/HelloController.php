<?php

namespace App\Controller;

use Jadob\MVC\Controller\AbstractController;

/**
 * This is example controller.
 * Extending AbstractController is not required, but this gives you some additional methods that you can use.
 * @package App\Controller
 * @author pizzaminded <miki@appvende.net>
 * @license MIT
 */
class HelloController extends AbstractController
{
    /**
     * Action MUST have 'Action' suffix, and it MUST return Response class.
     * @throws \InvalidArgumentException
     * @throws \Jadob\Container\Exception\ServiceNotFoundException
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->renderTemplateResponse('@App/index.html.twig');
    }

    /**
     * This one takes parameter defined in URI
     * @param string $name
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \InvalidArgumentException
     * @throws \Jadob\Container\Exception\ServiceNotFoundException
     */
    public function helloAction($name)
    {
        return $this->renderTemplateResponse('@App/hello.html.twig',[
            'name' => $name
        ]);

    }

}