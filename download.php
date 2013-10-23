<?php


	$urls = array(
		'http://www.youtube.com/watch?v=V7-yAX9ijuM',
		'http://www.youtube.com/watch?v=wSuZ134uSbw',
		'http://www.youtube.com/watch?v=0vgaVzHArXc',
		'http://www.youtube.com/watch?v=ZeaIvjoH1FY',
		'http://www.youtube.com/watch?v=IUGzY-ihqWc',
		'http://www.youtube.com/watch?v=qWxhdzlIQrY',
		'http://www.youtube.com/watch?v=RJhwjBbZlTo',
		'http://www.youtube.com/watch?v=Vc29tgT_iqA',
		'http://www.youtube.com/watch?v=ZYa3YCZdtuc',
		'http://www.youtube.com/watch?v=49n7jgBplYc',
		'http://www.youtube.com/watch?v=q0H57JeQYN4',
		'http://www.youtube.com/watch?v=V7OKJzFOH6M',
		'http://www.youtube.com/watch?v=EsGiBwK4Ycc',
		'http://www.youtube.com/watch?v=OrVKRIJpcuc',
		'http://www.youtube.com/watch?v=M1egUr5jzMw',
		'http://www.youtube.com/watch?v=wC35LroU3BQ',
		'http://www.youtube.com/watch?v=D0-N-pep9AI',
		'http://www.youtube.com/watch?v=3_bDp8kL1Ig',
		'http://www.youtube.com/watch?v=T3yPyc5ZdNs',
		'http://www.youtube.com/watch?v=TWfV1otvFLs',
		'http://www.youtube.com/watch?v=gkime9M4z34',
		'http://www.youtube.com/watch?v=VAFfjF2r4A4',
		'http://www.youtube.com/watch?v=kY-GOD1j5kw',
		'http://www.youtube.com/watch?v=MNZaRkDzc1s',
		'http://www.youtube.com/watch?v=2AQr06ZUlR0',
		'http://www.youtube.com/watch?v=f1wc9UGWrfw',
		'http://www.youtube.com/watch?v=t1wjL4BqXlI',
		'http://www.youtube.com/watch?v=sJ1mFzMx_CU',
		'http://www.youtube.com/watch?v=KTYD_kN7rPg',
		'http://www.youtube.com/watch?v=PAvdqEsobaw',
		'http://www.youtube.com/watch?v=OnODlJdKrNM',
		'http://www.youtube.com/watch?v=fp-bz6OxjQ8',
		'http://www.youtube.com/watch?v=JhAOr7EjKBo'
	);
	
	foreach($urls as $url) {
        echo "\nSystem : ". system('youtube-dl '.$url.' --extract-audio --audio-format best -t "test"', $retval);
        echo "\nRetval : ".$retval;
}
