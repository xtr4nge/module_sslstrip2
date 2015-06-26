<b>SSLstrip2</b> (SSLstrip+)
<br><br>
<b>Author: </b> Moxie Marlinspike, LeonardoNve

<br>This is a new version of Moxie's SSLstrip with the new feature to avoid HTTP Strict Transport Security (HSTS) protection mechanism.
<br>
<br>This version changes HTTPS to HTTP as the original one plus the hostname at html code to avoid HSTS. Check my slides at BlackHat ASIA 2014 OFFENSIVE: EXPLOITING DNS SERVERS CHANGES for more information.
<br>
<br>For this to work you also need a DNS server that reverse the changes made by the proxy, you can find it at https://github.com/LeonardoNve/dns2proxy.
