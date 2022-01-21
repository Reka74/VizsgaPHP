<?php

/**
 * Description of Cars
 *
 * @author tamas
 */
class Cars extends CI_Model{
    
    public function getCars(){
        $this->db->select('car.id, car_type AS ctype, car_image AS cimage, price.price_1day AS cprice');
        $this->db->from('car');
        $this->db->join('price', 'car.price_id=price.id', 'left');
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result_array();
        }
        return [];
        
    }
}
