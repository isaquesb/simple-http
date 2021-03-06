<?php
namespace Simple\Http\Request;

/**
 * Request Interface
 * @author Isaque de Souza <isaquesb@gmail.com>
 */
interface RequestInterface
{
    /**
     * @return string GET|POST|PUT|DELETE ...
     */
    public function getMethod();

    /**
     * @return string Complete URL
     */
    public function getUrl();

    /**
     * @return array
     */
    public function getParams();

    /**
     * @return array
     */
    public function getData();

    /**
     * @return integer
     */
    public function getTimeout();

    /**
     * @return string
     */
    public function getCharset();

    /**
     * @return array Associative
     */
    public function getHeaders();

    /**
     * @param string $method
     * @return RequestInterface
     */
    public function setMethod($method);

    /**
     * @param string $url
     * @return RequestInterface
     */
    public function setUrl($url);

    /**
     * @param array|\JsonSerializable $params
     * @return RequestInterface
     */
    public function setParams($params);

    /**
     * @param string $data
     * @return RequestInterface
     */
    public function setData($data);

    /**
     * @param int $timeout
     * @return RequestInterface
     */
    public function setTimeout($timeout);

    /**
     * @param string $charset
     * @return RequestInterface
     */
    public function setCharset($charset);

    /**
     * @param array $headers
     * @return RequestInterface
     */
    public function setHeaders(array $headers);

    /**
     * @param string $header
     * @param string $content
     * @return RequestInterface
     */
    public function setHeader($header, $content);
}
