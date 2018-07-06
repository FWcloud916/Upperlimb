<?php
// Start the session
session_start();
?>
<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>測驗</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper">
<header id="header">
                      <a href="#" class="logo" style="font-family:'Microsoft JhengHei';">測驗</a>
                </header>

				<!-- Main -->
					<div id="main">
						<!-- Post -->
                        <section class="test">                                                     
                            <form method="post" action="test4.php"  class="alt">
                                <h2 style="font-family:'Microsoft JhengHei';">徒手固定</h2>
                                <h2 style="font-family:'Microsoft JhengHei';">問題3：上肢骨折固定後，上肢應保持：</h2>  
                                <div class="row uniform">
                                    <!-- Break -->
                                    <div class="12u$">
                                        <input type="radio" id="q3-1" name="demo-priority2" value="0">
                                        <label for="q3-1"  style="font-family:'Microsoft JhengHei';">伸直位</label>
                                    </div>
                                    <div class="12u$">
                                        <input type="radio" id="q3-2" name="demo-priority2" value="10">
                                        <label for="q3-2" style="font-family:'Microsoft JhengHei';">曲肘位</label>
                                    </div>
                                    <div class="12u$">
                                        <input type="radio" id="q3-3" name="demo-priority2" value="0">
                                        <label for="q3-3" style="font-family:'Microsoft JhengHei';">隨意體位</label>
                                    </div>   
                                    <div class="12u$">
                                        <input type="radio" id="q3-4" name="demo-priority2" value="0">
                                        <label for="q3-4" style="font-family:'Microsoft JhengHei';">外展位</label>
                                    </div>                              
                                    <div class="12u$">
                                        <ul class="actions">
                                         
                                            <li style="float:right;"><input type="submit" value="下一題" onclick="location.href='test4.php'"/></li>
                                        </ul>
                                    </div>
                                    <?php
                                    // Set session variables
                                    $_SESSION["t2"] = $_POST['demo-priority1'];
                                    ?> 
                                </div>
                            </form>
                           
                        </section>
                  </div>
			</div>



		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>


	</body>
</html>