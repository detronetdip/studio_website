<?php
 function pre($arr){
 	echo '<pre>';
 	print_r($arr);
 }
 
 function prx($arr){
 	echo '<pre>';
 	print_r($arr);
 	die();
 }
 function get_safe_value($con,$str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($con,$str);
	 }
}
 function redirect_to($path='')
 {
 	?>
 	 <script>
 	 window.location.href='<?php echo $path; ?>';
 	 </script>
 	<?php
 }
?>