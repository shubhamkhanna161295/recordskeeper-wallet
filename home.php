<?php

?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>RecordsKeeper</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="theme-color" content="#212739">
		<meta name="MobileOptimized" content="320">
		<meta name="HandheldFriendly" content="true">
		<meta name="viewport" content="width=device-width, initial-scale=1, target-densitydpi=device-dpi">
		<meta name="author" content="http://psdhtml.me">
		<link rel="stylesheet" media="screen" href="styles/screen.css">
		<link rel="stylesheet" media="print" href="styles/print.css">
		<link rel="icon" type="image/x-icon" href="images/fav.png">
		<link rel="stylesheet" media="screen" href="styles/wallet.css">
		<!-- link for table to css cdn here  -->
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/TableExport/3.3.13/css/tableexport.css">
		<meta property="og:title" content="">
		<meta property="og:type" content="website">
		<meta property="og:description" content=".">
		<meta property="og:site_name" content="">
		<meta property="og:url" content="">
		<meta property="og:image" content="">
		<style type="text/css">


.tg-list {
  text-align: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.tg-list-item {
  margin: 0 2em;
}

#togglecont{
	margin-top: 7px;
	float: left;
}
#togglecontlabel{
	   float: right;
    margin-left: 13px;
    margin-top: 7px;
    font-size: 15px;
}
.tgl {
  display: none;
}
.tgl, .tgl:after, .tgl:before, .tgl *, .tgl *:after, .tgl *:before, .tgl + .tgl-btn {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}
.tgl::-moz-selection, .tgl:after::-moz-selection, .tgl:before::-moz-selection, .tgl *::-moz-selection, .tgl *:after::-moz-selection, .tgl *:before::-moz-selection, .tgl + .tgl-btn::-moz-selection {
  background: none;
}
.tgl::selection, .tgl:after::selection, .tgl:before::selection, .tgl *::selection, .tgl *:after::selection, .tgl *:before::selection, .tgl + .tgl-btn::selection {
  background: none;
}
.tgl + .tgl-btn {
  outline: 0;
  display: block;
  width: 4em;
  height: 2em;
  position: relative;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.tgl + .tgl-btn:after, .tgl + .tgl-btn:before {
  position: relative;
  display: block;
  content: "";
  width: 50%;
  height: 100%;
}
.tgl + .tgl-btn:after {
  left: 0;
}
.tgl + .tgl-btn:before {
  display: none;
}
.tgl:checked + .tgl-btn:after {
  left: 50%;
}

.tgl-light + .tgl-btn {
  background: #f0f0f0;
  border-radius: 2em;
  padding: 2px;
  -webkit-transition: all .4s ease;
  transition: all .4s ease;
}
.tgl-light + .tgl-btn:after {
  border-radius: 50%;
  background: #fff;
  -webkit-transition: all .2s ease;
  transition: all .2s ease;
}
.tgl-light:checked + .tgl-btn {
  background: #a119b9;
}

.tgl-ios + .tgl-btn {
  background: #fbfbfb;
  border-radius: 2em;
  padding: 2px;
  -webkit-transition: all .4s ease;
  transition: all .4s ease;
  border: 1px solid #e8eae9;
}
.tgl-ios + .tgl-btn:after {
  border-radius: 2em;
  background: #fbfbfb;
  -webkit-transition: left 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275), padding 0.3s ease, margin 0.3s ease;
  transition: left 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275), padding 0.3s ease, margin 0.3s ease;
  -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1), 0 4px 0 rgba(0, 0, 0, 0.08);
          box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1), 0 4px 0 rgba(0, 0, 0, 0.08);
}
.tgl-ios + .tgl-btn:hover:after {
  will-change: padding;
}
.tgl-ios + .tgl-btn:active {
  -webkit-box-shadow: inset 0 0 0 2em #e8eae9;
          box-shadow: inset 0 0 0 2em #e8eae9;
}
.tgl-ios + .tgl-btn:active:after {
  padding-right: .8em;
}
.tgl-ios:checked + .tgl-btn {
  background: #86d993;
}
.tgl-ios:checked + .tgl-btn:active {
  -webkit-box-shadow: none;
          box-shadow: none;
}
.tgl-ios:checked + .tgl-btn:active:after {
  margin-left: -.8em;
}

