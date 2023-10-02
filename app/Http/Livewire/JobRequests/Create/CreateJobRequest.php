<?php

namespace App\Http\Livewire\JobRequests\Create;

use App\Models\Category;
use App\Models\JobRequest as JobRequestModel;
use App\Models\JobRequestImage;
use App\Models\Skill;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateJobRequest extends Component
{
    use WithFileUploads;

    public $step = 1, $description = '', $images = [], $hasImage = false;
    public $skill, $category, $location, $place, $hasTools, $date, $address, $skillName, $categoryName, $imagePath;

    protected $rules = [
        'description'    => 'required',
        'location'       => 'required',
        'place'          => 'required',
        'has_tools'      => 'required',
        'has_image'      => 'required',
        'date'           => 'required',
        'address'        => 'required',
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

    public function updateTools($hasTools)
    {
        $this->hasTools = $hasTools;
    }

    public function updateImage($images)
    {
        $this->hasImage = $images['hasImage'];
        if($this->hasImage){
            $this->images = $images['images'];
        }else{
            $this->images = [];
        }
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
        $this->emit('currentStep' . $this->step);
    }

    public function beforeStep()
    {
        $this->emit('backStep' . $this->step);
    }

    public function imageVerification(){
        if ($this->hasImage && count($this->images) > 0) {
            foreach ($this->images as $image) {
                $this->imagePath = $image->store('job_request_images', 'public');
            }
        }else{
            $this->images = [];
        }
    }

    public function confirmedUser()
    {
        if (Auth::check()) {
            $this->step++;
            $this->createJobRequest();
        } else {

            session(['job_request_data' => [
                'description' => $this->description,
                'category'    => $this->category,
                'skill'       => $this->skill,
                'location'    => $this->location,
                'place'       => $this->place,
                'hasTools'    => $this->hasTools,
                'hasImage'    => $this->hasImage,
                'date'        => $this->date,
                'address'     => $this->address,
                'images'      => $this->images,
            ]]);

            return redirect()->route('login');
        }
    }

    public function createJobRequest()
    {
    $this->validate();

    // Crear la solicitud de trabajo
    $jobRequest = new JobRequestModel([
        'user_id'           => auth()->user()->id,
        'category_id'       => $this->category,
        'skill_id'          => $this->skill,
        'description'       => $this->description,
        'location'          => $this->location,
        'place'             => $this->place,
        'has_tools'         => $this->hasTools ? 'SÍ' : 'NO',
        'has_image'         => $this->hasImage ? 'SÍ' : 'NO',
        'date'              => $this->date,
        'address'           => $this->address,
        
    ]);
    
    $jobRequest->save();
        JobRequestImage::create([
            'job_request_id' => $jobRequest->id,
            'image_path' => $this->imagePath,
        ]);
    
    

        session()->forget('job_request_data');

        return redirect()->route('create-job-request');
    }
}