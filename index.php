<!DOCTYPE html>
<html>
<head>
	<title>Memo</title>
	<style type="text/css">
		select {
		  margin: 5px;
		  width: 250px;
		  padding: 5px 35px 5px 5px;
		  font-size: 16px;
		  border: 2px solid #ccc;
      border-radius: 3px;
		  height: 34px;
		  -webkit-appearance: none;
		  -moz-appearance: none;
		  appearance: none;
		}

		.inclass {
		  margin: 5px;
		  width: 230px;
		  padding: 5px 35px 5px 5px;
		  font-size: 16px;
		  border: 2px solid #ccc;
      border-radius: 3px;
		  height: 23px;
		  -webkit-appearance: none;
		  -moz-appearance: none;
		  appearance: none;
		}

		.inclass2 {
		  margin: 5px;
		  width: 130px;
		  padding: 5px 35px 5px 5px;
		  font-size: 16px;
		  border: 1px solid #ccc;
      border-radius: 3px;
		  height: 15px;
		  -webkit-appearance: none;
		  -moz-appearance: none;
		  appearance: none;
		}

		.btn {
		  background-color: white;
		  border: 2px solid;
		  color: #4CAF50;
      font-weight: bold;
		  border-color: #4CAF50;
		  padding: 10px 24px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 4px 2px;
		  cursor: pointer;
      border-radius: 3px;
		}
		.btn:hover{
			background-color: #4CAF50;
      color: white;
			//border-color: white;
		}

	</style>
	<style type="text/css">
		#customers {
		  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		  border-collapse: collapse;
		  //width: 100%;
		}

		#customers td, #customers th {
		  border: 1px solid #ddd;
		  padding: 8px;
		}

		//#customers tr:nth-child(odd){background-color: #f2f2f2;}

		//#customers tr:hover {background-color: #ddd;}

		#customers th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		  background-color: #4CAF50;
		  color: white;
		}
	</style>
</head>
<body>
<!--
  <form method="POST" action="memopage.php" onsubmit="return hideShow();">
  <h3 align="center">Payment Memo</h3>
  <table align="center" border="0" style="width: 750px;">
  	<tr style="font-size: 20px;font-weight: bold;">
  		<td>Vendor Name</td>
  		<td>Payment Type</td>
  		<td>Payment Part</td>
  		<td>Work Order No</td>
  	</tr>
  	<tr>
  		<td>
  			<select name="vendor" id="vendor">
	  			<option>-- Select Vendor --</option>
	  			<option>Vendor One</option>
	  			<option>Vendor Two</option>
	  			<option>Vendor Three</option>
	  			<option>Vendor four</option>
	  		</select>
	  	</td>
  		<td>
  			<select name="paytype" id="paytype">
  				<option>-- Select Payment --</option>
  				<option value="Part">Part</option>
  				<option value="Full">Full</option>
  			</select>
  		</td>
  		<td>
  			<select name="parts" id="parts">
  				<option>-- Select Part --</option>
  				<option value="1">Part 1</option>
  				<option value="2">Part 2</option>
  				<option value="3">Part 3</option>
  			</select>
  		</td>
  		<td>
  			<input type="text" class="inclass" name="worn" size="15">
  		</td>
  	</tr>
  	<tr>
  		<td colspan="4" align="center"><input type="submit" value="Get Memo" class="btn"></td>
  	</tr>
  </table>
