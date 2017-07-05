<!-- pagination -->
  <div class="center-halaman">
    {{$show->links()}}
  </div>

</div> <!-- End Div Container -->
</div> <!-- //contact -->

</div>	<!-- End Div Wrapper -->
<!-- //main -->
<!-- swipe box js -->
<script src="../js/jquery.swipebox.min.js"></script>
<script type="text/javascript">
jQuery(function($) {
$(".swipebox").swipebox();
});
</script>
<!-- //swipe box js -->
<!-- Skill Bar js -->
<script src="../js/skill.bars.jquery.js"></script>
<script>
$(document).ready(function(){

$('.skillbar').skillBars({
from: 0,
speed: 4000,
interval: 100,
decimals: 0,
});

});
</script>
<!-- //End Skill Bar js -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../js/bootstrap.js"></script>
</body>
</html>
