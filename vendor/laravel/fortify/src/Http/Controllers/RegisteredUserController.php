<?php

namespace Laravel\Fortify\Http\Controllers;

use App\Models\JobRequest as JobRequestModel;
use App\Models\JobRequestImage;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Fortify\Contracts\RegisterResponse;
use Laravel\Fortify\Contracts\RegisterViewResponse;
use Laravel\Fortify\Fortify;

class RegisteredUserController extends Controller
{
    /**
     * The guard implementation.
     *
     * @var \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected $guard;

    /**
     * Create a new controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\StatefulGuard  $guard
     * @return void
     */
    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;
    }

    /**
     * Show the registration view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Laravel\Fortify\Contracts\RegisterViewResponse
     */
    public function create(Request $request): RegisterViewResponse
    {
        return app(RegisterViewResponse::class);
    }

    /**
     * Create a new registered user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Laravel\Fortify\Contracts\CreatesNewUsers  $creator
     * @return \Laravel\Fortify\Contracts\RegisterResponse
     */
    public function store(
        Request $request,
        CreatesNewUsers $creator
    ) {
        if (config('fortify.lowercase_usernames')) {
            $request->merge([
                Fortify::username() => Str::lower($request->{Fortify::username()}),
            ]);
        }

        event(new Registered($user = $creator->create($request->all())));

        $jobRequestData = $request->session()->get('job_request_data'); // Verifica si hay datos de Job Request en la sesión

        if ($jobRequestData) {
            $jobRequest = new JobRequestModel([
                'user_id'      => $user->id,
                'category_id'  => $jobRequestData['category'],
                'skill_id'     => $jobRequestData['skill'],
                'description'  => $jobRequestData['description'],
                'location'     => $jobRequestData['location'],
                'place'        => $jobRequestData['place'],
                'tools'        => $jobRequestData['tools'],
                'image'        => $jobRequestData['image'],
                'date'         => $jobRequestData['date'],
                'address'      => $jobRequestData['address'],
            ]);
            $jobRequest->save();
            if ($jobRequestData['image'] === "Si") {
                foreach ($jobRequestData['imagePaths'] as $path) {
                    $jobRequestImage = new JobRequestImage([
                        'job_request_id' => $jobRequest->id,
                        'image_path'     => $path,
                    ]);
                    $jobRequestImage->save();
                }
            }

            $request->session()->forget('job_request_data'); // Limpia los datos almacenados en la sesión

            $this->guard->login($user); // Autentica al usuario antes de redirigir

            return redirect()->route('list-job-request'); // Redirige al usuario a la página deseada

        } else {
            $this->guard->login($user);

            return app(RegisterResponse::class);
        }
    }
}
