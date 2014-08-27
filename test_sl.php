<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!--<script src="/royalslider/jquery.royalslider.custom.min.js" />-->
<script src="_royalslider/jquery.royalslider.min.js" /></script>
<link href="_royalslider/royalslider.css" rel="stylesheet">
<link href="_royalslider/rs-default.css" rel="stylesheet">
    
    <!-- slider css -->
    <style>
      .contentSlider {
  width: 100%;
}
.contentSlider,
.contentSlider .rsOverflow,
.contentSlider .rsSlide,
.contentSlider .rsVideoFrameHolder,
.contentSlider .rsThumbs {
  background: #eee;
  color: #000;
}

.contentSlider .rsSlide,
.contentSlider .rsOverflow {
  background: #eee;
}
.contentSlider h3 {
  font-size: 24px;
  line-height: 31px;
  margin: 12px 0 8px;
  font-weight: bold;
}
.contentSlider img {
  max-width: 100%;
  height: auto;
  display: block;
}
.content-slider-bg {
  width: 86%;
  padding: 24px 7%;
  background: #eee;
}

    </style>
</head>

<body>
<div id="Slider">
  <div id="content-slider-1" class="royalSlider contentSlider rsDefault">
    <div>
      <h3>Slide HTML Text</h3>
      <p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show. He who searches for meaning here will be sorely disappointed.  These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. </p>
      <blockquote>This is dummy copy. It's Greek to you. Unless, of course, you're Greek, in which case, it really makes no sense. Why, you can't even read it!  It is strictly for mock-ups. You may mock it up as strictly as you wish.</blockquote>
      <p>After all, you have many other things you should be doing. Who's paying you to waste this time, anyway?</p>
      <span class="rsTmb">HTML text</span>
      </div>
    <div>
      <img class="rsImg" src="http://dimsemenov.com/plugins/royal-slider/img/home.jpg" data-rsw="707" data-rsh="397">
      <h3>Slide with Image and Text</h3>
      <p>This is dummy copy. It is not meant to be read. Accordingly, it is difficult to figure out when to end it. If this were real copy, it would have ended long ago. But then, this is dummy copy. It is not meant to be read. Period.</p>
      <span class="rsTmb">Image</span>
      </div>
    <div>
      <img class="rsImg" src="http://dimsemenov.com/plugins/royal-slider/img/boat.jpg" data-rsvideo="http://www.youtube.com/watch?v=HFbHRWwyihE" data-rsw="640" data-rsh="425">
      <h3>Slide with Video and Text</h3>
      <p>This is dummy copy. It is not meant to be read. Accordingly, it is difficult to figure out when to end it. But then, this is dummy copy. It is not meant to be read. Period.</p>
      <span class="rsTmb">Video</span>
      </div>
    
  </div>
</div>

<script id="addJS">jQuery(document).ready(function($) {
  // Please note that autoHeight option has some conflicts with options like imageScaleMode, imageAlignCenter and autoScaleSlider
  // it's recommended to disable them when using autoHeight module
  $('#content-slider-1').royalSlider({
    autoHeight: true,
	//autoScaleSlider: true,
    arrowsNav: true,
    fadeinLoadedSlide: false,
    controlNavigationSpacing: 0,
    controlNavigation: 'tabs',
    imageScaleMode: 'none',
    imageAlignCenter:false,
    loop: true,
    loopRewind: false,
    numImagesToPreload: 6,
    keyboardNavEnabled: true,
    usePreloader: false
  });
});
</script>
</body>
</html>