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
			
			$text = $text."<div class=\"posts-box masonry-brick\" style=\"position: absolute; top: 31px; left: 0px;\">
   <div class=\"port-thumb\">
 <img width=\"212\" height=\"250\" src=\"".$m[1][$i]."\" class=\"attachment-category-thumb size-category-thumb wp-post-image\" sizes=\"(max-width: 212px) 100vw, 212px\" style=\"opacity: 1;\">
  </div>
  <h2 class=\"post-title-1\">".$mm[1][$i]." </h2>
  </div>";
	$text = $text."\n";		
		}
echo $text;