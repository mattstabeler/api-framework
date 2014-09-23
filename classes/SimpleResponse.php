<?php
/**
 */
class SimpleResponse
{
    /**
     * Response data.
     *
     * @var string
     */
    protected $data;

    protected $headers;
    
    /**
     * Constructor.
     *
     * @param string $data
     */
    public function __construct($data, $headers=null)
    {   
     
        $this->headers = array();

        if(is_array($headers)){
            $this->set_headers($headers);
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
        $this->send_headers();
        return $this->data;
    }

    public function send_headers(){
        foreach($this->headers as $header=>$value){
            header($header . ": " . $value);
        }
    }

    public function set_header($header, $value){
        $this->headers[$header] = $value;
    }


    public function remove_header($header){
        unset($this->headers[$header]);
    }

    public function set_headers($header_array){
        foreach($header_array as $header=>$data){
            $this->headers[$header] = $data;
        }
    }   

}