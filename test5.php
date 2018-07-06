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
                            <form method="post" action="test6.php" class="alt">
                                <h2 style="font-family:'Microsoft JhengHei';">石膏固定</h2>
                                <h2 style="font-family:'Microsoft JhengHei';">問題5：使用石膏固定時有下列哪些症狀，應立即返院診療?</h2>  
                                <div class="row uniform">
                                    <!-- Break -->
                                    <div class="12u$">
                                        <input type="radio" id="q5-1" name="demo-priority4" value="0">
                                        <label for="q5-1"  style="font-family:'Microsoft JhengHei';">患肢疼痛或有分泌物流出</label>
                                    </div>
                                    <div class="12u$">
                                        <input type="radio" id="q5-2" name="demo-priority4" value="0">
                                        <label for="q5-2" style="font-family:'Microsoft JhengHei';">肢體末端冰冷、麻木、發紫、刺痛、腫脹、感覺喪失等</label>
                                    </div>
                                    <div class="12u$">
                                        <input type="radio" id="q5-3" name="demo-priority4" value="0">
                                        <label for="q5-3" style="font-family:'Microsoft JhengHei';">石膏斷裂</label>
                                    </div>   
                                    <div class="12u$">
                                        <input type="radio" id="q5-4" name="demo-priority4" value="10">
                                        <label for="q5-4" style="font-family:'Microsoft JhengHei';">以上皆是</label>
                                    </div>                              
                                    <div class="12u$">
                                        <ul class="actions">
                                            
                                            <li style="float:right;"><input type="submit" value="下一題" onclick="location.href='test6.php'"/></li>
                                        </ul>
                                    </div>
                                    <?php
                                    // Set session variables
                                    $_SESSION["t4"] = $_POST['demo-priority3'];
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