<?

function AdminScreen_ModBlogReportMenu(&$poll) {
	$selected = false;

	if (is_null($poll)) {
		return $selected;
	}
	?>
	<table cellpadding="0" cellspacing="0" border=0 class="left-nav-tree-box">
	<?
	// Report: Question SummarygetForms
	if (LeftNav_MenuItem(array("icon" => "MenuItem-PollOk.gif",
		"label" => "Summary",
		"dest" => array("page" => "ce_summary")))) {
		$selected = true;
	}

	// Report: Timeline
	if (LeftNav_MenuItem(array("icon" => "MenuItem-PollOk.gif",
		"label" => "Activity",
		"dest" => array("page" => "ce_trendline")))) {
		$selected = true;
	}

	// Report: All Stats
	if (LeftNav_MenuItem(array("icon" => "MenuItem-PollOk.gif",
		"label" => "All Stats",
		"dest" => array("page" => "ce_all_stats")))) {
		$selected = true;
	}

	// Report: Form Submissions
	if (LeftNav_MenuItem(array("icon" => "MenuItem-PollOk.gif",
		"label" => ("Comments"),
		"dest" => array("page" => "ce_comments")))) {
		$selected = true;
	}

	// Report: Form Submissions
	if (LeftNav_MenuItem(array("icon" => "MenuItem-PollOk.gif",
		"label" => ("Censored"),
		"dest" => array("page" => "ce_censored")))) {
		$selected = true;
	}

	// Report: Themes
	if ($GLOBALS['psApp']->getSubModule() != MODULE_COMMENTENGINE_REPORT_ONLY) {
		if (LeftNav_MenuItem(array("icon" => "MenuItem-PollOk.gif",
			"label" => "Titles and Themes",
			"dest" => array("page" => "ce_themes")))) {
			$selected = true;
		}
	}

	if ($GLOBALS['psApp']->getSubModule() != MODULE_COMMENTENGINE_REPORT_ONLY && $poll->getModBlogSetting("support_social_media_share")) {
		if (LeftNav_MenuItem(array("icon" => "MenuItem-PollOk.gif",
			"label" => "Sharing",
			"dest" => array("page" => "ce_title_share")))) {
			$selected = true;
		}
	}
	if ($GLOBALS['psApp']->getSubModule() != MODULE_COMMENTENGINE_REPORT_ONLY && $poll->getModBlogSetting("support_click_tracking")) {
		if (LeftNav_MenuItem(array("icon" => "MenuItem-PollOk.gif",
			"label" => "Click Tracking",
			"dest" => array("page" => "ce_title_click")))) {
			$selected = true;
		}
	}

	// Report: Question SummarygetForms
	if (LeftNav_MenuItem(array("icon" => "MenuItem-PollOk-Last.gif",
		"label" => "Banner Stats",
		"dest" => array("page" => "ce_marketing")))) {
		$selected = true;
	}

	/* no more modblog filters
	// Report: Filters
	if (LeftNav_MenuItem(array("icon" => "MenuItem-PollOk-Last.gif",
		"label" => "Filters",
		"dest" => array("page" => "ce_filter_list")))) {
		$selected = true;
	}
	*/
	?>
	</table>
	<?
	return $selected;
} // fn AdminScreen_ModBlogReportMenu

?>
