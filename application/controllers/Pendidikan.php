<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pendidikan extends CI_Controller
{

    public function courselist()
    {
        $data['action'] = 'CourseList';
        $data['title'] = 'Course List - Bawu Batealit Jepara';
        $data['banner_name'] = 'Course List';
        $data['content'] = 'pendidikan/courselist/index.php';
        $data['script'] = 'pendidikan/courselist/script.php';
        $this->load->view('layout/index.php', $data);
    }
    public function coursedetail()
    {
        $data['action'] = 'CourseDetail';
        $data['title'] = 'Course - Bawu Batealit Jepara';
        $data['banner_name'] = 'Course Detail';
        $data['content'] = 'pendidikan/coursedetail/index.php';
        $data['script'] = 'pendidikan/coursedetail/script.php';
        $this->load->view('layout/index.php', $data);
    }
    public function coursegrid()
    {
        $data['action'] = 'CourseGrid';
        $data['title'] = 'Course - Bawu Batealit Jepara';
        $data['content'] = 'pendidikan/coursegrid/index.php';
        $data['script'] = 'pendidikan/coursegrid/script.php';
        $this->load->view('layout/index.php', $data);
    }
    public function membership()
    {
        $data['action'] = 'Membership';
        $data['title'] = 'Course - Bawu Batealit Jepara';
        $data['banner_name'] = 'Membership Levels';
        $data['content'] = 'pendidikan/membership/index.php';
        $data['script'] = 'pendidikan/membership/script.php';
        $this->load->view('layout/index.php', $data);
    }
    public function events()
    {
        $data['action'] = 'Events';
        $data['title'] = 'Course - Bawu Batealit Jepara';
        $data['banner_name'] = 'Events';
        $data['content'] = 'pendidikan/events/index.php';
        $data['script'] = 'pendidikan/events/script.php';
        $this->load->view('layout/index.php', $data);
    }
    public function eventdetail()
    {
        $data['action'] = 'EventDetail';
        $data['title'] = 'Course - Bawu Batealit Jepara';
        $data['banner_name'] = 'Event Detail';
        $data['content'] = 'pendidikan/eventdetail/index.php';
        $data['script'] = 'pendidikan/eventdetail/script.php';
        $this->load->view('layout/index.php', $data);
    }
    public function teachers()
    {
        $data['action'] = 'Teachers';
        $data['title'] = 'Course - Bawu Batealit Jepara';
        $data['banner_name'] = 'Teacher';
        $data['content'] = 'pendidikan/teachers/index.php';
        $data['script'] = 'pendidikan/teachers/script.php';
        $this->load->view('layout/index.php', $data);
    }
    public function teacherdetail()
    {
        $data['action'] = 'TeacherDetail';
        $data['title'] = 'Course - Bawu Batealit Jepara';
        $data['banner_name'] = 'Teacher Detail';
        $data['content'] = 'pendidikan/teacherdetail/index.php';
        $data['script'] = 'pendidikan/teacherdetail/script.php';
        $this->load->view('layout/index.php', $data);
    }
}
