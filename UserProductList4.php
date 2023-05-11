
<?php
error_reporting(0);
ob_start();
session_start();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
        <title>Project Guidance And Management System</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <!--[if IE 6]>
                <script type="text/javascript" src="unitpngfix.js"></script>
        <![endif]-->
    </head>
    <body>
        <table width ="880" align="center" cellspasing="0" cellpadding="0">
            <tr>
                <td>
                    <?php
                    include 'admin.php';
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="880" align="center" cellspasing="0" cellpadding="0">
                        <tr>

                            <td width="880" align="center">
                                <table  style="background:#ccccff;" width="590"align="center" cellspasing="0" cellpadding="0">
                                    <tr>
                                        <td  height="500" valign="top" style="padding-left: 50px;">
                                            <form action="ProductSave.php" method="post" enctype="multipart/form-data">
                                                <div style="height: 500px;width: 820px;overflow: auto;">
                                                    <table cellpadding="5" cellspacing="5" border="0">
                                                        <tr>
                                                            <td class="text1" colspan="2">Freelancer&nbsp;&nbsp;Project&nbsp;List...</td>
                                                        </tr>
                                                        <tr align="center">
                                                   
                                                            <td class="heading_lable">Project Name</td>
                                                            <td class="heading_lable">Project Categrory</td>
                                                            <td class="heading_lable">Discription</td>
                                                            <td class="heading_lable">User Name</td>
                                                            <td class="heading_lable">Biddng</td>

                                                        </tr>
                                                        <?php
                                                        include_once "connection/dbconfig.php";
                                                        $user_id1 = "";
                                                        $user_id1 = $_GET['type'];
                                                        ?>
                                                        <?php
                                                        $result = mysql_query("select * from review where a2 = '$user_id1'");
                                                        while ($row = mysql_fetch_array($result)) {
                                                            $ctr++;
                                                        ?>
                                                            <tr>
                                                              
                                                                <td><?php echo $row['a1']; ?></td>
                                                                <td><?php echo $row['a2']; ?></td>
                                                                <td><?php echo $row['a3']; ?></td>
                                                                <td><?php echo $row['a4']; ?></td>
     <td><?php echo $row['a6']; ?></td>
                                                           
                                                            </tr>

                                                        <?php
                                                        }
                                                        ?>

                                                    </table>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <div class="element">

                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="clear"></div>


                    <div id="footer">

                  <p>Developed By: Project Guidance And Management System
                                                                                        Copy right @2023 </p>   </div>




                </td>
            </tr>
        </table>
    </body>
