<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Map of the Area</title>
	<link rel="stylesheet" type="text/css" href="assets/mainStyle.css" />
	<script type="text/javascript" src="active.js"></script>
</head>
<body>

  <div class="container">

    <header>
      <h1>Map of the Surrounding Area</h1>
    </header>

		<div class="floatLeft">

			<p>Hello this is an invisible div :D</p>

		</div>


    	<?php include 'nav.html';?>


		<div class="main"> <!-- main begin -->

			<div class="cal"> <!-- container for map module -->
				<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1Di5RisxbIrM-iqZVSLZFXLnSPcs" width="640" height="480"></iframe>
			</div>

		</div> <!-- main end -->

		<div> <!-- rightside begin -->

			<div class="ad"><!-- 1st ad being -->

				<h2>Your ad could be here today!</h2>

			</div><!-- 1st ad end -->

			<div class="ad1"><!-- 2nd ad being -->


			</div><!-- 2nd ad end -->

		</div> <!-- rightside end -->

  </div> <!-- container end -->

	<footer>
		<?php include 'foot.html';?>
	</footer>

</body>
</html>
