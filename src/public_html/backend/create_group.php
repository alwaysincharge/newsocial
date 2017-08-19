<?php  include_once('../../includes/all_classes_and_functions.php');  ?>

<?php $session->if_not_logged_in($_SESSION['url_placeholder'] . 'login'); ?>



<?php

$name = $_POST['groupname'];

$desc = $_POST['groupdesc'];

$img_path = $_POST['group_pic_path'];

$img_name = $_POST['group_pic_name'];

$img_type = $_POST['group_pic_type'];




$group->create_group($name, $desc, $img_path, $img_name, $img_type, $_SESSION['admin_id']);






?>