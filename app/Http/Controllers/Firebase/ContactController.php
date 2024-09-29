<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class ContactController extends Controller
{

    public $db;

    public function __construct(Database $database)
    {
        $this->db = $database;
    }

    public function index()
    {
        return view('firebase.contact.index');
    }

    public function store(Request $request)
    {
        $postData = [
            'fname' => $request->first_name,
            'lname' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email
        ];

        $ref_tablename = 'contaddcts';
        $postRef = $this->db->getReference($ref_tablename)->push($postData);

        if($postRef) {
            return redirect()->route('contacts')->with('status', 'Contact Added Successfully');
        } else {
            return redirect()->route('contacts')->with('status', 'Contact Not Added');
        }
    }
}
