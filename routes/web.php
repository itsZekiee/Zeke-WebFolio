<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/docs', function () {
    return view('docs');
})->name('docs');

Route::get('/consulting-pricing', function () {
    return view('pricing');
})->name('pricing');

Route::post('/contact/send', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    try {
        Mail::send('emails.contact', $validated, function ($message) use ($validated) {
            $message->to('your.email@example.com') // Replace with your actual email
            ->subject('New Contact Form Submission: ' . $validated['subject'])
                ->replyTo($validated['email'], $validated['name']);
        });

        return back()->with('success', 'Thank you for your message! I will get back to you soon.');
    } catch (\Exception $e) {
        return back()->with('error', 'Something went wrong. Please try again later.');
    }
})->name('contact.send');
