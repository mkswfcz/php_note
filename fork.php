<?php
    $pid = pcntl_fork();
    if(-1==$pid){
	
	return false;	    
    
    }elseif($pid){

	pcntl_wait($status,WNOHANG|WUNTRACED);
	echo '父进程:'.posix_getpid(). ' 子进程：'.$pid.PHP_EOL;	
    }
    
    for($i = 0;$i < 50 ; $i++){
	sleep(2);
	echo 'child process worker!'.posix_getpid().PHP_EOL;
    }
