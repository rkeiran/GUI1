<!--Ryan Keiran & Chris Keo
        Ryan_Keiran@student.uml.edu and christopher_keo@student.uml.edu
        Computer science department, UMass Lowell
        Comp 4610, GUI I
        Created: 12/5/17
        Updated: 12/13/17

This is the function to finish off the deletion of files.-->

<?php
 if ( array_key_exists ('file', $_POST)){
       $filename = $_POST['file'];
       if ( file_exists ( $filename ) ) {
           unlink( $filename );
           echo 'File '.$filename.' has been deleted';
       }	
  }
?>
