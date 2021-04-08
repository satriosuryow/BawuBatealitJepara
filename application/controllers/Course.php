<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Course extends CI_Controller
{

    public function courselist()
    {
        $data['action'] = 'CourseList';
        $data['title'] = 'Course List - Bawu Batealit Jepara';
        $data['banner_name'] = 'Course List';
        $data['content'] = 'course/courselist/index.php';
        $data['script'] = 'course/courselist/script.php';
        $this->load->view('layout/index.php', $data);
    }
    public function coursedetail()
    {
        $data['action'] = 'CourseDetail';
        $data['title'] = 'Course - Bawu Batealit Jepara';
        $data['banner_name'] = 'Course Detail';
        $data['content'] = 'course/coursedetail/index.php';
        $data['script'] = 'course/coursedetail/script.php';
        $this->load->view('layout/index.php', $data);
    }
    public function coursegrid()
    {
        $data['action'] = 'CourseGrid';
        $data['title'] = 'Course - Bawu Batealit Jepara';
        $data['content'] = 'course/coursegrid/index.php';
        $data['script'] = 'course/coursegrid/script.php';
        $this->load->view('layout/index.php', $data);
    }
    public function membership()
    {
        $data['action'] = 'Membership';
        $data['title'] = 'Course - Bawu Batealit Jepara';
        $data['banner_name'] = 'Membership Levels';
        $data['content'] = 'course/membership/index.php';
        $data['script'] = 'course/membership/script.php';
        $this->load->view('layout/index.php', $data);
    }
    public function events()
    {
        $data['action'] = 'Events';
        $data['title'] = 'Course - Bawu Batealit Jepara';
        $data['banner_name'] = 'Events';
        $data['content'] = 'course/events/index.php';
        $data['script'] = 'course/events/script.php';
        $this->load->view('layout/index.php', $data);
    }
    public function eventdetail()
    {
        $data['action'] = 'EventDetail';
        $data['title'] = 'Course - Bawu Batealit Jepara';
        $data['banner_name'] = 'Event Detail';
        $data['content'] = 'course/eventdetail/index.php';
        $data['script'] = 'course/eventdetail/script.php';
        $this->load->view('layout/index.php', $data);
    }
    public function teachers()
    {
        $data['action'] = 'Teachers';
        $data['title'] = 'Course - Bawu Batealit Jepara';
        $data['banner_name'] = 'Teacher';
        $data['content'] = 'course/teachers/index.php';
        $data['script'] = 'course/teachers/script.php';
        $this->load->view('layout/index.php', $data);
    }
    public function teacherdetail()
    {
        $data['action'] = 'TeacherDetail';
        $data['title'] = 'Course - Bawu Batealit Jepara';
        $data['banner_name'] = 'Teacher Detail';
        $data['content'] = 'course/teacherdetail/index.php';
        $data['script'] = 'course/teacherdetail/script.php';
        $this->load->view('layout/index.php', $data);
    }
}
