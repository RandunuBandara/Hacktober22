<?php
/*May 30, 2022 (Mon). Author: YP@C2L3. Contributors: RB@C2L3, JS@C2L3, TD@C2L3
  Purpose: User Login Page class of yFramework 2.0. 
  Version: 1.1
*/
//error_reporting( E_WARNING | E_PARSE);

require_once('pageobj.php');

class LoginPageObj extends PageObj{
  //properties list, if applicable
  
  function testObj(){
	  echo "This is a test of LoginPageObj!";
	}
	
	function content(){	
    //parent::content();
    $boxobj=new BoxObj();
    $noboxes=3; 
  	$boxdata=array(array()); 
    $boxdata[0][0]=11; $boxdata[0][1]="Username~text~uname~Enter Username~required";
    $boxdata[1][0]=11; $boxdata[1][1]="Password~password~pass~Enter Password~required";
    $boxdata[2][0]=1; $boxdata[2][1]="Login~"; 
    $boxdata[3][0]=20; $boxdata[3][1]="x";
		$boxdata[4][0]=20; $boxdata[4][1]="y";
    $j=0; $k=0; $st=0; $finish=5;
?> 
    <div class="box" style="width:60%; background-color:#D6EAF8 ; margin-left:20%; padding:48px;"> 
      <form name="cuser" method="get" action="loginpageobj.php">
<?php
      	for($i=$st; $i<$finish; $i++){ //echo $i; 
					$boxid=$boxdata[$j][$k]; $k++; $content=$boxdata[$j][$k]; $j++; $k=0; 
					$boxobj->draw($boxid, $content); 
				} 
?>
        <input type="hidden" name="flag" value="1"/>
        <!--<input type="hidden" name="lid" value="<?php echo $lid;?>"/>-->
      </form>
    </div>
<?php
  }
}
?>

<?php //echo "Testing of the Login Page class"; ?>

<?php
//handling warning and notice messages that are coming from the server
  $b=""; $b1=""; $b2="";
  if(isset($_GET['x'])){
    $b1=htmlentities($_GET['x'], ENT_QUOTES);
  }else{
    $b1="";
  }
  if(isset($_GET['y'])){
    $b2=htmlentities($_GET['y'], ENT_QUOTES);
  }else{
    $b2="";
  }
//handling ends

  if(strcmp($b1, "x")==0) $b=$b1;
  else if(strcmp($b2, "y")==0) $b=$b2;

  $lpobj=new LoginPageObj(); //echo "</BR>Testing the Login Page object</BR>";
  $ptitle="Login to the System"; 
  $ctitle="LOGIN";
  $lpobj->htmlHead($ptitle); 
  $lpobj->header(); 
  $lpobj->menuBar();
  $lpobj->titleBar($ctitle);
  $lpobj->content();
  echo $b;
  $lpobj->footer();
?>

<?php	
	//var_dump($obj->getAllData());   
?>
