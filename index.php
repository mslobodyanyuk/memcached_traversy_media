<?php    
    $mc = new Memcached;
    $mc->addServer('localhost', 11211);    
    
    $mypage = $mc->get('mypage.php');    
    
    if ($mypage){
        echo $mypage;
    }else {
        echo 'NOT CACHED';
        $filename = 'inc/mypage.php';
        $handle = fopen($filename, 'r');
        $contents = fread($handle,filesize($filename));
           //echo $contents;        
        $mc->set('mypage.php', $contents, 0, 30);
        echo $mc->get('mypage.php');
        
    }
    
    