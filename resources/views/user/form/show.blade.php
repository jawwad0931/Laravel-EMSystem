@extends('layouts.app')

@section('content')
    <h1>Form Details</h1>

    <p>Form ID: {{ $form->id }}</p>
    <p>First Name: {{ $form->first_name }}</p>
    <p>Last Name: {{ $form->last_name }}</p>
    <p>Father's Name: {{ $form->father_name }}</p>
    <p>Email: {{ $form->email }}</p>
    <p>Class: {{ $form->class }}</p>
    <p>School Name: {{ $form->school_name }}</p>
    <p>Phone: {{ $form->phone }}</p>
    <p>City: {{ $form->city }}</p>
    <p>Address: {{ $form->address }}</p>
    <p>Age: {{ $form->age }}</p>
    <p>Date of Birth: {{ $form->Dob }}</p>
    <p>Gender: {{ $form->gender }}</p>
    <p>Created At: {{ $form->created_at }}</p>
    <p>Updated At: {{ $form->updated_at }}</p>
@endsection
