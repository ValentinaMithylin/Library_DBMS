<?php
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
                                <input type="text" class="form-control" placeholder="Search for...">
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
                                <h2>Return Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form name="form1" action="" method="post">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>
                                                <select name="memID" class="form-control selectpicker">                                                    
                                                    <?php                                                   
                                                    $res1= mysqli_query($link, "select Member_ID from member");
                                                    while ($row2 = mysqli_fetch_array($res1)) {
                                                        echo "<option>";
                                                        echo $row2["Member_ID"];
                                                        echo "</option>";
                                                    }
                                                    ?>                                                    
                                                </select>
                                            </td>
                                            <td>
                                                <input type="submit" value="Search" name="submit1" 
                                                       class="form-control btn btn-default" style="background-color: teal; color: white">
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                                <?php
                                if(isset($_POST['submit1'])) {
                                    $res = mysqli_query($link, "select * from issue_books where Member_ID = '$_POST[memID]'");
                                    echo "<table class='table table-bordered'>";
                                    echo "<tr>";
                                    
                                    echo "<th>"; 
                                    echo "Issue ID"; 
                                    echo "</th>";
                                    echo "<th>"; 
                                    echo "Name"; 
                                    echo "</th>"; 
                                    echo "<th>"; 
                                    echo "Email"; 
                                    echo "</th>";
                                    echo "<th>"; 
                                    echo "Phone No."; 
                                    echo "</th>";
                                    echo "<th>"; 
                                    echo "ISBN"; 
                                    echo "</th>";
                                    echo "<th>"; 
                                    echo "Title"; 
                                    echo "</th>";
                                    echo "<th>"; 
                                    echo "Issue Date"; 
                                    echo "</th>";
                                    echo "<th>"; 
                                    echo "Return Books"; 
                                    echo "</th>";
                                    
                                    echo "</tr>";
                                    
                                    while ($row1 = mysqli_fetch_array($res)) {
                                        echo "<tr>";
                                        
                                        echo "<td>"; 
                                        echo $row1["Issue_ID"]; 
                                        echo "</td>";
                                        echo "<td>"; 
                                        echo $row1["Member_name"]; 
                                        echo "</td>";
                                        echo "<td>"; 
                                        echo $row1["Member_email"]; 
                                        echo "</td>";
                                        echo "<td>"; 
                                        echo $row1["Member_phone_no"]; 
                                        echo "</td>";
                                        echo "<td>"; 
                                        echo $row1["ISBN"]; 
                                        echo "</td>";
                                        echo "<td>"; 
                                        echo $row1["Title"]; 
                                        echo "</td>";
                                        echo "<td>"; 
                                        echo $row1["Issue_date"]; 
                                        echo "</td>";
                                        echo "<td>"; 
                                        ?>
                                <a href="return.php?id=<?php echo $row2["id"] ?>">Return</a>
                                        <?php
                                        echo "</td>";
                                        
                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                }
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
?>