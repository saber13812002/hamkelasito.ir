@extends('dashboard.layout')

@section('content-dashboard')

    <body class="page-user-info-edit edit-page edit-page-bank-visa enable-page-actions">

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
                                <div class="white-box-title">Bank & Authentication</div>
                            </div>
                            <div class="white-box-content">

                                <!-- bank group -->
                                <div class="form-section">
                                    <div class="form-section-label">Bank</div>
                                    <div class="form-section-content">
                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                            <div class="field-content">
                                                <label for="bank_name">Bank Name <span class="field-required-star">*</span></label>
                                                <input type="text" name="bank_name" id="bank_name" value="Miauho">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_bank_name"></div>
                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                            <div class="field-content">
                                                <label for="branch_name">Branch Name <span class="field-required-star">*</span></label>
                                                <input type="text" name="branch_name" id="branch_name" value="Shahid Miazagi">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_branch_name"></div>
                                        <div class="field field-type-select" data-field-defualt-text=" " data-btn-submit-text="Select"
                                             data-required="true" data-type="select">
                                            <div class="field-content">
                                                <label for="account_classifications">Account Classifications <span class="field-required-star">*</span></label>
                                                <select name="account_classifications" id="account_classifications">
                                                    <option value="savings_account" selected>Saving Account (Futsu)</option>
                                                    <option value="current_account">Current Account (Tōza)</option>
                                                </select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_account_classifications"></div>
                                        <div class="field field-type-nr-input" data-type="number" data-required="true">
                                            <div class="field-content">
                                                <label for="account_number">Account Number <span class="field-required-star">*</span></label>
                                                <input type="number" name="account_number" id="account_number" value="1234567">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_account_number"></div>
                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                            <div class="field-content">
                                                <label for="account_name">Account Name <span class="field-required-star">*</span></label>
                                                <input type="text" name="account_name" id="account_name" value="Mike Oldman">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_account_name"></div>
                                    </div>
                                </div>

                                <!-- authentication group -->
                                <div class="form-section">
                                    <div class="form-section-label">Authentication Info</div>
                                    <div class="form-section-content">
                                        <div class="field field-type-select" data-btn-submit-text="Select" data-field-defualt-text=" "
                                             data-required="true" data-type="select">
                                            <div class="field-content">
                                                <label for="authentication_type">Type of Authentication <span class="field-required-star">*</span></label>
                                                <select name="authentication_type" id="authentication_type">
                                                    <option value="passport" selected>Passport</option>
                                                    <option value="drive_license">Driver's License</option>
                                                    <option value="insurance_card">Insurance Card</option>
                                                    <option value="my_number_card">My Number Card</option>
                                                    <option value="residence_card">Residence Card</option>
                                                </select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_authentication_type"></div>
                                        <div data-dependency="#authentication_type" data-dependency-value="passport">
                                            <div class="field-preview">
                                                <div class="field-label">Passport Number</div>
                                                <div class="field-value">7639765</div>
                                            </div>
                                        </div>
                                        <div data-dependency="#authentication_type" data-dependency-value="passport">
                                            <div class="field-preview">
                                                <div class="field-label">Passport issuing country</div>
                                                <div class="field-value"><img src="https://flagcdn.com/w320/jp.png" class="flag">Japan</div>
                                            </div>
                                        </div>
                                        <div data-dependency="#authentication_type" data-dependency-value="drive_license">
                                            <div class="field-preview">
                                                <div class="field-label">Driver's License Number</div>
                                                <div class="field-value">-</div>
                                            </div>
                                        </div>
                                        <div data-dependency="#authentication_type" data-dependency-value="insurance_card">
                                            <div class="field-preview">
                                                <div class="field-label">Insurance Type</div>
                                                <div class="field-value">-</div>
                                            </div>
                                        </div>
                                        <div data-dependency="#authentication_type" data-dependency-value="insurance_card">
                                            <div class="field-preview">
                                                <div class="field-label">Insurance Card Number</div>
                                                <div class="field-value">-</div>
                                            </div>
                                        </div>
                                        <div data-dependency="#authentication_type" data-dependency-value="insurance_card">
                                            <div class="form-heading">Expiry Date</div>
                                        </div>
                                        <div data-dependency="#authentication_type" data-dependency-value="insurance_card">
                                            <div class="row gap-1">
                                                <div class="col">
                                                    <div class="field-preview">
                                                        <div class="field-label">Year</div>
                                                        <div class="field-value">-</div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="field-preview">
                                                        <div class="field-label">Month</div>
                                                        <div class="field-value">-</div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="field-preview">
                                                        <div class="field-label">Day</div>
                                                        <div class="field-value">-</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-dependency="#authentication_type" data-dependency-value="my_number_card">
                                            <div class="field-preview">
                                                <div class="field-label">“My Number Card” Number</div>
                                                <div class="field-value">-</div>
                                            </div>
                                        </div>
                                        <div data-dependency="#authentication_type" data-dependency-value="residence_card">
                                            <div class="field-preview">
                                                <div class="field-label">Residence Number</div>
                                                <div class="field-value">-</div>
                                            </div>
                                        </div>
                                        <div data-dependency="#authentication_type" data-dependency-value="residence_card">
                                            <div class="field-preview">
                                                <div class="field-label">Type of Visa</div>
                                                <div class="field-value">-</div>
                                            </div>
                                        </div>
                                        <div data-dependency="#authentication_type" data-dependency-value="residence_card">
                                            <div class="form-heading">Expiry Date</div>
                                        </div>
                                        <div data-dependency="#authentication_type" data-dependency-value="residence_card">
                                            <div class="row gap-1">

                                                <!-- year -->
                                                <div class="col">
                                                    <div class="field-preview">
                                                        <div class="field-label">Year</div>
                                                        <div class="field-value">-</div>
                                                    </div>
                                                </div>

                                                <!-- month -->
                                                <div class="col">
                                                    <div class="field-preview">
                                                        <div class="field-label">Month</div>
                                                        <div class="field-value">-</div>
                                                    </div>
                                                </div>

                                                <!-- day -->
                                                <div class="col">
                                                    <div class="field-preview">
                                                        <div class="field-label">Day</div>
                                                        <div class="field-value">-</div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
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
                                                <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10" data-accept=".png,.jpg" data-edit-mode="true" data-edit-type="photo" data-default="[{&quot;id&quot;:346479,&quot;type&quot;:&quot;photo&quot;,&quot;name&quot;:&quot;File Name&quot;,&quot;thumbnail&quot;:&quot;/assets/img/passport.png&quot;,&quot;req&quot;:&quot;[&quot;}]">
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

                                <!-- dive photo -->
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
                                                <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10" data-accept=".png,.jpg" data-edit-mode="true" data-edit-type="photo">
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
                                                <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10" data-accept=".png,.jpg" data-edit-mode="true" data-edit-type="photo">
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
                                                <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10" data-accept=".png,.jpg" data-edit-mode="true" data-edit-type="photo">
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
                                                <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10" data-accept=".png,.jpg" data-edit-mode="true" data-edit-type="photo">
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
                                                <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10" data-accept=".png,.jpg" data-edit-mode="true" data-edit-type="photo">
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
                                                <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10" data-accept=".png,.jpg" data-edit-mode="true" data-edit-type="photo">
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
                                                <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10" data-accept=".png,.jpg" data-edit-mode="true" data-edit-type="photo">
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
                                                <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10" data-accept=".png,.jpg" data-edit-mode="true" data-edit-type="photo">
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
        <button type="button" class="btn btn-primary btn-save-edit-form" data-page="user-info-authentication">
            Save
        </button>
    </div>
@endsection
