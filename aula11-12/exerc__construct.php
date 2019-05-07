
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP__construct</title>

</head>
<body>

<?php
class House{
    public $name;
    public $color;
    public function __construct($name, $color){
        $this -> name = $name;
        $this -> color = $color;
    }


    public function echoData(){
        echo "the color of the {$this -> name} is {$this -> color}";
    }
}


$blackhouse = new House ("john´house","black");
$blackhouse -> echoData();

?>
	

</body>
</html>