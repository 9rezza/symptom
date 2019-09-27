<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Cron_model extends CI_Model {
                        
    public function get_all_pm()
    {
        $this->db->select('*');
        $this->db->from('hardware');
        return $this->db->get();                                    
    }
                        
    public function get_avg_last_120($initial, $end, $modul)
    {
        $this->db->select('avg(cur_1) as cur_1, avg(cur_2) as cur_2, avg(cur_3) as cur_3, avg(cur_avg) as cur_avg, avg(power_app) as power_app, avg(power_real) as power_real');
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
    
                        