		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml"><head profile="http://gmpg.org/xfn/11">
		<head>
			<link rel="SHORTCUT ICON" href="images/vngicon.png" type="image/x-icon" />
			<title>آپلود - دانلود | مستقیم کننده لینک </title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<meta name="keywords" content="<?php printf($obj->lang['version']); ?>, download, get, vinaget, file, generator, premium, link, sharing, bitshare.com, crocko.com, depositfiles.com, extabit.com, filefactory.com, filepost.com, filesmonster.com, freakshare.com, gigasize.com, hotfile.com, jumbofiles.com, letitbit.net, mediafire.com, megashares.com, netload.in, oron.com, rapidgator.net, rapidshare.com, ryushare.com, sendspace.com, share-online.biz, shareflare.net, uploaded.to, uploading.com" />
			<link title="Rapidleech Style" href="<?php echo $skin;?>/rl_style_pm.css" rel="stylesheet" type="text/css" />
            <!-- 
            <script type="text/javascript">var pb_popkade_user_id = 3459;var pb_popkade_userMax = 1;</script>
            <script type="text/javascript" src="http://popkade.ir/popbox/js"></script>
           
            <script type="text/javascript">var popkade_user_id = 3459;var popkade_userMax = 2;</script>
            <script type="text/javascript" src="http://popkade.ir/website/js"></script>
            
            <script type="text/javascript">var pb_popupirani_user_id = 112;var pb_popupirani_userMax = 2;</script>
            <script type="text/javascript" src="http://popupirani.ir/popbox/js"></script>
-->
            <!--
            <script type="text/javascript">var popupirani_user_id = 112;var popupirani_userMax = 5;</script>
            <script type="text/javascript" src="http://popupirani.ir/website/js"></script>

            -->
		</head>
		<body style="font-family:arial">
			<script type="text/javascript" language="javascript" src="images/jquery-1.7.1.min.js"></script>
			<script type="text/javascript" src="images/ZeroClipboard.js"></script>
                        <script type="text/javascript" src="images/xtAzQnL2.js"></script>
			<script type="text/javascript" src="images/sprintf.js"></script>
			<script type="text/javascript" language="javascript">
				var loadimg = "loading_black.gif";
				var loadcolor = "#FFFF99";
				var title = '<?php echo $obj->title; ?>';
				var colorname = '<?php echo $obj->colorfn; ?>';
				var colorfile = '<?php echo $obj->colorfs; ?>';
				var lang = new Array();
				<?php 
				foreach($obj->lang as $key=>$val){
					$val = str_replace("'", "\'", $val);
					echo "lang['{$key}'] = '{$val}'; ";
				}
				?>
			</script> 
            
<div style="text-align: center;color: black;font-size: 25px;font-family: arial;line-height: 38px;background-color:green;border-radius: 30px;margin: 4px 0px -9px 0px;border: 1px solid #322b2b;box-shadow: 0px 0px 10px #030303 inset;padding: 5px 0px 5px 0px;">

از این لیچر برای فایل هایی استفاده کنین که خود فایل بر روی سرور سایت قرار دارد نه روی آپلود سنتر های مثل زیر <br>
Uploadboys.com,Uploadbaz.com,Mediafire.com,Uploaded.net <br>
توجه اگر موقعی که خواستین فایلی را مستقیم کنین با پیغام " بار سرور بالاست " یا " هر خطای دیگر روبرو شدید " کمی صبر بفرمایید دوباره امتحان کنید<br>
<b style="font-size: 40px;">ماندگاری فایل 24 ساعت (در صورتی که فایل مورد نظر از روی سرور اصلی پاک نشده باشد)</b></div>
			<!--
			<center><img src="images/logo.png" alt="RapidLeech PlugMod" border="0" /></center><br />
			-->
			<div id="showlistlink" class="showlistlink" align="center">
                  <div style="width:120px; padding:5px; margin:2px;border:1px #ffffff solid;">
					<a onclick="return makelist(document.getElementById('showresults').innerHTML);" href="javascript:void(0)" style='TEXT-DECORATION: none'><div style="background-color:#9EB8ED;color:#FF6600; font-size:16px;border-radius: 7px;box-shadow: inset 0px 0px 12px #EDF402;">بستن</div></a>
				</div>
                
				<div style="border:1px #ffffff solid; width:960px; padding:5px; margin-top:5px;">
					<div id="listlinks"><textarea style='width:950px;height:380px' id="textarea"></textarea></div>
					
				</div>
				
			</div>
			<table align="center" style="z-index: 1;margin-top: 8px"><tbody>
				<tr>
				
				<td align="center" valign="top">
                
					<table border="0" cellpadding="0" cellspacing="1"><tbody>
						<tr>
                        
                        <?php 
						  if(isset($_GET['id']))
   						    $ID = $_GET['id']?$_GET['id']:'!';
						  else
						    $ID = '!';
						?>
