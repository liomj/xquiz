<{$menu_css}>
<table width="100%" border="0" cellspacing="10" cellpadding="4">
  <tr>
  <td valign="top" width="40%">
	<div class="CPbigTitle" style="background-image: url(../assets/images/menus/state.png); background-repeat: no-repeat; background-position: left; padding-left: 50px;">
		<strong><{$smarty.const._XQUIZ_INDEX}></strong>
	</div>
	<br />
	<br />
	<{$menu}>
	</td>
	
  	<td valign="top" width="60%">
  	<div class="ddd">
	<br />
	<div class="hometitle" ><{$smarty.const._XQUIZ_NOTIFY}></div>
	<div class="textbody" >
		<br/>
		<{$smarty.const._AM_INDEX_ADD_QUEST}><br/><br/>
		<{$smarty.const._AM_INDEX_USER_EX}><br/><br/>
		<{$smarty.const._AM_INDEX_USER_QUIZ}><br/><br/>
	</div>
	<br/>
	<br/>
	
	<div class="hometitle" ><{$smarty.const._XQUIZ_VERSION_TITLE}></div>
		<div class="textbody" >
		<br/>
		<{$php_version}><br/>
		<!--<{$mysql_version}><br/>
		<{$xoops_version}><br/>-->
		<{$quiz_version}><br/><br/>
	</div>
	</div>
	</td>
  </tr>
</table>
