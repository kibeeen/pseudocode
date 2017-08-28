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
	}


	


	$physics = new Books;
	$math = new Books;
	$chemistry = new Books;


	$physics->setTitle('Quantum Physics and Sex');
	$math->setTitle('Breaking Bad');
	$chemistry->setTitle('Counting Millions');

	$physics->setPrice(995);
	$math->setPrice(285);
	$chemistry->setPrice(550);


	$physics->getTitle();
	$math->getTitle();
	$chemistry->getTitle();

	$physics->getPrice();
	$math->getPrice();
	$chemistry->getPrice();



?>