<?php


namespace App\Action;


use App\Responder\CreatePostResponder;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CreatePostAction
 *
 * @package App\Action
 */
class CreatePostAction
{
    /**
     * @Route(path="/post/create", name="create_post", methods={"GET", "POST"})
     *
     * @param \App\Responder\CreatePostResponder $responder
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function __invoke(CreatePostResponder $responder)
    {
        return $responder();
    }
}