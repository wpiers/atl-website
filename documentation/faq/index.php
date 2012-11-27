<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Freddy Allilaire
	# Date:			2005-12-14
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "ATL FAQ";
	$pageKeywords	= "ATL, FAQ, ADT, KM3, model transformation";
	$pageAuthor		= "Freddy Allilaire";

	# End: page-specific settings
	#
			
	include('../../resources/scripts/faq_script.php');
	$atlFAQ = getFAQ($pageTitle, "/gmt/atl/faq/faq.xml");
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	$atlFAQ

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>