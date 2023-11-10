@extends('dashboard.layout')

@section('content-dashboard')

    <body class="page-user-info-edit edit-page edit-page-other enable-page-actions">

    @include('dashboard.header')

    <!-- content -->
    <main id="main">
        @include('dashboard.sidebar')
        <div id="ds_content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="white-box">
                            <div class="white-box-header">
                                <div class="white-box-title">Other</div>
                            </div>
                            <div class="white-box-content">

                                <!-- Do you accept the offer if an audition is required? -->
                                <div class="form-section reverse">
                                    <div class="form-section-label column-direction">
                                        <span>Do you accept the offer if an audition is required?</span>
                                        <div class="field-hint">If you select 'No', you won't receive job offers that require an audition.</div>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="field-group-validations" data-group-validation-relation="and">
                                            <div class="row">
                                                <div class="col-auto">

                                                    <!-- Yes -->
                                                    <div class="field field-type-radio" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="yes" name="audition_acceptance" class="audition_acceptance">
                                                                <span class="checkmark"></span>
                                                                Yes
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- no -->
                                                    <div class="field field-type-radio" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="no" name="audition_acceptance" class="audition_acceptance">
                                                                <span class="checkmark"></span>
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="field-error-msg"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Do you accept the offer that includes a business trip to other cities? -->
                                <div class="form-section reverse">
                                    <div class="form-section-label column-direction">
                                        <span>Do you accept the offer that includes a business trip to other cities?</span>
                                        <div class="field-hint">If you select 'No', you won't receive job offers that require business trips.</div>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="field-group-validations" data-group-validation-relation="and">
                                            <div class="row">
                                                <div class="col-auto">

                                                    <!-- Yes -->
                                                    <div class="field field-type-radio" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="yes" name="business_trip_acceptance" class="business_trip_acceptance">
                                                                <span class="checkmark"></span>
                                                                Yes
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- no -->
                                                    <div class="field field-type-radio" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="no" name="business_trip_acceptance" class="business_trip_acceptance">
                                                                <span class="checkmark"></span>
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="field-error-msg"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- What is your minimum acceptable payment per day (about 8 hours)? -->
                                <div class="form-section reverse">
                                    <div class="form-section-label column-direction">
                                        <span>What is your minimum acceptable payment per day (about 8 hours)?</span>
                                        <div class="field-hint">You won't receive job offers with a value below your minimum acceptable payment.</div>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="field field-type-nr-input" data-type="number">
                                            <i class="icon-yen no-padding symbol"></i>
                                            <div class="field-content">
                                                <label for="min_daily_payment">Payment amount</label>
                                                <input type="number" name="min_daily_payment" class="input-range-controller" id="min_daily_payment" min="0" value="">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_min_daily_payment"></div>
                                    </div>
                                </div>

                                <!-- Would you decline the job with lower payment, even if it is an offer from a famous brand? -->
                                <div class="form-section reverse">
                                    <div class="form-section-label column-direction">
                                        <span>Would you decline the job with lower payment, even if it is an offer from a famous brand?</span>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="field-group-validations" data-group-validation-relation="and">
                                            <div class="row">
                                                <div class="col-auto">

                                                    <!-- Yes -->
                                                    <div class="field field-type-radio" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="yes" name="decline_lower_paying_famous_brand" class="decline_lower_paying_famous_brand">
                                                                <span class="checkmark"></span>
                                                                Yes
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- no -->
                                                    <div class="field field-type-radio" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="no" name="decline_lower_paying_famous_brand" class="decline_lower_paying_famous_brand">
                                                                <span class="checkmark"></span>
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="field-error-msg"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Would you decline the job with lower payment, even if it is an offer from your favorite brand? -->
                                <div class="form-section reverse">
                                    <div class="form-section-label column-direction">
                                        <span>Would you decline the job with lower payment, even if it is an offer from your favorite brand?</span>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="field-group-validations" data-group-validation-relation="and">
                                            <div class="row">
                                                <div class="col-auto">

                                                    <!-- Yes -->
                                                    <div class="field field-type-radio" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="yes" name="decline_lower_paying_favorite_brand" class="decline_lower_paying_favorite_brand">
                                                                <span class="checkmark"></span>
                                                                Yes
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- no -->
                                                    <div class="field field-type-radio" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="no" name="decline_lower_paying_favorite_brand" class="decline_lower_paying_favorite_brand">
                                                                <span class="checkmark"></span>
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="field-error-msg"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- What is your favorite brand? -->
                                <div class="form-section reverse" data-dependency=".decline_lower_paying_favorite_brand" data-dependency-value="yes">
                                    <div class="form-section-label column-direction">
                                        <span>What is your favorite brand?</span>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="field field-type-nr-input" data-type="text">
                                            <div class="field-content">
                                                <label for="your-favorite-brand">Your Favorite Brand</label>
                                                <input type="text" name="your-favorite-brand" id="your-favorite-brand" value="">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_your-favorite-brand"></div>
                                    </div>
                                </div>

                                <!-- Do you have any pre-existing medical conditions? -->
                                <div class="form-section reverse">
                                    <div class="form-section-label column-direction">
                                        <span>Do you have any pre-existing medical conditions?</span>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="field-group-validations" data-group-validation-relation="and">
                                            <div class="row">
                                                <div class="col-auto">

                                                    <!-- Yes -->
                                                    <div class="field field-type-radio" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="yes" name="medical_conditions" class="medical_conditions">
                                                                <span class="checkmark"></span>
                                                                Yes
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- no -->
                                                    <div class="field field-type-radio" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="no" name="medical_conditions" class="medical_conditions">
                                                                <span class="checkmark"></span>
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="field-error-msg"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Medical Condition Description -->
                                <div class="form-section reverse" data-dependency=".medical_conditions" data-dependency-value="yes">
                                    <div class="form-section-label column-direction">
                                        <span>Medical Condition Description</span>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="field field-type-text-area" data-type="textarea" data-max-length="1000">
                                            <div class="field-content">
                                                <label for="medical-condition-description">Medical Condition Description</label>
                                                <textarea name="medical-condition-description" id="medical-condition-description" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_medical-condition-description"></div>
                                    </div>
                                </div>

                                <!-- Do you wear glasses? -->
                                <div class="form-section reverse">
                                    <div class="form-section-label column-direction">
                                        <span>Do you wear glasses?</span>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="field-group-validations" data-group-validation-relation="and">
                                            <div class="row">
                                                <div class="col-auto">

                                                    <!-- Yes -->
                                                    <div class="field field-type-radio" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="yes" name="wear_glasses" class="wear_glasses">
                                                                <span class="checkmark"></span>
                                                                Yes
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- no -->
                                                    <div class="field field-type-radio" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="no" name="wear_glasses" class="wear_glasses">
                                                                <span class="checkmark"></span>
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="field-error-msg"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Do you have any family members who can perform with you? -->
                                <div class="form-section reverse">
                                    <div class="form-section-label column-direction">
                                        <span>Do you have any family members who can perform with you?</span>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="field-group-validations" data-group-validation-relation="and">
                                            <div class="row">
                                                <div class="col-auto">

                                                    <!-- Yes -->
                                                    <div class="field field-type-radio" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="yes" name="family_members_for_performance" class="family_members_for_performance">
                                                                <span class="checkmark"></span>
                                                                Yes
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- no -->
                                                    <div class="field field-type-radio" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="no" name="family_members_for_performance" class="family_members_for_performance">
                                                                <span class="checkmark"></span>
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="field-error-msg"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Great! Are they members of Liliana Agency? -->
                                <div class="form-section reverse" data-dependency=".family_members_for_performance" data-dependency-value="yes">
                                    <div class="form-section-label column-direction">
                                        <span>Great! Are they members of Liliana Agency?</span>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="field-group-validations" data-group-validation-relation="and">
                                            <div class="row">
                                                <div class="col-auto">

                                                    <!-- Yes -->
                                                    <div class="field field-type-radio" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="yes" name="family_members_liliana_agency" class="family_members_liliana_agency">
                                                                <span class="checkmark"></span>
                                                                Yes
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- no -->
                                                    <div class="field field-type-radio" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="no" name="family_members_liliana_agency" class="family_members_liliana_agency">
                                                                <span class="checkmark"></span>
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="field-error-msg"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Member No -->
                                <div class="form-section reverse" data-dependency=".family_members_liliana_agency" data-dependency-value="yes">
                                    <div class="form-section-label column-direction">
                                        <span>Member No</span>
                                        <div class="field-hint">For multiple family cases, separate each member number with a comma.</div>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="field field-type-nr-input" data-type="number">
                                            <div class="field-content">
                                                <label for="member_no">Member No</label>
                                                <input type="number" name="member_no" id="member_no" min="0" value="">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_member_no"></div>
                                    </div>
                                </div>

                                <!-- Do you have any allergies? -->
                                <div class="form-section reverse">
                                    <div class="form-section-label column-direction">
                                        <span>Do you have any allergies?</span>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="field-group-validations" data-group-validation-relation="and">
                                            <div class="row">
                                                <div class="col-auto">

                                                    <!-- Yes -->
                                                    <div class="field field-type-radio" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="yes" name="allergies" class="allergies">
                                                                <span class="checkmark"></span>
                                                                Yes
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- no -->
                                                    <div class="field field-type-radio" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="no" name="allergies" class="allergies">
                                                                <span class="checkmark"></span>
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="field-error-msg"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Type of Allergy -->
                                <div class="form-section reverse" data-dependency=".allergies" data-dependency-value="yes">
                                    <div class="form-section-label column-direction">
                                        <span>Type of Allergy</span>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="field field-type-select" data-type="select" data-btn-submit-text="Select"
                                             data-field-defualt-text="Select Item">
                                            <div class="field-content">
                                                <label for="allergy_type">Type of Allergy</label>
                                                <select name="allergy_type" id="allergy_type">
                                                    <option value="Food Allergies">Food Allergies</option>
                                                    <option value="Inhalant Allergies">Inhalant Allergies</option>
                                                    <option value="Insect & Animal Allergies">Insect & Animal Allergies</option>
                                                    <option value="Medication Allergies">Medication Allergies</option>
                                                    <option value="Skin Contact Allergies">Skin Contact Allergies</option>
                                                    <option value="Other Allergies">Other Allergies</option>
                                                </select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_allergy_type"></div>
                                    </div>
                                </div>

                                <!-- Other Type of Allergy -->
                                <div class="form-section reverse" data-dependency="#allergy_type" data-dependency-value="Other Allergies">
                                    <div class="form-section-label column-direction">
                                        <span>Other Type of Allergy</span>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="field field-type-nr-input" data-type="text">
                                            <div class="field-content">
                                                <label for="other_allergy_type">Other Type of Allergy</label>
                                                <input type="text" name="other_allergy_type" id="other_allergy_type" value="">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_other_allergy_type"></div>
                                    </div>
                                </div>

                                <!-- Describe Your Allergy -->
                                <div class="form-section reverse" data-dependency=".allergies" data-dependency-value="yes">
                                    <div class="form-section-label column-direction">
                                        <span>Describe Your Allergy</span>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="field field-type-text-area" data-type="textarea" data-max-length="1000">
                                            <div class="field-content">
                                                <label for="describe_allergy">Describe Your Allergy</label>
                                                <textarea name="describe_allergy" id="describe_allergy" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_describe_allergy"></div>
                                    </div>
                                </div>

                                <!-- what is your religion? -->
                                <div class="form-section reverse">
                                    <div class="form-section-label column-direction">
                                        what is your religion?
                                    </div>
                                    <div class="form-section-content">
                                        <div class="field field-type-select" data-type="select" data-btn-submit-text="Select"
                                             data-field-defualt-text="Select Item">
                                            <div class="field-content">
                                                <label for="religion">Your Religion</label>
                                                <select name="religion" id="religion">
                                                    <option value="Atheism">Atheism</option>
                                                    <option value="Agnosticism">Agnosticism</option>
                                                    <option value="Bahá’í">Bahá’í</option>
                                                    <option value="Buddhism">Buddhism</option>
                                                    <option value="Christianity">Christianity</option>
                                                    <option value="Confucianism">Confucianism</option>
                                                    <option value="Druze">Druze</option>
                                                    <option value="Gnosticism">Gnosticism</option>
                                                    <option value="Hinduism">Hinduism</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Jainism">Jainism</option>
                                                    <option value="Judaism">Judaism</option>
                                                    <option value="Rastafarianism">Rastafarianism</option>
                                                    <option value="Shinto">Shinto</option>
                                                    <option value="Sikhism">Sikhism</option>
                                                    <option value="Zoroastrianism">Zoroastrianism</option>
                                                    <option value="Traditional African Religions">Traditional African Religions</option>
                                                    <option value="African Diaspora Religions">African Diaspora Religions</option>
                                                    <option value="Indigenous American Religions">Indigenous American Religions</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Do you have any dietary restrictions? -->
                                <div class="form-section reverse">
                                    <div class="form-section-label column-direction">
                                        <span>Do you have any dietary restrictions?</span>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="field-group-validations" data-group-validation-relation="and">
                                            <div class="row">
                                                <div class="col-auto">

                                                    <!-- Yes -->
                                                    <div class="field field-type-radio" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="yes" name="dietary_restrictions" class="dietary_restrictions">
                                                                <span class="checkmark"></span>
                                                                Yes
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- no -->
                                                    <div class="field field-type-radio" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="no" name="dietary_restrictions" class="dietary_restrictions">
                                                                <span class="checkmark"></span>
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="field-error-msg"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Describe your Dietary Description -->
                                <div class="form-section reverse" data-dependency=".dietary_restrictions" data-dependency-value="yes">
                                    <div class="form-section-label column-direction">
                                        <span>Describe your Dietary Description</span>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="field field-type-text-area" data-type="textarea" data-max-length="1000">
                                            <div class="field-content">
                                                <label for="dietary_description">Describe your Dietary Description</label>
                                                <textarea name="dietary_description" id="dietary_description" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_dietary_description"></div>
                                    </div>
                                </div>

                                <!-- Would you accept a job that requires you to smoke? -->
                                <div class="form-section reverse">
                                    <div class="form-section-label column-direction">
                                        <span>Would you accept a job that requires you to smoke?</span>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="field-group-validations" data-group-validation-relation="and">
                                            <div class="row">
                                                <div class="col-auto">

                                                    <!-- Yes -->
                                                    <div class="field field-type-radio" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="yes" name="accept_smoking_job" class="accept_smoking_job">
                                                                <span class="checkmark"></span>
                                                                Yes
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- no -->
                                                    <div class="field field-type-radio" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="no" name="accept_smoking_job" class="accept_smoking_job">
                                                                <span class="checkmark"></span>
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="field-error-msg"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Would you accept a job that requires you to perform a sensual scene? -->
                                <div class="form-section reverse">
                                    <div class="form-section-label column-direction">
                                        <span>Would you accept a job that requires you to perform a sensual scene?</span>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="field-group-validations" data-group-validation-relation="and">
                                            <div class="row">
                                                <div class="col-auto">

                                                    <!-- Yes -->
                                                    <div class="field field-type-radio" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="yes" name="accept_sensual_scene" class="accept_sensual_scene">
                                                                <span class="checkmark"></span>
                                                                Yes
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- no -->
                                                    <div class="field field-type-radio" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="no" name="accept_sensual_scene" class="accept_sensual_scene">
                                                                <span class="checkmark"></span>
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="field-error-msg"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Number of missing teeth -->
                                <div class="form-section reverse">
                                    <div class="form-section-label column-direction">
                                        <span>Number of missing teeth</span>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="field field-type-nr-input" data-type="number">
                                            <div class="field-content">
                                                <label for="missing_teeth">Number of missing teeth</label>
                                                <input type="number" name="missing_teeth" id="missing_teeth" class="input-range-controller" min="0" max="32" value="">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_missing_teeth"></div>
                                    </div>
                                </div>

                                <!-- How did you learn about the Liliana agency? -->
                                <div class="form-section reverse">
                                    <div class="form-section-label column-direction">
                                        <span>How did you learn about the Liliana agency?</span>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="field field-type-select top-options" data-type="select" data-btn-submit-text="Select"
                                             data-field-defualt-text="Select Item">
                                            <div class="field-content">
                                                <label for="learn_about_liliana_agency">Select Method</label>
                                                <select name="learn_about_liliana_agency" id="learn_about_liliana_agency">
                                                    <option value="Search Engine(Google etc.)">Search Engine(Google etc.)</option>
                                                    <option value="Social Media/SNS">Social Media/SNS</option>
                                                    <option value="Friend or family member">Friend or family member</option>
                                                    <option value="Liliana Employee">Liliana Employee</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_learn_about_liliana_agency"></div>
                                    </div>
                                </div>

                                <!-- Enter their name -->
                                <div class="form-section reverse" data-dependency="#learn_about_liliana_agency" data-dependency-value="Friend or family member,Liliana Employee">
                                    <div class="form-section-label column-direction">
                                        <span>Enter their name</span>
                                        <div class="field-hint">If you selected "Friend or family member" or "Liliana Employee", please specify</div>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="field field-type-nr-input" data-type="text">
                                            <div class="field-content">
                                                <label for="learn_about_liliana_agency_their_name">Enter their name</label>
                                                <input type="text" name="learn_about_liliana_agency_their_name" id="learn_about_liliana_agency_their_name" value="">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_learn_about_liliana_agency_their_name"></div>
                                    </div>
                                </div>

                                <!-- Is this your main job or a side activity? -->
                                <div class="form-section reverse">
                                    <div class="form-section-label column-direction">
                                        <span>Is this your main job or a side activity?</span>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="field field-type-select top-options" data-type="select" data-btn-submit-text="Select"
                                             data-field-defualt-text="Select Item">
                                            <div class="field-content">
                                                <label for="main_job_or_side_activity">Select Item</label>
                                                <select name="main_job_or_side_activity" id="main_job_or_side_activity">
                                                    <option value="Main Job">Main Job</option>
                                                    <option value="Side Activity">Side Activity</option>
                                                </select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_main_job_or_side_activity"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="page-actions">
        <a href="./user-info" class="btn">
            Cancel
        </a>
        <button type="button" class="btn btn-primary btn-save-edit-form" data-page="user-info-other">
            Save
        </button>
    </div>
@endsection
