<?phpfunction dropdown(){$all = mysql_query("SELECT * FROM tblstore");while($row = mysql_fetch_array($all)){    echo "<option value = '".$row['brandname']."' selected='selected'>".$row['brandname']."</option>";}}