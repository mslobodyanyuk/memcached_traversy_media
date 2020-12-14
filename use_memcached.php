<?php
$memcache = new Memcached();
$memcache->addServer('localhost', 11211);
$memcache->setOption(Memcached::OPT_COMPRESSION, false);

// set and get a Key
$memcache->set('key01', 'value01');
print 'key01.value : ' . $memcache->get('key01') . "\n";

// append and get a Key
$memcache->append('key01', ', value02');
print 'key01.value : ' . $memcache->get('key01') . "\n";

$memcache->set('key02', 1);
print 'key02.value : ' . $memcache->get('key02') . "\n";

//increment
$memcache->increment('key02', 100);
print 'key02.value : ' . $memcache->get('key02') . "\n";

//decrement
$memcache->decrement('key02', 51);
print 'key02.value : ' . $memcache->get('key02') . "\n";

$memcache->set('key03', 'value03');
print 'key03.value : ' . $memcache->get('key03') . "\n";

// CAS (on example below, the Value of key03 will not update to value05)
$cas = 0;
$memcache->get('key03', null, $cas);
$memcache->replace('key03', 'value04');
if ($memcache->getResultCode() == Memcached::RES_NOTFOUND){
	$memcache->add('key03', 'value03');		
}else {
	//$memcache->cas($cas, 'key03', 'value05');
	$memcache->set('key03', 'value05');
}
print 'key03.value : ' . $memcache->get('key03') . "\n";






