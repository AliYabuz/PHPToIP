<?php
/*Simple IP Grabber API by Ali Yabuz*/

/*Get IP Address of client as String*/
$IPString=$_SERVER["REMOTE_ADDR"];
/*HTTP_USER_AGENT is going to help us to grab the info about browser of client*/
$Agent=$_SERVER["HTTP_USER_AGENT"];
if(@strrpos(file_get_contents("ip.txt"),"IP Grabber API (c) Ali Yabuz")==!null){
    @file_put_contents("ip.txt",file_get_contents("ip.txt")."\n{$IPString}\n{$Agent}\n");
}else{
    @file_put_contents("ip.txt",file_get_contents("ip.txt")."IP Grabber API (c) Ali Yabuz\n{$IPString}\n{$Agent}\n"); 
}





?>
