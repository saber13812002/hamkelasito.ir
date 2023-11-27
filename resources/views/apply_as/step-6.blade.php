@extends('apply_as.layout')

@section('content-apply')

    <body class="page page-apply-model-form">


    <!-- start header -->
    @include('apply_as.header')


    <!-- start main -->
    <main>
        <div id="content">
            <input id="token" type="hidden" value="{{$token}}">

            <!-- start page title -->
            <div class="page-title">
                <div class="container-xxl">
                    <h1>Apply</h1>
                </div>
            </div>

            <!-- start form -->
            <div class="section section-form">
                <form action="./apply-as-a-model-form-step-final-check" method="post">
                    @csrf
                    <!-- start steps -->
                    <div class="progress-indicator" data-switch-with-point="true">

                        <!-- step progress indicator -->
                        <div class="container-lg">
                            <div class="steps active-step-6">
                                <div class="step-track"></div>
                                <div data-step="1" class="step-item checked">
                                    <div class="step-circle">
                                        1
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 1:</span>
                                        {{__('menu.Basic Info')}}
                                    </div>
                                </div>
                                <div data-step="2" class="step-item checked">
                                    <div class="step-circle">
                                        2
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 2:</span>
                                        {{__('menu.Physical Info')}}
                                    </div>
                                </div>
                                <div data-step="3" class="step-item checked">
                                    <div class="step-circle">
                                        3
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 3:</span>
                                        {{__('menu.Skills & Experiences')}}
                                    </div>
                                </div>
                                <div data-step="4" class="step-item checked">
                                    <div class="step-circle">
                                        4
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 4:</span>
                                        {{__('menu.Media')}}
                                    </div>
                                </div>
                                <div data-step="5" class="step-item checked">
                                    <div class="step-circle">
                                        5
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 5:</span>
                                        {{__('menu.Contact Info')}}
                                    </div>
                                </div>
                                <div data-step="6" class="step-item active">
                                    <div class="step-circle">
                                        6
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 6:</span>
                                        {{__('menu.Authentication')}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- step content -->
                        <div class="step-content step-bank" data-step="6">
                            <div class="container-lg">

                                <!-- step inner content -->
                                <div class="step-inner-content">

                                    <!-- authentication group -->
                                    <div class="form-section">
                                        <div class="form-section-label">Authentication Info</div>
                                        <div class="form-section-content">
                                            <div class="field field-type-select" data-btn-submit-text="Select" data-field-defualt-text=" "
                                                 data-required="true" data-type="select">
                                                <div class="field-content">
                                                    <label for="authentication_type">Type of Authentication <span class="field-required-star">*</span></label>
                                                    <select name="authentication_type" id="authentication_type">
                                                        <option value="passport">Passport</option>
                                                        <option value="drive_license">Driver's License</option>
                                                        <option value="insurance_card">Insurance Card</option>
                                                        <option value="my_number_card">My Number Card</option>
                                                        <option value="residence_card">Residence Card</option>
                                                    </select>
                                                    <i class="icon-arrow-down"></i>
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_authentication_type"></div>
                                        </div>
                                    </div>

                                    <!-- passport photo -->
                                    <div class="form-section" data-dependency="#authentication_type" data-dependency-value="passport">
                                        <div class="form-section-label">
                                            <span>Passport Photo <span class="field-required-star">*</span></span>
                                            <a href="#" data-light-box="photo_guide_passport"
                                               data-light-box-type="element"
                                               data-light-box-close="false"
                                               data-light-box-selector=".passport-photo-guide">
                                                Photo Guide
                                            </a>
                                        </div>
                                        <div class="form-section-content">
                                            <div>
                                                <div class="field field-type-upload" data-type="upload" data-required="true">
                                                    <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10" data-accept=".png,.jpg">
                                                        <input type="hidden" class="input-drop-zone" name="passport_photo" id="passport_photo">
                                                        <label>Photo of Passport</label>
                                                        <i class="icon-upload"></i>
                                                        <div class="upload-title">
                                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span> a photo of your passport <span class="field-required-star">*</span>
                                                        </div>
                                                        <div class="upload-description">
                                                            Allowed format: PNG, JPG (Up to: 1 photo/10 Mb)
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_passport_photo"></div>
                                                <div class="upload-drop-zone-file single"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- drive photo -->
                                    <div class="form-section" data-dependency="#authentication_type" data-dependency-value="drive_license">
                                        <div class="form-section-label">
                                            <span>Driver's License Card Photo <span class="field-required-star">*</span></span>
                                            <a href="#" data-light-box="photo_guide_drive"
                                               data-light-box-type="element"
                                               data-light-box-close="false"
                                               data-light-box-selector=".drivers-photo-guide">
                                                Photo Guide
                                            </a>
                                        </div>
                                        <div class="form-section-content">
                                            <div>
                                                <div class="field field-type-upload" data-type="upload" data-required="true">
                                                    <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10" data-accept=".png,.jpg">
                                                        <input type="hidden" class="input-drop-zone" name="front_photo_drive_license_card" id="front_photo_drive_license_card">
                                                        <label>Driver's License Front Photo</label>
                                                        <i class="icon-upload"></i>
                                                        <div class="upload-title">
                                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span> the front side photo of your driver's license <span class="field-required-star">*</span>
                                                        </div>
                                                        <div class="upload-description">
                                                            Allowed format: PNG, JPG (Up to: 1 photo/10 Mb)
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_front_photo_drive_license_card"></div>
                                                <div class="upload-drop-zone-file single"></div>
                                            </div>
                                            <div>
                                                <div class="field field-type-upload" data-type="upload" data-required="true">
                                                    <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10" data-accept=".png,.jpg">
                                                        <input type="hidden" class="input-drop-zone" name="back_photo_drive_license_card" id="back_photo_drive_license_card">
                                                        <label>Driver's License Back Photo</label>
                                                        <i class="icon-upload"></i>
                                                        <div class="upload-title">
                                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span> the back side photo of your driver's license <span class="field-required-star">*</span>
                                                        </div>
                                                        <div class="upload-description">
                                                            Allowed format: PNG, JPG (Up to: 1 photo/10 Mb)
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_back_photo_drive_license_card"></div>
                                                <div class="upload-drop-zone-file single"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- insurance photo -->
                                    <div class="form-section" data-dependency="#authentication_type" data-dependency-value="insurance_card">
                                        <div class="form-section-label">
                                            <span>Insurance Card Photo <span class="field-required-star">*</span></span>
                                            <a href="#" data-light-box="photo_guide_insurance"
                                               data-light-box-type="element"
                                               data-light-box-close="false"
                                               data-light-box-selector=".insurance-photo-guide">
                                                Photo Guide
                                            </a>
                                        </div>
                                        <div class="form-section-content">
                                            <div>
                                                <div class="field field-type-upload" data-type="upload" data-required="true">
                                                    <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10" data-accept=".png,.jpg">
                                                        <input type="hidden" class="input-drop-zone" name="front_photo_insurance_card" id="front_photo_insurance_card">
                                                        <label>Front Photo of Insurance Card</label>
                                                        <i class="icon-upload"></i>
                                                        <div class="upload-title">
                                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span> the front side photo of your insurance card <span class="field-required-star">*</span>
                                                        </div>
                                                        <div class="upload-description">
                                                            Allowed format: PNG, JPG (Up to: 1 photo/10 Mb)
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_front_photo_insurance_card"></div>
                                                <div class="upload-drop-zone-file single"></div>
                                            </div>
                                            <div>
                                                <div class="field field-type-upload" data-type="upload" data-required="true">
                                                    <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10" data-accept=".png,.jpg">
                                                        <input type="hidden" class="input-drop-zone" name="back_photo_insurance_card" id="back_photo_insurance_card">
                                                        <label>Back Photo of Insurance Card</label>
                                                        <i class="icon-upload"></i>
                                                        <div class="upload-title">
                                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span> the back side photo of your insurance card <span class="field-required-star">*</span>
                                                        </div>
                                                        <div class="upload-description">
                                                            Allowed format: PNG, JPG (Up to: 1 photo/10 Mb)
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_back_photo_insurance_card"></div>
                                                <div class="upload-drop-zone-file single"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- my number photo -->
                                    <div class="form-section" data-dependency="#authentication_type" data-dependency-value="my_number_card">
                                        <div class="form-section-label">
                                            <span>My Number Card Photo <span class="field-required-star">*</span></span>
                                            <a href="#" data-light-box="photo_guide_my_number"
                                               data-light-box-type="element"
                                               data-light-box-close="false"
                                               data-light-box-selector=".my-number-photo-guide">
                                                Photo Guide
                                            </a>
                                        </div>
                                        <div class="form-section-content">
                                            <div>
                                                <div class="field field-type-upload" data-type="upload" data-required="true">
                                                    <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10" data-accept=".png,.jpg">
                                                        <input type="hidden" class="input-drop-zone" name="front_photo_my_number_card" id="front_photo_my_number_card">
                                                        <label>Front Photo of My Number Card</label>
                                                        <i class="icon-upload"></i>
                                                        <div class="upload-title">
                                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span> the front side photo of my number card <span class="field-required-star">*</span>
                                                        </div>
                                                        <div class="upload-description">
                                                            Allowed format: PNG, JPG (Up to: 1 photo/10 Mb)
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_front_photo_my_number_card"></div>
                                                <div class="upload-drop-zone-file single"></div>
                                            </div>
                                            <div>
                                                <div class="field field-type-upload" data-type="upload" data-required="true">
                                                    <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10" data-accept=".png,.jpg">
                                                        <input type="hidden" class="input-drop-zone" name="back_photo_my_number_card" id="back_photo_my_number_card">
                                                        <label>Back Photo of My Number Card</label>
                                                        <i class="icon-upload"></i>
                                                        <div class="upload-title">
                                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span> the back side photo of my number card <span class="field-required-star">*</span>
                                                        </div>
                                                        <div class="upload-description">
                                                            Allowed format: PNG, JPG (Up to: 1 photo/10 Mb)
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_back_photo_my_number_card"></div>
                                                <div class="upload-drop-zone-file single"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- resident photo -->
                                    <div class="form-section" data-dependency="#authentication_type" data-dependency-value="residence_card">
                                        <div class="form-section-label">
                                            <span>Resident Card Photo <span class="field-required-star">*</span></span>
                                            <a href="#" data-light-box="photo_guide_resident"
                                               data-light-box-type="element"
                                               data-light-box-close="false"
                                               data-light-box-selector=".residance-photo-guide">
                                                Photo Guide
                                            </a>
                                        </div>
                                        <div class="form-section-content">
                                            <div>
                                                <div class="field field-type-upload" data-type="upload" data-required="true">
                                                    <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10" data-accept=".png,.jpg">
                                                        <input type="hidden" class="input-drop-zone" name="front_photo_residence_card" id="front_photo_residence_card">
                                                        <label>Front Photo of Residence Card</label>
                                                        <i class="icon-upload"></i>
                                                        <div class="upload-title">
                                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span> the front side photo of your resident card <span class="field-required-star">*</span>
                                                        </div>
                                                        <div class="upload-description">
                                                            Allowed format: PNG, JPG (Up to: 1 photo/10 Mb)
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_front_photo_residence_card"></div>
                                                <div class="upload-drop-zone-file single"></div>
                                            </div>
                                            <div>
                                                <div class="field field-type-upload" data-type="upload" data-required="true">
                                                    <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10" data-accept=".png,.jpg">
                                                        <input type="hidden" class="input-drop-zone" name="back_photo_residence_card" id="back_photo_residence_card">
                                                        <label>Back Photo of Residence Card</label>
                                                        <i class="icon-upload"></i>
                                                        <div class="upload-title">
                                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span> the back side photo of your resident card <span class="field-required-star">*</span>
                                                        </div>
                                                        <div class="upload-description">
                                                            Allowed format: PNG, JPG (Up to: 1 photo/10 Mb)
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_back_photo_residence_card"></div>
                                                <div class="upload-drop-zone-file single"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="photo-guide passport-photo-guide">
                                        <div class="photo-guide-header">
                                            <div class="photo-guide-title">Passport Photo Guide:</div>
                                            <button type="button" class="btn btn-icon btn-close-photo-guide">
                                                <i class="icon-close"></i>
                                            </button>
                                        </div>
                                        <div class="photo-guide-content">
                                            <img src="/storage/assets/img/photo-guides/Passport-Photo.webp" width="320" height="280" alt="Passport Photo Guide">
                                            <p>
                                                To verify your identity for Liliana Models, it's vital that your passport is both current and has not expired. Find a well-lit environment, ideally with natural light, and position the passport on a flat, solid-colored, non-reflective surface, ensuring no shadows or glare affect the image. When capturing the photo with a high-resolution smartphone or camera, hold it directly overhead. Ensure you take a clear photo of the photo and details page of the passport, making sure the full page is in view without any cropping. All details on the passport, including text, photos, and security features, should be crisp and legible in the image. As always, we prioritize your privacy and use the passport strictly for verification purposes.
                                            </p>
                                        </div>
                                        <div class="photo-guide-footer">
                                            <button type="button"
                                                    class="btn btn-primary btn-full btn-close-photo-guide">
                                                Ok
                                            </button>
                                        </div>
                                    </div>
                                    <div class="photo-guide drivers-photo-guide">
                                        <div class="photo-guide-header">
                                            <div class="photo-guide-title">Driver's License Guide:</div>
                                            <button type="button" class="btn btn-icon btn-close-photo-guide">
                                                <i class="icon-close"></i>
                                            </button>
                                        </div>
                                        <div class="photo-guide-content">
                                            <img src="/storage/assets/img/photo-guides/Card-Photo.webp" width="320" height="280" alt="Driver's License Guide">
                                            <p>
                                                To verify your identity for Liliana Models, it's crucial that your Driver's License is both current and has not expired. Before capturing the image, ensure it's free from smudges or fingerprints. Find a well-lit environment, ideally with natural light, and position the Driver's License on a flat, solid-colored, non-reflective surface, ensuring no shadows or glare affect the image. When capturing the photo with a high-resolution smartphone or camera, hold it directly overhead. Ensure you take clear photos of both the front and back sides of the Driver's License, making sure the full license is in view without any cropping for each side. All details on the Driver's License, including text, photos, and security features, should be crisp and legible on both images. As always, we prioritize your privacy and use the Driver's License strictly for verification purposes.
                                            </p>
                                        </div>
                                        <div class="photo-guide-footer">
                                            <button type="button"
                                                    class="btn btn-primary btn-full btn-close-photo-guide">
                                                Ok
                                            </button>
                                        </div>
                                    </div>
                                    <div class="photo-guide insurance-photo-guide">
                                        <div class="photo-guide-header">
                                            <div class="photo-guide-title">Insurance Card Guide:</div>
                                            <button type="button" class="btn btn-icon btn-close-photo-guide">
                                                <i class="icon-close"></i>
                                            </button>
                                        </div>
                                        <div class="photo-guide-content">
                                            <img src="/storage/assets/img/photo-guides/Card-Photo.webp" width="320" height="280" alt="Insurance Card Guide">
                                            <p>
                                                To verify your identity for Liliana Models, it's crucial that your Insurance Card is both current and has not expired. Before capturing the image, ensure it's free from smudges or fingerprints. Find a well-lit environment, ideally with natural light, and position the Insurance Card on a flat, solid-colored, non-reflective surface, ensuring no shadows or glare affect the image. When capturing the photo with a high-resolution smartphone or camera, hold it directly overhead. Ensure you take clear photos of both the front and back sides of the Insurance Card, making sure the full card is in view without any cropping for each side. All details on the Insurance Card, including text, photos, and logos, should be crisp and legible on both images. As always, we prioritize your privacy and use the Insurance Card strictly for verification purposes.
                                            </p>
                                        </div>
                                        <div class="photo-guide-footer">
                                            <button type="button"
                                                    class="btn btn-primary btn-full btn-close-photo-guide">
                                                Ok
                                            </button>
                                        </div>
                                    </div>
                                    <div class="photo-guide my-number-photo-guide">
                                        <div class="photo-guide-header">
                                            <div class="photo-guide-title">My Number Card Guide:</div>
                                            <button type="button" class="btn btn-icon btn-close-photo-guide">
                                                <i class="icon-close"></i>
                                            </button>
                                        </div>
                                        <div class="photo-guide-content">
                                            <img src="/storage/assets/img/photo-guides/Card-Photo.webp" width="320" height="280" alt="My Number Card Guide">
                                            <p>
                                                To verify your identity for Liliana Models, it's crucial that your My Number Card is both current and has not expired. Before capturing the image, ensure it's free from smudges or fingerprints. Find a well-lit environment, ideally with natural light, and position the My Number Card on a flat, solid-colored, non-reflective surface, ensuring no shadows or glare affect the image. When capturing the photo with a high-resolution smartphone or camera, hold it directly overhead. Ensure you take clear photos of both the front and back sides of the My Number Card, making sure the full card is in view without any cropping for each side. All details on the My Number Card, including text, photos, and security features, should be crisp and legible on both images. As always, we prioritize your privacy and use the My Number Card strictly for verification purposes.
                                            </p>
                                        </div>
                                        <div class="photo-guide-footer">
                                            <button type="button"
                                                    class="btn btn-primary btn-full btn-close-photo-guide">
                                                Ok
                                            </button>
                                        </div>
                                    </div>
                                    <div class="photo-guide residance-photo-guide">
                                        <div class="photo-guide-header">
                                            <div class="photo-guide-title">Residence Card Photo Guide:</div>
                                            <button type="button" class="btn btn-icon btn-close-photo-guide">
                                                <i class="icon-close"></i>
                                            </button>
                                        </div>
                                        <div class="photo-guide-content">
                                            <img src="/storage/assets/img/photo-guides/Card-Photo.webp" width="320" height="280" alt="Residence Card Photo Guide">
                                            <p>
                                                To verify your identity for Liliana Models, it's crucial that your Residence Card is both current and has not expired. Before capturing the image, ensure it's free from smudges or fingerprints. Find a well-lit environment, ideally with natural light, and position the Residence Card on a flat, solid-colored, non-reflective surface, ensuring no shadows or glare affect the image. When capturing the photo with a high-resolution smartphone or camera, hold it directly overhead. Ensure you take clear photos of both the front and back sides of the Residence Card, making sure the full Residence Card is in view without any cropping for each side. All details on the Residence Card, including text, photos, and holograms, should be crisp and legible on both images. As always, we prioritize your privacy and use the Residence Card strictly for verification purposes.
                                            </p>
                                        </div>
                                        <div class="photo-guide-footer">
                                            <button type="button"
                                                    class="btn btn-primary btn-full btn-close-photo-guide">
                                                Ok
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
                                            <a href="./apply-as-a-model-form-step-5" class="btn">
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
