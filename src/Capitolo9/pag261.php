<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

use App\RestDispatchTrait;
use Interop\Http\ServerMiddleware\MiddlewareInterface as ServerMiddlewareInterface;

class SpeakerAction implements ServerMiddlewareInterface
{
    use RestDispatchTrait;
    
    private function get(ServerRequestInterface $request, DelegateInterface $delegate)
    { }

    private function post(ServerRequestInterface $request, DelegateInterface $delegate)
    { }

    private function patch(ServerRequestInterface $request, DelegateInterface $delegate)
    { }

    private function delete(ServerRequestInterface $request, DelegateInterface $delegate)
    { }
}
