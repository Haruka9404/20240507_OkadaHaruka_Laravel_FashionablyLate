<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Controllers\AuthController;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function index() {
        $contacts = Contact::with('category')->get();
        $categories = Category::all();
        return view('index', compact('contacts', 'categories'));
    }

    public function confirm(ContactRequest $request) {
        $contact = $request->only(['first_name','last_name','gender','email', 'tel1','tel2','tel3', 'address', 'building','category_id', 'detail']);
        $contacts = Contact::with('category')->get();
        $categories = Category::all();
        return view('confirm', compact('contact'));
    }

    public function store(Request $request) {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'address', 'building', 'category_id', 'detail']);
        $phoneNumber = $request->input('tel1'). $request->input('tel2'). $request->input('tel3');
        $contact = new Contact();
        $contact -> tel = $phoneNumber;
        // $contact->save();
        // Contact::create($contact);
        return view('thanks', compact('contact'));
    }

    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function admin()
    {
        return view('auth/admin');
    }

}
