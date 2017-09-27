<?php
namespace Simple\Http\Response;

/**
 * Response Interface
 * @author Isaque de Souza <isaquesb@gmail.com>
 */
interface ResponseInterface
{
    /**
     * @return string Raw Body
     */
    public function getRawBody();

    /**
     * @return integer HTTP Status
     */
    public function getHttpStatus();
}
