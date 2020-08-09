<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttFoundation\Response;
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
        
        // teste de msg de erro e sucesso
        //return $this->render("usuario/sucesso.html.twig", [
        //    'fulano' => "Wanderson"
        //]);

    }

    /**
     * @Route("/salvar", methods={"POST"}, name="salvar")
     */
    public function salvar(Request $request): Response
    {
        return new Response("Implementar gravação ao banco de dados");
    }
}