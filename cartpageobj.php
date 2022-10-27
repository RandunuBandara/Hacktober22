<?php
/*June 02, 2022 (Thu). Author: YP@C2L3. Contributors: RB@C2L3, JS@C2L3, TD@C2L3
  Purpose: Cart (view) Page class of yFramework 2.0. 
  Version: 1.0
*/

require_once('pageobj.php');

class CartObj extends PageObj{
  //properties list, if applicable
  
  function testObj(){
	  echo "This is a test of CartObj!";
	}
	  
  function content(){	
    //parent::content();
    $boxobj=new BoxObj();
		$noboxes=1; 
		$boxdata=array(array()); 
		$boxdata[0][0]=16; $boxdata[0][1]="PRODUCT";
		$boxdata[1][0]=16; $boxdata[1][1]="Price";
		$boxdata[2][0]=16; $boxdata[2][1]="Quantity";
		$boxdata[3][0]=16; $boxdata[3][1]="sub total";
		$boxdata[4][0]=7; $boxdata[4][1]="CART TOTALS";
		$boxdata[5][0]=16; $boxdata[5][1]="Subtotal";
		$boxdata[6][0]=15; $boxdata[6][1]="price";
		$boxdata[7][0]=16; $boxdata[7][1]="TOTAL";
		$boxdata[8][0]=15; $boxdata[8][1]="Tprice";
	//	$boxdata[9][0]=18; $boxdata[9][1]="PROCEED TO CHECKOUT~";
		$boxdata[9][0]=21; $boxdata[9][1]="PROCEED TO CHECKOUT";
		$boxdata[10][0]=11; $boxdata[10][1]="Coupon~text~notes~Add Coupon~";
	//	$boxdata[11][0]=17; $boxdata[11][1]="Apply Coupon~";
		$boxdata[11][0]=21; $boxdata[11][1]="Apply Coupon";
		$boxdata[12][0]=19; $boxdata[12][1]="image/priorin.jpg~";
		$boxdata[13][0]=15; $boxdata[13][1]="Bayer Priorin - 270 Capsules WEIGHT SUBTOTAL:1050 G";
		$boxdata[14][0]=11; $boxdata[14][1]="~text~notes~Add Qut~";
		$boxdata[15][0]=20; $boxdata[15][1]="+";
		$boxdata[16][0]=20; $boxdata[16][1]="-";
	//	$boxdata[15][0]=20; $boxdata[15][1]="+~";
	//	$boxdata[16][0]=20; $boxdata[16][1]="-~";
?> 

<div class="box" style="width: 100%; background-color:white ; border: 0px;float:left;margin-top:2.5%"> 
	<form>
		<div class="box" style="width: 55%; background-color: white; margin-left:4%;padding:5px;float:left;border: 2px; border-style: solid;border-color: black;"><div class="box" style="width: 100%; background-color: white ; border: 0px;float:left;">
				
				<div class="box" style="width: 50%; background-color: white ; border: 0px;float:left;border-bottom: 1px solid #808B96 ">  
				<?php
				$j=0; $k=0; $st=0; $finish=1;
					for($i=$st; $i<$finish; $i++){ //echo $i; 
					$boxid=$boxdata[$j][$k]; $k++; $content=$boxdata[$j][$k]; $j++; $k=0; 
					$boxobj->draw($boxid, $content); 
					} 
				?>
				</div>

				<div class="box" style="width: 15%; background-color: white ; border: 0px;float:left;border-bottom: 1px solid #808B96 ">  
				<?php
				$j=1; $k=0; $st=0; $finish=1;
					for($i=$st; $i<$finish; $i++){ //echo $i; 
					$boxid=$boxdata[$j][$k]; $k++; $content=$boxdata[$j][$k]; $j++; $k=0; 
					$boxobj->draw($boxid, $content); 
					} 
				?>
				</div>

				<div class="box" style="width: 15%; background-color: white ; border: 0px;float:left;border-bottom: 1px solid #808B96 ">  
				<?php
				$j=2; $k=0; $st=0; $finish=1;
					for($i=$st; $i<$finish; $i++){ //echo $i; 
					$boxid=$boxdata[$j][$k]; $k++; $content=$boxdata[$j][$k]; $j++; $k=0; 
					$boxobj->draw($boxid, $content); 
					} 
				?>
				</div>

				<div class="box" style="width: 15%; background-color: white ; border: 0px;float:left;border-bottom: 1px solid #808B96 ">  
				<?php
				$j=3; $k=0; $st=0; $finish=1;
					for($i=$st; $i<$finish; $i++){ //echo $i; 
					$boxid=$boxdata[$j][$k]; $k++; $content=$boxdata[$j][$k]; $j++; $k=0; 
					$boxobj->draw($boxid, $content); 
					} 
				?>
				</div>


			</div>


			<div class="box" style="width: 100%; background-color: white ; border: 0px;float:left;border-bottom: 1px solid #808B96 ">

				<div class="box" style="width: 15%; background-color: white ; border: 0px;float:left;">
				<?php
				$j=12; $k=0; $st=0; $finish=1;
					for($i=$st; $i<$finish; $i++){ //echo $i; 
					$boxid=$boxdata[$j][$k]; $k++; $content=$boxdata[$j][$k]; $j++; $k=0; 
					$boxobj->draw($boxid, $content); 
					} 
				?>
				</div>

				<div class="box" style="width: 34%; background-color: white ; border: 0px;float:left;">
				<?php
				$j=13; $k=0; $st=0; $finish=1;
					for($i=$st; $i<$finish; $i++){ //echo $i; 
					$boxid=$boxdata[$j][$k]; $k++; $content=$boxdata[$j][$k]; $j++; $k=0; 
					$boxobj->draw($boxid, $content); 
					} 
				?>
				</div>

				<div class="box" style="width: 15%; background-color: white ; border: 0px;float:left; ">  
				<?php
				$j=1; $k=0; $st=0; $finish=1;
					for($i=$st; $i<$finish; $i++){ //echo $i; 
					$boxid=$boxdata[$j][$k]; $k++; $content=$boxdata[$j][$k]; $j++; $k=0; 
					$boxobj->draw($boxid, $content); 
					} 
				?>
				</div>

				<div class="box" style="width: 15%; background-color: white ; border: 0px;float:left; ">  
					<?php
					$j=14; $k=0; $st=0; $finish=1;
						for($i=$st; $i<$finish; $i++){ //echo $i; 
						$boxid=$boxdata[$j][$k]; $k++; $content=$boxdata[$j][$k]; $j++; $k=0; 
						$boxobj->draw($boxid, $content); 
						} 
					?>
						<div class="box" style="width: 100%; background-color: white ; border: 0px;float:left; ">
						<?php
						$j=15; $k=0; $st=0; $finish=2;
							for($i=$st; $i<$finish; $i++){ //echo $i; 
							$boxid=$boxdata[$j][$k]; $k++; $content=$boxdata[$j][$k]; $j++; $k=0; 
							$boxobj->draw($boxid, $content); 
							} 
						?>
						</div>

				</div>


				<div class="box" style="width: 15%; background-color: white ; border: 0px;float:left; ">  
				<?php
				$j=3; $k=0; $st=0; $finish=1;
					for($i=$st; $i<$finish; $i++){ //echo $i; 
					$boxid=$boxdata[$j][$k]; $k++; $content=$boxdata[$j][$k]; $j++; $k=0; 
					$boxobj->draw($boxid, $content); 
					} 
				?>
				</div>

			</div>
		</div>



		<div class="box" style="width: 25%; background-color: white; margin-left:5%;padding:10px;float:left;border-radius:20px;border: 2px; border-style: solid;border-color: black;">
				
				<div class="box" style="width: 100%; background-color: white ; border: 0px;float:left">
				<?php
				$j=4; $k=0; $st=0; $finish=1;
					for($i=$st; $i<$finish; $i++){ //echo $i; 
					$boxid=$boxdata[$j][$k]; $k++; $content=$boxdata[$j][$k]; $j++; $k=0; 
					$boxobj->draw($boxid, $content); 
					} 
				?>
				</div>
				
				<div class="box" style="width: 100%; background-color: white ; border: 0px;float:left;border-bottom: 1px solid #808B96 ">
				<?php
				$j=5; $k=0; $st=0; $finish=2;
					for($i=$st; $i<$finish; $i++){ //echo $i; 
					$boxid=$boxdata[$j][$k]; $k++; $content=$boxdata[$j][$k]; $j++; $k=0; 
					$boxobj->draw($boxid, $content); 
					} 
				?>
				</div>
				
				<div class="box" style="width: 100%; background-color: white ; border: 0px;float:left;border-bottom: 1px solid #808B96 ">
				<?php
				$j=7; $k=0; $st=0; $finish=2;
					for($i=$st; $i<$finish; $i++){ //echo $i; 
					$boxid=$boxdata[$j][$k]; $k++; $content=$boxdata[$j][$k]; $j++; $k=0; 
					$boxobj->draw($boxid, $content); 
					} 
				?>
				</div>
		

				<div class="box" style="width: 100%; background-color: white ; border: 0px;float:left; ">
				<?php
				$j=9; $k=0; $st=0; $finish=3;
					for($i=$st; $i<$finish; $i++){ //echo $i; 
					$boxid=$boxdata[$j][$k]; $k++; $content=$boxdata[$j][$k]; $j++; $k=0; 
					$boxobj->draw($boxid, $content); 
					} 
				?>
				</div>

		</div>
	</form>
</div>

    
<?php
  }
}
?>

<?php //echo "Testing of the CartObj class"; ?>

<?php
  $cartobj=new CartObj(); //echo "</BR>Testing the Cart object</BR>";
  $ptitle="View Cart"; 
  $ctitle="VIEW CART";
  $cartobj->htmlHead($ptitle); 
  $cartobj->header(); 
  $cartobj->menuBar();
  $cartobj->titleBar($ctitle);
  $cartobj->content(); 
  $cartobj->footer();
?>

<?php	
	//var_dump($obj->getAllData());   
?>
