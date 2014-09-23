<?php
/**
 * JSON response class.
 * 
 * @package api-framework
 * @author  Martin Bean <martin@martinbean.co.uk>
 */
class ResponseJson extends SimpleResponse
{
    /**
     * Response data.
     *
     * @var string
     */
    protected $data;
    
    /**
     * Render the response as JSON.
     * 
     * @return string
     */
    public function render()
    {
        $this->set_header("Content-Type", 'application/json');
        $this->send_headers();
        return json_encode($this->data);
    }
}