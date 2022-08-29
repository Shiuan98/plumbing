
<?
	session_start();
	$db="";
	$session_pfx = "catmgr_plumber2";
	$site_name = ($site_name=="" ? "Plumbing Service":$site_name);
	$site_title = ($site_title=="" ? "Plumbing Service":$site_title); 
	$site_keyword = ($site_keyword=="" ? "Sewer Line Repair in Malaysia, Plumbing Installation in Malaysia, Water Heater Repair in Malaysia, Toilet Pump Repair And Service in Malaysia, Roof Leaking And Repair in Malaysia, Clogged Drain in Malaysia, Clogged Toilet in Malaysia, Pipe Leaking in Malaysia, Pipe Bursting in Malaysia":$site_keyword);
	$site_description = ($site_description=="" ? "":$site_description);  
 
	$company_name = "Plumbing Service";
	// $site_url = "";	//without www.
	// $site_email = "";
	// $mailsender = "";
	$site_email = "woeishiuan@rubysoft.com.my";
	$mailsender = "noreply@rubysoft.com.my";
	$site_url = "http://rubyss.com/plumber2/";

	
 


	//form parameters
	function hsc($s) {return htmlspecialchars($s,ENT_QUOTES);}
	function frmp($s){if (isset($_POST[$s])) return hsc($_POST[$s]); else return "";}
	function frmg($s){if (isset($_GET[$s])) return hsc($_GET[$s]); else return "";}
	function frm($s){if (frmp($s)!="") return frmp($s); else if (frmg($s)!="") return frmg($s); else return "";}
	function frmr($s){if (isset($_POST[$s])&&$_POST[$s]!="") return $_POST[$s]; else return "";}
	function clean($s){return mysql_real_escape_string(stripslashes($s));}
	function cleanf($s){$r=preg_quote('\/:*?"<>|', '/'); return preg_replace("/([\\x00-\\x20\\x7f-\\xff{$r}])/e","_",$s);}

	//miscellany
	function cbx($s) {return ($s=="on" ? 1:0);}
	function rvd($s) {$d="-"; if ($s=="") return ""; $r=explode($d,$s); if (sizeof($r)!=3) return ""; return $r[2].$d.$r[1].$d.$r[0];}
	function pad($s,$c,$l) {while(strlen($s)<$l) {$s=$c.$s;} return $s;}
	function xxx($s) {return ereg_replace('[a-zA-Z0-9]','x',$s);}
	function rnd($l) {$s="abcdefghjkmnpqrstuvwxyz0123456789"; $p=""; for($i=0;$i<$l;$i++) {$p.=substr($s,rand(0,strlen($s)-1),1);} return $p;}
	function lnbr($s) {return str_replace("\n","<br/>",$s);}
	function go($u) {echo "<meta http-equiv='REFRESH' content='0; URL=".$u."'>"; exit();}
	function pageurl() {return "http".($_SERVER["HTTPS"]=="on" ? "s":"")."://".$_SERVER["SERVER_NAME"].($_SERVER["SERVER_PORT"]!="80" ? ":".$_SERVER["SERVER_PORT"]:"").$_SERVER["REQUEST_URI"];}
	function genap($s) {$d=$s*100; $m=$d%10; if($m==1||$m==6){$d-=1;} if($m==2||$m==7){$d-=2;} if($m==3||$m==8){$d+=2;} if($m==4||$m==9){$d+=1;} return dfd($d/100);}

	//mysql shortcuts
	function mq($s) {return mysql_query($s);}
	function mfa($s) {return mysql_fetch_array($s);}

	//session handling
	function set($s,$v) {global $session_pfx; $_SESSION[$session_pfx.$s] = $v;}
	function get($s) {global $session_pfx; if (isset($_SESSION[$session_pfx.$s])) return $_SESSION[$session_pfx.$s]; else return "";}

	//cookie handling
	function setc($s,$v) {global $session_pfx; setcookie($session_pfx.$s,$v,(time()+60*60*24*365));}
	function getc($s) {global $session_pfx; if (isset($_COOKIE[$session_pfx.$s])) return $_COOKIE[$session_pfx.$s]; else return "";}

	//time formating
	function now() {return date('Y-m-d H:i:s');}
	function sdf($t) {return date('d-M-Y', strtotime($t));}
	function sdtf($t) {return date('d-M-Y, h:i a', strtotime($t));}
	function sdfnm($t) {return date('d-m-Y', strtotime($t));}
	function stf($t) {return date('h:i a', strtotime($t));}
	function sdfd($t) {return date('d', strtotime($t));}
	function sdfm($t) {return date('m', strtotime($t));}
	function sdfy($t) {return date('Y', strtotime($t));}

	//date manipulation - only accept / return Y-m-d format. e.g. moddate('2008-01-01','+3 day')
	function moddate($s,$v)  {return date('Y-m-d',strtotime($v,strtotime($s)));}

	//number formating
	function dfi($s) {return number_format($s,0);}
	function dfd($s) {return number_format($s,2);}

	//validation
	function isalphanum($s) {return !ereg('[^a-zA-Z0-9_]', $s);}
	function chk($s) {return (strlen($s)>=4 && strlen($s)<=16 && isalphanum($s));}
	function isdate($s) {$d="-"; if ($s=="") return 0; $r=explode($d,$s); if (sizeof($r)!=3) return 0; return checkdate($r[1],$r[0],$r[2]);}
	function isnulldate($s) {return (!isset($s) || $s=="" || $s=="00-00-0000" || $s=="0000-00-00" || $s=="00-00-0000 00:00:00" || $s=="0000-00-00 00:00:00");}
	function isemail($s) {$a="[-a-z0-9!#$%&\'*+/=?^_`{|}~]";$d="([a-z0-9]([-a-z0-9]*[a-z0-9]+)?)";$r="^".$a."+(\.".$a."+)*@(".$d."{1,63}\.)+".$d."{2,63}$";return (eregi($r,$s));}
	function isphone($s) {return !(ereg('[^0-9()\-]',$s));}
	//function isurl($s) {return preg_match('|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i',$s);}
	function isurl($s) {return preg_match('|^[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i',$s);}
	function isint($s) {return !ereg('[^0-9,]',$s);}
	function isdbl($s) {return (!ereg('[^0-9.,]',$s) && substr_count($s,".")<2);}
	function cint($s) {return (isint($s) ? trim(str_replace(",","",$s))+0:0);}
	function cdbl($s) {return (isdbl($s) ? trim(str_replace(",","",$s))+0:0.00);}
	function cbool($s) {$s=strtolower($s); return (($s=='y'||$s=='yes'||$s=='true'||$s=='1'||$s=='on') ? 1:0);}
	function epfx($e,$s) {return (($e!="" ? "<br/>":"")."&#149;&nbsp; ".$s);}
	function upfx($u,$s) {return (($u!="" ? "<br/>":"")."&#149;&nbsp; ".$s);}
	

	if (frm("y")==1) {set("y",1);} $y=get("y");
	if (frm("z")==1) {set("z",1);} $z=get("z");
	//if ($z=="") {exit;}
	if(isset($_POST['g-recaptcha-response'])) {
   // RECAPTCHA SETTINGS
     $captcha = $_POST['g-recaptcha-response'];
     $ip = $_SERVER['REMOTE_ADDR'];
     $key = '6LfBvZsUAAAAADQEUKjj1_rC8XE4Fnqt1F_LNpUI';
     $url = 'https://www.google.com/recaptcha/api/siteverify';
     
   // RECAPTCH RESPONSE
     $recaptcha_response = file_get_contents($url.'?secret='.$key.'&response='.$captcha.'&remoteip='.$ip);
     $data = json_decode($recaptcha_response);
     
     if(isset($data->success) &&  $data->success === true) {
       // code goes here
     }
     else {
      die('Your account has been logged as a spammer, you cannot continue!');
    }
  }

	$this_file = substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],"/")+1);
	if (strpos($this_file,"?")!==false) {$this_file = substr($this_file,0,strpos($this_file,"?"));}
?>
