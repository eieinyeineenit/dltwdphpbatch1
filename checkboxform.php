<?php
if(isset($_POST['buy'])){
    if($_SERVER['REQUEST_METHOD']=='POST')
        $fruits=$_POST["fruit"];{
        
        // var_dump($fruits);
        foreach($fruits as $fruit){
            echo "I bought {$fruit}" ."<br/>";
        }
    }

    }
?>

<!DOCTYPE html>
<html>
<head>
<title>Checkbox Form</title></head>


<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<label for="fruit">Fruits Shop</label><br/>
<input type="checkbox" name="fruit[]" id="fruit" class="" value="apple">Apple<br/>
<input type="checkbox" name="fruit[]" id="fruit" class="" value="orange">Orange<br/>
<input type="checkbox" name="fruit[]" id="fruit" class="" value="banana">Banana<br/>
<input type="checkbox" name="fruit[]" id="fruit" class="" value="grape">Grape<br/>
<input type="checkbox" name="fruit[]" id="fruit" class="" value="strawberry">Strawberry<br/>
<!--<input type="submit" name="buy" id="buy" class="" value="Buy">-->
<button type="submit" name="buy" id="buy" class="">Buy</button>
</form>
</body>
</html>