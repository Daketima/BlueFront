<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' ); 
/**
 * Class : BaseController (BaseController)
 * @author : Samet Aydın / sametay153@gmail.com
 * @version : 1.0
 * @since : 27.02.2018
 */
class Rest_API 
{
	public function __construct()
    {
        parent::__construct();
        //$this->load->library('session');
        //$this->load->library('curl');
    }
	
	public function getArticleInfo($id)
	{
		# code...

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://api.bluecollarhub.com.ng/api/v1/Article/".$id,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiJhZG1pbkBhZG1pbi5jb20iLCJqdGkiOiJiYWE2MTNjOC02MzQ4LTQzOTgtODk0MC1jNmZkOWYwNzUzYjkiLCJlbWFpbCI6ImFkbWluQGFkbWluLmNvbSIsImlkIjoiNDEiLCJuYmYiOjE1ODQzNjgzMzEsImV4cCI6MTU4NDM3MTkzMSwiaWF0IjoxNTg0MzY4MzMxfQ.2S8KLEZsb0XEnH45PryYPK3v2YVciUBB8TlLHiltnLI"
		  ),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;

	}
}
