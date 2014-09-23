<?php
/**
 * Job Controller
 * 
 * @package api-framework
 * @author  Matt Stabeler <mstabeler@fta.co.uk>
 */
class JobController extends AuthController
{

    /**
     * GET method.
     * 
     * @param  Request $request
     * @return string
     */
    public function get($request)
    {
        global $dbconn;

        if(!$this->is_authorised($request, 0)){
            throw new Exception("Not authorised to view Jobs");
        };

        switch (count($request->url_elements)) {
            case 1:
                $sql = "SELECT TOP 10 * FROM dbo.Job";
                $jobs = $dbconn->query($sql);
                return $jobs;
            break;
            case 2:
                // TODOP: MJS DO ACTUAL CHECKING!!!
                $sql = "SELECT TOP 10 * FROM dbo.Job WHERE Job_ID = " . $request->url_elements[1] . "";
                $jobs = $dbconn->query($sql);
                return $jobs;
            break;
        }
        // print_r($request->parameters);
        // $articles = $this->readArticles();
    }
    
    /**
     * POST action.
     *
     * @param  $request
     * @return null
     */
    public function post($request)
    {
        print_r($request->parameters);
        print_r($request->headers);
        $jobs = array();

        $jobs[] = array("ID" => "1");
        $jobs[] = array("ID" => "2");

        return $jobs;

    }

}