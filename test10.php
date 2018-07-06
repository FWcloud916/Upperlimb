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
                            <form method="post" action="#" class="alt">
                            <?php
                                 $_SESSION["t9"] = $_POST['demo-message1'];
                                // Echo session variables that were set on previous page

                                $x = "";
                                if ($_SESSION["t8"] == "向心按摩"||$_SESSION["t8"] == "手抬高至心臟高度") {
                                     $x="10";
                                }
                                else{
                                     $x="0";
                                }
                                $y = "";
                                if ($_SESSION["t9"] == "心臟") {
                                     $y="20";
                                }
                                else{
                                     $y="0";
                                }
                                
                                $total = $_SESSION["t1"]+$_SESSION["t2"]+$_SESSION["t3"]+$_SESSION["t4"]+$_SESSION["t5"]+$_SESSION["t6"]+$_SESSION["t7"]+$x +$y;
                                
                                ?>
                                <center>
                                    <img src="images/test/end.png">
                                    <h2 style="font-family:微軟正黑體;">恭喜您獲得 <?php echo $total; ?>  分</h2>
                                
                                 <ul class="actions">
                                            <li><input type="reset" value="再測一次"  onclick="location.href='test.php'"/></li>
                                            <li><input type="button" value="回首頁" onclick="location.href='index.html'" /></li>
                                </ul>
                                     </center>

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