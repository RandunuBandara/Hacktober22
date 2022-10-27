<?php
/*June 03, 2022 (Fri). Author: YP@C2L3. Contributors: RB@C2L3, JS@C2L3, TD@C2L3
  Purpose: Box class of yFramework 2.0. 
  Version: 1.1
*/

require_once('genobj.php');

class BoxObj extends GenObj{
  //properties list, if applicable
  private static $i=0;
  
  function testObj(){
	  echo "This is a test of BoxObj!";
	}
	
	function draw($boxid, $content){
		//echo "Testing the draw function!";
	  $obj=new GenObj();
	  $link=$obj->connect();
	  $rs=$obj->selectRecords($fields=array("*"), $tables=array("box"), " WHERE box.boxid=$boxid");
	  
	  while($row=$rs->fetch()){
		  $boxid=$row["boxid"];
			$boxdesc=$row["boxdesc"];
			$boxcss=$row["boxcss"];
			$ctype=$row["ctype"];
			$ccss=$row["ccss"];
			//$image=$row["image"];
    }    
        
    echo "<div style=\"$boxcss\">";
    if($ctype==1) //simple box with paragraph
      echo "<center><p style=\"$ccss\">". $content. "</p></center>";
    else if($ctype==2){ //simple box with image
    	$content=explode("~", $content); //var_dump($content);
      $ccss1=explode(",", $ccss); //var_dump($ccss1); 
      //echo "<center><img src=\"$ccss1[0]\" alt=\"$ccss1[1]\" width=\"$ccss1[2]\" height=\"$ccss1[3]\"/></center>";
      echo "<center><img src=\"$content[0]\" alt=\"$content[1]\" width=\"$ccss1[0]\" height=\"$ccss1[1]\"/></center>"; 
    }else if($ctype==3){ //simple box with hyperlink 
    	$content=explode("~", $content); //var_dump($content);
    	$j=BoxObj::$i; 
    	echo "<a href=$content[1]?id=$j><center><p style=\"$ccss\">". $content[0]. "</p></center></a>"; 
    	BoxObj::$i++;
    }else if($ctype==4){ //simple text box with label
    	$content=explode("~", $content); //var_dump($content); 
    	echo "<lable>$content[0]</lable>"; 
			echo "<input type=\"$content[1]\" name=\"$content[2]\" placeholder=\"$content[3]\" $content[4] style=\"$ccss\"/>";
    }else if($ctype==5){ //simple submit button
      //echo $content;
      echo "<input type=\"submit\" name=\"$content\" value=\"$content\" style=\"$ccss\"/>";
 
    }
    echo "</div>";
  }
}
?>

<?php //echo "Testing of the Box class"; ?>

<?php
  /*$boxobj=new BoxObj(); echo "</BR>Testing the Box object</BR>";
  
  //draw one box
  $boxid=4; $content="alverde-intensive-repair-day-cream-50ml-510x510.webp~alveracosmetic";
  $boxobj->draw($boxid, $content);
  $boxid=4; $content="comlog.png~logo";
  $boxobj->draw($boxid, $content);
  /*$boxid=11; $content="Password~password~pass~Enter Password~required";
  $boxobj->draw($boxid, $content);*/
  
  //draw several boxes
  /*$noboxes=11;
  //boxids and content data for several boxes
  $boxdata=array(array());
  $boxdata[0][0]=4; $boxdata[0][1]="comlog.png~logo";
  $boxdata[1][0]=4; $boxdata[1][1]="alverde-intensive-repair-day-cream-50ml-510x510.webp~alveracosmetic";
  /*$boxdata[2][0]=1; $boxdata[2][1]="My Wishlist";
  $boxdata[3][0]=1; $boxdata[3][1]="Cart";
  $boxdata[4][0]=3; $boxdata[4][1]=".";
  $boxdata[5][0]=3; $boxdata[5][1]=".";
  $boxdata[6][0]=3; $boxdata[6][1]=".";
  $boxdata[7][0]=3; $boxdata[7][1]=".";
  $boxdata[8][0]=3; $boxdata[8][1]=".";
  $boxdata[9][0]=4; $boxdata[9][1]="."; //image box
  $boxdata[10][0]=4; $boxdata[10][1]="."; //image box*/
    
  //draw several boxes
  /*$j=0; $k=0; $st=0; $finish=2;
?>  
  <div class="box" style="width: 90%; background-color: #21618C ; border: 0px">
<?php
		for($i=$st; $i<$finish; $i++){  //echo $i;
			$boxid=$boxdata[$j][$k]; $k++; $content=$boxdata[$j][$k]; $j++; $k=0;
			$boxobj->draw($boxid, $content);
		}
?>
	</div> 
	
<?php	
	//var_dump($obj->getAllData()); */ 
?>
