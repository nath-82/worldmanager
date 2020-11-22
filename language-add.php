<?php

include_once 'class/mysqli_crud.php';
?>

<?php
$cn = mysqli_connect("localhost","root","","world");
$sql = "select * from countrylanguage order by CountryCode";
$result=mysqli_query($cn,$sql);

//query to show all country codes in form
        $db = new Database();
        $db->connect();
        $db->sql("SELECT * FROM countrylanguage group by CountryCode ORDER BY CountryCode"); //$table, $rows = '*', $join = null, $where = null, $order = null, $limit = null
        $res = $db->getResult(); // return result array to $res
        /*echo '<pre>';print_r($db);echo '</pre>';*/
        $amountr = $db->numRows();
$testmyconn = new mysqli( "localhost", "root", "", "world" );
echo '<pre>';print_r($testmyconn);echo '</pre>';
$countrytest = $testmyconn->real_escape_string('test');
echo $countrytest;


$db = new Database();
$db->connect();
$escape = $db->escaper(";select\ \"* from world;");
echo $escape;




//This is the part to post the info to the database

    if (isset($_POST['Language'])){
        $CountryCode = mysqli_real_escape_string($cn,$_POST['CountryCode']);
        $Language = mysqli_real_escape_string($cn,$_POST['Language']);
        $IsOfficial = mysqli_real_escape_string($cn,$_POST['IsOfficial']);
        $Percentage = mysqli_real_escape_string($cn,$_POST['Percentage']);
      
        $db2 = new Database();
        $db2->connect();
        $insert_status = $db2->insert('countrylanguage',array('CountryCode'=>"$CountryCode",'Language'=>"$Language",'IsOfficial'=>"$IsOfficial",'Percentage'=>"$Percentage")); 
       
       
      
        $res2 = $db2->getResult(); // return result array to $res
                 
        $amountr2 = $db2->numRows();
        if($insert_status==1) {
              
        
        echo "AddedLanguage: " . $Language . "<br>";
}
}
//Above is the bit to post to the database

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Add a New Language</title>
    </head>
<body>
    <table style="width: 400 ; border: 1">
        <tr>
            <td>
                <form method="post" action="language-add.php">
        Country: <select name="CountryCode">
        <?php
       
        for ($x=0;$x <  $amountr;$x++){
        echo '<option value="'.$res["$x"]['CountryCode'].'">'.$res["$x"]['CountryCode'].'</option>';
        }
        ?>
        </select><br>
        <label for="Language">Language:</label>
        <input type="text" size="80" name="Language" id="Language"><br>
        <label for="IsOfficial">Is Official:</label>
        <input type="text" size="80" name="IsOfficial" id="IsOfficial"><br>
        <label for="Percentage">Percentage:</label>
        <input type="text" size="80" name="Percentage" id="Percentage"><br>
        <input type="submit">
    </form>
            </td>
        </tr>
    </table>
</body>
</html>