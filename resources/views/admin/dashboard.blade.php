@extends('admin-layout.main')

@section('title', 'Dashboard - Trust App')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info">
                <h2>Welcome to the Admin Dashboard!</h2>
                <p>Hello, {{ Auth::user()->name }}!</p>
                <p>Welcome to the admin control center. Here you can manage users, content, and system settings effortlessly. Below is a quick overview of your main tasks:</p>
                <ul>
                    <li><strong>Dashboard:</strong> View key metrics and performance.</li>
                    <li><strong>User Management:</strong> Manage users and roles.</li>
                    <li><strong>Content Management:</strong> Create and manage platform content.</li>
                    <li><strong>Settings:</strong> Adjust system preferences.</li>
                    <li><strong>Reports:</strong> Access analytics and reports.</li>
                </ul>
                <p><strong>Need assistance?</strong></p>
                <ul>
                    <li><a href="#" target="_blank">Documentation</a>: Access guides and FAQs.</li>
                    <li><a href="#" target="_blank">Support Portal</a>: Get help from our support team.</li>
                </ul>
                <p>Thank you for your contribution. If you have feedback, we'd love to hear it!</p>
                <p>Best Regards, <br> The Trust App Team</p>
            </div>
        </div>
    </div>
</div>
@endsection
