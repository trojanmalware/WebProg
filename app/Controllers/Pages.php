<?php

namespace App\Controllers;

// use App\Models\StaffModel;

class Pages extends BaseController

{
    protected $staffModel;
    public function History()
    {
        $data = [
            'title' => 'History',
            'staff' => $this->staffModel->getDosen()
        ];
        return view('Pages/History', $data);
    }

    public function Informatics()
    {
        $data = [
            'title' => 'Informatics',
            'staff' => $this->staffModel->getDosen()
        ];
        return view('Pages/Informatics', $data);
    }

    public function SI()
    {
        $data = [
            'title' => 'Information Systems',
            'staff' => $this->staffModel->getDosen()
        ];
        return view('Pages/SI', $data);
    }

    public function OurPeople()
    {
        $data = [
            'title' => 'Our People',
            'staff' => $this->staffModel->getDosen()
        ];
        return view('Pages/OurPeople', $data);
    }

    public function Photos()
    {
        $data = [
            'title' => 'Photos',
            'staff' => $this->staffModel->getDosen()
        ];
        return view('Pages/Photos', $data);
    }

    public function Videos()
    {
        $data = [
            'title' => 'Videos',
            'staff' => $this->staffModel->getDosen()
        ];
        return view('Pages/Videos', $data);
    }

    public function VirtualTour()
    {
        $data = [
            'title' => 'Virtual Tour',
            'staff' => $this->staffModel->getDosen()
        ];
        return view('Pages/VirtualTour', $data);
    }

    public function Sistech()
    {
        $data = [
            'title' => 'What is SISTECH ?',
            'staff' => $this->staffModel->getDosen()
        ];
        return view('Pages/Sistech', $data);
    }
    public function Details($slug)
    {
        $data = [
            'title' => 'Details',
            'staff' => $this->staffModel->getDosen($slug)
        ];
        return view('Pages/Details', $data);
    }

    //--------------------------------------------------------------------

}
