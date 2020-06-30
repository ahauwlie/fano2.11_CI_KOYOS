<?php

class Model_barang extends CI_Model {

	    function detail_barang()
	    {
			return $this->db->get('barang')->result_array();
	    }

	    public function getAll()
	    {
	        return $this->db->get('barang')->result_array();
	    }

	    public function insert($data)
	    {
	        $this->db->insert('barang', $data);
	    }

	    public function update($data, $id)
	    {
	        $this->db->update('barang', $data, array('id_bar' => $id));
	    }

	    public function delete($id)
	    {
	        $this->db->delete('barang', array('id_bar' => $id));
	    }

	    public function getSpecified($id)
	    {
	        return $this->db->get_where('barang', array('id_bar' => $id))->row_array();
	    }

	    function nyoba($id)
	    {
	        $query = $this->db->get_where('barang', array('id_bar' => $id));
			return $query->row_array();
	    }

	    function get_one($id)
	    {
	        $this->db->get_where('barang', array('id_bar' => $id));
	        $query = $this->db->get('barang');
	        return $query->row();
	    }

		public function dis_products1()
		{
			$this->db->distinct();
			$query = $this->db->query('SELECT DISTINCT kategori_bar FROM barang');
			return $query->result();
		}

		public function countRow(){
	        $query = $this->db->query("SELECT COUNT(*) AS num_of_time FROM barang");
	     	return $query->result();
    	}

    	public function pilihanproduk(){
	        $query = $this->db->query("SELECT * FROM barang ORDER BY id_bar DESC LIMIT 8");
	     	return $query->result();
    	}

    	public function record_count() {
        	return $this->db->count_all('barang');
    	}

    	public function getAr($limit, $start) {
	        $this->db->limit($limit, $start);
	        $query = $this->db->query("SELECT * FROM barang ORDER BY id_bar DESC");

	        if ($query->num_rows() > 0) {
	            foreach ($query->result() as $row) {
	                $data[] = $row;
	            }
	            return $data;
	        }
	        return false;
	    }

	    public function minimum($limit, $start) {
	        $this->db->limit($limit, $start);
	        $query = $this->db->query("SELECT * FROM barang ORDER BY harga_bar ASC");

	        if ($query->num_rows() > 0) {
	            foreach ($query->result() as $row) {
	                $data[] = $row;
	            }
	            return $data;
	        }
	        return false;
	    }

    	public function maximum($limit, $start) {
	        $this->db->limit($limit, $start);
	        $query = $this->db->query("SELECT * FROM barang ORDER BY harga_bar DESC");

	        if ($query->num_rows() > 0) {
	            foreach ($query->result() as $row) {
	                $data[] = $row;
	            }
	            return $data;
	        }
	        return false;
	    }

	    public function showme($kategori_bar)
		{ 
			$query = $this->db->get_where('barang', array('kategori_bar' => $kategori_bar));
			return $query->result();
		}

    	public function side(){
			$this->db->order_by('tanggal_bar','desc');
			return $this->db->get('barang');
    	}

}