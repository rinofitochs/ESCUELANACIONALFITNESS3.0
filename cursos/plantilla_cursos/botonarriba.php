<!--boton arriba-->
<button type="button" class="btn btn-default ir-arriba " aria-label="Left Align">
  <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>
</button>
<!--fin boton arriba-->



<script type="text/javascript">
<!--boton ir arriba-->
$(document).ready(function(){
 
	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 2000);
	});
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		}
	});
 
});
<!--fin ir arriba-->
</script>

