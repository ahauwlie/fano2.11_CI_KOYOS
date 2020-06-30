<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Comment_model extends CI_Model
{


    // get full tree comments based on news id
    function tree_all($id) {
        $result = $this->db->query("SELECT * FROM comment where id_blog = $id")->result_array();
        foreach ($result as $row) {
            $data[] = $row;
        }
        if($result != NULL){
            return $data;
        }
    }

    // to get child comments by entry id and parent id and news id
    function tree_by_parent($id,$in_parent) {
        $result = $this->db->query("SELECT * FROM comment where parent_id = $in_parent AND  id_blog = $id")->result_array();
        foreach ($result as $row) {
            $data[] = $row;
        }
        return $data;
    }

    // to insert comments
    function add_new_comment()
    {
        $this->db->set("id_blog", $this->input->post('id_blog'));
        $this->db->set("parent_id", $this->input->post('parent_id'));
        $this->db->set("comment_name", $this->input->post('comment_name'));
        $this->db->set("comment_email", $this->input->post('comment_email'));
        $this->db->set("comment_body", $this->input->post('comment_body'));
        $this->db->set("comment_created", time());
        $this->db->insert('comment');
        return $this->input->post('parent_id');
    }


}

/* End of file comment_model.php */
