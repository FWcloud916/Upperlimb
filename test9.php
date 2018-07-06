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
                            <form method="post" action="test10.php" class="alt">
                                <h2 style="font-family:'Microsoft JhengHei';">簡答題</h2>
                                <h2 style="font-family:'Microsoft JhengHei';">問題9：石膏固定為促進血液循環，減輕腫脹及疼痛，臥床時以枕頭墊高或抬高床尾，保持患肢高於哪一部位?</h2>  
                                <div class="row uniform">
                                    <div class="12u$">
                                        <textarea name="demo-message1" id="demo-message1" placeholder="Enter your Answer" rows="3"></textarea>
                                    </div>
                                    <div class="12u$">
                                        <ul class="actions">
                                            <li style="float:right;"><input type="submit" value="送出答案" onclick="location.href='test8.php'" /></li>
                                        </ul>
                                    </div>
                                    <?php
                                    // Set session variables
                                    $_SESSION["t8"] = $_POST['demo-message'];
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