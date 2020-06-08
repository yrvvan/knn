<?php

class m_knn extends CI_Model {

    function GetDataDefinitions() {
        $this->db->select("score_definitions.*, class_subjects.subject");
        $this->db->from('score_definitions');
        $this->db->join('class_subjects', 'class_subjects.id = score_definitions.subject_id');
        $this->db->order_by('group, id asc');
        $query = $this->db->get();
        return $query->result();
    }

    function GetResultStudent() {
        $query = $this->db->query("select * from knn_student a join knn_result_class b on a.id = b.std_id where a.id = (select max(id) from knn_student)");
        return $query->result();
    }

    function student_add($params) {
        if ($this->db->insert('student', $params)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function result_insert($params) {
        if ($this->db->insert('result_class', $params)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function score_add($score, $studentId) {
        $success = 0;
        for ($i = 0; $i < count($score); $i++) {
            $data = array(
                'std_id' => $studentId,
                'assignment_score' => $score[$i][0],
                'mid_test_score' => $score[$i][1],
                'final_test_score' => $score[$i][2],
                'subject_id' => $i + 1
            );
            $insert = $this->db->insert('std_score', $data);
            if ($insert) {
                $success++;
            }
        }
        return $success;
    }

    function student_get_last() {
        $this->db->select_max("student.id");
        $this->db->from('student');
        $query = $this->db->get();
        return $query->row();
    }

    function GetDataStudent() {
        $this->db->select("student.*, result_class.next_class");
        $this->db->from('student');
        $this->db->join('result_class', 'result_class.std_id = student.id');
        $this->db->order_by('id asc');
        $query = $this->db->get();
        return $query->result();
    }

}

?>