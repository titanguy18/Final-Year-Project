<?php
require('connection.inc.php');
require('functions.inc.php');
$promoCode = get_safe_value($_POST['promoCode']);
$res = mysqli_query($coln,"select * from coupons where coupon_code='$promoCode'");
$count=mysqli_num_rows($res);
if($count>0){
    $coupon_details=mysqli_fetch_assoc($res);
    print($coupon_details);
}else "not found";


?>