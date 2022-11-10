<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\MetaData;
use Illuminate\Http\Request;
use Nette\Utils\Random;

class SectionController extends Controller
{
    public function hero(Request $request)
    {
        if ($request->method() == 'POST') {

            $request->validate([
                'title' => ['required', 'max:100'],
                'description' => ['required', 'min:10', 'max:200'],
                'get_started_link' => ['url', 'nullable'],
                'watch_video_link' => ['url', 'nullable'],
                'image' => ['required_if:image_hidden,null', 'image', 'mimes:jpg,jpeg,png'],
            ]);

            $final_name = null;

            $image = $request->file('image');
            if ($image) {
                $image_name = $image->getClientOriginalName();
                $image_ext = $image->getClientOriginalExtension();
                $destination_folder = 'public/images';
                $random_image_name = Random::generate(20);
                $final_name = $random_image_name . '.' . $image_ext;
                $request->file('image')->storeAs($destination_folder, $final_name);
            } else {
                $final_name = $request->post('image_hidden');
            }

            MetaData::where('meta_key', 'HERO_SECTION_TITLE')->update(['meta_value' => $request->post('title')]);
            MetaData::where('meta_key', 'HERO_SECTION_DESCRIPTION')->update(['meta_value' => $request->post('description')]);
            MetaData::where('meta_key', 'HERO_SECTION_START_LINK')->update(['meta_value' => $request->post('get_started_link')]);
            MetaData::where('meta_key', 'HERO_SECTION_VIDEO_LINK')->update(['meta_value' => $request->post('watch_video_link')]);
            MetaData::where('meta_key', 'HERO_SECTION_IMAGE')->update(['meta_value' => $final_name]);
        }

        $title_meta = MetaData::where('meta_key', 'HERO_SECTION_TITLE')->first();
        $description_meta = MetaData::where('meta_key', 'HERO_SECTION_DESCRIPTION')->first();
        $get_started_link_meta = MetaData::where('meta_key', 'HERO_SECTION_START_LINK')->first();
        $watch_video_link_meta = MetaData::where('meta_key', 'HERO_SECTION_VIDEO_LINK')->first();
        $image_meta = MetaData::where('meta_key', 'HERO_SECTION_IMAGE')->first();

        return view('dashboard.pages.sections.hero.form')
            ->with('sectionData', [
                'title' => $title_meta->meta_value,
                'description' => $description_meta->meta_value,
                'get_started_link' => $get_started_link_meta->meta_value,
                'watch_video_link' => $watch_video_link_meta->meta_value,
                'image' => $image_meta->meta_value,
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
