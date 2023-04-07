<?php
require('Persistence.php');

$db = new Persistence();
if( $db->add_comment($_POST) ) {
  header( 'Location: 6.php' );
}
else {
  header( 'Location: 6.php?error=Your comment was not posted due to errors in your form submission' );
}
?>
