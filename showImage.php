<?php
    $dir = "uploads/";
    if($opendir = opendir($dir)){
        while(($file = readdir($opendir)) !== FALSE){
            if($file !="."&& $file !=".."){
    
                echo "&emsp;&emsp;<a href=''download><img src='$dir/$file' alt='' width='32%''></a><br><br> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; $file <br><br>";
            }
        }
    }
?>