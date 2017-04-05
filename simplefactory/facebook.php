<?php
   
   #simple factory
  class facebook {
        public function creatmodel(){
		       return new post();		
		} 
  }
  
  class post {
      private $author;
	  private $message;
      
	  public function setAuthor($authorName){
	         $this->author = $authorName;
	  }

	  public function getAuthor(){
	         return $this->author;	   
	  }

	  public function setMessage($message) {
	         $this->message = $message;
	  }

	  public function getMessage(){
	         return $this->message;
	  } 
  
  }
 


?>
