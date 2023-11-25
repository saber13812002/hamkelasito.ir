@extends('layout-home')

@section('content-home')

    <body style="visibility: visible;" class="page page-privacy-policy">

    @include('header-site')
    <!-- start main -->
    <main>
        <div id="content">

            <!-- start breadcrumb -->
            <div class="page-breadcrumb">
                <div class="container-xxxl">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./home">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- start page title -->
            <div class="page-title">
                <div class="container-xxl">
                    <h1>Privacy Policy</h1>
                </div>
            </div>

            <section class="section section-content">
                <div class="container-lg">
                    <div class="term-update">
                        <i class="icon-terms"></i>
                        <div class="term-update-content">
                            <div class="term-update-title">Liliana Terms of sevice</div>
                            <div class="term-update-date">Last updates on April 2022</div>
                        </div>
                    </div>
                    <p>
                        Liliana Modeling ("Liliana") is committed to protecting personally identifiable information (PII) such as names, addresses, and phone numbers. Liliana will not disclose to third parties any digital or written information provided at the time of application or inquiry for purposes other than selecting models at auditions and responding to inquiries. Liliana undertakes to ensure that all employees are aware of the importance of protecting PII and strictly adhere to the company’s policies in this regard.
                    </p>
                    <h6>1. Collection and Management of Personally Identifiable Information</h6>
                    <ul class="list">
                        <li>Liliana will collect and keep current PII in a manner usable for all our businesses.</li>
                        <li>
                            Liliana will take appropriate measures to prevent unauthorized access, loss, damage,
                            falsification, or leakage of PII. These measures include maintaining a security system,
                            developing a management structure, training employees, and implementing security measures.
                        </li>
                        <li>
                            Before we respond to a customer request to disclose, modify, or suspend the use of PII,
                            Liliana will first verify the customer"s identity and then respond immediately.
                        </li>
                    </ul>
                    <h6>2. Purposes of Use of Personally Identifiable Information</h6>
                    <ul class="list">
                        <li>
                            Liliana will use PII collected from you to communicate via email and to transmit notices,
                            service information, and responses to inquiries.
                        </li>
                        <li>
                            Before using PII beyond the intended purpose, Liliana will seek your consent to do so,
                            except where required by law.
                        </li>
                    </ul>
                    <h6>3. Prohibition of Disclosure and Provision of PII to Third Parties</h6>
                    <p>Liliana will not disclose PII to any third party except where any of the following applies: </p>
                    <ul class="list">
                        <li>Liliana has obtained your consent to do so;</li>
                        <li>
                            Your PII is to be disclosed to a Liliana subcontractor engaged to perform work necessary to
                            provide your requested services; or
                        </li>
                        <li>
                            The information is required to be disclosed by law.
                        </li>
                    </ul>
                    <h6>
                        4. Compliance with Laws and Rules regarding PII +Liliana will endeavor to maintain compliance
                        with all laws, national guidelines, and other rules concerning PII.
                    </h6>
                    <h6>5. Complaints and Consultations regarding the Protection of PII</h6>
                    <p>Liliana will promptly address complaints and consultations about PII.</p>
                    <h6>6. Inquiries from You</h6>
                    <ul class="list">
                        <li>If you request to review, modify, or delete your personal information, Liliana will first
                            verify your identity and then respond promptly.
                        </li>
                    </ul>
                </div>
            </section>

            <section class="section page-more-links">
                <div class="container-lg">
                    <div class="link-item">
                        <h2>About Us</h2>
                        <span>You can read about us <a href="./about-us">here.</a></span>
                    </div>
                    <div class="link-item">
                        <h2>Company Profile</h2>
                        <span>Our company profile can be see <a href="./company-profile">here.</a></span>
                    </div>
                    <div class="link-item">
                        <h2>Contact Us</h2>
                        <span>You can contact us <a href="./contact-us">here.</a></span>
                    </div>
                </div>
            </section>

        </div>
    </main>


    </body>

@endsection
