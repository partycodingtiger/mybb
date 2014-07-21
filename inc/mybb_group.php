<?php
/**
 * MyBB 1.8
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 * Website: http://www.mybb.com
 * License: http://www.mybb.com/about/license
 *
 */

function output_logo()
{
	$mybb_logo = "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";
	header("Content-type: image/png");
	echo base64_decode($mybb_logo);
	exit;
}
?>