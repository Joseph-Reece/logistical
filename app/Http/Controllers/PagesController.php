<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        $testimonials = collect([
            [
                'type' => 'Cargo Shipment',
                'message' => "First and foremost I would like to give my appreciation to Jambo Logistics team for helping me
                            relocate my properties by packaging them using a pickup and relocated me all the way from Berlin to
                            Kenya, I was then able to pick them from their warehouse in Nairobi in good and perfect condition,
                            all this was made possible and stress free thanks to this great shipping company. If at all you need
                            the same services don't hesitate to work with jambo.",
                'client' => "Eric Chege"
            ],
            [
                'type' => 'Cargo Shipment',
                'message' => 'I am very happy to have been able to use Jambo Logistics to ship my items to Kenya. They are very reliable and I am very satisfied with the services they provided.',
                'client' => "Wanjiru Philips"
            ],
            [
                'type' => 'Cargo Shipment',
                'message' => "How easy it was to ship with Jambo Logistics really amazed me. My client was pleased with the assistance they offered. They kept me informed of the shipment's progress till it arrived at the client. ",
                'client' => "Wendel Gottschalk "
            ],
            [
                'type' => 'Shipping Cargo',
                'message' => "I was introduced to Jambo Logistics by a friend, and as it was my first time shipping with them, I found them to be quite convenient because the team was very cooperative and my items were picked at my door step and delivered in Kenya within a decent amount of time. For their excellent services, I heartily endorse them.",
                'client' => "Wilfred Mangancha "
            ],
            [
                'type' => 'Shipping Cargo',
                'message' => "Thank you Jambo Logistics Kenya for your excellent services",
                'client' => "Irene Gichuhi "
            ],
            [
                'type' => 'Cargo Shipment',
                'message' => "The best logistic I have known",
                'client' => "David Muriuki Ngari"
            ],
        ]);
        // dd($testimonials);
        return view('pages.index', compact('testimonials'));
    }
}