</form>
    
  		<div id="form1" style="display: none;">     -->
        <form name="myform" action="insertMemo.php" method="POST">
  			<table width="80%" id="customers" align="center">
  				<tr>
  					<td colspan="2" align="center">Nature of Bill <b>LS 1st & Part</b></td>
  				</tr>
  				<tr>
  					<td width="90%">Total value of work done</td>
  					<td width="10%"><input type="text" name="totalval" id="totalval" class="inclass2"></td>
  				</tr>
  				<tr>
  					<td>Deduct with held amount&nbsp;&nbsp;<input type="text" name="withheldamt" id="withheldamt" oninput="getWithHeld(this.value);" class="inclass2">%</td>
  					<td><input type="text" name="wamt" id="wamt" value="0" class="inclass2" disabled></td>
  				</tr>
  				<tr>
  					<td>&nbsp;</td>
  					<td><input type="text" name="totwith" id="totwith" class="inclass2" disabled></td>
  				</tr>
  				<tr>
  					<td>Add GST on total value of work done&nbsp;&nbsp;<input type="text" name="gst" id="gst" class="inclass2" oninput="addGST(this.value);"></td>
  					<td><input type="text" name="gstamt" id="gstamt" class="inclass2" disabled></td>
  				</tr>
  				<tr>
  					<td>Add NAC on total value of work done&nbsp;&nbsp;<input type="text" name="nac" id="nac" class="inclass2" oninput="addNAC(this.value);"></td>
  					<td><input type="text" name="nacamt" id="nacamt" class="inclass2" disabled></td>
  				</tr>
  				<tr>
  					<td>Add Cess on total value of work done&nbsp;&nbsp;<input type="text" name="cess" id="cess" class="inclass2" oninput="addCess(this.value);"></td>
  					<td><input type="text" name="cessamt" id="cessamt" class="inclass2" disabled></td>
  				</tr>
  				<tr>
  					<td>Add Royalty charges</td>
  					<td><input type="text" name="rc" id="rc" oninput="showTotal(this.value);" class="inclass2"></td>
  				</tr>
  				<tr>
  					<td>&nbsp;</td>
  					<td><input type="text" name="taotalll" id="taotalll" class="inclass2" disabled></td>
  				</tr>
  				<tr>
  					<td>Deduct for want designs</td>
  					<td><input type="text" name="wantdesign" id="wantdesign" class="inclass2"></td>
  				</tr>
  				<tr>
  					<td>Deduct for want </td>
  					<td><input type="text" name="want" id="want" class="inclass2" oninput="getPayMade(this.value);"></td>
  				</tr>
  				<tr>
  					<td><b>Payment now to be made</b></td>
  					<td><input type="text" name="paymade" id="paymade" class="inclass2" disabled></td>
  				</tr>
  				<tr>
  					<td colspan="2"><b><u>Deductions</u></b></td>
  				</tr>
  				<tr>
  					<td>
  						<table width="100%" border="0">
  							<tr>
  								<td width="90%">Income Tax &nbsp;&nbsp;<input type="text" name="it" id="it" class="inclass2" oninput="getIncometax(this.value);">%</td>
  								<td><input type="text" name="itval" id="itval" class="inclass2" disabled></td>
  							</tr>
  							<tr>
  								<td width="90%">NAC &nbsp;&nbsp;<input type="text" name="nac1" id="nac" class="inclass2" oninput="getNACval(this.value);">%</td>
  								<td><input type="text" name="nacval" id="nacval" class="inclass2" disabled></td>
  							</tr>
  							<tr>
  								<td width="90%">Cess &nbsp;&nbsp;<input type="text" name="cess1" id="cess" class="inclass2" oninput="getCess(this.value);">%</td>
  								<td><input type="text" name="cessval" id="cessval" class="inclass2" disabled></td>
  							</tr>
  							<tr>
  								<td width="90%">Royalty Charges</td>
  								<td><input type="text" name="rc1" id="rc1" class="inclass2"></td>
  							</tr>
  							<tr>
  								<td width="90%">CGST&nbsp;&nbsp;<input type="text" name="cgst" id="cgst" oninput="getCGST(this.value);" class="inclass2">%</td>
  								<td><input type="text" name="cgstval" id="cgstval" class="inclass2" disabled></td>
  							</tr>
  							<tr>
  								<td width="90%">SGST&nbsp;&nbsp;<input type="text" name="sgst" id="sgst" oninput="getSGST(this.value);" class="inclass2">%</td>
  								<td><input type="text" name="sgstval" id="sgstval" class="inclass2" disabled></td>
  							</tr>
  							<tr>
  								<td width="90%">R&R</td>
  								<td><input type="text" name="rr" id="rr" class="inclass2"></td>
  							</tr>
  							<tr>
  								<td width="90%"><small>with held under Deposit for want of ESI</small></td>
  								<td><input type="text" name="esi" id="esi" oninput="getTotalDeduction(this.value);" class="inclass2"></td>
  							</tr>
  							<tr>
  								<td width="90%" align="right">Total Deductions</td>
  								<td><input type="text" name="totdeduct" id="totdeduct" class="inclass2" disabled></td>
  							</tr>
  						</table>
  					</td>
  					<td valign="middle"><input type="text" name="hdh" id="hdh" class="inclass2" disabled></td>
  				</tr>
  				<tr>
  					<td width="90%" align="right">Cheque Amount</td>
  					<td width="10%"><input type="text" name="chqamt" id="chqamt" class="inclass2" ></td>
  				</tr>
  				<tr>
  					<td colspan="2" align="center">
  						<input type="submit" value="Submit" class="btn" value="Submit">
  					</td>
  				</tr>
  			</table>
      </form>
  	<!--</div>  -->
  	
