<select id="viewSelector">
   <option value="0">-- Select a View --</option>       
   <option value="view1">view1</option>
   <option value="view2">view2</option>
   <option value="view3">view3</option>
</select>

<div id="view1">
  <!-- content --> 
</div>
<div id="view2a">
  <!-- content --> 
</div>
<div id="view2b">
  <!-- content --> 
</div>
<div id="view3">
  <!-- content --> 
</div>

<script type = "text/javascript">

document.addEventListener('DOMContentLoaded', function () {
  $.viewMap = {
    '1' : $('#container'),
    '0' : $('#shelf'),
  };

  $('#bool_position').change(function() {
  $.each($.viewMap, function() { this.hide(); });
  $.viewMap[$(this).val()].show();
}).change();
})
</script>