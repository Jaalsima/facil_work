<?php

namespace App\Http\Livewire\JobRequests\Create;

use App\Models\Category;
use App\Models\JobRequest as JobRequestModel;
use App\Models\Skill;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateJobRequest extends Component
{
    public $step = 1;

    public $description = '';

    public $category;

    public $skill;

    public $location;

    public $place;

    public $tools;

    public $image;

    public $date;

    public $address;

    public $skillName;

    public $categoryName;

    public $jobRequestData = [];

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

    public function updateDescription($data)
    {
        $this->description = $data['description'];
        $category = Category::find($data['category']);
        $this->category = $data['category'];
        $this->categoryName = $category ? $category->name : '';

        // Obtén el nombre de la habilidad seleccionada
        $skill = Skill::find($data['skill']);
        $this->skill = $data['skill'];
        $this->skillName = $skill ? $skill->name : '';
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
            $this->createJobRequest();
        } else {
            // Almacena los datos en la sesión temporal
            session(['job_request_data' => [
                'description' => $this->description,
                'category' => $this->category,
                'skill' => $this->skill,
                'location' => $this->location,
                'place' => $this->place,
                'tools' => $this->tools,
                'image' => $this->image,
                'date' => $this->date,
                'address' => $this->address,
            ]]);

            return redirect()->route('login');
        }
    }

    public function createJobRequest()
    {
        // Valida los datos
        $this->validate();

        // Crea el Job Request
        $jobRequest = new JobRequestModel([
            'user_id' => auth()->user()->id,
            'category_id' => $this->category,
            'skill_id' => $this->skill,
            'description' => $this->description,
            'location' => $this->location,
            'place' => $this->place,
            'tools' => $this->tools,
            'image' => $this->image,
            'date' => $this->date,
            'address' => $this->address,
        ]);
        $jobRequest->save();

        // Limpia los datos almacenados en $jobRequestData
        $this->jobRequestData = [];

        // Redirige a donde sea necesario después de crear el Job Request
        return redirect()->route('create-job-request');
    }
}