<script type="text/javascript" language="javascript">                        
  function goto(URL){
	  window.location.href=URL;
  }
  
</script>
							<!--td class="cell-nav <?php echo $ID=='!'?'selected':'';?>"><a class="" href="./"><?php printf($obj->lang['main']); ?></a></td>
							<td class="cell-nav <?php echo $ID=='donate'?'selected':'';?>"><a class="ServerFiles" href="./?id=donate"><?php printf($obj->lang['donate']); ?></a></td>
							<td class="cell-nav <?php echo $ID=='listfile'?'selected':'';?>"><a class="ServerFiles" href="./?id=listfile"><?php printf($obj->lang['listfile']); ?></a></td-->
							<td class="cell-nav <?php echo $ID=='!'?'selected':'';?>" onclick="goto('.\/')"><?php printf($obj->lang['main']); ?></td>
<!--						<td class="cell-nav <?php echo $ID=='donate'?'selected':'';?>" onclick="goto('.\/?id=donate')"><?php printf($obj->lang['donate']); ?></td>   -->
							<td class="cell-nav <?php echo $ID=='listfile'?'selected':'';?>" onclick="goto('.\/?id=listfile')"><?php printf($obj->lang['listfile']); ?></td>
							
							
						</tr>
					</tbody></table>
                    <div style="border: 3px solid orange;width: 900px;border-radius: 15px 15px 30px 30px;margin-top: -2px;">
                   
					<table id="tb_content"><tbody>
						
						<tr>
                        <td align="center">
                         <div style=" text-align: center; background-color:#AFF8B5; border-radius: 40px 0px 40px 0px;width: 860px;margin-top: 12px;margin-bottom: 18px; ">
    
