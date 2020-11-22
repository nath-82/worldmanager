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
                include_once 'class/mysqli_crud.php';
            ?>
                <p>Use the <b>World Menu</b> to perform tasks in the Database.</p>
<!--START OF PAGE CODE-->
                <p>Select some Links to See Details about each Country</p>
                <table class="table table-striped table-bordered table-hover">
                    <col width=auto>
                    <col width=auto>
                    <col width=auto>
                    <col width=auto>
                    <col width=auto>
                    <col width=auto>                    
                    <thead>
                        <tr>
                            <th>Country Code</th>
                            <th>Country Name</th>
                            <th>Population</th>
                            <th>Country Details</th>
                            <th>Cities</th>
                            <th>Languages</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $db = new Database();
                    $db->connect();
                    $db->select('country','*',null,null,'name ASC' ); //$table, $rows = '*', $join = null, $where = null, $order = null, $limit = null
                    $res = $db->getResult(); // return result array to $res
                 
                        $amountr = $db->numRows();

                             for ($x=0;$x <  $amountr;$x++){
                       
                        ?>   
                       
                        <tr>
                            <td><?php echo $res["$x"]['Code']; ?></td>
                            <td><?php echo $res["$x"]['Name']; ?></td>
                            <td><?php echo $res["$x"]['Population']; ?></td>
                            <td><a href="country-detail-do.php?Code=<?php echo $res["$x"]['Code']; ?>" >Country Details</a></td>                            
                            <td><a href="country-cities-do.php?Code=<?php echo $res["$x"]['Code']; ?>" >Cities</a></td>
                            <td><a href="country-language-do.php?Code=<?php echo $res["$x"]['Code']; ?>" >Languages</a></td>
                        </tr>       
                    <?php
                        
                    }
                  /*  $sql = "SELECT * "
                                . "FROM `country` "
                                . "ORDER BY `Name` ASC" ;
                        $result = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_array($result)) {

                    ?>      
                        <tr>
                            <td><?php echo $row['Code']; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Population']; ?></td>
                            <td><a href="country-detail-do.php?Code=<?php echo $row['Code']; ?>" >Country Details</a></td>                            
                            <td><a href="country-cities-do.php?Code=<?php echo $row['Code']; ?>" >Cities</a></td>
                            <td><a href="country-language-do.php?Code=<?php echo $row['Code']; ?>" >Languages</a></td>
                        </tr>       
                    <?php
                        } */
                    ?>
                    </tbody>
                </table>
<!--END OF PAGE CODE-->
            </div>
            <?php
                include 'include/footer.php';
            ?>
        </div>
    </body>
</html>
<?php
/*include_once 'include/dbclose.php';*/
    $db->disconnect();
?>
