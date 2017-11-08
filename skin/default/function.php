<?php
function showStat(){
	global $obj;
	echo "<div id='server_stats' >";
	
	echo "{$obj->notice("yourjob")} <div style='color:red'>{$obj->notice("userjobs")}</div>{$obj->notice("youused")} <div style='color:red'>{$obj->notice("used")}</div>";
	echo "{$obj->notice("sizelimit")} <div style='color:red'>{$obj->notice("maxsize")} </div>";
	echo "</div>";
}
function showPlugin(){
	global $obj;
	foreach($obj->acc as $host => $value) {
		$xout = array('');
		$xout = $obj->acc[$host]['accounts'];
		$max_size = $obj->acc[$host]['max_size'];
		if (empty($xout[0]) == false && empty($host) == false) {
			$hosts[] = '<span class="plugincollst">' . $host . ' ' . count($xout) . '</span><br/>';
		}
	}
	if (isset($hosts)) {
		if (count($hosts) > 4) {
			for ($i = 0; $i < 5; $i++) echo "$hosts[$i]";
			echo "<div id=showacc style='display: none;'>";
			for ($i = 5; $i < count($hosts); $i++) echo "$hosts[$i]";
			echo "</div>";
		}
		else for ($i = 0; $i < count($hosts); $i++) echo "$hosts[$i]";
		if (count($hosts) > 4) echo "<a onclick=\"showOrHide();\" href=\"javascript:void(0)\" style='TEXT-DECORATION: none'><font color=#FF6600><div id='moreacc'>" . $obj->lang['moreacc'] . "</div></font></a>";
	}
	return false;
}
?>