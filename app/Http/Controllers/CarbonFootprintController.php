<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CarbonFootprintController extends Controller
{
    private $baseUrl = 'https://impactco2.fr/api/v1';

    public function calculateTransport(Request $request)
    {
        $kilometers = $request->input('kilometers');

        try {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
            ])->get("{$this->baseUrl}/transport", [
                'km' => $kilometers,
                'transports' => '4,6,7,13,1',
            ]);

            if ($response->failed()) {
                return response()->json([
                    'error' => 'API request failed: '.$response->body(),
                ], 500);
            }

            return $response->json();
        } catch (\Exception $e) {
            \Log::error('Transport API Error: '.$e->getMessage());

            return response()->json([
                'error' => 'Failed to fetch data: '.$e->getMessage(),
            ], 500);
        }
    }

    public function calculateFood(Request $request)
    {
        $category = $request->input('category', 'group');

        try {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
            ])->get("{$this->baseUrl}/alimentation", [
                'category' => $category,
            ]);

            if ($response->failed()) {
                return response()->json([
                    'error' => 'API request failed: '.$response->body(),
                ], 500);
            }

            return $response->json();
        } catch (\Exception $e) {
            \Log::error('Food API Error: '.$e->getMessage());

            return response()->json([
                'error' => 'Failed to fetch data: '.$e->getMessage(),
            ], 500);
        }
    }

    public function calculateHeating(Request $request)
    {
        $m2 = $request->input('m2', 63);
        $chauffages = $request->input('chauffages');

        try {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
            ])->get("{$this->baseUrl}/chauffage", [
                'm2' => $m2,
                'chauffages' => $chauffages,
            ]);

            if ($response->failed()) {
                return response()->json([
                    'error' => 'API request failed: '.$response->body(),
                ], 500);
            }

            return $response->json();
        } catch (\Exception $e) {
            \Log::error('Heating API Error: '.$e->getMessage());

            return response()->json([
                'error' => 'Failed to fetch data: '.$e->getMessage(),
            ], 500);
        }
    }

    public function calculateSeasonalProduce(Request $request)
    {
        $month = $request->input('month', now()->month);
        $category = $request->input('category');

        try {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
            ])->get("{$this->baseUrl}/fruitsetlegumes", [
                'month' => $month,
                'category' => $category,
            ]);

            if ($response->failed()) {
                return response()->json([
                    'error' => 'API request failed: '.$response->body(),
                ], 500);
            }

            return $response->json();
        } catch (\Exception $e) {
            \Log::error('Seasonal Produce API Error: '.$e->getMessage());

            return response()->json([
                'error' => 'Failed to fetch data: '.$e->getMessage(),
            ], 500);
        }
    }
}
