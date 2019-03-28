<?php


namespace App\Responder;


use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

/**
 * Class CreatePostResponder
 *
 * @package App\Responder
 */
class CreatePostResponder
{
    /**
     * @var \Twig\Environment
     */
    private $twig;

    /**
     * CreatePostResponder constructor.
     *
     * @param \Twig\Environment $twig
     */
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function __invoke()
    {
        return new Response($this->twig->render('create_post.html.twig'), Response::HTTP_OK);
    }
}