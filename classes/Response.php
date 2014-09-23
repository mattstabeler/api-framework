<?php
/**
 * Response class factory.
 * 
 * @package api-framework
 * @author  Martin Bean <martin@martinbean.co.uk>
 */
class Response
{
    /**
     * Constructor.
     *
     * @param string $data
     * @param string $format
     */

    public static function create($data, $format, $headers=null)
    {
        switch ($format) {
            case 'text/plain':
                $obj = new ResponseText($data, $headers);
                break;

            case 'application/json':
                $obj = new ResponseJson($data, $headers); // extends response text
                break;
                
            default:
                $obj = new ResponseJson($data, $headers); // extends response text                
            break;
        }
        return $obj;
    }
 
}