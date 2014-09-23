<?php
/**
 */
class ReponseText extends SimpleResponse
{
    /**
     * Response data.
     *
     * @var string
     */
    protected $data;
    
    /**
     * Constructor.
     *
     * @param string $data
     */
    public function __construct($data, $headers=null)
    {   
        $this->headers = array();
        if($headers){
            $this->headers = $headers;
        }
        $this->data = $data;
        return $this;
    }

   
    
    /**
     * Render the response as JSON.
     * 
     * @return string
     */
    public function render()
    {
        $this->set_header("Content-Type", 'text/plain');
        $this->send_headers();
        return json_encode($this->data);
    }
}