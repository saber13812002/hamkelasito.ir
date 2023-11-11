@extends('apply_as.layout')

@section('content-apply')

    <body class="page page-apply-model-form">


    <!-- start header -->
    @include('apply_as.header')


    <!-- start main -->
    <main>
        <div id="content">

            <!-- start page title -->
            <div class="page-title">
                <div class="container-xxl">
                    <h1>Apply</h1>
                </div>
            </div>

            <!-- start form -->
            <div class="section section-form">
                <form action="./apply-as-a-model-form-step-4" method="post">
                    @csrf
                    <!-- start steps -->
                    <div class="progress-indicator" data-switch-with-point="true">

                        <!-- step progress indicator -->
                        <div class="container-lg">
                            <div class="steps active-step-3">
                                <div class="step-track"></div>
                                <div data-step="1" class="step-item checked">
                                    <div class="step-circle">
                                        1
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 1:</span>
                                        Basic Info
                                    </div>
                                </div>
                                <div data-step="2" class="step-item checked">
                                    <div class="step-circle">
                                        2
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 2:</span>
                                        Physical Info
                                    </div>
                                </div>
                                <div data-step="3" class="step-item active">
                                    <div class="step-circle">
                                        3
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 3:</span>
                                        Skills & Experiences
                                    </div>
                                </div>
                                <div data-step="4" class="step-item">
                                    <div class="step-circle">
                                        4
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 4:</span>
                                        Media
                                    </div>
                                </div>
                                <div data-step="5" class="step-item">
                                    <div class="step-circle">
                                        5
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 5:</span>
                                        Contact Info
                                    </div>
                                </div>
                                <div data-step="6" class="step-item">
                                    <div class="step-circle">
                                        6
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 6:</span>
                                        Authentication
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- step content -->
                        <div class="step-content step-skills active" data-step="3">
                            <div class="container-lg">

                                <!-- step notifications -->
                                <div class="notifications-list step-notifications">
                                    <div class="notification-item warning">
                                        <div class="notification-content">
                                            <i class="icon-alert-triangle notification-icon"></i>
                                            <div class="notification-inner-content">
                                                <div class="notification-title">
                                                    You will significantly increase your chances of receiving better offers if you provide detailed and high-quality information in these fields: Language, Biography, Skills, and Job Experiences.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- step content -->
                                <div class="step-inner-content">

                                    <!-- native language and other language -->
                                    <div class="form-section">
                                        <div class="form-section-label">Language(s)</div>
                                        <div class="form-section-content">
                                            <div class="field field-type-select"
                                                 data-source="https://liliana.asensive.ir/api/languages/"
                                                 data-field-defualt-text="Select Item" data-btn-submit-text="Select" data-field-search="true"
                                                 data-required="true" data-type="select">
                                                <div class="field-content">
                                                    <label for="native_language">Native Language <span class="field-required-star">*</span></label>
                                                    <select name="native_language" id="native_language"></select>
                                                    <i class="icon-arrow-down"></i>
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_native_language"></div>
                                            <div class="table-repeater" data-name="Other Languages" data-unique="language" data-unique-message="The chosen language is already selected. Please choose a different language or edit the current selection">
                                                <input type="hidden" name="other_language" class="table-repeater-input" value=''>
                                                <div class="repeater-label">Other Languages</div>
                                                <div class="repeater-table">
                                                    <table>
                                                        <thead></thead>
                                                        <tbody></tbody>
                                                    </table>
                                                </div>
                                                <button type="button" class="btn btn-full btn-icon-left repeater-add-item">
                                                <span>
                                                    <i class="icon-add"></i>
                                                    Add New Language
                                                </span>
                                                </button>
                                                <div class="repeater-form">
                                                    <div class="field-group-validations" data-group-validation-relation="and" id="more_language">
                                                        <div class="repeater-row">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="field field-type-select field-language table-visible" data-required="true" data-field-defualt-text="Select Item" data-btn-submit-text="Select" data-source="https://liliana.asensive.ir/api/languages/" data-field-search="true" data-type="select">
                                                                        <div class="field-content">
                                                                            <label for="more_language_lng">Language <span class="field-required-star">*</span></label>
                                                                            <select name="language" id="more_language_lng"></select>
                                                                            <i class="icon-arrow-down"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="field field-type-select field-level table-visible" data-required="true" data-field-defualt-text="Select Item" data-btn-submit-text="Select" data-type="select">
                                                                        <div class="field-content">
                                                                            <label for="more_language_level">Language Level <span class="field-required-star">*</span></label>
                                                                            <select name="level" id="more_language_level">
                                                                                <option value="Native">Native</option>
                                                                                <option value="Fluent">Fluent</option>
                                                                                <option value="Advanced">Advanced</option>
                                                                                <option value="Intermediate">Intermediate</option>
                                                                                <option value="Beginner">Beginner</option>
                                                                                <option value="A Few Words">A Few Words</option>
                                                                            </select>
                                                                            <i class="icon-arrow-down"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-error-msg"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- bio -->
                                    <div class="form-section">
                                        <div class="form-section-label">Biography</div>
                                        <div class="form-section-content">
                                            <div class="field field-type-text-area" data-required="true" data-type="textarea" data-max-length="1000">
                                                <div class="field-content">
                                                    <label for="biography">Bio <span class="field-required-star">*</span></label>
                                                    <textarea name="biography" id="biography" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_biography"></div>
                                            <div class="field-hint">
                                                Begin with your name and current role. Detail your key skills and how
                                                they've influenced your career trajectory. Summarize your professional
                                                experiences, highlighting significant achievements. Mention your
                                                educational background and any specialized training. Optionally,
                                                shed light on personal interests that offer a glimpse into your
                                                character. Wrap up with your future aspirations. Ensure your biography
                                                remains genuine, and update as needed.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- skills -->
                                    <div class="form-section">
                                        <div class="form-section-label"><span>Skill(s) <span class="field-required-star">*</span></span></div>
                                        <div class="form-section-content">
                                            <div class="table-repeater" data-name="Skill" data-required="true" data-custom-column="[{&quot;name&quot;: &quot;tags&quot;, &quot;text&quot;: &quot;Skill Tags&quot;}]">
                                                <input type="hidden" name="skills" class="table-repeater-input" value=''>
                                                <div class="repeater-table">
                                                    <table>
                                                        <thead></thead>
                                                        <tbody></tbody>
                                                    </table>
                                                </div>
                                                <button type="button" class="btn btn-full btn-icon-left repeater-add-item">
                                                <span>
                                                    <i class="icon-add"></i>
                                                    Add New Skill
                                                </span>
                                                </button>
                                                <div class="repeater-form">

                                                    <div class="repeater-row">
                                                        <div class="row">

                                                            <!-- skill -->
                                                            <div class="col-12 col-sm-6">
                                                                <div class="field field-type-select table-visible"
                                                                     data-required="true" data-field-defualt-text="Select Item"
                                                                     data-btn-submit-text="Select" data-type="select">
                                                                    <div class="field-content">
                                                                        <label for="skills_type">Skill Type <span class="field-required-star">*</span></label>
                                                                        <select name="skills_type" id="skills_type">
                                                                            <option value="sport_skill">Sport Skill</option>
                                                                            <option value="dance_skill">Dance Skill</option>
                                                                            <option value="singing_skill">Singing Skill</option>
                                                                            <option value="acting_skill">Acting Skill</option>
                                                                            <option value="musical_instrument_skill">Musical Instrument Skill</option>
                                                                            <option value="performance_skill">Performance Skill</option>
                                                                            <option value="driving_skill">Driving Skill</option>
                                                                            <option value="culinary_skill">Culinary Skill</option>
                                                                            <option value="visual_art_skill">Visual Art Skill</option>
                                                                            <option value="other">Other</option>
                                                                        </select>
                                                                        <i class="icon-arrow-down"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="field-error-msg" id="field_error_skills_type"></div>
                                                            </div>

                                                            <!-- sub skills -->
                                                            <div class="col-12 col-sm-6" data-dependency="#skills_type" data-dependency-value="" data-dependency-is-not="true">

                                                                <!-- sub skill other -->
                                                                <div data-dependency="#skills_type" data-dependency-value="other">
                                                                    <div class="field field-type-nr-input table-visible" data-type="text" data-required="true" data-col-name="tags">
                                                                        <div class="field-content">
                                                                            <label for="other_skills">Skill Name <span class="field-required-star">*</span></label>
                                                                            <input type="text" name="other_skills" id="other_skills">
                                                                        </div>
                                                                    </div>
                                                                    <div class="field-error-msg" id="field_error_other_skills"></div>
                                                                </div>

                                                                <!-- sub skill sport -->
                                                                <div data-dependency="#skills_type" data-dependency-value="sport_skill">
                                                                    <div class="field field-type-select table-visible"
                                                                         data-required="true" data-field-defualt-text="Select Item" data-col-name="tags"
                                                                         data-btn-submit-text="Select" data-type="select" data-field-search="true">
                                                                        <div class="field-content">
                                                                            <label for="sport_skill_type">Sport Skill <span class="field-required-star">*</span></label>
                                                                            <select name="sport_skill_type" id="sport_skill_type">
                                                                                <option value="football">Football</option>
                                                                                <option value="karate">Karate</option>
                                                                                <option value="baseball">Baseball</option>
                                                                                <option value="basketball">Basketball</option>
                                                                                <option value="tennis">Tennis</option>
                                                                                <option value="jodo">Jodo</option>
                                                                                <option value="swimming">Swimming</option>
                                                                                <option value="gymnastics">Gymnastics</option>
                                                                                <option value="wrestling">Wrestling</option>
                                                                                <option value="sumo">Sumo</option>
                                                                                <option value="volleyball">Volleyball</option>
                                                                                <option value="golf">Golf</option>
                                                                                <option value="athletics">Athletics</option>
                                                                                <option value="boxing">Boxing</option>
                                                                                <option value="surfing">Surfing</option>
                                                                                <option value="skiing">Skiing</option>
                                                                                <option value="yoga">Yoga</option>
                                                                                <option value="badminton">Badminton</option>
                                                                                <option value="table_tennis">Table Tennis</option>
                                                                                <option value="horse_riding">Horse Riding</option>
                                                                                <option value="kick_boxing">Kick Boxing</option>
                                                                                <option value="cricket">Cricket</option>
                                                                                <option value="cycling">Cycling</option>
                                                                                <option value="handball">Handball</option>
                                                                                <option value="hockey">Hockey</option>
                                                                                <option value="trx">TRX</option>
                                                                                <option value="body_building">Body Building</option>
                                                                                <option value="snooker_and_pool">Snooker and Pool</option>
                                                                                <option value="darts">Darts</option>
                                                                                <option value="other">Other</option>
                                                                            </select>
                                                                            <i class="icon-arrow-down"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field-error-msg" id="field_error_sport_skill_type"></div>
                                                                </div>

                                                                <!-- sub skill dance -->
                                                                <div data-dependency="#skills_type" data-dependency-value="dance_skill">
                                                                    <div class="field field-type-select table-visible"
                                                                         data-required="true" data-field-defualt-text="Select Item" data-col-name="tags"
                                                                         data-btn-submit-text="Select" data-type="select" data-field-search="true">
                                                                        <div class="field-content">
                                                                            <label for="dance_skill_type">Dance Skill <span class="field-required-star">*</span></label>
                                                                            <select name="dance_skill_type" id="dance_skill_type">
                                                                                <option value="hip_hop_dance">Hip hop dance</option>
                                                                                <option value="ballet">Ballet</option>
                                                                                <option value="tap_dance">Tap dance</option>
                                                                                <option value="modern_dance">Modern Dance</option>
                                                                                <option value="ballroom">Ballroom</option>
                                                                                <option value="breakdancing">Breakdancing</option>
                                                                                <option value="salsa">Salsa</option>
                                                                                <option value="street_dance">Street dance</option>
                                                                                <option value="belly_dance">Belly dance</option>
                                                                                <option value="bharatanatyam">Bharatanatyam</option>
                                                                                <option value="cuban_rumba">Cuban rumba</option>
                                                                                <option value="samba">Samba</option>
                                                                                <option value="mambo">Mambo</option>
                                                                                <option value="foxtrot">Foxtrot</option>
                                                                                <option value="swing_music">Swing music</option>
                                                                                <option value="cha-cha-cha">Cha-cha-cha</option>
                                                                                <option value="waltz">Waltz</option>
                                                                                <option value="folk_dance">Folk dance</option>
                                                                                <option value="contemporary_dance">Contemporary dance</option>
                                                                                <option value="jazz_dance">Jazz dance</option>
                                                                                <option value="latin_dance">Latin dance</option>
                                                                                <option value="other">Other</option>
                                                                            </select>
                                                                            <i class="icon-arrow-down"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field-error-msg" id="field_error_dance_skill_type"></div>
                                                                </div>

                                                                <!-- sub skill singing -->
                                                                <div data-dependency="#skills_type" data-dependency-value="singing_skill">
                                                                    <div class="field field-type-select  table-visible"
                                                                         data-required="true" data-field-defualt-text="Select Item" data-col-name="tags"
                                                                         data-btn-submit-text="Select" data-type="select" data-field-search="true">
                                                                        <div class="field-content">
                                                                            <label for="singing_skill_type">Singing Skill <span class="field-required-star">*</span></label>
                                                                            <select name="singing_skill_type" id="singing_skill_type">
                                                                                <option value="disco">Disco</option>
                                                                                <option value="techno">Techno</option>
                                                                                <option value="reggae">Reggae</option>
                                                                                <option value="metal">Metal</option>
                                                                                <option value="r&b">R&B</option>
                                                                                <option value="classical_music">Classical music</option>
                                                                                <option value="pop">Pop</option>
                                                                                <option value="blues">Blues</option>
                                                                                <option value="rock">Rock</option>
                                                                                <option value="country">Country</option>
                                                                                <option value="hip_hop">Hip hop</option>
                                                                                <option value="jazz">Jazz</option>
                                                                                <option value="other">Other</option>
                                                                            </select>
                                                                            <i class="icon-arrow-down"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field-error-msg" id="field_error_singing_skill_type"></div>
                                                                </div>

                                                                <!-- sub skill acting -->
                                                                <div data-dependency="#skills_type" data-dependency-value="acting_skill">
                                                                    <div class="field field-type-select table-visible"
                                                                         data-required="true" data-field-defualt-text="Select Item" data-col-name="tags"
                                                                         data-btn-submit-text="Select" data-type="select" data-field-search="true">
                                                                        <div class="field-content">
                                                                            <label for="acting_skill_type">Acting Skill <span class="field-required-star">*</span></label>
                                                                            <select name="acting_skill_type" id="acting_skill_type">
                                                                                <option value="communication">Communication</option>
                                                                                <option value="creativity">Creativity</option>
                                                                                <option value="memorisation_work">Memorisation work</option>
                                                                                <option value="physical_performance">Physical performance</option>
                                                                                <option value="theoretical_knowledge">Theoretical knowledge</option>
                                                                                <option value="teamwork">Teamwork</option>
                                                                                <option value="other">Other</option>
                                                                            </select>
                                                                            <i class="icon-arrow-down"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field-error-msg" id="field_error_acting_skill_type"></div>
                                                                </div>

                                                                <!-- sub skill musical -->
                                                                <div data-dependency="#skills_type" data-dependency-value="musical_instrument_skill">
                                                                    <div class="field field-type-select table-visible"
                                                                         data-required="true" data-field-defualt-text="Select Item" data-col-name="tags"
                                                                         data-btn-submit-text="Select" data-type="select" data-field-search="true">
                                                                        <div class="field-content">
                                                                            <label for="musical_instrument_skill_type">Musical Instrument Skill <span class="field-required-star">*</span></label>
                                                                            <select name="musical_instrument_skill_type" id="musical_instrument_skill_type">
                                                                                <option value="piano">Piano</option>
                                                                                <option value="guitar">guitar</option>
                                                                                <option value="saxophone">Saxophone</option>
                                                                                <option value="ukulele">Ukulele</option>
                                                                                <option value="violin">Violin</option>
                                                                                <option value="electric_guitars">Electric Guitars</option>
                                                                                <option value="drum">Drum</option>
                                                                                <option value="trumpet">Trumpet</option>
                                                                                <option value="cello">Cello</option>
                                                                                <option value="clarinet">Clarinet</option>
                                                                                <option value="accordion">Accordion</option>
                                                                                <option value="xylophone">Xylophone</option>
                                                                                <option value="electronic_keyboard">Electronic Keyboard</option>
                                                                                <option value="trombone">Trombone</option>
                                                                                <option value="flute">Flute</option>
                                                                                <option value="oboe">Oboe</option>
                                                                                <option value="harmonica">Harmonica</option>
                                                                                <option value="bass_guitar">Bass Guitar</option>
                                                                                <option value="harp">Harp</option>
                                                                                <option value="other">Other</option>
                                                                            </select>
                                                                            <i class="icon-arrow-down"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field-error-msg" id="field_error_musical_instrument_skill_type"></div>
                                                                </div>

                                                                <!-- sub skill performance -->
                                                                <div data-dependency="#skills_type" data-dependency-value="performance_skill">
                                                                    <div class="field field-type-select table-visible"
                                                                         data-required="true" data-field-defualt-text="Select Item" data-col-name="tags"
                                                                         data-btn-submit-text="Select" data-type="select" data-field-search="true">
                                                                        <div class="field-content">
                                                                            <label for="performance_skill_type">Performance Skill <span class="field-required-star">*</span></label>
                                                                            <select name="performance_skill_type" id="performance_skill_type">
                                                                                <option value="voice_and_speech_skills">Voice and Speech Skills</option>
                                                                                <option value="physical_skills">Physical Skills</option>
                                                                                <option value="character_development">Character Development</option>
                                                                                <option value="understanding_of_text">Understanding of Text</option>
                                                                                <option value="emotional_availability">Emotional Availability</option>
                                                                                <option value="collaboration_skills">Collaboration Skills</option>
                                                                                <option value="improvisation_skills">Improvisation Skills</option>
                                                                                <option value="discipline_and_professionalism">Discipline and Professionalism</option>
                                                                                <option value="auditioning_skills">Auditioning Skills</option>
                                                                                <option value="stage_presence">Stage Presence</option>
                                                                                <option value="other">Other</option>
                                                                            </select>
                                                                            <i class="icon-arrow-down"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field-error-msg" id="field_error_performance_skill_type"></div>
                                                                </div>

                                                                <!-- sub skill driving -->
                                                                <div data-dependency="#skills_type" data-dependency-value="driving_skill">
                                                                    <div class="field field-type-select table-visible"
                                                                         data-required="true" data-field-defualt-text="Select Item" data-col-name="tags"
                                                                         data-btn-submit-text="Select" data-type="select" data-field-search="true">
                                                                        <div class="field-content">
                                                                            <label for="driving_skill_type">Driving Skill <span class="field-required-star">*</span></label>
                                                                            <select name="driving_skill_type" id="driving_skill_type">
                                                                                <option value="motorcycle_license">Motorcycle License</option>
                                                                                <option value="passenger_vehicle_license">Passenger Vehicle License</option>
                                                                                <option value="commercial_driver's_license">Commercial Driver's License</option>
                                                                                <option value="bus/minibus_license">Bus/Minibus License</option>
                                                                                <option value="heavy_vehicle_license">Heavy Vehicle License</option>
                                                                                <option value="trailer_license">Trailer License</option>
                                                                                <option value="special_vehicle_licenses">Special Vehicle Licenses</option>
                                                                                <option value="light_aircraft_pilot_licence_(lapl)">light aircraft pilot licence (LAPL)</option>
                                                                                <option value="the_private_pilot_licence_(ppl)">the private pilot licence (PPL)</option>
                                                                                <option value="sailplane_pilot_licence_(spl)">sailplane pilot licence (SPL)</option>
                                                                                <option value="balloon_pilot_licence_(bpl)">balloon pilot licence (BPL)</option>
                                                                                <option value="other">Other</option>
                                                                            </select>
                                                                            <i class="icon-arrow-down"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field-error-msg" id="field_error_driving_skill_type"></div>
                                                                </div>

                                                                <!-- sub skill culinary -->
                                                                <div data-dependency="#skills_type" data-dependency-value="culinary_skill">
                                                                    <div class="field field-type-select table-visible"
                                                                         data-required="true" data-field-defualt-text="Select Item" data-col-name="tags"
                                                                         data-btn-submit-text="Select" data-type="select" data-field-search="true">
                                                                        <div class="field-content">
                                                                            <label for="culinary_skill_type">Culinary Skill <span class="field-required-star">*</span></label>
                                                                            <select name="culinary_skill_type" id="culinary_skill_type">
                                                                                <option value="basic_cooking">Basic Cooking</option>
                                                                                <option value="advanced_culinary_techniques">Advanced Culinary Techniques</option>
                                                                                <option value="baking_&_pastry">Baking & Pastry</option>
                                                                                <option value="international_cuisine">International Cuisine</option>
                                                                                <option value="diet-specific_cooking">Diet-Specific Cooking</option>
                                                                                <option value="beverage_&_mixology">Beverage & Mixology</option>
                                                                                <option value="plating_skills">Plating Skills</option>
                                                                                <option value="other">Other</option>
                                                                            </select>
                                                                            <i class="icon-arrow-down"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field-error-msg" id="field_error_culinary_skill_type"></div>
                                                                </div>

                                                                <!-- sub skill visual art -->
                                                                <div data-dependency="#skills_type" data-dependency-value="visual_art_skill">
                                                                    <div class="field field-type-select table-visible"
                                                                         data-required="true" data-field-defualt-text="Select Item" data-col-name="tags"
                                                                         data-btn-submit-text="Select" data-type="select" data-field-search="true">
                                                                        <div class="field-content">
                                                                            <label for="visual_art_skill_type">Visual Art Skill <span class="field-required-star">*</span></label>
                                                                            <select name="visual_art_skill_type" id="visual_art_skill_type">
                                                                                <option value="drawing">Drawing</option>
                                                                                <option value="painting">Painting</option>
                                                                                <option value="printmaking">Printmaking</option>
                                                                                <option value="sculpture">Sculpture</option>
                                                                                <option value="mixed_media">Mixed Media</option>
                                                                                <option value="digital_art">Digital Art</option>
                                                                                <option value="photography">Photography</option>
                                                                                <option value="textile_and_fiber_art">Textile and Fiber Art</option>
                                                                                <option value="calligraphy_&_lettering">Calligraphy & Lettering</option>
                                                                                <option value="ceramics_&_pottery">Ceramics & Pottery</option>
                                                                                <option value="other">Other</option>
                                                                            </select>
                                                                            <i class="icon-arrow-down"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field-error-msg" id="field_error_visual_art_skill_type"></div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- other sub skill sport -->
                                                    <div class="repeater-row" data-dependency="#sport_skill_type" data-dependency-value="other">
                                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                                            <div class="field-content">
                                                                <label for="sport_other_skills">Sport Skill Name <span class="field-required-star">*</span></label>
                                                                <input type="text" name="sport_other_skills" id="sport_other_skills">
                                                            </div>
                                                        </div>
                                                        <div class="field-error-msg" id="field_error_sport_other_skills"></div>
                                                    </div>

                                                    <!-- other sub skill dance -->
                                                    <div class="repeater-row" data-dependency="#dance_skill_type" data-dependency-value="other">
                                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                                            <div class="field-content">
                                                                <label for="dance_other_skills">Dance Skill Name <span class="field-required-star">*</span></label>
                                                                <input type="text" name="dance_other_skills" id="dance_other_skills">
                                                            </div>
                                                        </div>
                                                        <div class="field-error-msg" id="field_error_dance_other_skills"></div>
                                                    </div>

                                                    <!-- other sub skill singing -->
                                                    <div class="repeater-row" data-dependency="#singing_skill_type" data-dependency-value="other">
                                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                                            <div class="field-content">
                                                                <label for="singing_other_skills">Singing Skill Name <span class="field-required-star">*</span></label>
                                                                <input type="text" name="singing_other_skills" id="singing_other_skills">
                                                            </div>
                                                        </div>
                                                        <div class="field-error-msg" id="field_error_singing_other_skills"></div>
                                                    </div>

                                                    <!-- other sub skill acting -->
                                                    <div class="repeater-row" data-dependency="#acting_skill_type" data-dependency-value="other">
                                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                                            <div class="field-content">
                                                                <label for="acting_other_skills">Acting Skill Name <span class="field-required-star">*</span></label>
                                                                <input type="text" name="acting_other_skills" id="acting_other_skills">
                                                            </div>
                                                        </div>
                                                        <div class="field-error-msg" id="field_error_acting_other_skills"></div>
                                                    </div>

                                                    <!-- other sub skill musical -->
                                                    <div class="repeater-row" data-dependency="#musical_instrument_skill_type" data-dependency-value="other">
                                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                                            <div class="field-content">
                                                                <label for="musical_instrument_other_skills">Musical Instrument Skill Name <span class="field-required-star">*</span></label>
                                                                <input type="text" name="musical_instrument_other_skills" id="musical_instrument_other_skills">
                                                            </div>
                                                        </div>
                                                        <div class="field-error-msg" id="field_error_musical_instrument_other_skills"></div>
                                                    </div>

                                                    <!-- other sub skill performance -->
                                                    <div class="repeater-row" data-dependency="#performance_skill_type" data-dependency-value="other">
                                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                                            <div class="field-content">
                                                                <label for="performance_other_skills">Performance Skill Name <span class="field-required-star">*</span></label>
                                                                <input type="text" name="performance_other_skills" id="performance_other_skills">
                                                            </div>
                                                        </div>
                                                        <div class="field-error-msg" id="field_error_performance_other_skills"></div>
                                                    </div>

                                                    <!-- other sub skill driving -->
                                                    <div class="repeater-row" data-dependency="#driving_skill_type" data-dependency-value="other">
                                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                                            <div class="field-content">
                                                                <label for="driving_other_skills">Driving Skill Name <span class="field-required-star">*</span></label>
                                                                <input type="text" name="driving_other_skills" id="driving_other_skills">
                                                            </div>
                                                        </div>
                                                        <div class="field-error-msg" id="field_error_driving_other_skills"></div>
                                                    </div>

                                                    <!-- other sub skill culinary -->
                                                    <div class="repeater-row" data-dependency="#culinary_skill_type" data-dependency-value="other">
                                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                                            <div class="field-content">
                                                                <label for="culinary_other_skills">Culinary Skill Name <span class="field-required-star">*</span></label>
                                                                <input type="text" name="culinary_other_skills" id="culinary_other_skills">
                                                            </div>
                                                        </div>
                                                        <div class="field-error-msg" id="field_error_culinary_other_skills"></div>
                                                    </div>

                                                    <!-- other sub skill visual art -->
                                                    <div class="repeater-row" data-dependency="#visual_art_skill_type" data-dependency-value="other">
                                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                                            <div class="field-content">
                                                                <label for="visual_art_other_skills">Visual Art Skill Name <span class="field-required-star">*</span></label>
                                                                <input type="text" name="visual_art_other_skills" id="visual_art_other_skills">
                                                            </div>
                                                        </div>
                                                        <div class="field-error-msg" id="field_error_visual_art_other_skills"></div>
                                                    </div>

                                                    <!-- description -->
                                                    <div class="repeater-row">
                                                        <div class="field field-type-text-area" data-type="textarea" data-max-length="1000">
                                                            <div class="field-content">
                                                                <label for="skills_description">Skill Description</label>
                                                                <textarea name="skills_description" id="skills_description" rows="5"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- media -->
                                                    <div class="repeater-row tabs" data-active="skill_photo">
                                                        <ul class="tabs-item tabs-item-icon">
                                                            <li id="skill_photo">
                                                            <span>
                                                                <i class="icon-gallery"></i>
                                                                Photo
                                                            </span>
                                                            </li>
                                                            <li id="skill_video">
                                                            <span>
                                                                <i class="icon-play-circle"></i>
                                                                Video
                                                            </span>
                                                            </li>
                                                            <li id="skill_audio">
                                                            <span>
                                                                <i class="icon-microphone-2"></i>
                                                                Audio
                                                            </span>
                                                            </li>
                                                        </ul>
                                                        <div class="tabs-contents">
                                                            <div class="tab-content-item" data-tab-target="skill_photo">
                                                                <div class="field field-type-upload" data-type="upload">
                                                                    <div class="upload-drop-zone" data-limit-count="5" data-limit-size="20" data-ratio="3/4,4/3" data-accept=".png,.jpg">
                                                                        <input type="hidden" class="input-drop-zone" name="photos" id="skill_photos">
                                                                        <label>Your Photos</label>
                                                                        <i class="icon-upload"></i>
                                                                        <div class="upload-title">
                                                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span> photos
                                                                        </div>
                                                                        <div class="upload-description">
                                                                            Allowed format: PNG, JPG (Up to: <span class="limit-count">5</span> photos/100 Mb (20 Mb per photo))
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="upload-drop-zone-file grid col-count-3"></div>
                                                            </div>
                                                            <div class="tab-content-item" data-tab-target="skill_video">
                                                                <div class="field field-type-upload" data-type="upload">
                                                                    <div class="upload-drop-zone" data-limit-count="5" data-limit-size="70" data-accept=".mp4">
                                                                        <input type="hidden" class="input-drop-zone" name="videos" id="skill_videos">
                                                                        <label>Your Photos</label>
                                                                        <i class="icon-upload"></i>
                                                                        <div class="upload-title">
                                                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span> videos
                                                                        </div>
                                                                        <div class="upload-description">
                                                                            Allowed format: MP4 (Up to: <span class="limit-count">5</span> photos/350 Mb (70 Mb per video))
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="upload-drop-zone-file grid col-count-3"></div>
                                                            </div>
                                                            <div class="tab-content-item" data-tab-target="skill_audio">
                                                                <div class="field field-type-upload" data-type="upload">
                                                                    <div class="upload-drop-zone" data-limit-count="5" data-limit-size="70" data-accept=".mp3">
                                                                        <input type="hidden" class="input-drop-zone" name="audios" id="skill_audios">
                                                                        <label>Your Photos</label>
                                                                        <i class="icon-upload"></i>
                                                                        <div class="upload-title">
                                                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span> audios
                                                                        </div>
                                                                        <div class="upload-description">
                                                                            Allowed format: MP3 (Up to: <span class="limit-count">5</span> photos/100 Mb (20 Mb per audio))
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="upload-drop-zone-file grid col-count-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- job experiences -->
                                    <div class="form-section">
                                        <div class="form-section-label"><span>Job Experiences <span class="field-required-star">*</span></span></div>
                                        <div class="form-section-content">

                                            <!-- job experiences table -->
                                            <div class="table-repeater" id="table_job_experiences_manual" data-class="job-exp-table-repeater-popup" data-exclusive="type" data-exclusive-value="no_job_experience" data-exclusive-empty-element-check="job_experiences_pdf" data-name="Job Experiences" data-required="true">
                                                <input type="hidden" name="job_experiences" id="job_experiences" class="table-repeater-input" value=''>
                                                <div class="repeater-table">
                                                    <table>
                                                        <thead></thead>
                                                        <tbody></tbody>
                                                    </table>
                                                </div>
                                                <div class="repeater-form">

                                                    <!-- switch mode manual/by pdf -->
                                                    <div class="repeater-row tabs" data-active="job_exp_switch_1" >
                                                        <ul class="tabs-item tabs-item-icon">
                                                            <li class="btn-job-exp-manual" id="job_exp_switch_1">
                                                                Manually
                                                            </li>
                                                            <li class="btn-job-exp-pdf" id="job_exp_switch_2">
                                                                PDF
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <!-- type -->
                                                    <div class="repeater-row">
                                                        <div class="field field-type-select table-visible"
                                                             data-required="true" data-field-defualt-text="Select Item"
                                                             data-btn-submit-text="Select" data-type="select" data-field-search="true">
                                                            <div class="field-content">
                                                                <label for="job_experience_type">Job Experience Type <span class="field-required-star">*</span></label>
                                                                <select name="type" id="job_experience_type">
                                                                    <option value="no_job_experience">No Job Experience</option>
                                                                    <option value="film">Film</option>
                                                                    <option value="drama">Drama</option>
                                                                    <option value="tv_series">TV Series</option>
                                                                    <option value="educational">Educational</option>
                                                                    <option value="radio">Radio</option>
                                                                    <option value="cm">CM</option>
                                                                    <option value="teather">Teather</option>
                                                                    <option value="live_performances">Live Performances</option>
                                                                    <option value="magazine_books">Magazine/Books</option>
                                                                    <option value="voice_acting">Voice acting</option>
                                                                    <option value="dvd_blue_ray_cd">DVD/Blue-ray/CD</option>
                                                                    <option value="music_activity">Music activity</option>
                                                                    <option value="mc">MC</option>
                                                                    <option value="web_content">Web Content</option>
                                                                    <option value="newspaper">Newspaper</option>
                                                                    <option value="other">Other</option>
                                                                </select>
                                                                <i class="icon-arrow-down"></i>
                                                            </div>
                                                        </div>
                                                        <div class="field-error-msg" id="field_error_job_experience_type"></div>
                                                    </div>

                                                    <!-- other type -->
                                                    <div data-dependency="#job_experience_type" data-dependency-value="other">
                                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                                            <div class="field-content">
                                                                <label for="other_job_experience_type">Other Job Experience Type <span class="field-required-star">*</span></label>
                                                                <input type="text" name="other_type" id="other_job_experience_type">
                                                            </div>
                                                        </div>
                                                        <div class="field-error-msg" id="field_error_other_job_experience_type"></div>
                                                    </div>

                                                    <!-- date -->
                                                    <div class="repeater-row" data-dependency="#job_experience_type" data-dependency-value="no_job_experience" data-dependency-is-not="true">
                                                        <div class="row">

                                                            <!-- year -->
                                                            <div class="col-6">
                                                                <div class="field field-type-select wheel-mode table-visible"
                                                                     data-field-defualt-text=" " data-type="select" data-btn-submit-text="Select">
                                                                    <div class="field-content">
                                                                        <label for="year">Year</label>
                                                                        <select name="year" id="year">
                                                                            <option value="2022">2022</option>
                                                                            <option value="2021">2021</option>
                                                                            <option value="2020">2020</option>
                                                                            <option value="2019">2019</option>
                                                                            <option value="2018">2018</option>
                                                                            <option value="2017">2017</option>
                                                                            <option value="2016">2016</option>
                                                                            <option value="2015">2015</option>
                                                                            <option value="2014">2014</option>
                                                                            <option value="2013">2013</option>
                                                                            <option value="2012">2012</option>
                                                                            <option value="2011">2010</option>
                                                                            <option value="2010">2010</option>
                                                                            <option value="2009">2009</option>
                                                                            <option value="2008">2008</option>
                                                                            <option value="2007">2007</option>
                                                                            <option value="2006">2006</option>
                                                                            <option value="2005">2005</option>
                                                                            <option value="2004">2004</option>
                                                                            <option value="2003">2003</option>
                                                                            <option value="2002">2002</option>
                                                                            <option value="2001">2001</option>
                                                                            <option value="2001">2000</option>
                                                                        </select>
                                                                        <i class="icon-arrow-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- month -->
                                                            <div class="col-6">
                                                                <div class="field field-type-select wheel-mode table-visible"
                                                                     data-field-defualt-text=" "
                                                                     data-type="select" data-btn-submit-text="Select">
                                                                    <div class="field-content">
                                                                        <label for="month">Month</label>
                                                                        <select name="month" id="month">
                                                                            <option value="1">1 (January)</option>
                                                                            <option value="2">2 (February)</option>
                                                                            <option value="3">3 (March)</option>
                                                                            <option value="4">4 (April)</option>
                                                                            <option value="5">5 (May)</option>
                                                                            <option value="6">6 (June)</option>
                                                                            <option value="7">7 (July)</option>
                                                                            <option value="8">8 (August)</option>
                                                                            <option value="9">9 (September)</option>
                                                                            <option value="10">10 (October)</option>
                                                                            <option value="11">11 (November)</option>
                                                                            <option value="12">12 (December)</option>
                                                                        </select>
                                                                        <i class="icon-arrow-down"></i>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <!-- title -->
                                                    <div class="repeater-row" data-dependency="#job_experience_type" data-dependency-value="no_job_experience" data-dependency-is-not="true">
                                                        <div class="field field-type-nr-input table-visible" data-type="text" data-required="true">
                                                            <div class="field-content">
                                                                <label for="title">Job Experience Title <span class="field-required-star">*</span></label>
                                                                <input type="text" name="title" id="title">
                                                            </div>
                                                        </div>
                                                        <div class="field-error-msg" id="field_error_title"></div>
                                                    </div>

                                                    <!-- description -->
                                                    <div class="repeater-row" data-dependency="#job_experience_type" data-dependency-value="no_job_experience" data-dependency-is-not="true">
                                                        <div class="field field-type-text-area" data-required="true" data-type="textarea" data-max-length="1000">
                                                            <div class="field-content">
                                                                <label for="description">Job Experience Description <span class="field-required-star">*</span></label>
                                                                <textarea name="description" id="description" rows="5"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="field-error-msg" id="field_error_description"></div>
                                                    </div>

                                                    <!-- media -->
                                                    <div class="repeater-row tabs" data-active="job_exp_photo" data-dependency="#job_experience_type" data-dependency-value="no_job_experience" data-dependency-is-not="true">
                                                        <div class="field-hint bottom-space">Increase your chances of receiving more job offers by uploading media that showcase your job experiences.</div>
                                                        <ul class="tabs-item tabs-item-icon">
                                                            <li id="job_exp_photo">
                                                            <span>
                                                                <i class="icon-gallery"></i>
                                                                Photo
                                                            </span>
                                                            </li>
                                                            <li id="job_exp_video">
                                                            <span>
                                                                <i class="icon-play-circle"></i>
                                                                Video
                                                            </span>
                                                            </li>
                                                            <li id="job_exp_audio">
                                                            <span>
                                                                <i class="icon-microphone-2"></i>
                                                                Audio
                                                            </span>
                                                            </li>
                                                        </ul>
                                                        <div class="tabs-contents">
                                                            <div class="tab-content-item" data-tab-target="job_exp_photo">
                                                                <div class="field field-type-upload" data-type="upload">
                                                                    <div class="upload-drop-zone" data-limit-count="5" data-limit-size="20" data-ratio="3/4,4/3" data-accept=".png,.jpg">
                                                                        <input type="hidden" class="input-drop-zone" name="photos" id="job_exp_photos">
                                                                        <label>Your Photos</label>
                                                                        <i class="icon-upload"></i>
                                                                        <div class="upload-title">
                                                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span> photos
                                                                        </div>
                                                                        <div class="upload-description">
                                                                            Allowed format: PNG, JPG (Up to: <span class="limit-count">5</span> photos/100 Mb (20 Mb per photo))
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="upload-drop-zone-file grid col-count-3"></div>
                                                            </div>
                                                            <div class="tab-content-item" data-tab-target="job_exp_video">
                                                                <div class="field field-type-upload" data-type="upload">
                                                                    <div class="upload-drop-zone" data-limit-count="5" data-limit-size="70" data-accept=".mp4">
                                                                        <input type="hidden" class="input-drop-zone" name="videos" id="job_exp_videos">
                                                                        <label>Your Video</label>
                                                                        <i class="icon-upload"></i>
                                                                        <div class="upload-title">
                                                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span> videos
                                                                        </div>
                                                                        <div class="upload-description">
                                                                            Allowed format: MP4 (Up to: <span class="limit-count">5</span> videos/350 Mb (70 Mb per video))
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="upload-drop-zone-file grid col-count-3"></div>
                                                            </div>
                                                            <div class="tab-content-item" data-tab-target="job_exp_audio">
                                                                <div class="field field-type-upload" data-type="upload">
                                                                    <div class="upload-drop-zone" data-limit-count="5" data-limit-size="20" data-accept=".mp3">
                                                                        <input type="hidden" class="input-drop-zone" name="audios" id="job_exp_audios">
                                                                        <label>Your Audio</label>
                                                                        <i class="icon-upload"></i>
                                                                        <div class="upload-title">
                                                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span> audios
                                                                        </div>
                                                                        <div class="upload-description">
                                                                            Allowed format: MP3 (Up to: <span class="limit-count">5</span> audios/100 Mb (20 Mb per audio))
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="upload-drop-zone-file grid col-count-2"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <!-- job experiences pdf files -->
                                            <div class="table-repeater" id="table_job_experiences_pdf" data-class="job-exp-table-repeater-popup" data-name="Job Experiences" data-required="true"
                                                 data-dependency="#job_experiences_pdf" data-dependency-value="tempCheck" data-deep-check="false">
                                                <input type="hidden" name="job_experiences_pdf" id="job_experiences_pdf" class="table-repeater-input" value=''>
                                                <div class="repeater-table">
                                                    <table>
                                                        <thead></thead>
                                                        <tbody></tbody>
                                                    </table>
                                                </div>
                                                <div class="repeater-form">

                                                    <!-- switch mode manual/by pdf -->
                                                    <div class="repeater-row tabs" data-active="job_exp_switch_4" >
                                                        <ul class="tabs-item tabs-item-icon">
                                                            <li class="btn-job-exp-manual" id="job_exp_switch_3">
                                                                Manually
                                                            </li>
                                                            <li class="btn-job-exp-pdf" id="job_exp_switch_4">
                                                                PDF
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <!-- hint -->
                                                    <div class="field-hint">Enter your job experiences by uploading your resume here.</div>

                                                    <!-- upload -->
                                                    <div class="repeater-row">
                                                        <div class="field field-type-upload table-visible" data-type="upload" data-required="true">
                                                            <div class="upload-drop-zone" data-limit-count="1" data-limit-size="20" data-accept=".pdf">
                                                                <input type="hidden" class="input-drop-zone" name="job_exp_pdf" id="job_exp_pdf">
                                                                <label>Job Experience PDF</label>
                                                                <i class="icon-upload"></i>
                                                                <div class="upload-title">
                                                                    <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span> pdf files <span class="field-required-star">*</span>
                                                                </div>
                                                                <div class="upload-description">
                                                                    Allowed format: PDF (Up to: 1 file/20 Mb)
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-error-msg" id="field_error_job_exp_pdf"></div>
                                                        <div class="upload-drop-zone-file single full"></div>
                                                    </div>

                                                </div>
                                            </div>

                                            <!-- add new button -->
                                            <button type="button" class="btn btn-full btn-icon-left" id="job_experience_open_main_popup">
                                            <span>
                                                <i class="icon-add"></i>
                                                Add New Job Experiences
                                            </span>
                                            </button>

                                        </div>
                                    </div>

                                </div>

                                <!-- step footer -->
                                <div class="step-footer">
                                    <div class="row">
                                        <div class="col-auto">
                                            <a href="#" class="save">Save & Exit</a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="./apply-as-a-model-form-step-2" class="btn">
                                                Back
                                            </a>
                                            <button type="submit" class="btn btn-primary btn-icon-right next-step">
                                            <span>
                                                Next
                                                <i class="icon-arrow-right-1"></i>
                                            </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </form>
            </div>

        </div>
    </main>


@endsection
