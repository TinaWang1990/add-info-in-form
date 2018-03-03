<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		.apple { color:red; }
		.pear  { color:yellow; }
		.watermelon { color:green; }
	</style>
</head>
<body>
	
<?php 
// class fruit{
// 		private $color;
// 		private $price;
// 		private $season;

// 	public function getColor(){
// 		return $this->color;
// 	}
// 	public function getPrice(){
// 		return $this->price;
// 	}
// 	public function getSeason(){
// 		return $this->season;
// 	}
// 	public function setColor($color){
// 		 $this->color=$color;
// 	}
// 	public function setPrice($price){
// 		 $this->price=$price;
// 	}
// 	public function setSeason($season){
// 		 $this->season=$season;
// 	}

// 	function __construct($color,$price,$season){
// 		$this->color=$color;
// 		$this->price=$price;
// 		$this->season=$season;
// 	}
// }


// $apple= new fruit('red','10','autumn');
// $pear=new fruit('yellow','20','winter');
// $watermelon=new fruit('green','30','summer');

// $list_fruits=[$apple,$pear,$watermelon];

// $AC=$list_fruits['0']->getColor();
// $AP=$list_fruits['0']->getPrice();
// $AS=$list_fruits['0']->getSeason();
// $PC=$list_fruits['1']->getColor();
// $PP=$list_fruits['1']->getPrice();
// $PS=$list_fruits['1']->getSeason();
// $WC=$list_fruits['2']->getColor();
// $WP=$list_fruits['2']->getPrice();
// $WS=$list_fruits['2']->getSeason();






// echo '<h1 >This is CSS and HTML and PHP assignment</h1>';

// echo '<ul class="apple"><li>Apple<ul>';
// echo '<li>color:'."$AC".'</li>';
// echo '<li>price:'."$AP".'</li>';
// echo '<li>season:'."$AS".'</li>';
// echo '</ul></li></ul>';

// echo '<ul class="pear"><li>Pear<ul>';
// echo '<li>color:'."$PC".'</li>';
// echo '<li>price:'."$PP".'</li>';
// echo '<li>season:'."$PS".'</li>';
// echo '</ul></li></ul>';

// echo '<ul class="watermelon"><li>Watermelon<ul>';
// echo '<li>color:'."$WC".'</li>';
// echo '<li>price:'."$WP".'</li>';
// echo '<li>season:'."$WS".'</li>';
// echo '</ul></li></ul>';









// if($_POST){
// 	$N=$_POST['name'];
// 	$C=$_POST['color'];
// 	$P=$_POST['price'];
// 	$S=$_POST['color'];
// 	if($N=='Apple'|| $N=='Pear'||$N=='Watermelon'){
// 		echo "Sorry, "."$N"." has exist, please try another one";
// 		}else{
// 		echo '<ul class="fruit4"><li>'."$N".'<ul>';
// 		echo '<li>color:'."$C".'</li>';
// 		echo '<li>price:'."$P".'</li>';
// 		echo '<li>season:'."$S".'</li>';
// 		echo '</ul></li></ul>';
// 		}
// 	}

?>

<form action="" method="post">
	<label for="name_id">
		Name:
	</label>
	<input type="text" id="name_id" name="name">
	<br>
	<label for="color_id">
		Color:
	</label>
	<input type="text" id="color_id" name="color">
	<br>
	<label for="price_id">
		Price:
	</label>
	<input type="text" id="price_id" name="price">
	<br>
	<label for="season_id">
		Season:
	</label>
	<input type="text" id="season_id" name="season">
	<br>
	<input type="submit" value="GO!">
</form>

<?php
class fruit{
		private $color;
		private $price;
		private $season;

	public function getColor(){
		return $this->color;
	}
	public function getPrice(){
		return $this->price;
	}
	public function getSeason(){
		return $this->season;
	}
	public function setColor($color){
		 $this->color=$color;
	}
	public function setPrice($price){
		 $this->price=$price;
	}
	public function setSeason($season){
		 $this->season=$season;
	}

	function __construct($color,$price,$season){
		$this->color=$color;
		$this->price=$price;
		$this->season=$season;
	}
}


$apple= new fruit('red','10','autumn');
$pear=new fruit('yellow','20','winter');
$watermelon=new fruit('green','30','summer');

$list_fruits=[$apple,$pear,$watermelon];

$AC=$list_fruits['0']->getColor();
$AP=$list_fruits['0']->getPrice();
$AS=$list_fruits['0']->getSeason();
$PC=$list_fruits['1']->getColor();
$PP=$list_fruits['1']->getPrice();
$PS=$list_fruits['1']->getSeason();
$WC=$list_fruits['2']->getColor();
$WP=$list_fruits['2']->getPrice();
$WS=$list_fruits['2']->getSeason();

$x=[
	'Apple'=>array($AC,$AP,$AS),
	'Pear'=>array($PC,$PP,$PS),
	'Watermelon'=>array($WC,$WP,$WS)
];

if(date('m')=="01"||date('m')=="02"||date('m')=="12"){
	$s="winter";
}else if(date('m')=="03"||date('m')=="04"||date('m')=="05"){
	$s="spring";
}else if (date('m')=="06"||date('m')=="07"||date('m')=="08"){
	$s="summer";
}else if (date('m')=="09"||date('m')=="10"||date('m')=="11"){
	$s="autumn";
}

echo '<ul>';
foreach ($x as $key => $value) {
	echo "<li>".$key."<ul>";
	$a=$value['0'];
	$b=$value['1'];
	$c=$value['2'];

	if($c==$s){
		$d=$b/2;
		echo "<li>".$a."</li>";
		echo "<li>".$d."</li>";
		echo "<li>".$c."</li>";
	}
	else{
	foreach ($value as $value1) {
		echo "<li>".$value1."</li>";
		}
	}
	echo "</ul></li>";
}
echo "</ul>";


?>

</body>
</html>