

<?php 
if (function_exists('vc_map')) {

	vc_map(array(
       'name'  		   => 'Shipper slider',
       'base'  		   =>  'shipper-slider',
       'params'		   => array(
        array(
          'param_name' => 'title',
          'type'       => 'textfield',
          'heading'    => 'Please add Title'

        ),

        array(
          'param_name' => 'tagline',
          'type'       => 'textfield',
          'heading'    => 'Please add Tagline' 
        ),

         array(
          'param_name' => 'image1',
          'type'       => 'attach_image',
          'heading'    => 'Slider 1',
          'value'      => get_template_directory_uri() . '/images/banner1.jpg',
        ),

           array(
          'param_name' => 'image2',
          'type'       => 'attach_image',
          'heading'    => 'Slider 2',
          'value'      => get_template_directory_uri() . '/images/banner2.jpg',
        ),

          array(
          'param_name' => 'image3',
          'type'       => 'attach_image',
          'heading'    => 'Slider 3',
          'value'      => get_template_directory_uri() . '/images/banner3.jpg',
        ),




       )

	));

	//services 

	vc_map(array(
     'name'     => 'shipper Services',
     'base'     => 'shipper-serices',
     'params'   => array(
       array(
          'param_name' => 'section_number',
          'type'       => 'textfield',
          'heading'    => 'Section Number'
       ),
       
       array(
          'param_name' => 'title',
          'type'       => 'textfield',
          'heading'    => 'Title'
       ),

          array(
          'param_name' => 'description',
          'type'       => 'textarea_html',
          'heading'    => 'Description'
       ),

          array(
          'param_name' => 'section_one_image',
          'type'       => 'attach_image',
          'heading'    => 'Section one Icon'
       ),
           array(
          'param_name' => 'section_one_title',
          'type'       => 'textfield',
          'heading'    => 'Section one Title'
       ),

           array(
          'param_name' => 'section_one_content',
          'type'       => 'textfield',
          'heading'    => 'Section one content'
       ),

           array(
          'param_name' => 'section_two_image',
          'type'       => 'attach_image',
          'heading'    => 'Section  Two Icon'
       ),
           array(
          'param_name' => 'section_two_title',
          'type'       => 'textfield',
          'heading'    => 'Section Two Title'
       ),

           array(
          'param_name' => 'section_two_content',
          'type'       => 'textfield',
          'heading'    => 'Section Two content'
       ),

           array(
          'param_name' => 'section_three_image',
          'type'       => 'attach_image',
          'heading'    => 'Section Three Icon'
       ),

           array(
          'param_name' => 'section_three_title',
          'type'       => 'textfield',
          'heading'    => 'Section Three Title'
       ),

           array(
          'param_name' => 'section_three_content',
          'type'       => 'textfield',
          'heading'    => 'Section Three content'
       ),



     )

	));

	 vc_map(array(
     'name'      	   => 'Shipper Calculating',
     'base'      	   => 'shipper-calculating',
     'params'    => array(
       array(
        'param_name'   => 'section_number',
        'type'         => 'textfield',
        'heading'      => 'Section Number Add'

       ),

       array(
        'param_name'   => 'section_title',
        'type'         => 'textfield',
        'heading'      => 'Section title'

       ),

       array(
        'param_name'   => 'section_image',
        'type'         => 'attach_image',
        'heading'      => 'Right Image'
       ),


     )

	 ));


	 vc_map(array(
       'name'          => 'Shipper Step Feature',
       'base'          => 'shipper-page',
       'params'        => array(
         array(
        'param_name'   => 'section_one_title',
        'type'         => 'textfield',
        'heading'      => 'Add Section One  Title',
         ),
         array(
        'param_name'   => 'section_one_tagline',
        'type'         => 'textfield',
        'heading'      => 'Add Section One  Tagline',
         ),

         array(
        'param_name'   => 'section_one_link',
        'type'         => 'textfield',
        'heading'      => 'Add Section One  Link',
         ),
         array(
        'param_name'   => 'section_one_image',
        'type'         => 'attach_image',
        'heading'      => 'Add Section One  Image',
         ),

         array(
        'param_name'   => 'section_two_title',
        'type'         => 'textfield',
        'heading'      => 'Add Section Two Title',
         ),

         array(
        'param_name'   => 'section_two_tagline',
        'type'         => 'textfield',
        'heading'      => 'Add Section Two Tagline',
         ),

         array(
        'param_name'   => 'section_two_link',
        'type'         => 'textfield',
        'heading'      => 'Add Section Two link',
         ),



         array(
        'param_name'   => 'section_two_image',
        'type'         => 'attach_image',
        'heading'      => 'Add Section Two  Image',
         ),

         array(
        'param_name'   => 'section_three_title',
        'type'         => 'textfield',
        'heading'      => 'Add Section Three Title',
         ),

         array(
        'param_name'   => 'section_Three_tagline',
        'type'         => 'textfield',
        'heading'      => 'Add Section Three Tagline',
         ),

         array(
        'param_name'   => 'section_Three_link',
        'type'         => 'textfield',
        'heading'      => 'Add Section Three link',
         ),
        
         array(
        'param_name'   => 'section_Three_image',
        'type'         => 'attach_image',
        'heading'      => 'Add Section Three  Image',
         ),




       ) 

	 ));

	 //Latest news

	 vc_map(array(
       'name'           => 'Shipper Latest News',
       'base'           => 'shipper-news',
       'params'         => array(
       	array(
        'param_name'    => 'section_number',
        'type'          => 'textfield',
        'heading'       => 'Section Number' 
       	),

       	array(
        'param_name'    => 'section_title',
        'type'          => 'textfield',
        'heading'       => 'Section Title' 

       	),
       )

	 ));

	 vc_map(array(
       'name'            => 'Shipper Homepage About',
       'base'            => 'shipper-about',
       'params'          => array(
         array(
       'param_name'      => 'section_number',
       'type'            => 'textfield',
       'heading'         => 'Section Number',
    
         ),


        array(
       'param_name'      => 'section_left_title',
       'type'            => 'textfield',
       'heading'         => 'Section Left title',
         ),

        array(
       'param_name'      => 'section_left_tagline',
       'type'            => 'textfield',
       'heading'         => 'Section Left Tagline',
         ),

        array(
       'param_name'      => 'section_left_content',
       'type'            => 'textarea_html',
       'heading'         => 'Section Left Content',
         ),


        array(
       'param_name'      => 'left_icon_award_title',
       'type'            => 'textfield',
       'heading'         => 'Section Left Icon title',
         ),


        array(
       'param_name'      => 'left_icon_award_tagline',
       'type'            => 'textfield',
       'heading'         => 'Section Left Icon tagline',
         ),

         array(
       'param_name'      => 'left_icon_award_number',
       'type'            => 'textfield',
       'heading'         => 'Section Left Icon Number',
         ),

        array(
       'param_name'      => 'left_icon_packiging_tagline',
       'type'            => 'textfield',
       'heading'         => 'Section Icon Packing Tagline',
         ),

        array(
       'param_name'      => 'left_icon_packiging_number',
       'type'            => 'textfield',
       'heading'         => 'Section Icon Packing Number',
         ),

        array(
       'param_name'      => 'right_title',
       'type'            => 'textfield',
       'heading'         => 'Right Site Content',
         ),

        array(
       'param_name'      => 'right_image',
       'type'            => 'attach_image',
       'heading'         => 'Right Site Background Image',
         ),
       )
      
    
	 ));

	 //shipper heading 
	 vc_map(array(
      'name'            => 'Shipper Heading',
      'base'            => 'heading',
      'params'          => array(
       array(
        'param_name'    => 'section_number',
        'type'          => 'textfield',
        'heading'       => 'Section Number'
       ),

        array(
        'param_name'    => 'section_title',
        'type'          => 'textfield',
        'heading'       => 'Section Title'
       ),
 
 
      )

	 ));

	 vc_map(array(
     'name'            => 'Shipper Team',
     'base'           => 'shipper-team',
     'params'          => array(
      array(
      'param_name'     => 'section_top_content',
      'heading'        => 'Team Member Section top Content',
      'type'           => 'textarea_html',
      ),

     )


	 ));

   vc_map(array(
     'name'            => 'Shipper Testimonial',
     'base'            => 'shipper-testimonial'

   ));

   vc_map(array(
   'name'              => 'Shipper Career',
   'base'              => 'shipper-career',
   'params'            => array(
   array(
   'param_name'        => 'main_content',
   'type'              => 'textarea_html',
   'heading'           => 'job main content',
   ),
     array(
   'param_name'        => 'job_title',
   'type'              => 'textfield',
   'heading'           => 'job Title',
   ),
    array(
   'param_name'        => 'job_location',
   'type'              => 'textfield',
   'heading'           => 'job Location',
   ),
    array(
   'param_name'        => 'job_serial_number',
   'type'              => 'textfield',
   'heading'           => 'job Serial Number',
   ),
    array(
   'param_name'        => 'job_description',
   'type'              => 'textfield',
   'heading'           => 'job Description',
    ),
   
   array(
   'param_name'        => 'jjob_requirment',
   'type'              => 'text',
   'heading'           => 'job Requirment',
   ),
   
   )
   ));

}


?>