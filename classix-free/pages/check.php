<html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js">
<!-- bxSlider Javascript file -->
<script src="/js/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="/lib/jquery.bxslider.css" rel="stylesheet" />
<body>

<label for="route_no">Route No:</label>
<input type="text" id="route_no" name="route_no" required="required" />
<input type="submit" value="Search" id="search" />
<div id="result">
</div>
<script>
$(document).ready(function()
{
    $("#search").click(function()
    {
        var textboxvalue = $('#route_no').val();
        $.ajax(
        {
            type: "POST",
            url: 'csearch.php',
            data: 'txt1='+ textboxvalue,
			beforeSend: function(){
			$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
            success: function(result)
            {   
			//$("#result").show();
             $("#result").html(result);
            }
        });
    });
});
</script>
</body>
</html>
<?php
?>