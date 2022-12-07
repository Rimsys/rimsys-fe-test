<?php

namespace App\Http\Controllers;

use App\Http\Requests\Resume\StoreResumeRequest;
use App\Http\Requests\Resume\UpdateResumeRequest;
use App\Http\Resources\ResumeResource;
use App\Models\Resume;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ResumeController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        /*
         * Hard-coded default to first user because we have not
         * implemented auth for this demo.
         */
        $resumes = ResumeResource::collection(
            Resume::where('user_id', Auth::id() ?? 1)
        );

        return $this->render($resumes);
    }

    /**
     * Store new resume resource
     *
     * @param StoreResumeRequest $request
     * @return void
     */
    public function store(StoreResumeRequest $request)
    {
        // auth not implemented, using user with id of 1 as default
        $resume = Resume::create(array_merge($request->validated(), ['user_id' => 1]));

        return $this->render(new ResumeResource($resume), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param Resume $resume
     * @return Response
     */
    public function show(Resume $resume)
    {
        return $this->render(new ResumeResource($resume));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateResumeRequest $request
     * @param Resume $resume
     * @return Response
     */
    public function update(UpdateResumeRequest $request, Resume $resume)
    {
        $resume->update($request->validated());

        return $this->render(new ResumeResource($resume));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Resume $resume
     * @return Response
     */
    public function destroy(Resume $resume)
    {
        $resume->delete();

        return $this->render([], 204);
    }
}
