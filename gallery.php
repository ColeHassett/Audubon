<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Media Gallery</title>
	<link rel="stylesheet" type="text/css" href="assets/mainStyle.css" />
	<script type="text/javascript" src="active.js"></script>
	<script type="text/javascript">

		var newImage = new Array();

		function loadImg() {

			var numImg = document.getElementById("imgHolder").getElementsByTagName("img").length;

			for (var i = 1; i <= numImg; i++) {

				newImage[i] = new Image();

				newImage[i].src = "media/aud" + i + ".jpg";

			}

		}

		function changeMe(which) {

			var start = which.indexOf('/aud') + 4;
			var end = which.indexOf('.jpg');
			var num = which.substring(start,end);

			document.images[0].src = newImage[num].src; //document.getElementById('bigPic').src = newImage[num].src;

			window.scrollTo(0, 0);

		}

	</script>

</head>
<body onload="loadImg()">

  <div class="container">

    <header>
      <h1>Images of Audubon &amp; Activities</h1>
    </header>

		<div class="floatLeft">

			<p>Hello this is an invisible div :D</p>

		</div>



    	<?php include 'nav.html';?>


		<div class="main"> <!-- start of main -->

						<!--Big Pics-->
			<div id="bigPlace">
				<img src="media/aud1.jpg" name="bigpic" alt="big pics!" class="bigPic" />
			</div>

			<hr />

			<!--div holding all of the thumbnail pictures-->
			<div class="gallery"> <!-- thumbnail section of gallery begins -->
				<div class="thumbnails">
					<div id="imgHolder">
						<figure>
							<img title="http://www.visitphilly.com/museums-attractions/philadelphia/independence-national-historical-park/#sm.0000j7x0hf7etf28v1t20qu76cqvc" alt="" class="thumbnail" src="media/aud1.jpg" onclick = "changeMe(this.src)" onmouseover = "this.style.cursor = 'pointer'" />
							<figcaption>Independence National Park</figcaption>
						</figure>
						<figure>
							<img title="https://en.wikipedia.org/wiki/File:Liberty_Bell_2008.jpg" alt="" class="thumbnail" src="media/aud2.jpg" onclick = "changeMe(this.src)" onmouseover = "this.style.cursor = 'pointer'" />
							<figcaption>The Liberty Bell</figcaption>
						</figure>
						<figure>
							<img title="https://pixabay.com/en/independence-hall-historic-1116201/" alt="" class="thumbnail" src="media/aud3.jpg" onclick = "changeMe(this.src)" onmouseover = "this.style.cursor = 'pointer'" />
							<figcaption>Independence Hall</figcaption>
						</figure>
						<figure>
					 		<img title="https://en.wikipedia.org/wiki/John_James_Audubon" alt="" class="thumbnail" src="media/aud4.jpg" onclick = "changeMe(this.src)" onmouseover = "this.style.cursor = 'pointer'" />
							<figcaption>John James Audubon</figcaption>
						</figure>
						<figure>
							<img title="https://commons.wikimedia.org/wiki/File:John_James_Audubon_(Cruishank,_1835).png" alt="" class="thumbnail" src="media/aud5.jpg" onclick = "changeMe(this.src)" onmouseover = "this.style.cursor = 'pointer'" />
							<figcaption>John James Audubon</figcaption>
						</figure>
						<figure>
							<img title="https://en.wikipedia.org/wiki/John_James_Audubon" alt="" class="thumbnail" src="media/aud6.jpg" onclick = "changeMe(this.src)" onmouseover = "this.style.cursor = 'pointer'" />
							<figcaption>John James Audubon Artwork</figcaption>
						</figure>
						<figure>
							<img title="https://en.wikipedia.org/wiki/John_James_Audubon" alt="" class="thumbnail" src="media/aud7.jpg" onclick = "changeMe(this.src)" onmouseover = "this.style.cursor = 'pointer'" />
							<figcaption>John James Audubon Artwork</figcaption>
						</figure>
						<figure>
							<img title="https://www.flickr.com/photos/pvsbond/4038959957" alt="" class="thumbnail" src="media/aud8.jpg" onclick = "changeMe(this.src)" onmouseover = "this.style.cursor = 'pointer'" />
							<figcaption>Homerun Bell at Citizens Bank Park</figcaption>
						</figure>
						<figure>
							<img title="https://en.wikipedia.org/wiki/Citizens_Bank_Park" alt="" class="thumbnail" src="media/aud9.jpg" onclick = "changeMe(this.src)" onmouseover = "this.style.cursor = 'pointer'" />
							<figcaption>Citizens Bank Park</figcaption>
						</figure>
						<figure>
							<img title="https://en.wikipedia.org/wiki/Wells_Fargo_Center_(Philadelphia)" alt="" class="thumbnail" src="media/aud10.jpg" onclick = "changeMe(this.src)" onmouseover = "this.style.cursor = 'pointer'" />
							<figcaption>Wells Fargo Center</figcaption>
						</figure>
						<figure>
							<img title="https://commons.wikimedia.org/wiki/File:WellsFargoCenterPhila_29.JPG" alt="" class="thumbnail" src="media/aud11.jpg" onclick = "changeMe(this.src)" onmouseover = "this.style.cursor = 'pointer'" />
							<figcaption>Hockey at the Wells Fargo Center</figcaption>
						</figure>
						<figure>
							<img title="https://commons.wikimedia.org/wiki/File:Wells_Fargo_Center_2012-02-06.jpg" alt="" class="thumbnail" src="media/aud12.jpg" onclick = "changeMe(this.src)" onmouseover = "this.style.cursor = 'pointer'" />
							<figcaption>Basketball at the Wells Fargo Center</figcaption>
						</figure>
						<figure>
							<img title="https://commons.wikimedia.org/wiki/File:Le_Lincoln_Financial_Field.jpg" alt="" class="thumbnail" src="media/aud13.jpg" onclick = "changeMe(this.src)" onmouseover = "this.style.cursor = 'pointer'" />
							<figcaption>Lincoln Financial Field</figcaption>
						</figure>
						<figure>
							<img title="https://commons.wikimedia.org/wiki/File:Philly_(45).JPG" alt="" class="thumbnail" src="media/aud14.jpg" onclick = "changeMe(this.src)" onmouseover = "this.style.cursor = 'pointer'" />
							<figcaption>Lincoln Financial Field</figcaption>
						</figure>
						<figure>
							<img title="https://commons.wikimedia.org/wiki/File:Valley_Forge_National_Historical_Park,_Log_Cabins.JPG" alt="" class="thumbnail" src="media/aud15.jpg" onclick = "changeMe(this.src)" onmouseover = "this.style.cursor = 'pointer'" />
							<figcaption>Cabins at Valley Forge Park</figcaption>
						</figure>
						<figure>
							<img title="https://www.flickr.com/photos/75012107@N05/8009789593" alt="" class="thumbnail" src="media/aud16.jpg" onclick = "changeMe(this.src)" onmouseover = "this.style.cursor = 'pointer'" />
							<figcaption>Valley Forge Park Trail</figcaption>
						</figure>
						<figure>
							<img title="https://www.flickr.com/photos/michaelwm25/6574925067" alt="" class="thumbnail" src="media/aud17.jpg" onclick = "changeMe(this.src)" onmouseover = "this.style.cursor = 'pointer'" />
							<figcaption>Boathouse Row at Night</figcaption>
						</figure>
						<figure>
							<img title="https://www.flickr.com/photos/tonythemisfit/3458235812" alt="" class="thumbnail" src="media/aud18.jpg" onclick = "changeMe(this.src)" onmouseover = "this.style.cursor = 'pointer'" />
							<figcaption>Mare and Foal at Fairmount Park</figcaption>
						</figure>
						<figure>
							<img title="https://www.flickr.com/photos/achimh/4368243796" alt="" class="thumbnail" src="media/aud19.jpg" onclick = "changeMe(this.src)" onmouseover = "this.style.cursor = 'pointer'" />
							<figcaption>The Philadelphia Art Museum</figcaption>
						</figure>
						<figure>
							<img title="https://en.wikipedia.org/wiki/Franklin_Institute" alt="" class="thumbnail" src="media/aud20.jpg" onclick = "changeMe(this.src)" onmouseover = "this.style.cursor = 'pointer'" />
							<figcaption>The Franklin Institute</figcaption>
						</figure>
						<figure>
							<img title="https://commons.wikimedia.org/wiki/File:MemorialHallPhila03.jpg" alt="" class="thumbnail" src="media/aud21.jpg" onclick = "changeMe(this.src)" onmouseover = "this.style.cursor = 'pointer'" />
							<figcaption>Memorial Hall, Home to the Please Touch Museum</figcaption>
						</figure>
						<figure>
							<img title="https://www.flickr.com/photos/its_our_city/2658479569" alt="" class="thumbnail" src="media/aud22.jpg" onclick = "changeMe(this.src)" onmouseover = "this.style.cursor = 'pointer'" />
							<figcaption>The National Constitution Center</figcaption>
						</figure>
					</div>
				</div>
			</div> <!-- thumbnail section ends -->

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
