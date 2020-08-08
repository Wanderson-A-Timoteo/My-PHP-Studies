<?php

namespace App\Controller;

use Symfony\Controller\Routing\Annotation\Route;

/**
 * @Route("/api/v1", name="api_v1_usuario_)
 */
class UsuarioController extends AbstractController
{
    /**
     * @Route("/", methods={"GET"}, name="index")
     */
    public function index(): Response 
    {
        return $this->render("usuario/form.html.twig");
    }

    /**
     * @Route("/salvar", methods={"POST"}, name="salvar")
     */
    public function salvar(): Response
    {
        return new Response("Implementar gravação ao banco de dados");
    }
}