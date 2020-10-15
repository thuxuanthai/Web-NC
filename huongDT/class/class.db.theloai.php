<?php

include 'class.db.php';

class DB_TheLoai extends DB{
    
    function __construct() {
        parent::__construct();
    }

    /**
     * Lay danh sach the loai
     * @return array $theloai 
     */
    public function get_theloai($id = -1){
        $query = "SELECT * FROM theloai";
        if($id != -1) $query .= " WHERE idTL=$id"; 
        $result = $this->db_query($query);
        $theloai = array();
        $i = 0;
        while($row = $this->db_fetch($result)){
            $theloai[$i++] = $row;
        }
        return $theloai;
    }
    
    /**
     * 
     * @param string $name ten the loai
     * @param tinyint $sort sap xep
     * @param tinyint $show an hien
     * @return true on success, false on fail
     */
    public function them_theloai($name, $sort = 0, $show = 1){
        $query = "INSERT INTO theloai(TenTL, ThuTu, AnHien) VALUES('$name', '$sort', '$show')";
        $result = $this->db_query($query);
        return $result;
    }
    
    /**
     * Sua the loai
     * @param int $id id cua the loai
     * @param string $name ten the loai
     * @param tinyint $sort sap xep
     * @param tinyint $show an hien
     * @return true on success, false on fail
     */
    public function sua_theloai($id, $name, $sort, $show){
        $query = "UPDATE theloai SET TenTL='$name', ThuTu='$sort', AnHien='$show' WHERE idTL=$id";
        $result = $this->db_query($query);
        return $result;
    }
    
    /**
     * Xoa the loai co id la $id
     * @param int $id cua the loai
     * @return true on success, false on fail
     */
    public function xoa_theloai($id){
        $query = "DELETE FROM theloai WHERE idTL=$id";
        $result = $this->db_query($query);
        return $result;
    }
}
?>