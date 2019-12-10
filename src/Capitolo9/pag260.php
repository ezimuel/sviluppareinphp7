<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

namespace App;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Psr\Http\Message\ServerRequestInterface;

trait RestDispatchTrait
{
    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {
        $method = strtolower($request->getMethod());
        if (method_exists($this, $method)) {
            return $this->$method($request, $delegate);
        }
        return $response->withStatus(501); // Method not implemented
    }
}
