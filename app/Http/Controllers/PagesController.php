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

        $euro_countries = [[
            "name"=> "Andorra",
            "code"=> "AD"
          ], [
            "name"=> "Albania",
            "code"=> "AL"
          ], [
            "name"=> "Austria",
            "code"=> "AT"
          ], [
            "name"=> "Åland Islands",
            "code"=> "AX"
          ], [
            "name"=> "Bosnia and Herzegovina",
            "code"=> "BA"
          ], [
            "name"=> "Belgium",
            "code"=> "BE"
          ], [
            "name"=> "Bulgaria",
            "code"=> "BG"
          ], [
            "name"=> "Belarus",
            "code"=> "BY"
          ], [
            "name"=> "Switzerland",
            "code"=> "CH"
          ], [
            "name"=> "Cyprus",
            "code"=> "CY"
          ], [
            "name"=> "Czech Republic",
            "code"=> "CZ"
          ], [
            "name"=> "Germany",
            "code"=> "DE"
          ], [
            "name"=> "Denmark",
            "code"=> "DK"
          ], [
            "name"=> "Estonia",
            "code"=> "EE"
          ], [
            "name"=> "Spain",
            "code"=> "ES"
          ], [
            "name"=> "Finland",
            "code"=> "FI"
          ], [
            "name"=> "Faroe Islands",
            "code"=> "FO"
          ], [
            "name"=> "France",
            "code"=> "FR"
          ], [
            "name"=> "United Kingdom",
            "code"=> "GB"
          ], [
            "name"=> "Guernsey",
            "code"=> "GG"
          ], [
            "name"=> "Greece",
            "code"=> "GR"
          ], [
            "name"=> "Croatia",
            "code"=> "HR"
          ], [
            "name"=> "Hungary",
            "code"=> "HU"
          ], [
            "name"=> "Ireland",
            "code"=> "IE"
          ], [
            "name"=> "Isle of Man",
            "code"=> "IM"
          ], [
            "name"=> "Iceland",
            "code"=> "IC"
          ], [
            "name"=> "Italy",
            "code"=> "IT"
          ], [
            "name"=> "Jersey",
            "code"=> "JE"
          ], [
            "name"=> "Liechtenstein",
            "code"=> "LI"
          ], [
            "name"=> "Lithuania",
            "code"=> "LT"
          ], [
            "name"=> "Luxembourg",
            "code"=> "LU"
          ], [
            "name"=> "Latvia",
            "code"=> "LV"
          ], [
            "name"=> "Monaco",
            "code"=> "MC"
          ], [
            "name"=> "Moldova, Republic of",
            "code"=> "MD"
          ], [
            "name"=> "Macedonia, The Former Yugoslav Republic of",
            "code"=> "MK"
          ], [
            "name"=> "Malta",
            "code"=> "MT"
          ], [
            "name"=> "Netherlands",
            "code"=> "NL"
          ], [
            "name"=> "Norway",
            "code"=> "NO"
          ], [
            "name"=> "Poland",
            "code"=> "PL"
          ], [
            "name"=> "Portugal",
            "code"=> "PT"
          ], [
            "name"=> "Romania",
            "code"=> "RO"
          ], [
            "name"=> "Russian Federation",
            "code"=> "RU"
          ], [
            "name"=> "Sweden",
            "code"=> "SE"
          ], [
            "name"=> "Slovenia",
            "code"=> "SI"
          ], [
            "name"=> "Svalbard and Jan Mayen",
            "code"=> "SJ"
          ], [
            "name"=> "Slovakia",
            "code"=> "SK"
          ], [
            "name"=> "San Marino",
            "code"=> "SM"
          ], [
            "name"=> "Ukraine",
            "code"=> "UA"
          ], [
            "name"=> "Holy See (Vatican City State)",
            "code"=> "VA"
          ]];

          $east_africa_countries = [[
            "name"=> "Kenya",
            "code"=> "KE"
          ],[
            "name"=> "Tanzania",
            "code"=> "TZ"
          ],[
            "name"=> "Uganda",
            "code"=> "UG"
          ],[
            "name"=> "Rwanda",
            "code"=> "RW"
          ],[
            "name"=> "Burundi",
            "code"=> "BU"
          ],[
            "name"=> "Democratic Republic of Congo",
            "code"=> "DRC"
          ],[
            "name"=> "South Sudan",
            "code"=> "SS"
          ],
        ];
        // dd($testimonials);
        return view('pages.index', compact('testimonials', 'euro_countries', 'east_africa_countries'));
    }
}