.tgl-skewed + .tgl-btn {
  overflow: hidden;
  -webkit-transform: skew(-10deg);
          transform: skew(-10deg);
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-transition: all .2s ease;
  transition: all .2s ease;
  font-family: sans-serif;
  background: #888;
}
.tgl-skewed + .tgl-btn:after, .tgl-skewed + .tgl-btn:before {
  -webkit-transform: skew(10deg);
          transform: skew(10deg);
  display: inline-block;
  -webkit-transition: all .2s ease;
  transition: all .2s ease;
  width: 100%;
  text-align: center;
  position: absolute;
  line-height: 2em;
  font-weight: bold;
  color: #fff;
  text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
}
.tgl-skewed + .tgl-btn:after {
  left: 100%;
  content: attr(data-tg-on);
}
.tgl-skewed + .tgl-btn:before {
  left: 0;
  content: attr(data-tg-off);
}
.tgl-skewed + .tgl-btn:active {
  background: #888;
}
.tgl-skewed + .tgl-btn:active:before {
  left: -10%;
}
.tgl-skewed:checked + .tgl-btn {
  background: #86d993;
}
.tgl-skewed:checked + .tgl-btn:before {
  left: -100%;
}
.tgl-skewed:checked + .tgl-btn:after {
  left: 0;
}
.tgl-skewed:checked + .tgl-btn:active:after {
  left: 10%;
}

.tgl-flat + .tgl-btn {
  padding: 2px;
  -webkit-transition: all .2s ease;
  transition: all .2s ease;
  background: #fff;
  border: 4px solid #f2f2f2;
  border-radius: 2em;
}
.tgl-flat + .tgl-btn:after {
  -webkit-transition: all .2s ease;
  transition: all .2s ease;
  background: #f2f2f2;
  content: "";
  border-radius: 1em;
}
.tgl-flat:checked + .tgl-btn {
  border: 4px solid #7FC6A6;
}
.tgl-flat:checked + .tgl-btn:after {
  left: 50%;
  background: #7FC6A6;
}

.tgl-flip + .tgl-btn {
  padding: 2px;
  -webkit-transition: all .2s ease;
  transition: all .2s ease;
  font-family: sans-serif;
  -webkit-perspective: 100px;
          perspective: 100px;
}
.tgl-flip + .tgl-btn:after, .tgl-flip + .tgl-btn:before {
  display: inline-block;
  -webkit-transition: all .4s ease;
  transition: all .4s ease;
  width: 100%;
  text-align: center;
  position: absolute;
  line-height: 2em;
  font-weight: bold;
  color: #fff;
  position: absolute;
  top: 0;
  left: 0;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  border-radius: 4px;
}
.tgl-flip + .tgl-btn:after {
  content: attr(data-tg-on);
  background: #02C66F;
  -webkit-transform: rotateY(-180deg);
          transform: rotateY(-180deg);
}
.tgl-flip + .tgl-btn:before {
  background: #FF3A19;
  content: attr(data-tg-off);
}
.tgl-flip + .tgl-btn:active:before {
  -webkit-transform: rotateY(-20deg);
          transform: rotateY(-20deg);
}
.tgl-flip:checked + .tgl-btn:before {
  -webkit-transform: rotateY(180deg);
          transform: rotateY(180deg);
}
.tgl-flip:checked + .tgl-btn:after {
  -webkit-transform: rotateY(0);
          transform: rotateY(0);
  left: 0;
  background: #7FC6A6;
}
.tgl-flip:checked + .tgl-btn:active:after {
  -webkit-transform: rotateY(20deg);
          transform: rotateY(20deg);
}

		</style>
		<script type='application/ld+json'>
			{
				"@context": "http://schema.org/",
				"@type": "Organization",
				"url": "",
				"name": "Vault0x",
				"legalName": "Vault0x",
				"description": "",
				"logo": "",
				"image": "",
				"author": "psdHTML.me",
				"contactPoint": {
					"@type": "ContactPoint",
					"contactType": "Customer service",
					"telephone": ""
				},
				"address": {
					"@type": "PostalAddress",
					"streetAddress": "",
					"addressLocality": "",
					"addressRegion": "",
					"postalCode": "",
					"addressCountry": ""
				}
			}
		</script>
	</head>
	<body>
		<div class="se-pre-con"></div>
		<div id="root">
			<header id="top">
				<p id="logo">
					<img src="images/logo.png">
				</p>
				<nav id="skip">
					<ul>
						<li><a href="#nav" accesskey="n">Skip to navigation (n)</a></li>
						<li><a href="#content" accesskey="c">Skip to content (c)</a></li>
						<li><a href="#footer" accesskey="f">Skip to footer (f)</a></li>
					</ul>
				</nav>
				<nav id="nav">
					<ul>
						<!-- <li class="sub"><a accesskey="1" href="./">Tosh-2 <span>(Switch Device)</span></a> <em>(1)</em>
						<ul>
							<li><a href="./">Toshendra</a></li>
							<li class="active"><a href="./">Tosh-2</a></li>
							<li class="a"><a href="./">Add Device</a></li>
						</ul> -->
						<div id="togglecont">
							<input class="tgl tgl-light" id="cb1" type="checkbox"/>
    					    <label class="tgl-btn" for="cb1"></label>
						</div>
						<span >
							<label id="togglecontlabel">TestNetwork</label>
						</span>
						 
					
				</ul>
				
			</nav>
		</header>
		
		
		<article id="content">
			
			<div class="tabs-a">
				<ul>
					<li><a href="./">Transactions</a></li>
					<li><a href="./">Receive</a></li>
					<li><a href="./">Send</a></li>
					<!-- <li><a href="./">Sign &amp; Verify</a></li> -->
				</ul>
				<div>
					<div>
						<ul class="list-charts">
							<li>
								<span id = "alpha">Balance</span>
								<ul>
									<li id="liBalanceBTC"></li>
