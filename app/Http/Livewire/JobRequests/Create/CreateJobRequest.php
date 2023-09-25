<?php

namespace App\Http\Livewire\JobRequests\Create;

use Livewire\Component;
use App\Models\JobRequest as JobRequestModel;

class CreateJobRequest extends Component
{
    public $step = 1;
    public $description = "";
    public $tempJobRequest, $location, $place, $tools, $image, $date, $address;

    protected $rules = [
        'description' => 'required',
        'location' => 'required',
        'place' => 'required',
        'tools' => 'required',
        'date' => 'required',
        'address' => 'required',
    ];

    protected $listeners = [
        'updateDescription',
        'updateLocation',
        'updatePlace',
        'updateTools',
        'updateImage',
        'updateDate',
        'updateAddress',
    ];

    public function __construct()
    {
        parent::__construct();
        $this->tempJobRequest = [];
    }

    public function updateDescription($description)
    {
        $this->description = $description;
    }

    public function updateLocation($location)
    {
        $this->location = $location;
    }

    public function updatePlace($place)
    {
        $this->place = $place;
    }

    public function updateTools($tools)
    {
        $this->tools = $tools;
    }

    public function updateImage($image)
    {
        $this->image = $image;
    }

    public function updateDate($date)
    {
        $this->date = $date;
    }

    public function updateAddress($address)
    {
        $this->address = $address;
    }

    public function render()
    {
        return view('livewire.job-requests.create.create-job-request');
    }

    public function incrementStep()
    {
        $this->step++;
    }

    public function decrementStep()
    {
        $this->step--;
    }

    public function submitJobRequest()
    {
        $this->validate();

        $this->tempJobRequest = [
            'job_request' => $this->description,
            'location' => $this->location,
            'place' => $this->place,
            'tools' => $this->tools,
            'image' => $this->image,
            'date' => $this->date,
            'address' => $this->address,
        ];

        $jobRequest = new JobRequestModel([
            'user_id' => auth()->user()->id,
            'category_id' => 1, // Cambia esto para obtener la categoría real
            'skill_id' => 1, // Cambia esto para obtener la habilidad real
            'job_request' => $this->description,
            'location' => $this->location,
            'place' => $this->place,
            'tools' => $this->tools,
            'image' => $this->image,
            'date' => $this->date,
            'address' => $this->address,
        ]);
        $jobRequest->save();

        return redirect()->route('confirmation'); 
    }
}