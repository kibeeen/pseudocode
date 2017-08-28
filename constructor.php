<?php  

	class Books {
		var $price;
		var $title;

		function setPrice($par){
			$this->price = $par;
		}

		function getPrice(){
			echo $this->price . " <br>";
		}

		function setTitle($par){
			$this->title = $par;
		}

		function getTitle(){
			echo $this->title . " <br>";
		}

		function __construct($par1, $par2) {
			$this->title = $par1;
			$this->price = $par2;
		}


	}

	Class Novel extends Books {

		var $publisher;

		function setPublisher($par){
			$this->publisher = $par;
		}

		function getPublisher($par){
			echo $this->publisher . "<br> ";
		}

		function getPrice(){
			echo $this->price . "<br>";
			return $this->price;
		}

		function getTitle(){
			echo $this->title . "<br>";
			return $this->title;
		}
	}



	}

	
	

	$physics = new Books('Physics for High School', 10);

	$physics->getTitle();
	$physics->getPrice();

?>