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
    $responce = array();
    $id		    = trim($_POST['id']);
 //This contains the data that will update the db
    $first      = trim($_POST['first']);
    $last       = trim($_POST['last']);
    $middle     = trim($_POST['middle']);                
    $suffix     = trim($_POST['suffix']);
    $dob        = trim($_POST['dob']);
    $email	    = trim($_POST['email']);
    $employement= trim($_POST['employement']);
    $employer   = trim($_POST['employer']);
    $gender     = trim($_POST['gender']);
    $status     = trim($_POST['status']);
    $rstreet    = trim($_POST['rstreet']);
    $rcity      = trim($_POST['rcity']);
    $rstate     = trim($_POST['rstate']);
    $rpin       = trim($_POST['rpin']);
    $rphone     = trim($_POST['rphone']);
    $rfax       = trim($_POST['rfax']);
    $ostreet    = trim($_POST['ostreet']);
    $ocity      = trim($_POST['ocity']);
    $ostate     = trim($_POST['ostate']);
    $opin       = trim($_POST['opin']);
    $ophone     = trim($_POST['ophone']);
    $ofax       = trim($_POST['ofax']);
    $extra		= trim($_POST['extra']);
    $activate   = trim($_POST['activate']);
    $oper       = trim($_POST['oper']);

switch($oper){
    case "edit":
        $responce['oper'] = $oper;
		$query  = "UPDATE users SET first='$first',last='$last',";
        $query .= "middle='$middle',suffix='$suffix',dob='$dob',";
        $query .= "email='$email',";
        $query .= "employement ='$employement',employer ='$employer',";
        $query .= "gender ='$gender',status ='$status',photo ='$photo',";
        $query .= "rstreet ='$rstreet',rcity ='$rcity',rstate ='$rstate',";
        $query .= "rpin='$rpin',rphone ='$rphone',rfax ='$rfax',";
        $query .= "ostreet ='$ostreet',ocity ='$ocity',ostate ='$ostate',";
        $query .= "opin='$opin',ophone ='$ophone',ofax ='$ofax',";
        $query .="extra ='$extra',activate = '$activate' WHERE pk_users='$id'";
		$result = mysqli_query($db, $query); 
        if($result){
            $responce['query'] = $query;
        }
        break;
    case "del":
        $array_id = array();
        $j = 0;
        $explode = explode(',', $id);
        $total_id = count($explode);
        for($i = 0 ;$i < $total_id; $i++) {
            $array_id[$j++] = $explode[$i];
        }
        $count = count($array_id);
        if ($count > 1) {
            for($i = 0; $i < $count; $i++) {
                $q = "DELETE FROM users WHERE pk_users  = '$array_id[$i]'";
                mysqli_query($db, $q);
            }
        } else {
            $q = "DELETE FROM users WHERE pk_users='$id'";
            mysqli_query($db,$q);
        }
        break;
    default:
        echo "<center>Please try again</center>";
}
echo json_encode($responce);
?>