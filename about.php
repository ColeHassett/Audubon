<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Audubon, PA Homepage</title>
	<link rel="stylesheet" type="text/css" href="assets/mainStyle.css" />
	<script type="text/javascript" src="active.js"></script>
</head>
<body>

  <div class="container"> <!-- container begin -->

    <header> <!-- header begin -->
      <h1>Welcome to Audubon</h1>
    </header> <!-- header end -->

		<div class="floatLeft">

			<p>Hello this is an invisible div :D</p>

		</div>

			<!-- begin nav -->

				<?php include 'nav.html';?>

	    <!-- end nav -->

		<div class="main"> <!-- main begin -->

      <p>This iteration of this site brought about some major mobile viewing improvements: </p>

      <ul>
        <li>The site navigation is now much more optimized for mobile viewing. Switching from shrinking the menu to putting it inside a hamburger menu makes nav much easier.</li>
        <li>The links for looking at the map and calendar now send you out to google maps and google calendar for the best viewing experience. If your phone supports it, the links will open the maps app or calendar app if you have it installed.</li>
        <li>Every page is now .php allowing for much more flexibility with integration. Moving away from SSI for better content.</li>
        <li>When the site is scaled down small enough, it removes any side bars to allow for easier reading of the main content. The content is also scaled to fit a phone screen well but not leak over the edges.</li>
      </ul>

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
