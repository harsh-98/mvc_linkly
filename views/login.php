{% extends "layout.html" %}
{% block title%}
LOGIN -- IN
{% endblock %}

{% block form %}

<form method="post" action="link.php">
<pre>
 USERNAME  <input type="text" name="log_name" class="ch"><br>
 PASSWORD   <input type="text" name="log_pass" class="ch"><br>
</pre>
<input type="submit" value="LOG IN" id="sub1">

</form>
{% endblock %}




