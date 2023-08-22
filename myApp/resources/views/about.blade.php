@extends('layouts.main')

@section('body')
<div class="container mt-3 py-5 px-5 bg-light rounded-4 shadow">
        <div class="my-5">
            <h1>About Me</h1>
            <table class="my-4">
                <tr>
                    <td class="fw-bold text-end"> Name </td>
                    <td>{{ $Name }}</td>
                </tr>
                <tr>
                    <td class="fw-bold text-end">Email :</td>
                    <td>{{ $email }}</td>
                </tr>
                <tr>
                    <td class="fw-bold text-end">Phone Number :</td>
                    <td>{{ $phoneNumber }}</td>
                </tr>
            </table>
            <a href="/" class="btn btn-outline-secondary">Back</a>
        </div>
    </div>
@endsection

