<?php
$keyword = str_replace("-", " ", $_GET["jser"]);
$keyword = chop($keyword);
$keyword = ucfirst($keyword);


 $query_pars = $keyword;
 $query_pars_2 = str_replace(" ", "+", chop($query_pars));
 $query_pars_2 = mb_strtolower($query_pars_2);


 $ch = curl_init();  
curl_setopt($ch, CURLOPT_URL, "https://www.google.com/search?q=$query_pars_2&start=0&tbm=isch&gbv=2&gws_rd=ssl&hl=en&num=100&tbs=ift:jpg"); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36" );
$result = curl_exec($ch); 
curl_close($ch);

		preg_match_all('~"ou":"(.*)".*"tu":"(.*)"~isU',$result, $m);
	preg_match_all('~"pt":"(.*)".*"rh":"(.*)"~isU',$result, $mm);
	
	$text = "";
	
	for($i=0;$i<100;$i++)
		{
			
			$text = $text."<link>".$m[1][$i]."</link><snippet>".$mm[1][$i]."</snippet>";
	$text = $text."\n";		
		}
echo $text;