@extends('frontend.main')

@section('title', 'CONTACT US')

@section('content')

    <div class="container py-5">
        <!-- Page Heading -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h1>Contact Us</h1>
            </div>
        </div>

        <div class="row mb-5">
            <!-- Left Column: Form and Map -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title text-center">Contact Form</h2>
                        <form action="{{ route('contact_us.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control border rounded" placeholder="Name" name="your-name" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control border rounded" placeholder="E-Mail" name="your-email" required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control border rounded" placeholder="Contact No." name="telephone" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control border rounded" rows="4" placeholder="Message" name="your-message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Find Us Here</h5>
                        <div class="map mb-3">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13419.929483565584!2d73.9277315!3d32.7662023!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0:0xecd00cffe5d90e1c!2sAl-Mudassar%20Special%20Education%20Complex%20-%20Baharwal!5e0!3m2!1sen!2smy!4v1611993811872!5m2!1sen!2smy"
                                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Contact Details -->
            <div class="col-lg-6">
                <!-- Pakistan Office Card -->
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">MAIN OFFICE, PAKISTAN</h2>
                        <p class="text-center mb-2"><strong>AL-MUDASSAR VILLAGE, BAHARWAL TEHSIL KHARIAN, DISTRICT GUJRAT, PAKISTAN</strong></p>
                        <p class="text-center mb-2">TEL. +92 53 7578685, +92 300 5430470</p>
                        <p class="text-center mb-4">EMAIL. info@almudassar.org</p>

                        <div class="border-top pt-3">
                            <h4 class="card-subtitle mb-4 text-center text-primary font-weight-bold bg-light p-2 border border-primary rounded">BANK ACCOUNT DETAILS</h4>
                            <ul class="list-unstyled">
                                <li><strong>BANK NAME:</strong> HABIB METROPOLITAN BANK LTD.</li>
                                <li><strong>ADDRESS:</strong> KHARIAN BRANCH, TEHSIL KHARIAN DISTT GUJRAT</li>
                                <li><strong>BRANCH CODE:</strong> 0239</li>
                                <li><strong>TITLE:</strong> AL MUDASSAR TRUST</li>
                                <li><strong>ACCOUNT NO:</strong> 6-02-39-20614-714-102237</li>
                                <li><strong>SWIFT CODE:</strong> MPBLPKKA</li>
                                <li><strong>IBAN:</strong> PK22MPBL 0239 2171 4010 2237</li>
                                <li><strong>CONTACT NO:</strong> +92 053 7602763</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- United Kingdom Card -->
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">UNITED KINGDOM</h2>
                        <p class="text-center mb-2"><strong>81, NETHERHEY STREET, OLDHAM, OL82JD, UK</strong></p>
                        <p class="text-center mb-2">TEL. +44 7907 568189</p>
                        <p class="text-center mb-4">EMAIL. info@almudassar.org</p>
                        <div class="border-top pt-3">
                            <h4 class="card-subtitle mb-4 text-center text-primary font-weight-bold bg-light p-2 border border-primary rounded">BANK ACCOUNT DETAILS</h4>
                            <ul class="list-unstyled">
                                <li><strong>BANK NAME:</strong> HSBC</li>
                                <li><strong>TITLE:</strong> AL MUDASSAR TRUST</li>
                                <li><strong>ACCOUNT NO:</strong> 91712837</li>
                                <li><strong>SORT CODE:</strong> 40-35-26</li>
                                <li><strong>BIC:</strong> MIDLGB2148A</li>
                                <li><strong>IBAN:</strong> GB34MIDL40352691712837</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Norway Card -->
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">NORWAY</h2>
                        <p class="text-center mb-2"><strong>LUNDEN 15A 0598 OSLO, KOMMUNE 0301, OSLO LAND NORGE, NORWAY</strong></p>
                        <p class="text-center mb-2">TEL. 0047 45221289</p>
                        <p class="text-center mb-4">EMAIL. almudassar@live.no</p>
                        <div class="border-top pt-3">
                            <h4 class="card-subtitle mb-4 text-center text-primary font-weight-bold bg-light p-2 border border-primary rounded">BANK ACCOUNT DETAILS</h4>
                            <ul class="list-unstyled">
                                <li><strong>TITLE:</strong> AL MUDASSAR TRUST</li>
                                <li><strong>ACCOUNT NO:</strong> 15032370575</li>
                                <li><strong>VIPPS NR:</strong> 71861</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- France Card -->
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">FRANCE</h2>
                        <p class="text-center mb-2"><strong>ASSOCIATION CESAM, 1, RUE DE STOCKHOLM, 75008, PARIS, FRANCE</strong></p>
                        <p class="text-center mb-2">TEL. 0033664163180</p>
                        <p class="text-center mb-4">EMAIL. info@almudassar.org</p>
                        <div class="border-top pt-3">
                            <h4 class="card-subtitle mb-4 text-center text-primary font-weight-bold bg-light p-2 border border-primary rounded">BANK ACCOUNT DETAILS</h4>
                            <ul class="list-unstyled">
                                <li><strong>BANK NAME:</strong> CIC PARIS LA MOTTEPICQUET</li>
                                <li><strong>TITLE:</strong> ASSOCIATION CESAM SHEZ SODEM</li>
                                <li><strong>BIC:</strong> CMCIFRPP</li>
                                <li><strong>IBAN:</strong> FR7630066105410001074310174</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
