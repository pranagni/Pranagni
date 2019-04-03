<?php
	$tamt = $_POST['totalval'];
	$withheldper = $_POST['withheldamt'];
	$wamt = $_POST['wamt'];
	$gst = $_POST['gst'];
	$nac = $_POST['nac'];
	$gstamt = $_POST['gstamt'];
	$nacamt = $_POST['nacamt'];
	$cess = $_POST['cess'];
	$cessamt = $_POST['cessamt'];
	$rc = $_POST['rc'];
	$wantdesign = $_POST['wantdesign'];
	$want = $_POST['want'];
	$it = $_POST['it'];
	$itval = $_POST['itval'];
	$nac1 = $_POST['nac1'];
	$nacval = $_POST['nacval'];
	$cess1 = $_POST['cess1'];
	$cessval = $_POST['cessval'];
	$rc1 = $_POST['rc1'];
	$cgst = $_POST['cgst'];
	$cgstval = $_POST['cgstval'];
	$sgst = $_POST['sgst'];
	$sgstval = $_POST['sgstval'];
	$rr = $_POST['rr'];
	$esi = $_POST['esi'];
	$totdeduct = $_POST['totdeduct'];
	$chqamt = $_POST['chqamt'];
    echo "Cheque Amount".$chqamt ;
    /*
	$c = mysqli_connect("localhost:3309",'root','root',"test");
	$sq = "select count(*) from tbl_memo";
    $max = mysqli_query($c,$sq); 
    $maxarr = mysqli_fetch_array($max);
    $mv = $maxarr[0]+1;
    echo "string : ".$mv."<br>";
    $usrData = 0;
    try{
      $usrdataSql = "insert into tbl_memo(slno,totalval,withheldamtper,withheldamt,addgst,addgstval,addnac,addnacval,addcess,addcessval,addroyaltychr,wantdesign,want,it,itval,nac,nacval,cess,cessamt,rc,cgst,cgstval,sgst,sgstval,rr,esi,totaldeduct,chequeamt,workno,partno)";
      $usrdataSql = $usrdataSql." values(".$mv.",".$tamt.",".$withheldper.",".$wamt.",".$gst.",".$gstamt.",".$nac.",".$nacamt.",".$cess.",".$cessamt.",".$rc.",".$wantdesign.",".$want.",".$it.",".$itval.",".$nac1.",".$nacval.",".$cess1.",".$cessval.",".$rc1.",".$cgst.",".$cgstval.",".$sgst.",".$sgstval.",".$rr.",".$esi.",".$totdeduct.",".$chqamt.",'0','1st')";
      echo "Query : ".$usrdataSql."<br>";
      $usrData = mysqli_query($c,$usrdataSql);
      mysqli_close($c);
      if ($usrData > 0) {
      	echo "Form one added successfully !";
      }else{
      	echo "Form one not added successfully !";
      }
    }catch(Exception $e){
    	echo "Exception is : ".$e;
    }  */
?>