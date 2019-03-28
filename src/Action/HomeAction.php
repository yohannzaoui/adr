<?php


namespace App\Action;


use App\Domain\Repository\PostRepository;
use App\Responder\HomeResponder;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomeAction
 *
 * @package App\Action
 */
class HomeAction
{
    /**
     * @var \App\Domain\Repository\PostRepository
     */
    private $repository;

    /**
     * HomeAction constructor.
     *
     * @param \App\Domain\Repository\PostRepository $repository
     */
    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/")
     *
     * @param \App\Responder\HomeResponder $responder
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function __invoke(HomeResponder $responder)
    {
       $posts = $this->repository->findAll();

       return $responder($posts);
    }
}