<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Nette\Utils\Random;

class SectionController extends Controller
{
    public function hero(Request $request)
    {
        if ($request->method() == 'POST') {

            $request->validate([
                'title' => ['required', 'max:20'],
                'description' => ['required', 'min:10', 'max:200'],
                'get_started_link' => ['required', 'url'],
                'watch_video_link' => ['required', 'url'],
                'image' => ['required', 'image', 'mimes:jpg,jpeg,png'],
            ]);

            $image = $request->file('image');

            $image_name = $image->getClientOriginalName();
            $image_ext = $image->getClientOriginalExtension();
            $destination_folder = 'public/images';
            $random_image_name = Random::generate(20);
            $request->file('image')->storeAs($destination_folder, $random_image_name . '.' . $image_ext);

        }

        return view('dashboard.pages.sections.hero.form')
            ->with('sectionData', [
                'title' => 'test',
                'description' => 'test',
                'get_started_link' => 'test',
                'watch_video_link' => 'test',
            ])
        ;
    }

    public function whyChooseUs(Request $request)
    {
        if ($request->method() == 'POST') {

            $request->validate([
                'title' => ['required', 'max:20'],
                'image' => ['required', 'image', 'mimes:jpg,jpeg,png'],
            ]);

        }

        return view('dashboard.pages.sections.why-choose-us.form')
            ->with('sectionData', [
                'title' => '',
            ])
        ;
    }

    public function callToAction(Request $request)
    {
        if ($request->method() == 'POST') {

            $request->validate([
                'title' => ['required', 'max:20'],
                'description' => ['required', 'min:10', 'max:200'],
                'link' => ['required', 'url'],
                'image' => ['required', 'image', 'mimes:jpg,jpeg,png'],
            ]);

        }

        return view('dashboard.pages.sections.call-to-action.form')
            ->with('sectionData', [
                'title' => '',
                'description' => '',
                'link' => '',
            ])
        ;
    }

    public function powerfulFeatures(Request $request)
    {
        if ($request->method() == 'POST') {

            $request->validate([
                'title1' => ['required', 'max:20'],
                'title2' => ['required', 'max:20'],
                'description' => ['required', 'min:10', 'max:200'],
                'get_started_link' => ['required', 'url'],
                'image' => ['required', 'image', 'mimes:jpg,jpeg,png'],
            ]);

        }

        return view('dashboard.pages.sections.powerful-features.form')
            ->with('sectionData', [
                'title1' => '',
                'title2' => '',
                'description' => '',
                'get_started_link' => '',
            ])
        ;
    }

    public function contactDetails(Request $request)
    {
        if ($request->method() == 'POST') {

            $request->validate([
                'location' => ['required', 'min:10', 'max:200'],
                'email' => ['required', 'email', 'max:20'],
                'phone_number' => ['required', 'min:11', 'max:15'],
            ]);

        }

        return view('dashboard.pages.sections.contact-details.form')
            ->with('sectionData', [
                'location' => '',
                'email' => '',
                'phone_number' => '',
            ])
        ;
    }
}
