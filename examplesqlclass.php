<!--**Select Example**

Use the following code to select * rows from the database using this class

```php-->
<?php
include_once('class/mysqli_crud.php');

/*$db = new Database();
$db->connect();
$db->select('CRUDClass'); // Table name
$res = $db->getResult();
echo '<pre>'; print_r($res); echo '</pre>';*/

/***Full SQL Example**

Use the following code to enter the full SQL query*/

/*include_once('class/mysqli_crud.php');
$db = new Database();
$db->connect();
$db->sql('SELECT id,name FROM CRUDClass');
$res = $db->getResult();
echo '<pre>'; print_r($res); echo '</pre>';

foreach($res as $output){
	echo $output["name"]."<br />";
}*/


/*
```
Use the following code to specify what is selected from the database using this class  [fixed & working]

```php
*/

/*
include_once('class/mysqli_crud.php');
$db = new Database();
$db->connect();
$db->select('CRUDClass','id,name',,'name="Name 1"','id DESC'); // Table name, Column Names, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
echo '<pre>'; print_r($res); echo '</pre>';
echo print_r($res);
*/



/*Use the following code to select rows using a join in the database using this class [fixed & working]

```php*/

/*include_once('class/mysqli_crud.php');
$db = new Database();
$db->connect();
$db->select('CRUDClass','CRUDClass.id,CRUDClass.name,CRUDClassChild.name','CRUDClassChild ON CRUDClass.id = parentId','CRUDClass.name="Name 1"','id DESC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
echo $db->getSql();
$res = $db->getResult();
echo '<pre>'; print_r($res); echo '</pre>';*/
?>
<!--/*```

**Update Example**

Use the following code to update rows in the database using this class [fixed & working]

```php*/-->
<?php
/*include_once('class/mysqli_crud.php');
$db = new Database();
$db->connect();
$db->update('CRUDClass',array('name'=>"Name 4",'email'=>"name4@email.com"),'id="7" AND name="Name 1"'); // Table name, column names and values, WHERE conditions
$res = $db->getResult();
echo '<pre>'; print_r($res); echo '</pre>';*/
?>

<!--**Insert Example**

Use the following code to insert rows into the database using this class [fixed & working]

```php-->
<?php
/*include_once('class/mysqli_crud.php');
$db = new Database();
$db->connect();
$db->insert('CRUDClass',array('name'=>'Name 5','email'=>'name5@email.com'));  // Table name, column names and respective values
$res = $db->getResult(); 
echo '<pre>'; print_r($res); echo '</pre>';*/

?>
<!--/*```

**Delete Example**

Use the following code to delete rows from the database with this class [fixed & working]

```php*/-->
<?php
/*include_once('class/mysqli_crud.php');
$db = new Database();
$db->connect();
$db->delete('CRUDClass','id=4');  // Table name, WHERE conditions
$res = $db->getResult();  
echo '<pre>'; print_r($res); echo '</pre>';*/
?>


<!--


<?php


    ?>