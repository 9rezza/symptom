<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Alarm_model extends CI_Model
{

    public function get_all_line()
    {
        $this->db->select('*');
        $this->db->from('line');
        return $this->db->get();
    }

    public function get_alarm_by_code($code)
    {
        $this->db->select('`note`, `action`, `line.id`, `machine.id`, `part.id`', false);
        $this->db->from('alarm');
        $this->db->where('code', $code);
        return $this->db->get();
    }

    public function store($data, $modul)
    {
        $this->db->insert($modul, $data);
    }

    public function upload_action_alarm($data)
    {
        if ($this->db->on_duplicate('alarm', $data, false)) {
            return true;
        }
    }

    public function get_machine_by_code($code)
    {
        $this->db->select('`id`, `code`, `name`, `line.id` as line', false);
        $this->db->from('machine');
        $this->db->where('code', $code);
        return $this->db->get();
    }

    public function get_history_alarm_by_line_machine($line, $machine, $date)
    {
        $this->db->select('`h`.`timestamp`, `h`.`end_timestamp`, `a`.`code` as `code`, `a`.`note` as `note`, `a`.`action` as `action`, `a`.`line.id` as `line`, `a`.`machine.id` as `machine`', false);
        $this->db->from('history_alarm as h');
        $this->db->join('alarm as a', "`a`.`code` = `h`.`alarm.code`", false);
        $this->db->where('`a`.`line.id`', $line, false);
        $this->db->where('`a`.`machine.id`', $machine, false);
        $this->db->where('`h`.`timestamp` >=', $date);
        // $this->db->where('`h`.`end_timestamp` !=', null);
        $this->db->order_by('`h`.`timestamp`', 'DESC');
        return $this->db->get();
    }

    public function get_history_alarm_by_line_all_machine($line, $date)
    {
        $this->db->select('`h`.`timestamp`, `h`.`end_timestamp`, `a`.`code` as `code`, `a`.`note` as `note`, `a`.`action` as `action`, `a`.`line.id` as `line`, `a`.`machine.id` as `machine`', false);
        $this->db->from('history_alarm as h');
        $this->db->join('alarm as a', "`a`.`code` = `h`.`alarm.code`", false);
        $this->db->where('`a`.`line.id`', $line, false);
        // $this->db->where('`a`.`machine.id`', $machine, false);
        $this->db->where('`h`.`timestamp` >=', $date);
        // $this->db->where('`h`.`end_timestamp` !=', null);
        $this->db->order_by('`h`.`timestamp`', 'DESC');
        return $this->db->get();
    }
}
                        
/* End of file Cron_model.php */
