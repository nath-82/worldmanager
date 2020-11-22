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
        /*$sql = "SELECT * FROM city WHERE `CountryCode` = '" . $code . "'" ;
        $result = mysqli_query($con,$sql);*/
        $db = new Database();
                    $db->connect();
                    $db->select('city','*',null,"CountryCode = '$code'",'null' ); //$table, $rows = '*', $join = null, $where = null, $order = null, $limit = null
                    $res = $db->getResult(); // return result array to $res
                 
                        $amountr = $db->numRows();

                             /*for ($x=0;$x <  $amountr;$x++){*/
        }
?>
<?php
echo "<table class=\"table table-striped table-bordered table-hover\">
        <tr style=\"text-align: left\">
            <th>Country Code</th>
            <th>City Name</th>
            <th>City Population</th>
        </tr>";
/*while ($row = mysqli_fetch_array($result)) {*/
for ($x=0;$x <  $amountr;$x++){
    echo "<tr>";    
        echo "<td>" . $res["$x"]['CountryCode'] . "</td>";
        echo "<td>" . $res["$x"]['Name'] . "</td>";
        echo "<td>" . $res["$x"]['Population'] . "</td>";
    echo "</tr>";
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
