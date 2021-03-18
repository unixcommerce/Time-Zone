<?php
/**
 * DashboardBuilder
 *
 * @author Diginix Technologies www.diginixtech.com
 * Support <support@dashboardbuider.net> - https://www.dashboardbuilder.net
 * @copyright (C) 2016-2020 Dashboardbuilder.net
 * @version 4.2
 * @license: This code is under MIT license, you can find the complete information about the license here: https://dashboardbuilder.net/code-license
 */

include("inc/dashboard_dist.php");  // copy this file to inc folder 


// for chart #1
$data = new dashboardbuilder(); 
$data->type[0]=  "number";

$data->source =  "Database"; 
$data->rdbms =  "mysql"; 
$data->servername =  "localhost";
$data->username =  "admin_client";
$data->password =  "Kingpin305#$#";
$data->dbname =  "admin_client";
$data->toImage = "Download graph";
$data->zoomin = "Zoom in";
$data->zoomout = "Zoom out";
$data->autoscale = "Reset";
$data->xaxisSQL[0]=  "SELECT * FROM `tblclients` WHERE state = ^Florida^";
$data->xaxisCol[0]=  "id";
$data->xsort[0]=  "ASC";
$data->xmodel[0]=  "";

$data->name = "0";
$data->title = "";
$data->orientation = "v";
$data->dropdown = "false";
$data->legposition = "";
$data->xaxistitle = "";
$data->yaxistitle = "";
$data->showgrid = "true";
$data->showline = "true";
$data->height = "380";
$data->width = "";
$data->col = "0";




$result[0] = $data->result();?>

<!DOCTYPE html>
<html>
<head>
	<script src="assets/js/dashboard.min.js"></script> <!-- copy this file to assets/js folder -->
</head>
<body> 
Client Total: <?php echo $result[0];?>
</body>
