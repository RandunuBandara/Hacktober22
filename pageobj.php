<?php
/*May 25, 2022 (Wed). Author: YP@C2L3. Contributors: RB@C2L3, JS@C2L3, TD@C2L3
  Purpose: Page class of yFramework 2.0. 
  Version: 1.0
*/

require_once('boxobj.php');

class PageObj extends GenObj{
  //properties list, if applicable
  
  function testObj(){
	  echo "This is a test of PageObj!";
	}
	
	function htmlHead($title){ //HTML head content. This is common to all UI pages. Can override as appropriate!
?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8" />
			<meta http-equiv="X-UA-Compatible" content="IE=edge" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			<title><?php echo $title; ?></title>
			<link href="home.css" rel="stylesheet" />
		</head> 
<?php
  }
  
  function menuBar(){ //menuBar($boxdata=array(array()) to be used in the next version
  	$boxobj=new BoxObj();   	
  	$noboxes=10; 
  	$boxdata=array(array()); 
  	$boxdata[0][0]=10; $boxdata[0][1]="Home~home.php"; 
  	$boxdata[1][0]=10; $boxdata[1][1]="Bath~bath.php"; 
  	$boxdata[2][0]=10; $boxdata[2][1]="Skin Care~"; 
  	$boxdata[3][0]=10; $boxdata[3][1]="Men~"; 
  	$boxdata[4][0]=10; $boxdata[4][1]="Hair Care~"; 
  	$boxdata[5][0]=10; $boxdata[5][1]="Baby~"; 
  	$boxdata[6][0]=10; $boxdata[6][1]="Health~"; 
  	$boxdata[7][0]=10; $boxdata[7][1]="Sweets~"; 
  	$boxdata[8][0]=10; $boxdata[8][1]="Tea~"; 
  	$boxdata[9][0]=10; $boxdata[9][1]="Brands~"; 
  	
  	$j=0; $k=0; $st=0; $finish=9; 
?> 
		<div class="box" style="width: 100%; background-color: #CCD1D1 ; border: 0px;float:left;"> 
<?php 
			for($i=$st; $i<$finish; $i++){ //echo $i; 
				$boxid=$boxdata[$j][$k]; $k++; $content=$boxdata[$j][$k]; $j++; $k=0; 
				$boxobj->draw($boxid, $content); 
			} 
?> </div> 
<?php
  }
  
  function searchBar($slabel, $sicon){ //searchBar($boxdata=array(array()) to be used in next version
  	$boxobj=new BoxObj();
    $noboxes=2; 
  	$boxdata=array(array()); 
    $boxdata[0][0]=13; $boxdata[0][1]="Search~text~s~Search Your Product Here!~";
	$boxdata[1][0]=14; $boxdata[1][1]="Search";
   // $boxdata[1][0]=14; $boxdata[1][1]="Search~search.php"; 
    $j=0; $k=0; $st=0; $finish=2;
?>
  	<!-- Search Box -->		
	  <div style=" margin-left: 20%; margin-right: 1%; border: 0px ; width:60%;">
		<div style=" margin-right: 1%; border: 0px ; width:100%;">
			<form name="search" style="padding: 2%;">
<?php
				for($i=$st; $i<$finish; $i++){ //echo $i; 
					$boxid=$boxdata[$j][$k]; $k++; $content=$boxdata[$j][$k]; $j++; $k=0; 
					$boxobj->draw($boxid, $content); 
				} 
?>

			</form>
		</div>
			</div>
<?php
  }
  
  function titleBar($title){ 
  	$boxobj=new BoxObj(); 
  	$noboxes=1; 
  	$boxid=7; $content="$title"; 
  	$boxobj->draw($boxid, $content);
  } 
	
