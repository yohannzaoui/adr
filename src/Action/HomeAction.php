<?php


namespace App\Action;


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
     * @Route("/")
     * @param \App\Responder\HomeResponder $responder
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function __invoke(HomeResponder $responder)
    {
       $test = "bonjour";

       return $responder($test);
    }
}