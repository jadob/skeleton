<?php

declare(strict_types=1);

namespace App\Controller;

use Jadob\Core\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * This is example controller. The parent abstract class is not required as it contains only helper methods.
 */
final class HelloController extends AbstractController
{

    /**
     * Action MUST return Response class.
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \InvalidArgumentException|\Jadob\Container\Exception\ServiceNotFoundException
     */
    public function __invoke(): Response
    {
        return new Response($this->renderTemplate('index.html.twig'));
    }

}