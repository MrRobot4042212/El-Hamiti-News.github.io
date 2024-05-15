<?php
$con = mysqli_connect("10.5.2.8","elhamiti_news","1234","elhamiti_news","3306");
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_errno();
};
mysqli_select_db($con, "elhamiti_news");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>