<?php 

						#---------------------------- begin list file ----------------------------#
						if ((isset($_GET['id']) && $_GET['id']=='listfile') || isset($_POST['listfile']) || isset($_POST['option']) || isset($_POST['renn']) || isset($_POST['remove']))  {
							if($obj->listfile || $obj->isadmin())$obj->fulllist();
							else echo "<BR><BR><font color=red size=2>".$obj->lang['notaccess']."</b></font>";
						}
						#---------------------------- end list file ----------------------------#

						#---------------------------- begin donate  ----------------------------#
						else if (isset($_GET['id']) && $_GET['id']=='donate') { 
?>

							<div align="center" dir="rtl" >
								<BR><div id="wait" style="font-size: 20px;padding-bottom: 17px;"><?php printf($obj->lang['donations1']); ?></div>
								<BR>
                               
   <form action="javascript:donate(document.getElementById('donateform'));" name="donateform" id="donateform">
                         <div style="display:inline-block; vertical-align:top;margin-top: 18px;">
						    <?php printf($obj->lang['acctype']); ?> 
                          </div>
                        <div style="display:inline-block; vertical-align:top;margin-top: 20px;">
                          
						   <select name='type' id='type'>
						   <?php
								foreach($host as $key => $val) {
										if(!$val['alias']){
											require_once ('hosts/' . $val['file']);
												if(method_exists($val['class'], "CheckAcc")) echo "<option value='{$key}'>{$key}</option>";   }
												}
							?>
							</select>
                        </div>	
                        
                        <div style="display:inline-block; vertical-align:top;">
                           <div  style="text-align: center;padding-bottom: 4px;">مشخصات خود را به شکل زیر وارد کنید</div>
							  <input type="text" name="accounts" id="accounts" value="" size="50">
                            <div id="check" style="text-align: center;"><font color=#FF6600>user:pass</font> or <font color=#FF6600>cookie</font></div>
                                                
                        </div>	
                        
                        <div style="display:inline-block; vertical-align:top;margin-top: 18px;">
                          <input type=submit value="<?php printf($obj->lang['sbdonate']); ?>">
                        </div>		
   </form>
                               
								<BR><BR>
							</div>
<?php					
						}
						#---------------------------- end donate  ----------------------------#

						#---------------------------- begin check  ---------------------------#
						else if (isset($_GET['id']) && $_GET['id']=='check'){
							if($obj->checkacc || $obj->isadmin()) include("checkaccount.php");
							else echo "<BR><BR><font color=red size=2>".$obj->lang['notaccess']."</b></font>";
						}
						#---------------------------- end check  ------------------------------#
						
						#---------------------------- begin admin  ---------------------------#
						else if (isset($_GET['id']) && $_GET['id']=='admin'){
							if($obj->isadmin()) include("admin.php");
							else echo "<BR><BR><font color=red size=2>".$obj->lang['notaccess']."</b></font>";
						}
						#---------------------------- end admin  ------------------------------#
						
						#---------------------------- begin get  ------------------------------#
						else {
?>
							<form action="javascript:get(document.getElementById('linkform'));" name="linkform" id="linkform">
                            <br />
								<div style="font-size: 22px;padding-bottom: 4px;"><?php printf($obj->lang['title1']);?></div>
								
                                
								<font face=Arial size=1><span style="font-familty: Arial;  font-size: 10px">Example: http://www.megaupload.com/?d=ABCDEXYZ</font><BR>
								<textarea id='links' style='width:500px; max-width: 800px; min-width: 800px;height:200px;min-height:200px;;max-height:200px' name='links'></textarea>
								<BR>
								<b>Proxy (host:port) or (host:port|user:pass)</b><BR>
								<input id='proxy' name='proxy' placeholder='proxy' style='width:300px;'><BR><BR>
								<input class="btn" type="submit"  id ='submit' value='<?php printf($obj->lang['sbdown']); ?>'/>&nbsp;&nbsp;&nbsp;
								<input class="btn" type="button" onclick="reseturl();return false;" value="ریست">
								<b class="reset"><label>ریست اتوماتیک</label><input type="checkbox" name="autoreset" id="autoreset" checked></b>
							</form><BR><BR>
                            <div align="center" style=" color:#000000 ; position: absolute;margin-left: 6px; margin-top:-110px;box-shadow: 0px 0px 4px black;;border-radius: 7px;padding: 5px; font-family: arial;font-size: 13px;">
						
						<!-- Start Server Info -->
						<?php showStat();?>
						<!-- End Server Info -->
						
						
						
					</div>
                       
							<div id="dlhere" align="center" style="display: none; font-size:18px;padding-bottom: 6px;">
								<hr />
                                <div  align="center" style="box-shadow: 0px 0px 3px;font-size: 18px;margin-top: 6px;padding-bottom: 10px;padding-top: 5px;background-color: bisque;border-radius: 10px 10px 0px 0px;width: 800px;">
                                <div style="display:inline-block; vertical-align:top;"><?php printf($obj->lang['dlhere']); ?> </div>
								<div style="display:inline-block; vertical-align:top; padding-left: 37px;">
								<!--<a onclick="return makelist(document.getElementById('showresults').innerHTML);" href="javascript:void(0)" style='TEXT-DECORATION: none'><font color=#FF6600>ایجاد لیست </font></a>--></div><br />
							</div>
							<div id="bbcode" align="center" style="display: none;"></div>
							<div id="showresults" align="center" style="padding-top: 11px;box-shadow: 0px 0px 2px;width: 800px;border-left: 1;border-radius: 0px 0px 30px 30px;
"></div>
<?php						
						}
						#---------------------------- end get  ------------------------------#
?>
</div>
</div>
						</td></tr>
					</tbody></table></div>
                    </div>
				</td>
                </tr>
				<!-- ########################## End Main ########################### -->
			</tbody></table>
<br />
			
            
            <script type="text/javascript" language="javascript" src="ajax.js?ver=1.0"></script> 
		</body>
	</html>