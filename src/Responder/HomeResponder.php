<?php


namespace App\Responder;


use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

/**
 * Class HomeResponder
 *
 * @package App\Responder
 */
class HomeResponder
{
    /**
     * @var \Twig\Environment
     */
    private $twig;

    /**
     * HomeResponder constructor.
     *
     * @param \Twig\Environment $twig
     */
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @param $posts
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function __invoke($posts)
    {
        return new Response($this->twig->render('home.html.twig', ['posts' => $posts]), Response::HTTP_OK);
    }
}