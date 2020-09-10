<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        echo "Construct"."<br>";
    }
    
	public function index()
	{
		echo "Report Index"; 
    }
    
    public function _hello()
	{
		echo "Hello World"; 
    }
    
    public function showname($name=null)
    {
        echo "My name is" .$name;
    } 

    public function showlastname($name=null,$lastname=null)
    {
        echo "My name is" .$name." ".$lastname."</br>";
        $this->_hello();
    } 

    public function showview(){
        $this->load->view("hello_view");
        $this->load->view("hello_view");
        $this->load->view("hello_view");

    }
    
    public function showuser(){
        $data['name'] = "Visansaya";
        $data['lastname'] = "Lerdwongchathchawarn";
        $data['age'] = 23;
        $this->load->view("user_page",$data);
    }
    
    public function getuser($p1=null,$p2=null,$p3=null){
        $data['name'] = $p1;
        $data['lastname'] = $p2;
        $data['age'] = $p3;
        $this->load->view("user_page",$data);
}

public function showbooks(){
    $data['books'] = array("Java","Kotlin","PHP");
        $this->load->view("book_page",$data);
        
}
}