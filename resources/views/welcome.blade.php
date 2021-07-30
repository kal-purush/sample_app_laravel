<?php
	function rsa_computation($limit){
    $p = 178542003245811211274167228297361192303886321036074276889145691522634525820185614278499562592134188995169731066418203258297035264969457638591284906658912408319763156912951486020761069099132619194489006875108217247513715271974383296142805846405783845170862140174184507256128825312324419293575432423822703857091;
    $r = 187;
    for ($i = 1; $i < $limit; $i++) {
      $p=($p*$p)%$r;
    }
    return $p;
  }

	$start = microtime(true);
  if(isset($_GET['id'])){
    $val = urldecode($_GET["id"]);
  	if (!empty($val)){
      rsa_computation($val);
  	}
  }
	$time_elapsed_secs = microtime(true) - $start;
	echo "total time  taken = ".($time_elapsed_secs*1000) . " ms\n";
?>
