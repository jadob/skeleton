<?php

namespace App\Controller;

use Jadob\Core\ControllerUtils;
use Symfony\Component\HttpFoundation\Response;

/**
 * This is example controller.
 * @package App\Controller
 * @author pizzaminded <miki@appvende.net>
 * @license MIT
 */
class HelloController
{

    /**
     * @var ControllerUtils
     */
    protected $utils;

    /**
     * HelloController constructor.
     * @param ControllerUtils $utils
     */
    public function __construct(ControllerUtils $utils)
    {
        $this->utils = $utils;
    }


    /**
     * Action MUST return Response class.
     * @throws \InvalidArgumentException
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        return new Response($this->utils->renderTemplate('@App/index.html.twig'));
    }

    /**
     * This one takes parameter defined in URI
     * @param string $name
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \InvalidArgumentException
     */
    public function hello($name)
    {
        return new Response($this->utils->renderTemplate('@App/hello.html.twig', [
            'name' => $name
        ]));

    }

}