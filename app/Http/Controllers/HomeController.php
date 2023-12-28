<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Link {
    public $name;
    public $url;

    public function __construct($name, $url)
    {
        $this->name = $name;
        $this->url = $url;
    }

    public function __toString()
    {
        return $this->name;
    }
}

class Contact
{
    public $phone;
    public $message;

    public function __construct($phone, $message)
    {
        $this->phone = $phone;
        $this->message = $message;
    }
}

class HomeController extends Controller
{
    // object which contains links
    public $links;
    public $data;
    public $about;

    public function __construct()
    {
        $this->links = [
            new Link('Главная', '/'),
            new Link('О сайте', '/about'),
            new Link('Свяжитесь с нами', '/contact'),
            new Link('Продукты', '/products'),
            new Link('Посты', '/posts'),
            new Link('Пользователи', '/users'),
            new Link('Тэги', '/tags'),
        ];

        $this->data = new Contact('empty', 'empty');

        $this->about = "Это вебсайт, написанный на Laravel 8.";
    }

    // index method to return home view
    public function index()
    {
        return view('home', [
            'data' => $this->data,
            'links' => $this->links
        ]);
    }

    // about method to return about view
    public function about()
    {
        return view('about', [
            'about' => $this->about
        ]);
    }

    // contact method to return contact view
    public function contact()
    {
        return view('contact');
    }

    public function sendContacts(Request $request) {
        $phone = $request->input('phone');
        $message = $request->input('message');

        if(empty($phone) || empty($message)) {
            return view('home', [
                'data' => $this->data,
                'links' => $this->links
            ]);
        }

        // if request if GET
        if($request->isMethod('GET')) {
            return view('home', [
                'data' => $this->data,
                'links' => $this->links
            ]);
        }

        // remove all non-digit characters
        $phone = preg_replace('/[^0-9]/', '', $phone);

        //test if message legth less than 160 else cut it
        if(strlen($message) > 160) {
            $message = substr($message, 0, 160);
        }

        $this->data = new Contact($phone, $message);
        
        // Redirect to home view
        return view('home', [
            'data' => $this->data,
            'links' => $this->links
        ]);
    }
}
