<?php

namespace App\Http\Livewire\JobRequests\CreateJobRequest;

use App\Models\Category;
use App\Models\JobRequest as JobRequestModel;
use App\Models\Skill;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateForm extends Component
{
    public $mStep = 1;

    public $mDescription = '';

    public $mCategory;

    public $mSkill;

    public $mLocation;

    public $mPlace;

    public $mTools;

    public $mImage;

    public $mDate;

    public $mAddress;

    public $mSkillName;

    public $mCategoryName;

    public $mJobRequestData = [];

    protected $rules = [
        'mDescription' => 'required',
        'mLocation' => 'required',
        'mPlace' => 'required',
        'mTools' => 'required',
        'mImage' => 'required',
        'mDate' => 'required',
        'mAddress' => 'required',
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

    public function updateDescription($requestUpdateDescription)
    {
        $this->mDescription = $requestUpdateDescription['description'];
        $category = Category::find($requestUpdateDescription['category']);
        $this->mCategory = $requestUpdateDescription['category'];
        $this->mCategoryName = $category ? $category->name : '';

        // Obtén el nombre de la habilidad seleccionada
        $skill = Skill::find($requestUpdateDescription['skill']);
        $this->mSkill = $requestUpdateDescription['skill'];
        $this->mSkillName = $skill ? $skill->name : '';
    }

    public function updateLocation($requestUpdateLocation)
    {
        $this->mLocation = $requestUpdateLocation;
    }

    public function updatePlace($requestUpdatePlace)
    {
        $this->mPlace = $requestUpdatePlace;
    }

    public function updateTools($requestUpdateTools)
    {
        $this->mTools = $requestUpdateTools;
    }

    public function updateImage($requestUpdateImage)
    {
        $this->mImage = $requestUpdateImage;
    }

    public function updateDate($requestUpdateDate)
    {
        $this->mDate = $requestUpdateDate;
    }

    public function updateAddress($requestUpdateAddress)
    {
        $this->mAddress = $requestUpdateAddress;
    }

    public function render()
    {
        return view('livewire.job-requests.create-job-request.create-form')->layout('layouts.guest');
    }

    public function incrementStep()
    {
        $this->mStep++;
    }

    public function decrementStep()
    {
        if ($this->mStep > 1) {
            $this->mStep--;
        }

    }

    public function nextStep()
    {
        $this->emit('currentStep'.$this->mStep);
    }

    public function beforeStep()
    {
        $this->emit('backStep'.$this->mStep);
    }

    public function confirmedUser()
    {
        if (Auth::check()) {
            $this->mStep++;
        } else {
            session(['job_request_data' => [
                'description' => $this->mDescription,
                'category' => $this->mCategory,
                'skill' => $this->mSkill,
                'location' => $this->mLocation,
                'place' => $this->mPlace,
                'tools' => $this->mTools,
                'image' => $this->mImage,
                'date' => $this->mDate,
                'address' => $this->mAddress,
            ]]);
        }
    }

    public function submitJobRequest()
    {
        $this->validate();

        // Crea el Job Request
        $mJobRequest = new JobRequestModel([
            'user_id' => auth()->user()->id,
            'category_id' => $this->mCategory,
            'skill_id' => $this->mSkill,
            'description' => $this->mDescription,
            'location' => $this->mLocation,
            'place' => $this->mPlace,
            'tools' => $this->mTools,
            'image' => $this->mImage,
            'date' => $this->mDate,
            'address' => $this->mAddress,
        ]);
        $mJobRequest->save();

        return redirect()->route('list-job-request');

    }
}
