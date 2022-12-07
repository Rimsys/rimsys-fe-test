<?php

namespace App\Http\Controllers;

use App\Http\Requests\Experience\StoreExperienceRequest;
use App\Http\Requests\Experience\UpdateExperienceRequest;
use App\Http\Resources\ExperienceResource;
use App\Models\Experience;
use App\Models\Resume;
use Illuminate\Http\Response;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Resume $resume)
    {
        $experiences = $resume->experiences()->orderBy('start_date', 'desc')->get();

        return $this->render(ExperienceResource::collection($experiences));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreExperienceRequest $request
     * @param Resume $resume
     * @return Response
     */
    public function store(StoreExperienceRequest $request, Resume $resume)
    {
        $experience = $resume->experiences()->create($request->validated());

        return $this->render($experience);
    }

    /**
     * Display the specified resource.
     *
     * @param Experience $experience
     * @return Response
     */
    public function show(Experience $experience)
    {
        return $this->render(new ExperienceResource($experience));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateExperienceRequest $request
     * @param Resume $resume
     * @param Experience $experience
     * @return Response
     */
    public function update(UpdateExperienceRequest $request, Resume $resume, Experience $experience)
    {
        $experience->update($request->validated());

        return $this->render(new ExperienceResource($experience->fresh()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Resume $resume
     * @param Experience $experience
     * @return Response
     */
    public function destroy(Resume $resume, Experience $experience)
    {
        $experience->delete();

        return $this->render([], 204);
    }
}
