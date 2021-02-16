<?php
/* Smarty version 3.1.29, created on 2020-03-02 18:10:38
  from "/home4/o8txizzi/public_html/themes/scriptolutionmaps.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e5d926eebeb33_75848944',
  'file_dependency' => 
  array (
    'e5470594548d0e7c6b3c8d1abcab86f1cbbaaffd' => 
    array (
      0 => '/home4/o8txizzi/public_html/themes/scriptolutionmaps.tpl',
      1 => 1577430514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5d926eebeb33_75848944 ($_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript">                        
  $(document).ready(function(){
	var input = document.getElementById('scriptolutionjoblocation');
	var options = {types: ['(cities)']};
	new google.maps.places.Autocomplete(input, options);
  });
  
  var placeSearch, autocomplete;
      var componentForm = {
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('scriptolutionjoblocation')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
		  
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?php echo $_smarty_tpl->tpl_vars['scriptolution_map_key']->value;?>
&libraries=places&signed_in=true&callback=initAutocomplete" async defer><?php echo '</script'; ?>
><?php }
}
