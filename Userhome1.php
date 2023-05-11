
<?php
error_reporting(0);
ob_start();
session_start();
?>
<script type="text/javascript" src="js/scw.js"></script>
<script type="text/javascript">
    //function for balnk field
    function validate(){
        var  img = document.getElementById('fileimage');
        if(img.value.trim() == ""){
            alert('Please select image.!!');
            img.focus();
            return false;
        }
    }


</script>
<script type="text/javascript">
    function validate(){

        var name = document.getElementById("txt_name").value;
        if(name == ""){
            alert('Name field cannot be blank.');
            return false;
        }
        var dob = document.getElementById("txt_dob").value;
        if(dob == ""){
            alert('Please Enter Your Date Of Birth.');
            return false;
        }
        var gender = document.getElementById("txt_gndr").value;
        if(gender=="na")
        {
            alert('Please select a gender');
            return false;
        }
        var phone = document.getElementById("txt_phone").value;
        if(phone == ""){
            alert('Please Enter Your Contact Number.');
            return false;
        }
        var Contact_as = document.getElementById("txt_cntas").value;
        if(Contact_as == ""){
            alert('Please Select Contact As.');
            return false;
        }
        var Email = document.getElementById("txt_eml").value;
        if(Email  == ""){
            alert('Please Enter Your Email.');
            return false;
        }
        var a = document.getElementById("txt_pass").value;
        if(a == ""){
            alert('Password field cannot be blank.');
            return false;
        }
        var b = document.getElementById("txtcpass").value;
        if(b == ""){
            alert('Confirm Password field cannot be blank.');
            return false;
        }
        if(a != b){
            alert('Confirm password does not matched.');
            return false;
        }
    }

    //check for Integer
    function checkInteger(i)
    {
        if(i.value.length>0)
        {
            i.value = i.value.replace(/[^\d]+/g, '');


        }

    }
</script>
<script type="text/javascript" src="js/scw.js"></script>
<script type="text/javascript">
    function contact(i)
    {
        if(i.value.length>0)
        {
            i.value = i.value.replace(/[^\d]+/g, '');

        }
    }
    function CheckForAlphabets(elem)
    {
        var alphaExp = /^[a-z A-Z]+$/;
        if(elem.value.match(alphaExp)){
            return true;
        }else{
            alert("give alphabatic name ");
            return false;
        }
    }
    function mob()
    {
        var rl=document.getElementById("txt_phone").value;
        if(rl.toString().length<10)
        {
            alert("Contact No. should be of ten digits");
            return false;
        }

    }
</script>
<script type="text/javascript">
    function valid() {
        //alert('calling');
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        // var address = document.forms[form_id].elements[txtemail_id].value;
        var address = document.getElementById('txt_eml').value;
        if(reg.test(address) == false) {
            alert('Invalid Email Address');
            return false;
        }
    }
</script>
<script type="text/javascript">

    function pin()
    {
        var rl=document.getElementById("txtpwd").value;
        if(rl.toString().length<6)
        {
            alert("Pin Number should be of Six digits");
            return false;
        }

    }

</script>
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
                    include 'header.php';
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
                                                            <td class="text1" colspan="2">Project&nbsp;List...</td>
                                                        </tr>
                                                        <tr align="center">
                                                          
                                                            <td class="heading_lable">Product ID</td>
                                                            <td class="heading_lable">Product Name</td>
                                                            <td class="heading_lable">Date</td>
                                                            <td class="heading_lable">Category</td>
                                                            <td class="heading_lable">Description</td>
                                                            <td class="heading_lable">Project</td>

                                                        </tr>
                                                        <?php
                                                        include_once "connection/dbconfig.php";
                                                        $user_id1 = "";
                                                        $user_id1 = $_GET['type'];
                                                        ?>
                                                        <?php
                                                        $result = mysql_query("select * from product where a3 = '$user_id1'");
                                                        while ($row = mysql_fetch_array($result)) {
                                                            $ctr++;
                                                        ?>
                                                            <tr>
                                                          <td align="center"><?php echo $ctr; ?></td>
                                                                <td><?php echo $row['a1']; ?></td>
                                                                <td><?php echo $row['a2']; ?></td>
                                                                <td><?php echo $row['a3']; ?></td>
                                                                <td><?php echo $row['a4']; ?></td>
                                                                <td><a href="uploadimage/<?php echo $row ['a6']; ?>">Downloads</a></td>

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
