<?php
session_start();
include 'connection.php';
include 'header.php';
?>


        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3></h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for ...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Go!</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Issue books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form name="form1" action="" method="post">
                                    <table>
                                        <tr>
                                            <td>
                                                <select name="memID" class="form-control selectpicker">                                                    
                                                    <?php                                                   
                                                    $res1= mysqli_query($link, "select Member_ID from member");
                                                    while ($row = mysqli_fetch_array($res1)) {
                                                        echo "<option>";
                                                        echo $row["Member_ID"];
                                                        echo "</option>";
                                                    }
                                                    ?>                                                    
                                                </select>
                                            </td>
                                            <td>
                                                <input type="submit" value="Search" name="submit1" 
                                                       class="form-control btn btn-default" style="margin-top: 5px;">
                                            </td>
                                        </tr>
                                    </table>
                                
                                    <?php
//                                    if(isset(filter_input(INPUT_POST, "submit1"))) {
//                                        $res5 = mysqli_query($link, "select * from member where MemberID = '$_POST[memID]'");
//                                        while ($row5 = mysqli_fetch_array($res5)) {
//                                            $member_id = $row5["Member_ID"];
//                                            $name = $row5["Name"];
//                                            $email = $row5["Email"];
//                                            $login_id = $row5["Login_ID"];
//                                            $password = $row5["Password"];
//                                            $phoneNo = $row5["Phone_no"];
//                                            $_SESSION["Member_ID"] = $member_id;
//                                        }
                                        ?>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="Issue ID" name="issue_id" required="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="Member ID" name="member_id" value="<?php echo $member_id; ?>" disabled="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="Member's Name" name="member_name" value="<?php echo $name; ?>" required="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="Member's Email" name="member_email" value="<?php echo $email; ?>" required="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="Member's Phone Number" name="member_phone_no" value="<?php echo $phoneNo; ?>" required="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="Book Title" name="book_title" required="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="ISBN" name="book_isbn" required="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select name="booksname" class="form-control selectpicker">
                                                        <?php
                                                        $res2 = mysqli_query($link, "select Title from books"); 
                                                        while ($row = mysqli_fetch_array($res2)) {
                                                        echo "<option>";
                                                        echo $row["Title"];
                                                        echo "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="Issue Date" name="book_issue_date" value="<?php echo date("d/m/y"); ?>" required="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" placeholder="Due Date" name="book_due_date" value="<?php echo date("d/m/y"); ?>" required=""> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="submit" value="Issue" class="form-control" name="issue_books" class="form-control btn btn-default" style="background-color: teal; color: white">
                                                </td>
                                            </tr>
                                    </table>   
                                    
                                    <?php

//                                    }  // if(isset(...)) ends here
                                            
                                        ?>
                                </form>
                                <?php
//                                if(isset(filter_input(INPUT_POST, "submit2"))) {
//                                    mysqli_query($link, "insert into issue_books values('','$_SESSION[Member_ID]','$_POST[member_name]','$_POST[member_email]','$_POST[member_phone_no]','$_POST[book_isbn]','$_POST[book_title]','$_POST[book_issue_date]','')");
//                                    ?>
                                    //<?php
//                                    <script type="text/javascript">
//                                    window.location.href = window.location.href;
//                                    </script>
//                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


<?php
include 'footer.php';
