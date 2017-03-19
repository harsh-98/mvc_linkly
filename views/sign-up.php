{% extends "layout.html" %}
{% block title%}
SIGN -- UP 
{% endblock %}



{% block form %}
<form action="link.php" method="post">
<pre>
   NAME             <input type="text" name="reg_name" class="ch"><br>
   USERNAME   <input type="text" name="reg_user" class="ch"><br>
   PASSWORD    <input type="password" name="reg_pass" class="ch"><br>
	
</pre>
		<input type="submit" id="sub1" value="SIGN UP">


</form>
<div id="k" style="padding:2vh;margin-top:4vh;">
<button onclick="fun();">LOG IN</button>
</div>
<script type="text/javascript">
	function fun(){
		window.history.pushState(null,null,"login.php");
			$.ajax({url:'login',cache:false,success:function(data){

				$("body").html(data);


			}});


	}



</script>
{% endblock %}



