<!DOCTYPE html>
<!--Ryan Keiran & Chris Keo
	Ryan_Keiran@student.uml.edu and christopher_keo@student.uml.edu
        Computer science department, UMass Lowell
        Comp 4610, GUI I
        Created: 12/5/17
        Updated: 12/13/17
	
This is our landing page. It displays all uploaded images with options to upload or delete them, as well as links to editing and sharing.-->
<html>
<head>
	<link rel="stylesheet" href="css/final.css">
	<script src="//code.jquery.com/jquery-1.11.1.min.js"> </script>
	<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
	<meta charset=utf-8 />
	<title>Final</title>
</head>
<body>
	<ul>
  		<li><a class="active" href="#home">PHOTOS</a></li>
  		<li><a href="upload.html">UPLOAD</a></li>
  		<li><a href="share.html">SHARE</a></li>
	</ul>
	<div id="images">
		<?php
			$dirname = "images/";
			$images = glob($dirname."*.{jpg,jpeg,png,PNG}",GLOB_BRACE);
			foreach($images as $image) {
                        	echo '<a href="'.$image.'"><img src="'.$image.'" width="200" height="200"/></a>';
				echo '<form method = "post">';
                        	echo '<input type="hidden" value="'.$image.'" name="delete_file" id="delete_file" />';
				echo '<input type="button" value="Delete image" onclick="delete_image()"/>';
				echo '</form>';
				echo '<form method = "post" action="edit.html">';		
  					echo '<input type="hidden" value="'.$image.'" name="edit_file" />';
  					echo '<input type="submit" value="Edit image"/>';
				echo '</form>';
			}
		?>
	</div>
	<script> function delete_image(){
        	var status = confirm("Are you sure you want to delete ?");
         	if(status==true){
                	var file = <?php echo(json_encode($image)); ?>;
                        $.ajax({
                                type:"POST",
                                url:"delete.php",
                                data:{file:file},
                                success(html){
                                         alert('Deleted');
                                }
                        });
         	}
	}</script>

</body>
</html>
