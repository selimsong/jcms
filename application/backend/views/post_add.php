<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>UCenter Administrator's Control Panel</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo  base_url();  ?>css/backend.css" media="screen" />
<meta content="Comsenz Inc." name="Copyright" />
<style type="text/css">
.menu{ position:relative; z-index:20; margin:0px; padding:0px;
}
	.menu ul{ position:absolute; top:10px; right:-1px !important; right:-2px; list-style:none; width:150px;
	     background:#F2F9FD url(http://localhost/jcms/images/bg_repy.gif) right -20px no-repeat; }
		.menu li{ margin:3px 0; *margin:1px 0; height:auto !important; height:24px; overflow:hidden; font-size:14px; font-weight:700; }
		.menu li a{ display:block; margin-right:2px; padding:3px 0 2px 30px; *padding:4px 0 2px 30px; border:1px solid #F2F9FD; background:url(http://localhost/jcms/images/bg_repno.gif) no-repeat 10px -40px; color:#666; }
			.menu li a:hover{ text-decoration:none; margin-right:0; border:1px solid #B5CFD9; border-right:1px solid #FFF; background:#FFF; }
		.menu li a.tabon{ text-decoration:none; margin-right:0; border:1px solid #B5CFD9; border-right:1px solid #FFF; background:#FFF url(http://localhost/jcms/images/bg_repy.gif) repeat-y; color:#2366A8; }
.footer{ position:absolute; z-index:10; right:13px; bottom:0; padding:5px 0; line-height:150%; background:url(http://localhost/jcms/images/bg_repx.gif) 0 -199px repeat-x; font-family:Arial, sans-serif; font-size:10px; -webkit-text-size-adjust: none; }
</style>

</head>
<body scroll="no">
<table cellpadding="0" cellspacing="0" width="100%" height="100%">
	<tr>
		<td colspan="2" height="69">
		     <?php  $this->load->view('top');  ?>
		</td>
	</tr>
	<tr>
		<td valign="top" width="160">
		    <?php  $this->load->view('left');  ?>
		</td>
		
		<td valign="top">
             
             <div class="container">
				<div class="mainbox nomargin">
			<form action="admin.php?m=setting&a=ls" method="post">
				<input type="hidden" name="formhash" value="d210453fca545649">
				<table class="opt">
					<tr>
						<th colspan="2">日期格式:</th>
					</tr>
					<tr>
						<td><input type="text" class="txt" name="dateformat" value="yyyy-mm-dd" /></td>
						<td>使用 yyyy(yy) 表示年，mm 表示月，dd 表示天。如 yyyy-mm-dd 表示 2000-1-1</td>
					</tr>
					<tr>
						<th colspan="2">时间格式:</th>
					</tr>
					<td>
						<input type="radio" id="hr24" class="radio" name="timeformat" value="1"  /><label for="hr24">24 小时制</label>
						<input type="radio" id="hr12" class="radio" name="timeformat" value="0" checked="checked" /><label for="hr12">12 小时制</label>
					</td>
					</tr>
					<tr>
						<th colspan="2">时区:</th>
					</tr>
					<tr>
						<td>
							<select name="timeoffset">
								<option value="-12" >(GMT -12:00) Eniwetok, Kwajalein</option>
								<option value="-11" >(GMT -11:00) Midway Island, Samoa</option>
								<option value="-10" >(GMT -10:00) Hawaii</option>
								<option value="-9" >(GMT -09:00) Alaska</option>
								<option value="-8" >(GMT -08:00) Pacific Time (US &amp; Canada), Tijuana</option>
								<option value="-7" >(GMT -07:00) Mountain Time (US &amp; Canada), Arizona</option>
								<option value="-6" >(GMT -06:00) Central Time (US &amp; Canada), Mexico City</option>
								<option value="-5" >(GMT -05:00) Eastern Time (US &amp; Canada), Bogota, Lima, Quito</option>
								<option value="-4" >(GMT -04:00) Atlantic Time (Canada), Caracas, La Paz</option>
								<option value="-3.5" >(GMT -03:30) Newfoundland</option>
								<option value="-3" >(GMT -03:00) Brassila, Buenos Aires, Georgetown, Falkland Is</option>
								<option value="-2" >(GMT -02:00) Mid-Atlantic, Ascension Is., St. Helena</option>
								<option value="-1" >(GMT -01:00) Azores, Cape Verde Islands</option>
								<option value="0" >(GMT) Casablanca, Dublin, Edinburgh, London, Lisbon, Monrovia</option>
								<option value="1" >(GMT +01:00) Amsterdam, Berlin, Brussels, Madrid, Paris, Rome</option>
								<option value="2" >(GMT +02:00) Cairo, Helsinki, Kaliningrad, South Africa</option>
								<option value="3" >(GMT +03:00) Baghdad, Riyadh, Moscow, Nairobi</option>
								<option value="3.5" >(GMT +03:30) Tehran</option>
								<option value="4" >(GMT +04:00) Abu Dhabi, Baku, Muscat, Tbilisi</option>
								<option value="4.5" >(GMT +04:30) Kabul</option>
								<option value="5" >(GMT +05:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
								<option value="5.5" >(GMT +05:30) Bombay, Calcutta, Madras, New Delhi</option>
								<option value="5.75" >(GMT +05:45) Katmandu</option>
								<option value="6" >(GMT +06:00) Almaty, Colombo, Dhaka, Novosibirsk</option>
								<option value="6.5" >(GMT +06:30) Rangoon</option>
								<option value="7" >(GMT +07:00) Bangkok, Hanoi, Jakarta</option>
								<option value="8" selected="selected">(GMT +08:00) &#x5317;&#x4eac;(Beijing), Hong Kong, Perth, Singapore, Taipei</option>
								<option value="9" >(GMT +09:00) Osaka, Sapporo, Seoul, Tokyo, Yakutsk</option>
								<option value="9.5" >(GMT +09:30) Adelaide, Darwin</option>
								<option value="10" >(GMT +10:00) Canberra, Guam, Melbourne, Sydney, Vladivostok</option>
								<option value="11" >(GMT +11:00) Magadan, New Caledonia, Solomon Islands</option>
								<option value="12" >(GMT +12:00) Auckland, Wellington, Fiji, Marshall Island</option>
							</select>
						</td>
						<td>默认为: GMT +08:00</td>
					</tr>

					<tr>
						<th colspan="2">发短消息最少注册天数:</th>
					</tr>
					<tr>
						<td><input type="text" class="txt" name="pmsendregdays" value="0" /></td>
						<td>注册天数少于此设置的，不允许发送短消息，0为不限制，此举为了限制机器人发广告</td>
					</tr>
					<tr>
						<th colspan="2">同一用户在 24 小时内允许发起两人会话的最大数:</th>
					</tr>
					<tr>
						<td><input type="text" class="txt" name="privatepmthreadlimit" value="25" /></td>
						<td>同一用户在 24 小时内可以发起的两人会话数的最大值，建议在 30 - 100 范围内取值，0 为不限制，此举为了限制通过机器批量发广告</td>
					</tr>
					<tr>
						<th colspan="2">同一用户在 24 小时内允许发起群聊会话的最大数:</th>
					</tr>
					<tr>
						<td><input type="text" class="txt" name="chatpmthreadlimit" value="30" /></td>
						<td>同一用户在 24 小时内可以发起的群聊会话的最大值，建议在 30 - 100 范围内取值，0 为不限制，此举为了限制通过机器批量发广告</td>
					</tr>
					<tr>
						<th colspan="2">参与同一群聊会话的最大用户数:</th>
					</tr>
					<tr>
						<td><input type="text" class="txt" name="chatpmmemberlimit" value="35" /></td>
						<td>同一会话最多能有多少用户参与设置，建议在 30 - 100 范围内取值，0为不限制</td>
					</tr>
					<tr>
						<th colspan="2">发短消息灌水预防:</th>
					</tr>
					<tr>
						<td><input type="text" class="txt" name="pmfloodctrl" value="15" /></td>
						<td>两次发短消息间隔小于此时间，单位秒，0 为不限制，此举为了限制通过机器批量发广告</td>
					</tr>

					<tr>
						<th colspan="2">启用短消息中心:</th>
					</tr>
					<tr>
					<td>
						<input type="radio" id="pmcenteryes" class="radio" name="pmcenter" value="1" checked="checked" onclick="$('hidden1').style.display=''"  /><label for="pmcenteryes">是</label>
						<input type="radio" id="pmcenterno" class="radio" name="pmcenter" value="0"  onclick="$('hidden1').style.display='none'" /><label for="pmcenterno">否</label>
					</td>
					<td>是否启用短消息中心功能，不影响使用短消息接口应用程序的使用</td>
					</tr>
					<tbody id="hidden1" >
					<tr>
						<th colspan="2">开启发送短消息验证码:</th>
					</tr>
					<tr>
						<td>
							<input type="radio" id="sendpmseccodeyes" class="radio" name="sendpmseccode" value="1" checked="checked" /><label for="sendpmseccodeyes">是</label>
							<input type="radio" id="sendpmseccodeno" class="radio" name="sendpmseccode" value="0"  /><label for="sendpmseccodeno">否</label>
						</td>
						<td>是否开启短消息中心发送短消息验证码，可以防止使用机器狂发短消息</td>
					</tr>
					</tbody>
				</table>
				<div class="opt"><input type="submit" name="submit" value=" 提 交 " class="btn" tabindex="3" /></div>
			</form>
		</div>
	</div>
             
             
		</td>
	</tr>
</table>
</body>
</html>