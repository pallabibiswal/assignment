<?php
/**
* File Doc Comment
*
* PHP version 5
*
* @category PHP
* @package  PHP_CodeSniffer
* @author   Mindfire Solutions <pallabi.biswal@mindfiresolutions.com>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.mindfiresolutions.com
*/
require_once '../dbinfo.php';
$res = array();
$id	= trim($_POST['id']);
$res['id'] = $id;
$query = "DELETE FROM `users` WHERE pk_users = '$id'";
if(mysqli_query($db, $query)){
	echo json_encode($res);
}
?>