	function header(){ //header($boxdata=array(array()) to be used in the next version. But, reconsider the use of searchBar function within	
	  $boxobj=new BoxObj();
	  $noboxes=12;
	  $boxdata=array(array());
		$boxdata[0][0]=1; $boxdata[0][1]="My Account~account.php";
		$boxdata[1][0]=1; $boxdata[1][1]="View Order~";
		$boxdata[2][0]=1; $boxdata[2][1]="My Wishlist~";
		$boxdata[3][0]=1; $boxdata[3][1]="Cart~cart.php";
		$boxdata[4][0]=3; $boxdata[4][1]=".~";
		$boxdata[5][0]=3; $boxdata[5][1]=".~";
		$boxdata[6][0]=3; $boxdata[6][1]=".~";
		$boxdata[7][0]=3; $boxdata[7][1]=".~";
		$boxdata[8][0]=3; $boxdata[8][1]=".~";
		$boxdata[9][0]=3; $boxdata[9][1]=".~"; 
		$boxdata[10][0]=4; $boxdata[10][1]=".~"; //logo (image) box (left) 
		$boxdata[11][0]=6; $boxdata[11][1]=".~"; //logo (image) box (right)
		
		$j=0; $k=0; $st=0; $finish=10;
?>  
    <!--header bar-->
  	<div class="box" style="width: 100%; background-color: #21618C ; border: 0px">
<?php
			for($i=$st; $i<$finish; $i++){  //echo $i;
				$boxid=$boxdata[$j][$k]; $k++; $content=$boxdata[$j][$k]; $j++; $k=0;
				$boxobj->draw($boxid, $content);
			}
?>
		</div>
		<!--logo bars with search box-->
		<div class="box" style="width: 100%; background-color: white ;margin-top: 20px; border: 0px;float:left;">
<?php
      //logo (image) box (left)
			$boxobj->draw($boxdata[10][0], $boxdata[10][1]);
?>
			<!-- Search Box -->				 
<?php	
			$this->searchBar("Search Your Product", "Search");	//reconsider the use of thi. Do we need this here or as a seperate item?			
			
      //logo (image) box (right)
  		$boxobj->draw($boxdata[11][0], $boxdata[11][1]); 
?>
		</div>
    
<?php 
  }
  
  function content(){	
    //$this->header();  
  }
  
  function footer(){ //footer($boxdata=array(array()) to be used in the next version
    $boxobj=new BoxObj();
    $noboxes=8;
    $boxdata=array(array());
    $boxdata[0][0]=2; $boxdata[0][1]="CONTACT US~";
    $boxdata[1][0]=2; $boxdata[1][1]="SITEMAP~";
    $boxdata[2][0]=2; $boxdata[2][1]="RETURNS POLICY~";
    $boxdata[3][0]=2; $boxdata[3][1]="GIFT VOUCHERS~";
    $boxdata[4][0]=2; $boxdata[4][1]="BESTSELLERS~";
    $boxdata[5][0]=9; $boxdata[5][1]="PayPal~";
    $boxdata[6][0]=9; $boxdata[6][1]="^~";
    $boxdata[7][0]=8; $boxdata[7][1]="© German Drugstore 2016-2021~";
   
    $j=0; $k=0; $st=0; $finish=5;
?>  
		<div class="box" style="width: 100%; background-color: #424949 ; border: 0px;float:left; margin-top:2.5%;"> 
			<div class="box" style="width: 80%; background-color: #424949 ; border: 0px;float:left;margin-left:2%;">
<?php
			  //draw up to BESTSELLERS
			  for($i=$st; $i<$finish; $i++){  //echo $i;
		      $boxid=$boxdata[$j][$k]; $k++; $content=$boxdata[$j][$k]; $j++; $k=0;
		      $boxobj->draw($boxid, $content);
			  }		      
?>
  		</div> <!--up to BESTSELLERS ends! -->
<?php
	 		//draw PayPal and Move Up icons
	 		$j=5; $k=0; $st=5; $finish=7;	 		
	 		for($i=$st; $i<$finish; $i++){  //echo $i;
	      $boxid=$boxdata[$j][$k]; $k++; $content=$boxdata[$j][$k]; $j++; $k=0;
	      $boxobj->draw($boxid, $content);
			}	    
?>
    </div>
    
    <!-- Copyright box -->     
    <div class="box" style="width: 100%; background-color: #424949 ; border: 0px;float:left;">
<?php     
    	$boxobj->draw($boxdata[7][0], $boxdata[7][1]);
?>
 		</div> <!-- Copyright box ends! -->               
<?php
  }
}
?>

<?php //echo "Testing of the Page class"; ?>

<?php
  /*$pageobj=new PageObj(); //echo "</BR>Testing the Page object</BR>";
  $title="Page Object"; 
  $pageobj->htmlHead($title);
  $pageobj->header();
  //$pageobj->content();
  $pageobj->footer();*/  
?>

<?php	
	//var_dump($obj->getAllData());   
?>
