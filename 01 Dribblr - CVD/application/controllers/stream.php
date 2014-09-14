<?php // controller for stream home page
// checks user is logged in...
requireLogin();
// supporting data function file...
include(DATA.'posts.php');
// variables for page data...
$username = $_SESSION['username'];
$posts = getAllPostsByUsername($username);
// views...
include(VIEWS.'header.php');
include(VIEWS.'contentStream.php');
include(VIEWS.'footer.php');
?>