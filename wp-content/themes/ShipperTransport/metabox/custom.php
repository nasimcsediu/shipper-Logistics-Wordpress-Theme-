<?php 
 add_action('cmb2_admin_init','metabox_function');
 function metabox_function(){

 $testimonial = new_cmb2_box(array(
   'title'           => 'Additional Fields',
   'object_types'    => array('shipper-testimonial'),
   'id'              => 'additional-fields'
 ));

 $testimonial->add_field(array(
       'name'        => 'Desiganation',
       'id'          => '__desiganation__',
       'type'        => 'text'

 ));

 $testimonial->add_field(array(
       'name'        => 'photo',
       'id'          => '__desiganations__',
       'type'        => 'textarea'

 ));
 	
 }

?>