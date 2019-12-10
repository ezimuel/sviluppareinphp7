<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

namespace App\Action;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface as ServerMiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;

class SpeakerAction implements ServerMiddlewareInterface
{
    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {
        $method = strtolower($request->getMethod());
        if (method_exists($this, $method)) {
            return $this->$method($request, $delegate);
        }
        return $response->withStatus(501); // Method not implemented
    }

    private function get(ServerRequestInterface $request, DelegateInterface $delegate)
    { }

    private function post(ServerRequestInterface $request, DelegateInterface $delegate)
    { }

    private function patch(ServerRequestInterface $request, DelegateInterface $delegate)
    { }

    private function delete(ServerRequestInterface $request, DelegateInterface $delegate)
    { }
}
