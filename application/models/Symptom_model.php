<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Symptom_model extends CI_Model {
                        
    public function get_all_line()
    {
        $this->db->select('*');
        $this->db->from('line');
        return $this->db->get();                                    
    }
                        
    public function get_data_today($modul, $initial, $end)
    {
        $this->db->select('*');
        $this->db->from($modul);
        $this->db->where('timestamp >=', $initial);
        $this->db->where('timestamp <=', $end);
        return $this->db->get();                                    
    }
                        
    public function store($data, $modul)
    {
        $this->db->insert($modul, $data);                                
    }
                        
    // public function get_latest_120($initial, $end, $modul)
    // {
    //     $this->db->select('*');
    //     $this->db->from($modul);
    //     $this->db->where('timestamp >=', $initial);
    //     $this->db->where('timestamp <=', $end);
    //     return $this->db->get();                                    
    // }
                        
                            
                        
}
                        
/* End of file Cron_model.php */
    
                        