<?php
//Research Pass objects
class researchPass {
	// Creating some properties (variables tied to an object)
            public $title;
            public $host;
            public $organisation;
            public $comment;
			public $favicon;
			public function __construct($title, $host, $organisation, $comment, $favicon) {
              $this->title = $title;
              $this->host = $host;
              $this->organisation = $organisation;
			  $this->comment = $comment;
			  $this->favicon = $favicon;
            }
			public function title() {
              return $this->title;
            }
			public function host() {
              return $this->host;
            }
			public function organisation() {
              return $this->organisation;
            }
			public function comment() {
              return $this->comment;
            }
			public function favicon() {
              return $this->favicon;
            }
            
	}

?>