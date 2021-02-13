<?php
function amrheader($head,$tag='h1',$align='center',$color='#333',$ff='candara'){
 echo"<$tag style=\"text-align:$align; color:$color;font-family:$ff\">$head</$tag>";

}

amrheader('PARTHO GHOSH','h1','center','red','impact');
amrheader('BANGLADESH','h2','center','blue','arial');