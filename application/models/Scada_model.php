<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Scada_model extends CI_Model {
                        
    public function get_all_line()
    {
        $this->db->select('*');
        $this->db->from('line');
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
                        
    

	public function get_symbol()
	{
		$this->db->select('*');
		$this->db->from('symbol');
		return $this->db->get();
	}

	public function get_element_count($grup)
	{
		$this->db->select('id');
		$this->db->from('images');
		$this->db->where('grup', $grup);
		return $this->db->get();
	}

	public function get_image_last()
	{
		$this->db->select('*');
		$this->db->from('images');
		$this->db->order_by('id', 'DESC');
		$this->db->limit(1, 0);
		return $this->db->get();
	}

	public function insert_image($data)
	{
		$this->db->insert('images', $data);
	}

	public function get_images()
	{
		$this->db->select('*');
		$this->db->from('images');
		$this->db->order_by('id', 'DESC');
		return $this->db->get();
	}

	public function get_images_5a()
	{
		$this->db->select('*');
		$this->db->from('images_5a');
		$this->db->order_by('id', 'DESC');
		return $this->db->get();
	}

	public function update_image($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->set($data);
		$this->db->update('images');
	}

	public function update_image_by_element($element, $data)
	{
		$this->db->where('element', $element);
		$this->db->set($data);
		$this->db->update('images');
	}

	public function delete_image($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('images');
	}

	public function get_textbox()
	{
		$this->db->select('*');
		$this->db->from('textbox');
		return $this->db->get();
	}

	public function update_textbox_by_element($element, $data)
	{
		$this->db->where('element', $element);
		$this->db->set($data);
		$this->db->update('textbox');
	}
}
                        
/* End of file Cron_model.php */
    
                        