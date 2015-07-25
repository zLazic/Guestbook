<?php
// session
session_start();

// main header with navigation and links
include('header.php');

?>

<!-- main content where I inject HTML via AJAX -->
<div id="content">
    <?php
        // table with all comments and relevant data
        include('impression-list.php');
    ?>
</div>

<?php
    // js scripts and HTML closing tags
    include('footer.php');
?>