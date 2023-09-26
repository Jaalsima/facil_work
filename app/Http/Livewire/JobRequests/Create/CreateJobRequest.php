<?php

namespace App\Http\Livewire\JobRequests\Create;

use App\Models\JobRequest as JobRequestModel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateJobRequest extends Component
{
    public $step = 1;

    public $description = '';

    public $location;

    public $place;

    public $tools;

    public $image;

    public $date;

    public $address;

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
        'incrementStep',
        'decrementStep',
        'submitJobRequest',
        'confirmedUser',
    ];

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
        if ($this->step > 1) {
            $this->step--;
        }

    }

    public function nextStep()
    {
        $this->emit('currentStep'.$this->step);
    }

    public function beforeStep()
    {
        $this->emit('backStep'.$this->step);
    }

    public function confirmedUser()
    {
        if (Auth::check()) {
            $this->step++;
        } else {

            $this->emit('nonLogin', [
                'description' => $this->description,
                'location' => $this->location,
                'place' => $this->place,
                'tools' => $this->tools,
                'image' => $this->image,
                'date' => $this->date,
                'address' => $this->address,
            ]);

            return redirect()->route('login');
        }

    }

    public function submitJobRequest()
    {
        $this->validate();

        $jobRequest = new JobRequestModel([
            'user_id' => auth()->user()->id,
            'category_id' => 1, // Cambia esto para obtener la categoría real
            'skill_id' => 1, // Cambia esto para obtener la habilidad real
            'description' => $this->description,
            'location' => $this->location,
            'place' => $this->place,
            'tools' => $this->tools,
            'image' => $this->image,
            'date' => $this->date,
            'address' => $this->address,
        ]);
        $jobRequest->save();

        return redirect()->route('create-job-request');

    }
}
