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
        $data = $request->request->all();

        $usuario = new Usuario;
        $usuario->setNome($data['nome']);
        $usuario->setEmail($data['email']);


        $doctrine = $this->getDoctrine()->getManager();
        $doctrine->persist($usuario);
        $doctrine->flush();

        
        if ( $usuario->getId() )
        {
            return $this->render("usuario/sucesso.html.twig", [
                "fulano" => $data['nome']
            ]);
        } else {
            return $this->render("usuario/erro.html.twig", [
                "fulano" => $data['nome']
            ]);
        }

    }
}