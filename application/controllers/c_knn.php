<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class c_knn extends CI_Controller {

    public $data;
    public $kValue = 3;

    public function index() {
        $this->load->view('index');
    }

    public function knnCalculation($param) {
        $i = 1;
        //count score average
//        $mathAvg = ($param['math_assignment'] + $param['math_mid'] + $param['math_final']) / 3;
//        $ipaAvg = ($param['science_assignment'] + $param['science_mid'] + $param['science_final']) / 3;
//        $ipsAvg = ($param['social_assignment'] + $param['social_mid'] + $param['social_final']) / 3;
//        $indoAvg = ($param['indonesian_assignment'] + $param['indonesian_mid'] + $param['indonesian_final']) / 3;
//        $englishAvg = ($param['english_assignment'] + $param['english_mid'] + $param['english_final']) / 3;

        $mathAvg = ($param[0][0] + $param[0][1] + $param[0][2]) / 3;
        $ipaAvg = ($param[1][0] + $param[1][1] + $param[1][2]) / 3;
        $ipsAvg = ($param[2][0] + $param[2][1] + $param[2][2]) / 3;
        $indoAvg = ($param[3][0] + $param[3][1] + $param[3][2]) / 3;
        $englishAvg = ($param[4][0] + $param[4][1] + $param[4][2]) / 3;
        $result = $this->m_knn->getDataDefinitions();
        $distance = 0;
        $power = 0;
        $fixpower = 0;
        //count euclidean distance
        foreach ($result as $row) {
            $rowAvg = ($row->assignment_score + $row->mid_test_score + $row->final_test_score) / 3;
            if ($row->subject_id == 1) {
                $power = pow(($mathAvg - $rowAvg), 2);
            } else if ($row->subject_id == 2) {
                $power = pow(($ipaAvg - $rowAvg), 2);
            } else if ($row->subject_id == 3) {
                $power = pow(($ipsAvg - $rowAvg), 2);
            } else if ($row->subject_id == 4) {
                $power = pow(($indoAvg - $rowAvg), 2);
            } else if ($row->subject_id == 5) {
                $power = pow(($englishAvg - $rowAvg), 2);
            }

            $fixpower = $fixpower + $power;

            if ($i % 5 == 0) {
                $distance = sqrt($fixpower);
                $this->data[$i] = array(
                    'distance' => $distance,
                    'group' => $row->group,
                    'recommended_class' => $row->recommended_class
                );
                $distance = 0;
                $power = 0;
                $fixpower = 0;
            }
            $i++;
        }
        //sorting distance
        sort($this->data);

        $slice_data = array_slice($this->data, 0, $this->kValue);
        //percentage
        $ipa = 0;
        $ips = 0;
        $ipaPercentage = 0;
        $ipsPercentage = 0;
        foreach ($slice_data as $sliced) {
            if ($sliced['recommended_class'] == 'IPA') {
                $ipa++;
                $ipaPercentage = ($ipa / $this->kValue) * 100;
            } else {
                $ips++;
                $ipsPercentage = ($ips / $this->kValue) * 100;
            }
        }

        $nextClass = 'IPS';
        if ($ipaPercentage > $ipsPercentage) {
            $nextClass = 'IPA';
        }

        $classification = array(
            'ipa_percentage' => number_format((float) $ipaPercentage, 2, '.', ''),
            'ips_percentage' => number_format((float) $ipsPercentage, 2, '.', ''),
            'next_class' => $nextClass
        );

        return $classification;
    }

    function super_function() {
        $student = array(
            'std_name' => $this->input->post('std_name'),
            'std_class' => $this->input->post('std_class')
        );

//        $score = array(
//            'math_assignment' => $this->input->post('math_assignment'),
//            'math_mid' => $this->input->post('math_mid'),
//            'math_final' => $this->input->post('math_final'),
//            'science_assignment' => $this->input->post('science_assignment'),
//            'science_mid' => $this->input->post('science_mid'),
//            'science_final' => $this->input->post('science_final'),
//            'social_assignment' => $this->input->post('social_assignment'),
//            'social_mid' => $this->input->post('social_mid'),
//            'social_final' => $this->input->post('social_final'),
//            'indonesian_assignment' => $this->input->post('indonesian_assignment'),
//            'indonesian_mid' => $this->input->post('indonesian_mid'),
//            'indonesian_final' => $this->input->post('indonesian_final'),
//            'english_assignment' => $this->input->post('english_assignment'),
//            'english_mid' => $this->input->post('english_mid'),
//            'english_final' => $this->input->post('english_final')
//        );

        $score = array(
            array(
                $this->input->post('math_assignment'),
                $this->input->post('math_mid'),
                $this->input->post('math_final')),
            array(
                $this->input->post('science_assignment'),
                $this->input->post('science_mid'),
                $this->input->post('science_final')),
            array(
                $this->input->post('social_assignment'),
                $this->input->post('social_mid'),
                $this->input->post('social_final')),
            array(
                $this->input->post('indonesian_assignment'),
                $this->input->post('indonesian_mid'),
                $this->input->post('indonesian_final')),
            array(
                $this->input->post('english_assignment'),
                $this->input->post('english_mid'),
                $this->input->post('english_final'))
        );

        $student_add = $this->student_add($student);
        if ($student_add) {
            $student_last = $this->m_knn->student_get_last();

            $pushed_array = array('std_id' => $student_last->id);
            $merged_score = array_merge($score, $pushed_array);

            $classification = $this->knnCalculation($merged_score);
            $merged_result = array_merge($classification, $pushed_array);

            $class_result = $this->m_knn->result_insert($merged_result);
            $score_add = $this->m_knn->score_add($score, $student_last->id);

            $this->load->view('input_score');
        }
    }

    function student_add($param) {
        return $this->m_knn->student_add($param);
    }

    function score_add($score, $studentId) {
        return $this->m_knn->score_add($score, $studentId);
    }

    public function template($param) {
        $this->load->view($param);
    }

}
