<div class='text-center' id="footer">

		<a href="mailto:misterjaaay@gmail.com">&copy; <?php echo date("Y");?> jay </a>

</div>
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script>
	$(document).ready(function(){
		 $("#loginBtn").click(function(){
		        $("#myModal").modal();
		    });
		 $("#registerBtn").click(function(){
		        $("#regModal").modal();
		    });
		 $("#logoutBtn").click(function(){
			 
			 alert('11');
		    });
	});

// function JqAjaxRequest(e, t, url) {
//     jQuery.ajax({
//         url: url,
//         type: "POST",
//         dataType: "html",
//         data: jQuery("#" + t).serialize(),
//         success: function(t) {
            
//             document.getElementById(e).innerHTML = t,
//             alert('11');
//         },
//         error: function(t) {
//             document.getElementByI
//             d(e).innerHTML = "�.�.ибка п�.и о�.п�.авке �.о�.м�."
//         }
//     })
// }
</script>
</div>
</body>
</html>