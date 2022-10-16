<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create(): Response
    {
        //
    }

    public function store(Request $request): Response
    {
        //
    }

    public function show(Product $product): Response
    {
        //
    }

    public function edit(Product $product): Response
    {
        //
    }

    public function update(Request $request, Product $product): Response
    {
        //
    }

    public function destroy(Product $product): Response
    {
        //
    }
}
