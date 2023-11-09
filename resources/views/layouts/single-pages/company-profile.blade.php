@extends('layout-home')

@section('content-home')

    <!-- start main -->
    <main>
        <div id="content">

            <!-- start breadcrumb -->
            <div class="page-breadcrumb">
                <div class="container-xxxl">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./home">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Company Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- start page title -->
            <div class="page-title">
                <div class="container-lg">
                    <h1>Company Profile</h1>
                </div>
            </div>

            <!-- start company info -->
            <section class="section section-content" itemscope itemtype="https://schema.org/Organization">
                <meta itemprop="logo" content="/storage/assets/img/logo.svg">
                <div class="container-lg">
                    <table>
                        <tr>
                            <td>Company Name</td>
                            <td itemprop="name">Liliana Inc.</td>
                        </tr>
                        <tr>
                            <td>Location & Contact Info</td>
                            <td>
                                <div class="address">
                                    <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                                        <span itemprop="streetAddress">Headquarter｜2nd floor, VORT Akasaka II, 4-4-8 Akasaka, Minato-ku, Tokyo</span><br>
                                    </div>
                                    <div>
                                        TEL：<a href="tel:03-6362-3355"><span
                                                itemprop="telephone">03-6362-3355</span></a><br>
                                        FAX：<a href="fax:03-6323-0195">
                                            <span itemprop="faxNumber">03-6323-0195</span>
                                        </a><br>
                                    </div>
                                    <div>
                                        Website：<a href="https://lilianamodels.com/">www.lilianamodels.com</a><br>
                                    </div>
                                    <div>
                                        Email：<a href="mailto:info@lilianamodels.com">
                                            <span itemprop="email">info@lilianamodels.com</span>
                                        </a><br>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Business hours</td>
                            <td>10:00 to 19:00 (excluding weekends and holidays)</td>
                        </tr>
                        <tr>
                            <td>Capital</td>
                            <td>9 million yen</td>
                        </tr>
                        <tr>
                            <td>Establishment</td>
                            <td>
                                <meta itemprop="foundingDate" content="2020-1-1">
                                <h6>December 2020:</h6>
                                <p>
                                    Started business as modeling division of Miterpor Co., Ltd.
                                </p>
                                <h6>March 2022:</h6>
                                <p>
                                    The organization's name has been changed to Liliana Inc. for the modeling business.
                                </p>
                                <h6>April 2022:</h6>
                                <p>
                                    Diversifying the business into entertainment and event departments in addition to
                                    the modeling business, all under the name of Liliana Inc.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>CEO</td>
                            <td itemprop="founder" itemscope itemtype="https://schema.org/Person">
                                <span itemprop="name">Reza Asgari</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Legal advisor (national qualification, etc.)</td>
                            <td>
                                Tokyo immigration bureau application agency qualification
                                Specified administrative scrivener qualification
                            </td>
                        </tr>
                        <tr>
                            <td>Bank</td>
                            <td>Mizuho Bank Shibuya Branch</td>
                        </tr>
                        <tr>
                            <td>Business description</td>
                            <td>
                                <ul class="list">
                                    <li>
                                        Foreign and Japanese models, talents, actors, extras, etc. for advertisements,
                                        TV, movies, etc.
                                    </li>
                                    <li>
                                        Management of talents, actors, extras, etc.
                                    </li>
                                    <li>
                                        Casting and coordination
                                    </li>
                                    <li>
                                        Invitation of foreign models, talents, actors, etc.
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Major trading partners</b><br>
                                *In no particular order
                            </td>
                            <td>
                                <ul class="list">
                                    <li>Japan Broadcasting Corporation</li>
                                    <li>NHK Enterprise Co., Ltd.</li>
                                    <li>Nippon Television Network Corporation</li>
                                    <li>TBS Television Co., Ltd.</li>
                                    <li>TV Asahi Co., Ltd.</li>
                                    <li>Fuji Television Network, Inc.</li>
                                    <li>TV Tokyo Co., Ltd.</li>
                                    <li>WOWOW Co., Ltd.</li>
                                    <li>Tokyo Metropolitan Television Co., Ltd.</li>
                                    <li>Abema TV Inc.</li>
                                    <li>The Walt Disney Company</li>
                                    <li>AOI Pro.</li>
                                    <li>Kaiju Co., Ltd.</li>
                                    <li>The Fool Co., Ltd.</li>
                                    <li>Recruit Co., Ltd.</li>
                                    <li>Meguro Gajoen Co., Ltd.</li>
                                    <li>Japan International Tourism Organization</li>
                                    <li>Junior Chamber International Kawagoe</li>
                                    <li>Mitsui Fudosan Co., Ltd.</li>
                                    <li>Xebio Co., Ltd.</li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
            </section>

            <section class="section page-more-links">
                <div class="container-lg">
                    <div class="link-item">
                        <h2>About Us</h2>
                        <span>You can read about us <a href="./about-us">here.</a></span>
                    </div>
                    <div class="link-item">
                        <h2>Contact Us</h2>
                        <span>You can contact us <a href="./contact-us">here.</a></span>
                    </div>
                    <div class="link-item">
                        <h2>Privacy Policy</h2>
                        <span>Our privacy policy can be see <a href="./privacy-policy">here.</a></span>
                    </div>
                </div>
            </section>

        </div>
    </main>

@endsection
