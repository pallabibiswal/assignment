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
$page 		   = $_POST['page']; 
$limit         = $_POST['rows']; 
$sidx          = $_POST['sidx']; 
$sord          = $_POST['sord']; 
$search_field  = $_POST['searchField'];
$search_string = $_POST['searchString'];
$search_oper   = $_POST['searchOper'];
						

if(!$sidx) {
	$sidx =1;
} 
$query = "SELECT COUNT(*) AS count FROM users";
$result = mysqli_query($db, $query); 
$row = mysqli_fetch_assoc($result); 
$total_pages = 0; 
$count = $row['count']; 
if( $count > 0 && $limit > 0) { 
    $total_pages = ceil($count/$limit); 
} 
if ($page > $total_pages) $page=$total_pages;
$start = $limit*$page - $limit;
if($start <0) $start = 0; 

$sql = "SELECT * FROM users ORDER BY $sidx $sord LIMIT $start , $limit"; 
$result = mysqli_query( $db,$sql );

$i=0;
while($row = mysqli_fetch_assoc($result)) {
	$responce->rows[$i]['id']=$row['pk_users'];
	$responce->rows[$i]['cell']=array($row['pk_users'],$row['first']
								,$row['last'],$row['middle']
								,$row['suffix'],$row['dob']
								,$row['email'],$row['employement']
								,$row['employer'],$row['gender']
								,$row['status'],$row['rstreet'],$row['rcity']
								,$row['rstate'],$row['rpin']
								,$row['rphone'],$row['rfax']
								,$row['ostreet'],$row['ocity']
								,$row['ostate'],$row['opin']
								,$row['ophone'],$row['ofax']
								,$row['extra'],$row['activate']);
	$i++;
}
echo json_encode($responce);
?>
