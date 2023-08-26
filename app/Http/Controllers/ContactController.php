<?php

namespace App\Http\Controllers;


use App\Models\Member;
use App\Models\Register;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

//    register
public function register(){
    return view('register');
}

public function saveRegister(Request $request){
    $fullName=$request->fullName;
    $contact=$request->contact;
    $nidNumber=$request->nidNumber;
    $password=$request->password;

    $object = new Register();
    $object->fullName=$fullName;
    $object->contact=$contact;
    $object->nidNumber=$nidNumber;
    $object->password=$password;
    $object->save();
    return "register successfully";


}




    public function student(){
        return view('student');
    }

    public function saveStudent(Request $request){
        $name=$request->name;
        $father=$request->father;
        $mother=$request->mother;
        $roll=$request->roll;

        $object= new Student();
        $object->name=$name;
        $object->father=$father;
        $object->mother=$mother;
        $object->roll=$roll;
        $object->save();
        return 'student added successfully';
    }



    public function addMember(){
        return view('member');
    }

    public function saveMember(Request $request){

        $name =$request->name;
        $mobile=$request->mobile;

        $object = new Member();
        $object->name=$name;
        $object->mobile=$mobile;
        $object->save();
        return 'member create success';


    }



    public function addContact()
    {
        return view('contact');
    }

    public function saveContact(Request $request)
    {
        $name = $request->name;
        $mobile = $request->mobile;

        $object = new Contact();
        $object->name = $name;
        $object->mobile = $mobile;
        $object->save();

        return "Data inserted successfully";

    }

}
