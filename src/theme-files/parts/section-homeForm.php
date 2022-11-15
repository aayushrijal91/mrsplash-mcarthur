<div class="form_wrapper rounded-20 bg-primary-light shadow">
    <div class="form_slider" id="form_slider">
        <div class="tab">
            <div class="fs-48 fw-700 pb-1 lh-1">Book Online & Recieve $50 OFF</div>
            <div class="fs-24 fw-700 py-3 lh-1">Start By Selecting Your Needed Service</div>
            <div class="pt-5">[radio serviceType class:servicePicker use_label_element "Emergency Plumbing" "Blocked Drains" "Hot Water Repairs" "Toilet Repairs" "Burst Pipes" "Tap Repairs" "Gas Fittings & Repairs" "Gas Installation" "Strata & Real Estate Plumbing" "Leaking Taps & Toilets" "Pipe Relining" "Bathroom Renovations"]</div>
        </div>
        <div class="tab">
            <div class="fs-48 fw-700 pb-1 lh-1 text-capitalize">Next, Enter Your Details</div>
            <div class="row gy-6 gy-xl-7 pt-6 pt-lg-7">
                <div class="col-xl-6">
                    <div class="label">your first name</div>
                    [text* your-firstName class:form-control class:required placeholder "First Name"]
                </div>
                <div class="col-xl-6">
                    <div class="label">your last name</div>
                    [text* your-lastName class:form-control class:required placeholder "Last Name"]
                </div>
                <div class="col-xl-6">
                    <div class="label">Best Number to contact you</div>
                    [text* your-phone class:form-control class:required placeholder "Contact Number"]
                </div>
                <div class="col-xl-6">
                    <div class="label">Your email Address</div>
                    [email* your-email class:form-control class:required placeholder "Email Address"]
                </div>
            </div>
        </div>
        <div class="tab">
            <div class="fs-48 text-white fw-700 pb-1 lh-1 text-capitalize">Next, Select Your Preferred Date & Time</div>
            <div class="form-group form-wrapper pt-6">
                <div class="row gy-5">
                    <div class="col-md-5 col-xl-4 col-xxl-3">
                        [text* book-date id:datetimepicker3 class:form-control class:walcf7-datepicker placeholder "Date Picker"]
                    </div>
                    <div class="col">
                        [radio preferredTime class:timepicker use_label_element "12am" "1am" "2am" "3am" "4am" "5am" "6am" "7am" "8am" "9am" "10am" "11am" "12am" "1pm" "2pm" "3pm" "4pm" "5pm" "6pm" "7pm" "8pm" "9pm" "10pm" "11pm"]
                    </div>
                </div>
            </div>
        </div>
        <div class="tab">
            <div class="fs-48 text-white fw-700 pb-1 lh-1 text-capitalize">Lastly, Leave A message to help us better your enquiry</div>
            <div class="pt-6">
                <div class="label">Message</div>
                [textarea your-message x7 class:form-control placeholder "Comment Here"]
            </div>
        </div>
    </div>
    <div class="buttons d-flex justify-content-start align-items-center flex-wrap mt-5 position-relative">
        <button type="button" id="nextBtn" class="btn btn-white d-inline-flex rounded-pill text-secondary fw-700 px-5 px-xl-8" onclick="nextPrev(1)">Next</button>
        <span class="px-3 py-md-0 py-2 text-white fw-700" id="prevBtn" onclick="nextPrev(-1)">Go Back</span>
    </div>
</div>