<script type="text/javascript">
  function getWithHeld(a) {
    var per = parseFloat(a);
    var tot = parseFloat(document.getElementById("totalval").value);
    var perval = tot*(per/100);
    document.getElementsByName("wamt")[0].value = perval;
    document.getElementById("totwith").value = tot-perval;
  }
  function addGST(a){
    var per = parseFloat(a);
    var tot = parseFloat(document.getElementById("totalval").value);
    var perval = tot*(per/100);
    document.getElementById("gstamt").value=perval;
  }
  function addNAC(a){
    var per = parseFloat(a);
    var tot = parseFloat(document.getElementById("totalval").value);
    var perval = tot*(per/100);
    document.getElementById("nacamt").value=perval;
  }
  function addCess(a){
    var per = parseFloat(a);
    var tot = parseFloat(document.getElementById("totalval").value);
    var perval = tot*(per/100);
    document.getElementById("cessamt").value=perval;
  }
  function showTotal(a){
    var total = parseFloat(document.getElementById("totwith").value);
    var gst = parseFloat(document.getElementById("gstamt").value);
    var nac = parseFloat(document.getElementById("nacamt").value);
    var cess = parseFloat(document.getElementById("cessamt").value);
    document.getElementById("taotalll").value = parseFloat(a)+total+gst+nac+cess;
  }
  function getPayMade(a){
    var wantdes = parseInt(document.getElementById("wantdesign").value);
    var want = parseFloat(a);
    document.getElementById("paymade").value = parseFloat(document.getElementById("taotalll").value)-wantdes-want;
  }
  function getIncometax(a){
    var per = parseFloat(a);
    var tot = parseFloat(document.getElementById("totalval").value);
    var perval = tot*(per/100);
    document.getElementById("itval").value=perval;
  }
  function getNACval(a){
    var per = parseFloat(a);
    var tot = parseFloat(document.getElementById("totalval").value);
    var perval = tot*(per/100);
    document.getElementById("nacval").value=perval;
  }
  function getCess(a){
    var per = parseFloat(a);
    var tot = parseFloat(document.getElementById("totalval").value);
    var perval = tot*(per/100);
    document.getElementById("cessval").value=perval;
  }
  function getCGST(a){
    var per = parseFloat(a);
    var tot = parseFloat(document.getElementById("totalval").value);
    var perval = tot*(per/100);
    document.getElementById("cgstval").value=perval;
  }
  function getSGST(a){
    var per = parseFloat(a);
    var tot = parseFloat(document.getElementById("totalval").value);
    var perval = tot*(per/100);
    document.getElementById("sgstval").value=perval;
  }
  function getTotalDeduction(a){
    var sumdeduction = parseFloat(a)
    sumdeduction += parseFloat(document.getElementById("itval").value);
    sumdeduction += parseFloat(document.getElementById("nacval").value);
    sumdeduction += parseFloat(document.getElementById("cessval").value);
    sumdeduction += parseFloat(document.getElementById("rc1").value);
    sumdeduction += parseFloat(document.getElementById("cgstval").value);
    sumdeduction += parseFloat(document.getElementById("sgstval").value)
    sumdeduction += parseFloat(document.getElementById("rr").value);
    
    document.getElementById("totdeduct").value = sumdeduction;
    document.getElementById("hdh").value = sumdeduction;
    document.getElementById("chqamt").value = parseFloat(document.getElementById("paymade").value)-sumdeduction;
  }
  function hideShow() {
    if(parseInt(document.getElementById("parts").value) == 1){
      var x = document.getElementById("form1");
      x.style.display = "block";
      return false;
    }
    return true;
  }
</script>
</body>
</html>
