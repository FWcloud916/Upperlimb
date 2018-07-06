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
                            <form method="post" action="test2.php" class="alt" >
                                <h2 style="font-family:'Microsoft JhengHei';">術後應注意事項</h2>
                                <h2 style="font-family:'Microsoft JhengHei';">問題1：下列何者為術後7-8 周可進行的復健?</h2>  
                                <div class="row uniform">
                                    <!-- Break -->
                                    <div class="12u$">
                                        <input type="radio" id="q1-1" name="demo-priority" value="10"   >
                                        <label for="q1-1"  style="font-family:'Microsoft JhengHei';">保護性的、緩和的被動關節活動運動，以預防掌指關節(MPJ)僵硬在伸直的姿勢、指間關節(IPJ)僵硬在彎曲的姿勢。</label>
                                    </div>
                                    <div class="12u$">
                                        <input type="radio" id="q1-2" name="demo-priority" value="0">
                                        <label for="q1-2" style="font-family:'Microsoft JhengHei';">可利用按摩、肌腱滑動運動(tendon gliding exercise)、阻斷性運動(blocking exercise)等運動，減少沾黏、盡可能回復主動關節活動度。</label>
                                    </div>
                                    <div class="12u$">
                                        <input type="radio" id="q1-3" name="demo-priority" value="0">
                                        <label for="q1-3" style="font-family:'Microsoft JhengHei';">競賽性體育活動或極重的負重工作</label>
                                    </div>                               
                                    <div class="12u$">
                                        <ul class="actions">
                                            <li style="float:right;"><input type="submit" value="下一題" onclick="location.href='test2.php'"/></li>
                                        </ul>
                                    </div>
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