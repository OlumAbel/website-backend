<?php 
$y = 22;

function myfunction() {
   echo $GLOBALS ["y"];
}
myfunction();

echo"<br>";

function myfunctions() {
    $y =  22;
    echo $y;
}
myfunction();

echo"<br>";

// 28 November 2024;
echo$_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];

echo"<br>";

// Single quite and double quote difference
$z= "mary";
echo "Hello $z";
echo 'Hello $z';
echo"<br>";
echo "Hello $z"

?>

<from action="<?php echo $_SERVER['PHP_SELH'] ?>"
method= POST >
<br><br>
<input type= 'text' placeholder= 'First Name' name=fname>
<br><br>
<input type='text' placeholder="Last Name" name=Lname>
<br><br>

// got lost from here
<botton type="submit">submit</botton
>
//form
<?php
$First_name = last_name '';
// initialise version to empty string

if($_SERVER['REQUEST_METHOD']=='POST');
    //checking if form is submitted via post method
    $First_name = htmlspecialchars ($_POST[fname]);
    //$_POST['fname'] holds form data of form that used postmethod
    //htmlspacialchars help to prevent malicious codes
    $last_name = $_POST['lname'];

echo "<h2> Good afternoon $First_name $Last_name" </
h2>";
//<script>malicious code displayed as plain text</script>
