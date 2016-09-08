 	<script src="./Js/jquery.min.js"></script>
 	<script src="./Js/jquery-ui.js"></script>
 	<!-- <script src="./Js/jquery-ui.min.js"></script> -->
 	<script src="./Js/bootstrap.min.js"></script>
 	<script src="./Js/layer.js"></script>
 	<script src="./Js/swiper-3.3.1.jquery.min.js"></script>
 	<script src="./Js/host.js"></script>
 	<script src="./Js/vue.min.js"></script>
 	<script src="./Js/vue-resource.min.js"></script>
 	<script src="./Js/vue-router.min.js"></script>
 	<script src="./Js/debug.min.js"></script>
 	<script src="./Js/moment.min.js"></script>
 	<script>
	    //格式化时间
		Vue.filter('time', function (value, formatString) {
		    formatString = formatString || 'YYYY-MM-DD HH:mm:ss';
		    return moment(value).format(formatString);
		});
 	</script>
