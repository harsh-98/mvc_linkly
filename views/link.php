

{% extends "layout.html" %}
{% block title%}
Saved--Links
{% endblock %}

{% block form %}
	<script>
		var kk ='{{msg}}';
	</script>




		
	



	
<form action="link" method="post" >
<pre>
<div>Hi &nbsp; {{msg}}</div>
 LINK <input type="text" name="link" class="ch">
	<input type="text" name="name" id="n" style="display:none;">
</pre>
	 <input type="submit" value="SUBMIT" id="sub1">
</form>

<script type="text/javascript">
	
$(document).ready(function(){
	

document.getElementById('n').value=kk; 
});




	</script>
<div id="see">
<p align="center" style="font-size:6vmin;">YOUR SAVED LINKS --</p>
	{% for post in posts %}
	<p id='s'>{{post.link | e }}
</p><br>
{% endfor %}
</div>
{% endblock %}


	