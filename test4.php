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
                            <form method="post" action="test5.php"  class="alt">
                                <h2 style="font-family:'Microsoft JhengHei';">石膏固定</h2>
                                <h2 style="font-family:'Microsoft JhengHei';">問題4：骨折固定後暴露傷之末端的原因是?</h2>  
                                <div class="row uniform">
                                    <!-- Break -->
                                    <div class="12u$">
                                        <input type="radio" id="q4-1" name="demo-priority3" value="0">
                                        <label for="q4-1"  style="font-family:'Microsoft JhengHei';">透氣</label>
                                    </div>
                                    <div class="12u$">
                                        <input type="radio" id="q4-2" name="demo-priority3" value="0">
                                        <label for="q4-2" style="font-family:'Microsoft JhengHei';">節約材料</label>
                                    </div>
                                    <div class="12u$">
                                        <input type="radio" id="q4-3" name="demo-priority3" value="0">
                                        <label for="q4-3" style="font-family:'Microsoft JhengHei';">便於換藥</label>
                                    </div>   
                                    <div class="12u$">
                                        <input type="radio" id="q4-4" name="demo-priority3" value="10">
                                        <label for="q4-4" style="font-family:'Microsoft JhengHei';">便於觀察血運情況</label>
                                    </div>                              
                                    <div class="12u$">
                                        <ul class="actions">
                                           
                                            <li style="float:right;"><input type="submit" value="下一題" onclick="location.href='test5.php'"/></li>
                                        </ul>
                                    </div>
                                    <?php
                                    // Set session variables
                                    $_SESSION["t3"] = $_POST['demo-priority2'];
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