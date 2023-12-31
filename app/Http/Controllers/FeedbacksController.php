<?php

namespace App\Http\Controllers;

use App\Events\Feedback;
use App\Models\Contact;
use App\Models\Feedbacks;
use App\Models\User;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;

class FeedbacksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contact = Contact::first();
        return view('feedback.create')->with(['contact'=>$contact]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'message' => 'required',
            'phone' => ['required', new PhoneNumber]
        ]);

        $model = Feedbacks::create($data);

//        $model = new Feedbacks();
//        $model->name = $data['name'];
//        $model->phone = $data['phone'];
//        $model->message = $data['message'];
          $user = User::query()->where(['id'=>1])->first();
        if ($model->save()) {
            Feedback::dispatch($user,$model);
            return back()->with('message', 'Murojaatingiz muvaffaqiyatli yetkazildi');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
