<?php
class User_model extends CI_Model
{
    //ten bang du lieu
    public $table = 'ttcn_khachhang';
    
    public function check_login($TK, $MK)
    {
        //them dieu kien kiem tra email va password
        $where = array('TK' => $TK, 'MK' => $MK);
        $this->db->where($where);
        //thuc hien cau truy van
        $query = $this->db->get($this->table);
        if($query->num_rows() > 0)
        {
            return true;
        }
        return false;
    }
     
    /*
     * lay thong tin thanh vien
     */
    public function get_user_info($where = array())
    {
        //tao dieu kien cho cau truy van
        $this->db->where($where);
        $result = $this->db->get('ttcn_khachhang');
        return $result->row();
    }
}