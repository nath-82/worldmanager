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
            ?>
                <p>Use the <b>World Menu</b> to perform tasks in the Database.</p>
<!--START OF PAGE CODE-->

            <br>&nbsp;
            <p>A List of the Files in the Directory</p>
                <ul>
                <?php
                $dir = '.';
                $files = scandir($dir);
                foreach($files as $ind_file){
                ?>
                    <li><a href="<?php echo $dir."/".$ind_file;?>"><?php echo $ind_file;?></a></li>
                <?php
                }
                ?>
                </ul> 
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
