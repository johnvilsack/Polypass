<?php

$list 			= file('rainbow.tbl');
$symbols 		= array('!','#', '$','%','^','&','*','-','+',';',':','.','?','/','~');

function make_password($list, $symbols)
	{
		$i = 0;
		$num = 0;
		$completePhrase = "";

		// Generate The Phrase
		while($i < 12 OR $num < 3)
			{
				$select = mt_rand(0,count($list));
				$newword = $list[$select];
				$i = $i + strlen($newword);
				$num++;
				$passphrase[] = ucfirst($newword);
			}

		foreach($passphrase as $k=>$v)
			{
				$completePhrase .= $v;
			}

		// Grab A Symbol
		$symbol = $symbols[mt_rand(0,count($symbols))];

		$final = preg_replace( '/\s+/', '', $completePhrase);
		return $symbol. $final . mt_rand(1,999);
	}

make_password($list, $symbols);