<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Map extends CI_Controller {
 	function __construct()
    {
        parent::__construct();
        $this->load->library('googlemaps');
    }
 
 	public function index()
 	{
		$lat = "-8.0806426";
        $lng = '113.4835367';
        $center = $lat.",".$lng;    
        $cfg=array(
            'class'                       =>'map-canvas',
            'map_div_id'                  =>'map-canvas',
            'center'                      =>$center,
            'zoom'                        =>17,
            'map_type'                    => 'HYBRID',
            'places'                      =>TRUE, //Aktifkan pencarian alamat
            'placesAutocompleteInputID'   =>'cari', //set sumber pencarian input
            'placesAutocompleteBoundsMap' =>TRUE,
            'placesAutocompleteOnChange'  =>'showmap();' //Aksi ketika pencarian dipilih
        );
        $this->googlemaps->initialize($cfg);
        
        $marker=array(
            'position'      =>$center,
            'draggable'     =>TRUE,
            'title'         =>'Coba diDrag',
            'ondragend'     =>"document.getElementById('lat').value = event.latLng.lat();
                                document.getElementById('lng').value = event.latLng.lng();
                                showmap();",
        );      
        $this->googlemaps->add_marker($marker);

         $data = array(
            'lat'               => set_value('lat'),
            'lng'               => set_value('lng'),
            'map'               => $this->googlemaps->create_map(),
            'latitude'          => $lat,
            'longitude'         => $lng,
	    );

		$this->load->view('map', $data);

 	}
 
 }