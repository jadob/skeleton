<?php

namespace App\Controller;

use Jadob\Core\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * This is example controller.
 * @license MIT
 */
class HelloController extends AbstractController
{

    /**
     * Action MUST return Response class.
     * @throws \InvalidArgumentException
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function __invoke(): Response
    {
        return new Response($this->renderTemplate('index.html.twig'));
    }

}