<!--									<li id="liBalanceUSD"></li>-->
								</ul>
								
							</li>
<!--
							<li>
								<span>Income</span>
								<ul>
									<li id="liIncomeBTC">8.1966585 XRK</li>
									<li id="liIncomeUSD">$ 65,789.63</li>
								</ul>
								
							</li>
-->
<!--
							<li>
								<span>Expenses</span>
								<ul>
									<li id="liExpensesBTC">6.1966585 XRK</li>
									<li id="liExpensesUSD">$ 41396.11</li>
								</ul>
								
							</li>
-->
<!--
							<li>
								<span>Rate</span>
								<ul>
									<li>1.00 XRK</li>
									<li id="liCurrentBTCRate">$ 5,572.36</li>
								</ul>
								
							</li>
-->
						</ul>
		<header class="double">

			<h2>Transactions History</h2>
			<ul class="list-inline">
<!--
				<li class="a"><span id="currentdate"> </span><a href="./"><i class="icon-filter"></i> Filters</a></li>
				<li>
					<form action="./" method="post">
						<p>
							<label for="lia">Search</label>
							<input type="text" id="lia" name="lia" required  onkeyup="filterTable()">
							<button type="submit">Submit</button>
						</p>
					</form>
				</li>
-->
				<li><a ><i class="icon-csv" id="export"></i> <span class="hidden">Download CSV</span></a></li>
				
			</ul>
		</header>
		<table class="table-a" id="tableone">
			<tr>
				<th>Address</th>
				<th>Date and Time</th>
				
				
				<th>fee</th>
			</tr>
			
			
		</table>
	</div>
	<div>
		<h2>Public Address </h2>
        <P class="pcolor">Use this address to recieve payments.</P>
		<div class="cols-a">
			<div>
				<table class="table-b">
					<tr>
						
					</tr>
					
					
				</table>
				<p class="link-btn text-center"><a class="b" id="addChildAddress"><i class="icon-plus"></i> Add Fresh Address</a></p>
			</div>
			<aside>
				<figure>
				
					<div id="divQrCode">
						
					</div>
				</figure>
			</aside>
		</div>
	</div>
	<div  name="myForm" method="post" class="" id="pfform">
		<h2>Send Payments</h2>
		<div class="quadruple a">
			<p>
				<label for="faa">Enter Amount</label>
				<input type="number" id="sendBTC" name="sendBTC">
				<span class="suffix">XRK</span>
			</p>
			<p>
				<label for="fab">Enter the private key</label>
				<input type="text" id="sendUSD" name="fab">
				<span class="suffix">key</span>
			</p>
			<p>
				<label for="sendRecipientaddress">Enter Receipient Address after checking</label>
				<input type="text" id="sendRecipientaddress" name="sendRecipientaddress">
				<span class="suffix"><i class="icon-qr"></i></span>
			</p>
		</div>
		<p>
			<label for="fac">Enter the data to save</label>
			<input type="text" name="senddata" value="" placeholder="Send Data" id="hexdata">
		</p>
		<p>
			<label for="fad">Enter the key label for transaction</label>
			<input type="text" name="sendd" value="" placeholder="Send key" id="keydata">
		</p>
		<p class="formerrorpara">
			
		</p>
		<div id ="txid"></div>
		<div class="double">
			
			<p><button type="submit" id="sendTransactionBtn" ><i class="icon-check"></i> Send</button>
			
			<button id="sendt">SEND</button>

			
			</p>
		</div>
	</div>
	<div class="width-a">
		<div class="notification">
			<h2>This is your Bitcoin Cash (BCH) wallet. Do not receive bitcoins to the address in this wallet.</h2>
			<p>To claim your Bitcoin Cash coins, please use our <a href="./">coin splittng tool</a></p>
			<p>For more information, please refer to <a href="./">our guide</a></p>
		</div>
		<div class="double a">
			<form action="" method="post" class="form-a">
				<h2>Sign Message</h2>
				<p>
					<label for="fae">Enter Message</label>
					<textarea id="fae" name="fae" required></textarea>
				</p>
				<p>
					<label for="faf">Enter Receipient Address after checking</label>
					<input type="text" id="faf" name="faf" required>
					<span class="suffix"><i class="icon-qr"></i></span>
				</p>
				<p>
					<label for="fag">Enter Signature</label>
					<textarea id="fag" name="fag" required></textarea>
				</p>
				<p class="double">
					<button type="submit">Sign</button>
					<button type="reset">Clear</button>
				</p>
			</form>
			<form action="./" method="post" class="form-a">
				<h2>Verify Message</h2>
				<p>
					<label for="fah">Enter Message</label>
					<textarea id="fah" name="fah" required></textarea>
				</p>
				<p>
					<label for="fai">Enter Receipient Address after checking</label>
					<input type="text" id="fai" name="fai" required>
					<span class="suffix"><i class="icon-qr"></i></span>
				</p>
				<p>
					<label for="faj">Enter Signature</label>
					<textarea id="faj" name="faj" required></textarea>
				</p>
				<p class="double">
					<button type="submit">Verify</button>
					<button type="reset">Clear</button>
				</p>
			</form>
		</div>
	</div>
