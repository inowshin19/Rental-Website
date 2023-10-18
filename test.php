<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
jQuery(function($) {
    var area = {
        'Chittagong': ['Dampara', 'GEC', 'Mehedibag', 'Halishahar'],
        'Dhaka': ['Banani', 'Gulshan'],
        'Khulna': ['Fultala'],
        'Sylhet': ['Golabganj'],
        'Barisal': ['Banaripara','Mehedipara'],
        'Rajshahi': ['Mohanpur'],
        
    }
    
    var $area = $('#area');
    $('#city').change(function () {
        var city = $(this).val(), lcns = area[city] || [];
        
        var html = $.map(lcns, function(lcn){
            return '<option value="' + lcn + '">' + lcn + '</option>'
        }).join('');
        $area.html(html)
    });
});
</script>
<head>
<body><label class="page1">City</label>
<div class="tooltips" title="Please select the country that the customer will primarily be served from">
    <select id="city" name="city" placeholder="Phantasyland">
        <option></option>
        <option>Chittagong</option>
        <option>Dhaka</option>
        <option>Khulna</option>
        <option>Sylhet</option>
        <option>Barisal</option>
        <option>Rajshahi</option>
    </select>
</div>
<br />
<br />
<label class="page1">Location</label>
<div class="tooltips" title="Please select the city that the customer is primarily to be served from.">
    <select id="area" name="area" placeholder="Anycity"></select>
</div>
</body>

</html>