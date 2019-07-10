<?php
echo "<link rel=\"stylesheet\" href=\"1.css\" type=\"text/css\">";
$servername = "localhost";
$username = "root";
$password = "vagrant";
$dbname = "information_schema";

$i=0;


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//$sql = "select * from information_schema.global_status where variable_name ='INNODB_BUFFER_POOL_PAGES_DATA'";
//$sql = "select * from information_schema.global_status where length(variable_value)<50";
//$sql = "select * from information_schema.global_status where variable_name like '%innodb%'";

//while(1) {
//$sql = "select * from information_schema.INNODB_BUFFER_PAGE order by page_number asc";
$sql = "select * from information_schema.INNODB_BUFFER_PAGE";
//$sql = "select * from information_schema.global_status where variable_name in('BYTES_SENT','COM_SELECT','COM_REPLACE_SELECT','COM_REPLACE_SELECT')";
//$sql = "select * from information_schema.global_status where variable_name like 'innodb_buffer_pool%' and variable_name not in('INNODB_BUFFER_POOL_DUMP_STATUS','INNODB_BUFFER_POOL_LOAD_STATUS','INNODB_BUFFER_POOL_RESIZE_STATUS')";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
        echo "<table><tr><td><table id=rcorners2 ><tr>";
    while($row = $result->fetch_assoc()) {

         if($row['PAGE_TYPE']=='SYSTEM')
                {

                         $col='33BBFF';
                }


                if($row['PAGE_TYPE']=='INODE')
                {

                         $col='F9FF33';
                }

                if($row['PAGE_TYPE']=='IBUF_INDEX')
                {

                         $col='96FF33';
                }




                if($row['PAGE_TYPE']=='INDEX' && ($row['PAGE_STATE']=='FILE_PAGE' ))
                {

                         $col='2874A6';
                }

        if($row['PAGE_TYPE']=='INDEX'  && ($row['PAGE_STATE']<>'FILE_PAGE' ))
                {

                         $col='8E44AD';
                }



                if($row['PAGE_TYPE']=='IBUF_BITMAP')
                {

                         $col='336BFF';
                }


                if($row['PAGE_TYPE']=='TRX_SYSTEM')
                {

                         $col='FF00AE';
                }

       if($row['PAGE_TYPE']=='UNDO_LOG')
                {

                         $col='FF0000';
                }
       if($row['PAGE_TYPE']=='FILE_SPACE_HEADER')
                {

                         $col='515A5A';
                }

                if($row['PAGE_TYPE']=='UNKNOWN')
                {

                         $col='FFFFFF';
                }

                if($row['PAGE_TYPE']=='ALLOCATED')
                {

                         $col='F4D03F';
                }

                                if($row['PAGE_TYPE']=='BLOB')
                {

                         $col='01FFFF';
                }

if($row['PAGE_TYPE']=='COMPRESSED_BLOB2')
                {

                         $col='D4EFDF';
                }

                                if($row['PAGE_TYPE']=='COMPRESSED_BLOB')
                {

                         $col='ABEBC6';
                }


                                if($row['PAGE_TYPE']=='EXTENT_DESCRIPTOR')
                {

                         $col='633974';
                }


                                if($row['PAGE_TYPE']=='IBUF_FREE_LIST')
                {

                         $col='CCD1D1';
                }





                 echo "<td title=\" PAGE_TYPE ===>".$row['PAGE_TYPE']." &#010;INDEX_NAME=>".$row['INDEX_NAME']." &#010;PAGE_NUMBER=>".$row['PAGE_NUMBER']." &#010;BLOCK_ID=>".$row['BLOCK_ID']." &#010;PAGE_STATE=>".$row['PAGE_STATE']." &#010;TABLE_NAME=>".$row['TABLE_NAME']." &#010;SPACE=>".$row['SPACE']." &#010;FLUSH_TYPE=>".$row['FLUSH_TYPE']." &#010;IS_OLD=>".$row['IS_OLD']." &#010;NUMBER_RECORDS=>".$row['NUMBER_RECORDS']." &#010;DATA_SIZE=>".$row['DATA_SIZE'].  " \"id=rcorners8 bgcolor=#".$col." >";

         $i=$i+1;

//               echo $i;
           if($i%180==0)
                {
                        echo "</td></tr>";
                }
                else
                        {
                        echo "</td>";
                        }



         }





         echo "</table></td></tr><td><table width=100%><tr><td id=rcorners8 bgcolor=#33BBFF>SYSTEM</td>";
         echo "<td id=rcorners8 bgcolor=#F9FF33>INODE</td>";
         echo "<td id=rcorners8 bgcolor=#96FF33>IBUF_INDEX</td>";
         echo "<td id=rcorners8  bgcolor=#8E44AD>INDEX</td>";
         echo "<td id=rcorners8  bgcolor=#2874A6>DATA</td>";
         echo "<td id=rcorners8  bgcolor=#336BFF>IBUF_BITMAP</td>";
         echo "<td id=rcorners8  bgcolor=#FF00AE>TRX_SYSTEM</td>";
         echo "<td id=rcorners8  bgcolor=#FF0000>UNDO_LOG</td>";
         echo "<td id=rcorners8  bgcolor=#515A5A>FILE_SPACE_HEADER</td>";
         echo "<td id=rcorners2 style=\"font-size:15px\" bgcolor=#FFFFFF>FREE</td>";

         echo "<td id=rcorners8 bgcolor=#F4D03F>ALLOCATED</td>";
         echo "<td id=rcorners8 bgcolor=#01FFFF>BLOB</td>";
         echo "<td id=rcorners8  bgcolor=#D4EFDF>COMPRESSED_BLOB2</td>";
         echo "<td id=rcorners8  bgcolor=#ABEBC6>COMPRESSED_BLOB</td>";
         echo "<td id=rcorners8  bgcolor=#633974>EXTENT_DESCRIPTOR</td>";
         echo "<td id=rcorners8  bgcolor=#CCD1D1>IBUF_FREE_LIST</td>";




         echo "</table></table>";



}
$conn->close();

//}
?>

