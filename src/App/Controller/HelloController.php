<?php

declare(strict_types=1);

namespace App\Controller;

use Jadob\Core\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

final readonly class HelloController
{
    /**
     * Action MUST return Response class.
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \InvalidArgumentException|\Jadob\Container\Exception\ServiceNotFoundException
     */
    public function __invoke(
        Environment $twig,
    ): Response
    {
        return new Response(
            $twig->render('index.html.twig', [
                'phpVersion' => PHP_VERSION,
                'appEnv' => $_ENV['APP_ENV'],
            ])
        );
    }

}