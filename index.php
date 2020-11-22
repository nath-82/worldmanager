<html>
    <head>
        <?php include_once 'includes.html'; ?>
        <title>Gutenberg Library of Australia Bookshelf Project</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <body>
        <div id="wrapper">
     
        <div id="header">
            <table border="0" cellpadding="5">
                <tr>
                    <td><img src="../../img/globe.png" alt=""/></td>
                    <td><h1>a Database to Manage the World</h1>
                    <p>Use the following links to navigate about the World<br>
                    </td>
                </tr>
            </table> 

        </div>
      
        
        <div id="main">

            <p><a href="world.php">Manage The World</a></p>
            <p>Table 1 below represents a summary of information included in this PHP web programming application.<br>
                You may use the links to explore the files and information.<br>
            <table class="table table-striped table-bordered">
               <col width=auto>
               <col width="40%">
               <col width="40%">
                <thead>
                    <tr>
                        <th>Section</th>
                        <th>Description</th>
                        <th>Links</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Project Pages</td>
                        <td>Projects such as:
                            <ul>
                                <li>Library</li>
                                <li>World</li>
                                <li>Conference</li>
                            </ul>
                        </td>
                        <td>Links<br>
                            <ul>
                                <li><a href="project/library/"> Library Project Home Page</a></li>
                                <li><a href="project/world/">Home Page for Controlling the World</a></li>
                                <li><a href="project/conference/">Conference Site</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Coding Information</td>
                        <td>Covers web technologies including:
                            <ul>
                                <li>HTML5</li>
                                <li>CSS</li>
                                <li>PHP</li>
                                <li>MySQL</li>
                                <li>jquery</li>
                                <li>bootstrap</li>
                                <li>OOP Object Oriented Programming</li>
                            </ul>
                        </td>
                        <td>Link</td>
                    </tr>
                    <tr>
                        <td>Assessment Task Information</td>
                        <td>Tasks from Moodle Learning Management System linked to the ICA11r2 Training Package</td>
                        <td>Link</td>
                    </tr>
                             <tr>
                                <td>country-list.php</td>
                                <td>List All The Countries</td>
                                <td><a href="country-list.php">Click Here to List Countries</a></td>
                              </tr>
                              <tr>
                                <td>country-detail.php</td>
                                <td>Details for an Individual Country</td>
                                <td>Click Here to See Country Details</td>
                              </tr>
                            <tr>
                                <td>language-list.php</td>
                                <td>A List of Lanuages</td>
                                <td>Click Here to See a List of Languages</td>
                            </tr>
                </tbody>
            </table>
            <p>The source code for these pages may be found at:</p>
            <ul><li><a href="." alt="The GIT Repository">The Git Repository</a></li></ul>
        </div>
                
        
    </body>
</html>
<?php
    include_once 'include/footer.php';
?>