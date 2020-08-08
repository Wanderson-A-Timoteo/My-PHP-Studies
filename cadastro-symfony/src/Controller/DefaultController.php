<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController 
{
    /**
     * @Route("/", methods={"POST", "GET"})
     */

    public function index() 
    {
        $resp = new response();
        $resp->setContent(json_decode(
            [
                "Recebido" => $request->get('nome'),
                "ip" => $request->getClientIP()        
            ]  
        ));
        $resp->setStatusCode(200);

        return $resp;
    }
}
