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
session_start();
require_once "header.php";
$id = $_SESSION['id'];
if ($id) {
?>
<script>
	$(document).ready(function () {
		$("#list_records").jqGrid({
			url: "admin.php?123",
			datatype: "json",
			mtype: "POST",
			colNames: ["User Id","First Name", "Last Name",
						"Middle Name","Suffix",
						"Date of Birth","Email",
						"Employement","Employer","Gender",
						"Status","Residential Street",
						"Residential City","Residential State",
						"Residential pin no.","Residential Phone no.",
						"Residentia Fax no.","Office Street",
						"Office City","Office State",
						"Office pin no.","Office Phone no.",
						"Office Fax no.","Extra","Activate","Actions"
						],
			colModel: [
				{ name: "pk_users",align:"right",width:30,editable:true},
				{ name: "first",width:60,editable:true},
				{ name: "last",width:60,editable:true},
				{ name: "middle",width:60,editable:true},
				{ name: "suffix",width:60,editable:true},
				{ name: "dob",width:60,editable:true},
				{ name: "email",width:200,editable:true},
				{ name: "employement",width:60,editable:true},
				{ name: "employer",width:60,editable:true},
				{ name: "gender",width:50,editable:true},
				{ name: "status",width:60,editable:true},
				{ name: "rstreet",width:100,editable:true},
				{ name: "rcity",width:100,editable:true},
				{ name: "rstate",width:100,editable:true},
				{ name: "rpin",width:100,editable:true},
				{ name: "rphone",width:100,editable:true},
				{ name: "rfax",width:100,editable:true},
				{ name: "ostreet",width:100,editable:true},
				{ name: "ocity",width:100,editable:true},
				{ name: "ostate",width:100,editable:true},
				{ name: "opin",width:60,editable:true},
				{ name: "ophone",width:60,editable:true},
				{ name: "ofax",width:60,editable:true},
				{ name: "extra",width:200,editable:true},
				{ name: "activate",width:50,editable:true,edittype:'checkbox'},
				{name : 'actions', index: 'actions', formatter:'actions',
					formatoptions: {
						    keys: true,
						    editbutton: { url: 'update.php' },
						    delOptions: { url: 'delete.php' }
				               }}
				],
			pager: "#perpage",
			rowNum: 10,
			rowList: [10,20],
			sortname: "pk_users",
			width : 1165,
    		height: 800,
    		shrinkToFit: false,
    		loadonce: true,
			sortorder: "asc",
			height: '100%',
			viewrecords: true,
			gridview: true,
			multiselect: true,
			caption: "Employee Details",
			editurl: "update.php?123"
		});
		$('#list_records').navGrid('#perpage',
            { 
            	edit: true, 
            	add: false, 
            	del: true, 
            	search: true, 
            	refresh: true, 
            	view: true, 
            	position: "left", 
            	cloneToTop: true 
            });
	});
</script>
</head>
<body>
	<div class="brand">Mindfire Solutions</div>
    	<!-- Navigation -->
    	<nav class="navbar navbar-default" role="navigation">
        	<div class="container">
            	<ul class="nav navbar-nav">
            	</ul>
            </div>
        </div>
    	<div class="top-content">
         	<div class="inner-bg">
            	<div class="container">
                	<div class="row">
                        <div class="form-top">
							<span id="log_out">Click here to 
							<a href="admin_logout.php">logout!</a></span>
							<br/><br/>
							<table id="list_records">
							<tr><td></td></tr></table>
							<div id="perpage"></div>
<?php
echo "<br/><br/>";
require_once "footer.php";
} else {
    header("Location: admin_login.php");
}
?>
