<?php
/* Made By 3P1C
Team : SkyKnight-Team
Tool Name: Olaf
*/
$red = "\033[31m";
$bred = "\033[1;31m";
$byellow = "\033[1;33m";
$yellow ="\033[33m";
$bwhite = "\033[1;97m";
$white = "\033[97m";
$cyan = "\033[96m";
$bcyan= "\033[1;96m";
$normal = "\033[0m";
$blue = "\033[94m";
$bblue = "\033[1;94m";
system("clear");
system("python banner.py");
echo $yellow."\n1. Whois Lookup    2. DNS Lookup\n3. Port Scan       4. Zone Transfer\n5. IP To Location  6. HTTP Header Detector\n7. Link Grabber    8. Traceroute\n9. All            10. Exit\n";
echo $bblue."∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞";
while(True){
echo $cyan."\nOl4F >> ".$blue;$opt = trim(fgets(STDIN));


if($opt == "10" || $opt == "exit" || $opt == 'quit'){
echo $bred."\nThanks For Using Me\n".$normal;
break;

}
elseif($opt == "1" || $opt == "01"){
echo $bblue."\nOl4F/whois/~# ".$bcyan;$whois = trim(fgets(STDIN));
echo $white."\n\t\t[Whois Lookup]\n\n";
$a = file_get_contents("http://api.hackertarget.com/whois/?q=".$whois);
echo $a;
}
elseif($opt == '02' || $opt == '2')
{
echo $bblue."\n0l4F/DNS/~# ".$bcyan;$dns = trim(fgets(STDIN));
echo $white."\n\t\t[DNS Lookup]\n\n";
$b = file_get_contents("http://api.hackertarget.com/dnslookup/?q=".$dns);
echo $b;
}

elseif($opt == '03' || $opt == '3')
{
echo $bblue."\nOl4F/port/~# ".$bcyan;$port = trim(fgets(STDIN));
echo $white."\n\t\t[Port Scan]\n\n";
$c = file_get_contents("http://api.hackertarget.com/nmap/?q=".$port);
echo $c;
}
elseif($opt == '04' || $opt == '4')
{
echo $bblue."\nOL4F/Ztrans/~# ".$bcyan;$ztrans = trim(fgets(STDIN));
echo $white."\n\t\t[Zone Transfer]\n\n";
$d = file_get_contents("http://api.hackertarget.com/zonetransfer/?q=".$ztrans);
echo $d;
}
elseif($opt == '05' || $opt == '5')
{
echo $bblue."\nOL4F/IPTL/~# ".$bcyan;$iptl = trim(fgets(STDIN));
echo $white."\n\t\t[IP To Location]\n\n";
$e = file_get_contents("http://ipinfo.io/".$iptl.'/geo');
echo $e;
}
elseif($opt == '6' || $opt == '06')
{
echo $bblue."OL4F/http/~# ".$bcyan;$http = trim(fgets(STDIN));
echo $white."\n\t\t[HTTP header detector]\n\n";
$f = file_get_contents("http://api.hackertarget.com/httpheaders/?q=".$http);
echo $f;
}

elseif($opt == '07' || $opt == '7')
{
echo $bblue."OL4F/linkgrab/~# ".$bcyan;$link = trim(fgets(STDIN));
echo $white."\n\t\t[Link Grabber]\n\n";
$g = file_get_contents("https://api.hackertarget.com/pagelinks/?q=".$link);
echo $g;
}
elseif($opt == '8' || $opt == '08')
{
echo $bblue."OL4F/Traceroute/~# ".$bcyan;$trace = trim(fgets(STDIN));
echo $white."\n\t\t[Traceroute]\n\n";
$h = file_get_contents("https://api.hackertarget.com/mtr/?q=".$trace);
echo $h;
}

elseif($opt == '09' || $opt == '9')
{
echo $bblue."OL4F/All/~# ".$bcyan;$all = trim(fgets(STDIN));
echo $bred."\n\t\t\t[All]\n\n";

echo $white."\n\t\t[Whois Lookup]\n\n";
$a = file_get_contents("http://api.hackertarget.com/whois/?q=".$all);
echo $a;

echo $white."\n\t\t[DNS Lookup]\n\n";
$b = file_get_contents("http://api.hackertarget.com/dnslookup/?q=".$all);
echo $b;


echo $white."\n\t\t[Port Scan]\n\n";
$c = file_get_contents("http://api.hackertarget.com/nmap/?q=".$all);
echo $c;


echo $white."\n\t\t[Zone Transfer]\n\n";
$d = file_get_contents("http://api.hackertarget.com/zonetransfer/?q=".$all);
echo $d;


echo $white."\n\t\t[IP To Location]\n\n";
$e = file_get_contents("http://ipinfo.io/".$all.'/geo');
echo $e;

echo $white."\n\t\t[HTTP header detector]\n\n";
$f = file_get_contents("http://api.hackertarget.com/httpheaders/?q=".$all);
echo $f;


echo $white."\n\t\t[Link Grabber]\n\n";
$g = file_get_contents("https://api.hackertarget.com/pagelinks/?q=".$all);
echo $g;


echo $white."\n\t\t[Traceroute]\n\n";
$h = file_get_contents("https://api.hackertarget.com/mtr/?q=".$all);
echo $h;

}





else{
//pass;
}
}
?>