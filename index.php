<?php

//initial list for the input images
$no_of_images = 0;

//contains all details of all images
$images = (array)[];

$temp_v_array = (array)[];
$temp_h_array = (array)[];

//slides will be increased +1, for final result 
$no_of_slides = 0;

//index of images to be stored in array which can have max 2 images(vertical) at one index
$result_images = array();

function read_input(){

    $i =0;
    $fh = fopen('a_example.txt','r') or die($php_errormsg);
    
    $no_of_images = fgets($fh);
    
    for ($i=0; $i < $no_of_images; $i++) {
        $input_line = fgets($fh); 
        $image[$i] = explode(" ", $input_line);

        print "Orientation: ".$image[$i][0]."\n";

    }
    
}


/**
 *  ## Interest factor/common tag caculation
 *  @param list1 and list 2 array
 * 
 *  */
function calc_interest_factor($slide1, $slide2){
  

}

function add_to_slide($id1, $id2 = NULL){
    $counter = 0;
    if($id2 == NULL){
        $slides[$counter++] = $image[$i];
    }
}

Function match_tags( $id1, $id2){

}


read_input();