</div>
</div>
</article>



<footer id="footer">
<ul>
<li>Copyright Vault0x @<span class="date">2017</span></li>
<li><a href="./">Terms</a></li>
<li><a href="./">Privacy Policy</a></li>
</ul>
</footer>
</div>


<!-- all the script here to make the page load faster -->


<script src="javascript/jquery.js"></script>
<script src="javascript/scripts.js"></script>
<script src="javascript/custom.js"></script>
<script src="javascript/mobile.js"></script>
<script src="javascript/table2CSV.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
crossorigin="anonymous"></script>
<script src="javascript/bitcore-lib/bitcore-lib.min.js"></script>
<script src="javascript/bitcore-mnemonic/bitcore-mnemonic.min.js"></script>
<script src="javascript/bitcore-explorers/bitcore-explorers.min.js"></script>
<!-- <script src="javascript/app.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
<script src="javascript/wallet.js"></script>
<script src="https://fastcdn.org/FileSaver.js/1.1.20151003/FileSaver.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/TableExport/3.3.13/js/tableexport.js"></script>
<script type="text/javascript">

//	do the work after everything was loaded (DOM, media elements) 
//	params : null 
// 	return : NULL

	window.onload = function () {
	getaddressbalances(); //load the first address on page load.

	}

 // on click of export button download all list transactions into csv format
 // table2csv js library is used here which has a function table2csv
 // Name of the file can be changed by going to the libray in the javascript folder
 // so let's put this code inside a function called convertTableToCSV


	


</script>
</body>
</html>