<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Event Calendar</title>
	<link rel="stylesheet" type="text/css" href="assets/mainStyle.css" />
	<script type="text/javascript" src="active.js"></script>
</head>
<body>

  <div class="container">

    <header>
      <h1>Audubon Event Calendar</h1>
    </header>

		<div class="floatLeft">

			<p>Hello this is an invisible div :D</p>

		</div>



    	<?php include 'nav.html';?>



    <div class="main"> <!-- start of main -->

			<div class="cal">
      	<iframe src="https://calendar.google.com/calendar/embed?src=oop5b02hrbaqt86qp4nsof9rjg%40group.calendar.google.com&amp;ctz=America/New_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
			</div>

    </div> <!-- end of main -->

		<div> <!-- rightside begin -->

			<div class="ad"><!-- 1st ad being -->

				<h2>Your ad could be here today!</h2>

			</div><!-- 1st ad end -->

			<div class="ad1"><!-- 2nd ad being -->


			</div><!-- 2nd ad end -->

		</div> <!-- rightside end -->

  </div>

	<footer>
		<?php include 'foot.html';?>
	</footer>

</body>
</html>
