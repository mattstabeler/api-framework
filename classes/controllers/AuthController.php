<?php
/**
 * Job Controller
 * 
 * @package api-framework
 * @author  Matt Stabeler <mstabeler@fta.co.uk>
 */
class AuthController extends AbstractController
{

    function set_response_auth($response){
        // checks the request for authentication methods, and sets response headers accordingly
        $response->set_header("X-MJS-MAGIC-AUTH-token", "Cheeseymccheese");
    }

    /***
    Checks that user is logged in before going any futher
    */ 
    function is_authorised($request, $level=0){
        /***
        does clever checking to see if current request is authorised at the given level. 
        Level 0 is any logged in user. 
        Level 1 is an engineer.
        Level 2 is a line manager
        Level 3 is magic. 
        */

        // print_r($request->headers);
        return true;

    }

}