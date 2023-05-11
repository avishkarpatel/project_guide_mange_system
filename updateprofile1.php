<?php
error_reporting(0);
ob_start();
session_start();
header("Pragma: no-cache");
header("Cache: no-cahce");
$user_id = "";
$user_id = $_SESSION['NAME'];
if ($user_id != '') {

    include_once "connection/dbconfig.php"; //Connection */
?>
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
                    include 'admin.php';
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="880" align="center" cellspasing="0" cellpadding="0">
                        <tr>
                            <td width="280" >
                                <table widht="280" align="center" cellspasing="0" cellpadding="0">
                                    <tr>
                                        <td>
                                            <div class="right-bar">
                                                <?php
                                                include 'news.php';
                                                ?>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td width="590" align="center">
                                <table  style="background:#ccccff;" width="590"align="center" cellspasing="0" cellpadding="0">
                                    <tr>
                                        <td  height="500" valign="top" style="padding-left: 50px;">
                                            <form id="frm" action="profilesetting1.php" method="post">
                                                <table align="center" cellpadding="5" cellspacing="5">
                                                    <tr>
                                                        <td class="text1" colspan="2">Update Your Account</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" valign="middle" align="center">
                                                            <?php
                                                            if ($_SESSION['MSG'] != '') {
                                                                echo '<div class="msgbox">' . $_SESSION['MSG'] . '</div>';
                                                                $_SESSION['MSG'] = "";
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                            $query = "select * from employee where name = '$user_id'";
                                                            $result = mysql_query($query);
                                                            while ($row = mysql_fetch_array($result)) {
                                                    ?>
                                                                <tr>
                                                                    <td class="text">Name:</td>
                                                                    <td class="text"><input type="text"  id="txt_name" name="txt_name" style="width: 250px; height: 25px;" readonly value="<?php echo $row ['name']; ?>"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text">DOB:</td>
                                                                    <td class="text"><input type="text"  id="txt_dob" name="txt_dob"style="width: 250px; height: 25px;" readonly value="<?php echo $row ['dob']; ?>"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text">Gender:</td>
                                                                    <td class="text">
                                                                        <select   id="txt_gndr" name="txt_gndr" style="width: 250px; height: 25px;">
                                                                            <option value="select"> - - - -Select - - - - </option>
                                                                            <option value="Male">Male</option>
                                                                            <option value="Female">Female</option>
                                                                            <option value="<?php echo $row ['gender']; ?>" selected><?php echo $row ['gender']; ?></option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text">Phone</td>
                                                                    <td><input type="text"  id="txt_phone" name="txt_phone" style="width: 250px; height: 25px;" value="<?php echo $row ['phone']; ?>"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text">Location:</td>
                                                                    <td class="text"><input type="text"  id="txt_adrs" name="txt_adrs" style="width: 250px; height: 25px;"  value="<?php echo $row ['address']; ?>"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text">City:</td>
                                                                    <td class="text"><input type="text" id="txt_cntas" name="txt_cntas" style="width: 250px; height: 25px;"  value="<?php echo $row ['contact_as']; ?>"></td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="text">Email:</td>
                                                                    <td class="text"><input type="text"  id="txt_eml" name="txt_eml" style="width: 250px; height: 25px;"  value="<?php echo $row ['email']; ?>"></td>
                                                                </tr>
                                                                 <?php
                                                }
                                        ?>

                                                                <tr>
                                                                    <td align="center" colspan="2">
                                                                        <input type="submit" class="button" value="Submit" >
                                                                        <input type="reset" class="button" value="Reset">
                                                                    </td>
                                                                </tr>
                                                            </table>
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
                                                                                        Copy right @2023 </p></div>




                            </td>
                        </tr>
                    </table>
                </body>
    <?php
                                                            } else {
                                                                $_SESSION['MSG'] = "You must be login"; //set message in sessiong
                                                                header("location:index.php");
                                                            }
    ?>