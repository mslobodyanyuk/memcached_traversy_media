Intro To Memcached
==================

* ***Actions on the deployment of the project:***

- Making a new project memcached_traversy_media.loc:

	sudo chmod -R 777 /var/www/Memcached/memcached_traversy_media.loc

	//!!!! .conf
	sudo cp /etc/apache2/sites-available/test.loc.conf /etc/apache2/sites-available/memcached_traversy_media.loc.conf
		
	sudo nano /etc/apache2/sites-available/memcached_traversy_media.loc.conf

	sudo a2ensite memcached_traversy_media.loc.conf

	sudo systemctl restart apache2

	sudo nano /etc/hosts

	cd /var/www/Memcached/memcached_traversy_media.loc
	  
- Deploy project:

	Download the archieve with project files( Code -> Download ZIP ).
	
---	

Traversy Media

[Intro To Memcached (35:13)]( https://www.youtube.com/watch?v=7MLXuG83Fsw&ab_channel=TraversyMedia )

In this video you will learn how to install and work with Memcached. You will learn the following...

[(2:25) Install Memcached in Linux Ubuntu]( https://youtu.be/7MLXuG83Fsw?t=145 )

[(3:25) Connect Using Telnet]( https://youtu.be/7MLXuG83Fsw?t=205 )

[(3:38) Basic Commands - stats, get, set, delete, etc]( https://youtu.be/7MLXuG83Fsw?t=218 )

[(9:40) Memcached Tools]( https://youtu.be/7MLXuG83Fsw?t=580 )

[(16:45) Use Memcached with Python]( https://youtu.be/7MLXuG83Fsw?t=1005 )

[(23:35) Use Memcached with PHP]( https://youtu.be/7MLXuG83Fsw?t=1415 )

[(2:25)]( https://youtu.be/7MLXuG83Fsw?t=145 )

- Install Memcached in Linux Ubuntu

	sudo apt-get install memcached
	ps -ef | grep -i memc
								
![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/1.png )	

![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/2.png )

![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/3.png )
	
[(3:25)]( https://youtu.be/7MLXuG83Fsw?t=205 )	

- Connect Using Telnet

	telnet localhost 11211

[(3:38)]( https://youtu.be/7MLXuG83Fsw?t=218 )

- Basic Commands - stats, get, set, delete, etc

	stats
	set foo 0 3600 3
	bar
	get foo
	
![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/4.png )	

![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/5.png )
	
[(5:42)]( https://youtu.be/7MLXuG83Fsw?t=342 )

	stats
	delete foo
	get foo
	stats

[(6:50)]( https://youtu.be/7MLXuG83Fsw?t=410 )

	add num 0 3600 2
	50
	get num
	append num 0 3600 2
	25
	get num

[(7:40)]( https://youtu.be/7MLXuG83Fsw?t=460 )

	prepend num 0 3600 2	
	44
	get num
	replace num 0 3600 2
	40
	
![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/6.png )	

![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/7.png )	

[(8:15)]( https://youtu.be/7MLXuG83Fsw?t=495 )

	get num
	incr num 2 				
	decr num 2

[(8:40)]( https://youtu.be/7MLXuG83Fsw?t=520 )

	flush_all
	get num
	stats

[(9:15)]( https://youtu.be/7MLXuG83Fsw?t=555 )

	quit

	/etc/init.d/memcached restart

	telnet localhost 11211
	stats
	
_- Everything is clear._

	quit
	
![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/8.png )

![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/9.png )
	
[(9:55)]( https://youtu.be/7MLXuG83Fsw?t=595 )

- Memcached Tools
	
	sudo apt-get install libmemcached-tools
	
![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/10.png )
	
[(10:35)]( https://youtu.be/7MLXuG83Fsw?t=635 )

	memcstat
	memcstat --servers localhost
	memcdump --servers localhost

![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/11.png )

![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/12.png )

[(11:40)]( https://youtu.be/7MLXuG83Fsw?t=700 )
Open another one Terminal:

	telnet localhost 11211
	set foo 0 3600 3 
	bar
	
![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/13.png )	

![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/14.png )	
	
[(11:45)]( https://youtu.be/7MLXuG83Fsw?t=705 )
Return to first Terminal:

	memcdump --servers localhost

[(12:00)]( https://youtu.be/7MLXuG83Fsw?t=720 )
At another one Terminal:

	set name 0 3600 4
	Brad
	
![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/15.png )

[(12:08)]( https://youtu.be/7MLXuG83Fsw?t=728 )
Return to first Terminal:

	memcdump --servers localhost
	memccat --servers localhost name
	memccat --servers localhost foo

![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/16.png )

	memcrm --servers localhost name
	clear

	mkdir test
	cd test

[(14:05)]( https://youtu.be/7MLXuG83Fsw?t=845 )

	for i in `seq 1000`; do echo $i >> book$i; done
	ls

![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/17.png )
	
![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/18.png )

[(14:55)]( https://youtu.be/7MLXuG83Fsw?t=895 )

	memccp --servers localhost book*
	memcdump --servers localhost
	
![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/19.png )
	
	memccat --servers localhost book200		
	memccat --servers localhost book[1-9]

![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/20.png )

[(16:20)]( https://youtu.be/7MLXuG83Fsw?t=980 )
At another one Terminal:

	get book444
	quit
	exit

![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/21.png )

[(16:40)]( https://youtu.be/7MLXuG83Fsw?t=1000 )
Return to first Terminal:

	cd ..
	clear

[(16:45)]( https://youtu.be/7MLXuG83Fsw?t=1005 )

- Use Memcached with Python

	python --version

![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/22.png )
	
	sudo apt-get install python-memcache
	
![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/23.png )	
	
	import memcache
	mc = memcache.Client(['127.0.0.1:11211'], debug=0)
	mc.set('greet', 'Hello World')
	mc.get('greet')
	
![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/24.png )	

[(19:10)]( https://youtu.be/7MLXuG83Fsw?t=1150 )
 Open another one Terminal:

![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/25.png )	

	telnet localhost 11211
	mc.set('num', 40)
	mc.incr('num')
	mc.decr('num')
	mc.delete('num')
	mc.get('num')

[(21:15)]( https://youtu.be/7MLXuG83Fsw?t=1275 )

	mc.set_multi({'name':'John Doe', 'email':'jdoe@gmail.com', 'age':35})
	mc.get('name')
	mc.get_multi(['name', 'email', 'age'])
	person = mc.get_multi(['name', 'email', 'age'])
	person.keys()
	person.values()
	person['name']
	mc.delete_multi(['email', 'age'])
	mc.get('age')
	mc.get('name')
	mc.flush_all()
	mc.get('name')
	quit()

[(23:35)]( https://youtu.be/7MLXuG83Fsw?t=1415 )

- Use Memcached with PHP

_Memcache class is no longer maintained - use Memcached class._ 

	sudo apt-get install apache2
	// sudo apt-get install php7.0 libapache2-mod-php7.0
	// sudo systemctl restart apache2
	cd /var/www/Memcached/memcached_traversy_media.loc
	
	// sudo apt-get install php-memcached
	
[(26:35)]( https://youtu.be/7MLXuG83Fsw?t=1595 )	
	
	sudo systemctl restart apache2

![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/26.png )	

	touch index.php

```php
<?php    
	$mc = new Memcached;
	$mc->addServer('localhost', 11211);

	$mc->add('username', 'devuser');
	
	//echo 'Working...';
	echo $mc->get('username');
```	

![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/27.png )

![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/28.png )

[(30:15)]( https://youtu.be/7MLXuG83Fsw?t=1815 )

`mypage.php`:

```php
<?php    
    $mc = new Memcached;
    $mc->addServer('localhost', 11211);

    $mc->add('username', 'devuser');
    
    //echo 'Working...';
    //echo $mc->get('username');
    $mypage = $mc->get('mypage.php');
    
    if ($mypage){
        echo $mypage;
    }else {
        echo 'NOT CACHED';
        $filename = 'inc/mypage.php';
        $handle = fopen($filename, 'r');
        $contents = fread($handle, filesize($filename));
        echo $contents;        
    }
```

![screenshot of sample]( https://github.com/mslobodyanyuk/memcached_traversy_media/blob/main/public/images/29.png )

[(33:20)]( https://youtu.be/7MLXuG83Fsw?t=2000 )

```php
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
        $contents = fread($handle, filesize($filename));
        $mc->set('mypage.php', $contents, 0, 30);
		echo $mc->get('mypage.php');
    }
```

#### useful links:

<https://memcached.org/>

_Also can be useful information in:_

Quick Notepad Tutorial

[Example to use Memcached on PHP ( Memcached - Use it on PHP )]( https://www.youtube.com/watch?v=_wbuByP2HYs&ab_channel=QuickNotepadTutorial ) 

_- File `use_memcached.php` in project folder for general information._  

Артем Манченков

[GeekBrains PHP 2 [Memcached]]( https://www.youtube.com/watch?v=5q4VoOOlwXw&ab_channel=%D0%90%D1%80%D1%82%D0%B5%D0%BC%D0%9C%D0%B0%D0%BD%D1%87%D0%B5%D0%BD%D0%BA%D0%BE%D0%B2 )