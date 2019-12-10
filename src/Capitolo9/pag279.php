<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

namespace Conference\V1\Rest\Speaker;

use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;

class SpeakerResource extends AbstractResourceListener
{
    /**
     * Create a resource
     *
     * @param mixed $data
     * @return ApiProblem|mixed
     */
    public function create($data)
    {
        return new ApiProblem(405, 'The POST method has not been defined');
    }
    /**
     * Delete a resource
     *
     * @param mixed $id
     * @return ApiProblem|mixed
     */
    public function delete($id)
    {
        return new ApiProblem(405, 'The DELETE method has not been defined for individual resources');
    }
    /**
     * Delete a collection, or members of a collection
     *
     * @param mixed $data
     * @return ApiProblem|mixed
     */
    public function deleteList($data)
    {
        return new ApiProblem(405, 'The DELETE method has not been defined for collections');
    }
    /**
     * Fetch a resource
     *
     * @param mixed $id
     * @return ApiProblem|mixed
     */
    public function fetch($id)
    {
        return new ApiProblem(405, 'The GET method has not been defined for individual resources');
    }
    /**
     * Fetch all or a subset of resources
     *
     * @param array $params
     * @return ApiProblem|mixed
     */
    public function fetchAll($params = [])
    {
        return new ApiProblem(405, 'The GET method has not been defined for collections');
    }
    /**
     * Patch (partial in-place update) a resource
     *
     * @param mixed $id
     * @param mixed $data
     * @return ApiProblem|mixed
     */
    public function patch($id, $data)
    {
        return new ApiProblem(405, 'The PATCH method has not been defined for individual resources');
    }
    /**
     * Patch (partial in-place update) a collection or members of a collection
     *
     * @param mixed $data
     * @return ApiProblem|mixed
     */
     public function patchList($data)
     {
         return new ApiProblem(405, 'The PATCH method has not been defined for collections');
     }
     /**
      * Replace a collection or members of a collection
      *
      * @param mixed $data
      * @return ApiProblem|mixed
      */
     public function replaceList($data)
     {
         return new ApiProblem(405, 'The PUT method has not been defined for collections');
     }
     /**
      * Update a resource
      *
      * @param mixed $id
      * @param mixed $data
      * @return ApiProblem|mixed
      */
     public function update($id, $data)
     {
         return new ApiProblem(405, 'The PUT method has not been defined for individual resources');
     }
}
