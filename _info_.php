<?
$mod_name="sslstrip2";
$mod_version="1.0";
$mod_path="/usr/share/fruitywifi/www/modules/$mod_name";
$mod_logs="$log_path/$mod_name.log"; 
$mod_logs_history="$mod_path/includes/logs/";
$mod_sslstrip_inject=0;
$mod_sslstrip_tamperer=0;
$mod_sslstrip_filter="";
$mod_panel="show";
$mod_isup="ps aux|grep -E 'fruitywifi.+sslstrip2.+sslstrip' | grep -v grep | awk '{print $2}'";
$mod_alias="SSLstrip2";
# EXEC
$bin_danger = "/usr/share/fruitywifi/bin/danger";
$bin_sslstrip = "$mod_path/includes/sslstrip";
$bin_python = "/usr/bin/python";
$bin_rm = "/bin/rm";
$bin_echo = "/bin/echo";
$bin_touch = "/bin/touch";
$bin_mv = "/bin/mv";
$bin_sed = "/bin/sed";
$bin_dos2unix = "/usr/bin/dos2unix";
$bin_iptables = "/sbin/iptables";
$bin_killall = "/usr/bin/killall";
$bin_cp = "/bin/cp";
?>
