
<?php
header('Content-Type: text/html; charset=iso-8859-1');
?>
<html>
    <head>
        <?php include_once 'includes.html'; ?>
        <title>A Database to Manage the World</title>
        <meta charset="utf-8">
    </head>
    <?php
        include_once 'include/dbcon-world.php';
        include_once 'class/mysqli_crud.php';
    ?>
<html>
    <body>
        <div id="wrapper" class="header">
            <img src="img/world.png" alt=""/>
            <h3>World CRUD Project</h3>
             <h2>Create, Retrieve, Delete and Update the World</h2>
            <div id="tablelayout">
            <?php
                include_once 'include/menu1.html';
            ?>
                <p>Use the <b>World Menu</b> to perform tasks in the Database.</p>
<!--START OF PAGE CODE-->
        <h1>Table - Country Details</h1>
        <h3>This table shows the details for the selected country</h3>
        
<?php
    if (isset($_GET['Code'])) {
        $code = $_GET['Code'];
        
        /*new code*/
         $db = new Database();
         $db->connect();
         $db->select('country','*',null,"Code = '$code'",'name ASC' ); //$table, $rows = '*', $join = null, $where = null, $order = null, $limit = null      
         $res = $db->getResult(); // return result array to $res
                 
         $amountr = $db->numRows();

                            
        
        
        
        

        }

echo "<table class=\"table table-striped table-bordered table-hover\">
        <tr style=\"text-align: left\">
            <th>Item</th>
            <th>Details</th>
        </tr>";

                

for ($x=0;$x <  $amountr;$x++){
echo "<tr>
        <td>Code</td>
        <td>" . $res["$x"]['Code'] . "</td>
      </tr>
      <tr>
        <td>Name</td>
        <td>" . $res["$x"]['Name'] . "</td>
      </tr>
      <tr>
        <td>Continent</td>
        <td>" . $res["$x"]['Continent'] . "</td>
      </tr>
      <tr>
        <td>Region</td>
        <td>" . $res["$x"]['Region'] . "</td>
      </tr>
      <tr>
        <td>SurfaceArea</td>
        <td>" . $res["$x"]['SurfaceArea'] . "</td>
      </tr>
      <tr>
        <td>IndepYear</td>
        <td>" . $res["$x"]['IndepYear'] . "</td>
      </tr>
      <tr>
        <td>Population</td>
        <td>" . $res["$x"]['Population'] . "</td>
      </tr>
      <tr>
        <td>LifeExpectancy</td>
        <td>" . $res["$x"]['LifeExpectancy'] . "</td>
      </tr>
      <tr>
        <td>GNP</td>
        <td>" . $res["$x"]['GNP'] . "</td>
      </tr>
      <tr>
        <td>GNPOld</td>
        <td>" . $res["$x"]['GNPOld'] . "</td>
      </tr>
      <tr>
        <td>LocalName</td>
        <td>" . $res["$x"]['LocalName'] . "</td>
      </tr>
      <tr>
        <td>GovernmentForm</td>
        <td>" . $res["$x"]['GovernmentForm'] . "</td>
      </tr>
      <tr>
        <td>HeadOfState</td>
        <td>" . $res["$x"]['HeadOfState'] . "</td>
      </tr>
      <tr>
        <td>Capital</td>
        <td>" . $res["$x"]['Capital'] . "</td>
      </tr>
      <tr>
        <td>Code2</td>
        <td>" . $res["$x"]['Code2'] . "</td>
      </tr> 
";

}
?>
<!--END OF PAGE CODE-->
            </div>
            <?php
                include 'include/footer.php';
            ?>
        </div>
    </body>
</html>
<?php
include_once 'include/dbclose.php';
?>