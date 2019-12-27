<?php

?>
<div id="footer" align="center">
	<span><img src="/ncw/images/logo 5.png"><p>Contact @ <strong>innogeeks.kiet@gmail.com</strong></p></span>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.menu-toggle').click(function(){
      $('nav').toggleClass('active')
    })
    $('ul li.sub-menu').click(function(){
      $(this).toggleClass('active');
    })
  })
</script>
<script>
	$("#2").hover(function(){
		$("#onee").hide();
	$("#two").show();
	
		
		
	});
		$("#1").hover(function(){
			$("#onee").show();
			$("#two").hide();
		});
</script>