<?php
    $conn = mysql_connect("localhost","root","");
    if($conn)
        echo "Connected to database!!!";
    else
        echo "Failed to Connect:".mysql_error();
    mysql_select_db("test",$conn) or die("No Database existing:".mysql_error());

    if(isset($_POST['bname']))
    {
        $bname=$_POST['bname'];
        $auth=$_POST['auth'];
        $publ=$_POST['publ'];
        $isbn=$_POST['isbn'];
        $edi=$_POST['edi'];
        $cost=(float)$_POST['cost'];
        $qty=(int)$_POST['qty'];
        echo"<br/><br/><br/><p align='right'><a href='bkEntryForm.html'>[Book Entry Page]</a></p>";
        $query = "INSERT INTO catalogue VALUES('$bname','$auth','$publ','$isbn','$edi','$cost','$qty')";
        mysql_query($query);
        $result = mysql_query("select * from catalogue");    
    ?>
    <html>
    <body>
        <center>
            <font face="verdana" size="4">
            <table border="1" cellpadding="0" cellspacing="0">
                <tr>
                </tr>
                <tr>
                    <th colspan="8" align="center">Books List</td>
                    <th>S.No.</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th> Publication</th>
                    <th>ISBN</th>
                    <th>Edition</th>
                    <th>Cost</th>
                    <th>Quantity</th>
                </tr>
                <?php $num=1; while($row = mysql_fetch_array($result))
                { ?>
                    <tr>
                        <td align="center"><?php echo $num++; ?> </td>
                        <td align="left"><?php echo $row['bname']; ?> </td>
                        <td align="left"><?php echo $row['auth']; ?> </td>
                        <td align="left"><?php echo $row['publ']; ?> </td>
                        <td align="center"><?php echo $row['isbn']; ?> </td>
                        <td align="center"><?php echo $row['edi']; ?> </td>
                        <td align="center"><?php echo $row['cost']; ?> </td>
                        <td align="center"><?php echo $row['qty']; ?> </td>
                    </tr>
                <?php }?>
                </table>
        </center>
    </body>
    </html>
<?php } ?>
