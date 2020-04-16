<?php
/* Copyright (C) 2020 Andor Molnár <andor@apache.org> */

/**
 * \file    natsend/lib/natsend.lib.php
 * \ingroup natsend
 * \brief   Library files with common functions for Natsend
 */

/**
 * Prepare admin pages header
 *
 * @return array
 */
function natsendAdminPrepareHead()
{
	global $langs, $conf;

	$langs->load("natsend@natsend");

	$h = 0;
	$head = array();

	$head[$h][0] = dol_buildpath("/natsend/admin/setup.php", 1);
	$head[$h][1] = $langs->trans("Settings");
	$head[$h][2] = 'settings';
	$h++;
	$head[$h][0] = dol_buildpath("/natsend/admin/about.php", 1);
	$head[$h][1] = $langs->trans("About");
	$head[$h][2] = 'about';
	$h++;

	// Show more tabs from modules
	// Entries must be declared in modules descriptor with line
	//$this->tabs = array(
	//	'entity:+tabname:Title:@natsend:/natsend/mypage.php?id=__ID__'
	//); // to add new tab
	//$this->tabs = array(
	//	'entity:-tabname:Title:@natsend:/natsend/mypage.php?id=__ID__'
	//); // to remove a tab
	complete_head_from_modules($conf, $langs, null, $head, $h, 'natsend');

	return $head;
}
