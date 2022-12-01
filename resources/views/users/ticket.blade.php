@extends('layouts.users')

@section('title', 'Ticket')

@section('breadcrumbs')
    <div class="dashboard-hero-content text-white">
        <h3 class="title">Ticket</h3>
        <ul class="breadcrumb">
            <li>
                <a href="/user/dashboard">Home</a>
            </li>
            <li>
                Ticket
            </li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="partners">
        <h3 class="main-title">Tickets</h3>
        <div class="create_wrapper">
            <h5 class="subtitle">New Tickets</h5>
            <div class="d-flex align-items-center mb-30">
                <img src="/backend/assets/images/dashboard/ticket.png" alt="dashboard"><span class="pl-3 sub_subtitle cl-title">Send Ticket:</span>
            </div>
            <form class="create_ticket_form" action="{{ route('users.sendticket') }}" method="POST">
                @csrf
                <div class="create_form_group">
                    <label for="topic">Topic:</label>
                    <input required type="text" id="topic" name="topic" placeholder="Enter your Subject">
                </div>
                <div class="create_form_group">
                    <label for="content">Message:</label>
                    <textarea required id="content" name="content" placeholder="Write your Message"></textarea>
                </div>
                <div class="create_form_group mb-0">
                    <button type="submit" class="custom-button border-0">Send</button>
                </div>
            </form>
        </div>
    </div>
@endsection


@section('script')



@endsection
