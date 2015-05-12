<html>
<head>
    <title>Rotating Ad Banner</title>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<link rel="stylesheet" type="text/css" href="/slider.css" />
<script type="text/javascript" src="contentslider.js">

/***********************************************
* Featured Content Slider- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>

</head>
<body>

<!--Inner content DIVs should always carry "contentdiv" CSS class-->
<!--Pagination DIV should always carry "paginate-SLIDERID" CSS class-->

    <div id="slider1" class="sliderwrapper">

	<div class="contentdiv">
	<iframe src="http://yllix.com/banner_show.php?section=General&amp;pub=813278&amp;format=120x600&amp;ga=g" frameborder="0" scrolling="no" width="120" height="600" marginwidth="0" marginheight="0"></iframe>
	</div>

	<div class="contentdiv">
	<iframe src="http://yllix.com/banner_show.php?section=General&amp;pub=813278&amp;format=120x600&amp;ga=g" frameborder="0" scrolling="no" width="120" height="600" marginwidth="0" marginheight="0"></iframe>
	</div>

	<div class="contentdiv">
	<img src="images/image3.jpg" style="width: 390px;margin-left:auto;margin-right:auto;";>
	</div>

    </div>

    <div id="paginate-slider1" class="pagination">

    </div>

    <script type="text/javascript">

	featuredcontentslider.init({
		id: "slider1",  //id of main slider DIV
		contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
		toc: "#increment",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
		nextprev: ["Previous", "Next"],  //labels for "prev" and "next" links. Set to "" to hide.
		revealtype: "click", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
		enablefade: [true, 0.2],  //[true/false, fadedegree]
		autorotate: [true, 3000],  //[true/false, pausetime]
		onChange: function(previndex, curindex){  //event handler fired whenever script changes slide
			//previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
			//curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
		}
	})

    </script>



</body>
</html>
