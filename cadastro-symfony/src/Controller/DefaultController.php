<?php


namespace App\Controller;

class DefaultController {
    
    public function index() {

        /**
         * @Route("/", methods={"POST", "GET"})
         */

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
