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
                <div class="row">
                    <div class="col-md-4 col-lg-3">
                        [text* book-date id:datetimepicker3 class:form-control class:walcf7-datepicker placeholder "Date Picker"]
                    </div>
                    <div class="col">
                        [radio preferredTime class:timepicker use_label_element "12am" "1am" "2am" "3am" "4am" "5am" "6am" "7am" "8am" "9am" "10am" "11am" "12am" "1pm" "2pm" "3pm" "4pm" "5pm" "6pm" "7pm" "8pm" "9pm" "10pm" "11pm"]
                        <!-- <div class="row radio-toolbar g-2 g-md-3">
                            <div class="col-4 col-lg-3 col-xl-2">
                                <input class="form-check-input" type="radio" name="timeslot" value="12am" id="timeslot_12am" checked>
                                <label class="form-check-label time" for="timeslot_12am">
                                    12am
                                </label>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <input class="form-check-input" type="radio" name="timeslot" value="1am" id="timeslot_1am">
                                <label class="form-check-label time" for="timeslot_1am">
                                    1am
                                </label>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <input class="form-check-input" type="radio" name="timeslot" value="2am" id="timeslot_2am">
                                <label class="form-check-label time" for="timeslot_2am">
                                    2am
                                </label>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <input class="form-check-input" type="radio" name="timeslot" value="3am" id="timeslot_3am">
                                <label class="form-check-label time" for="timeslot_3am">
                                    3am
                                </label>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <input class="form-check-input" type="radio" name="timeslot" value="4am" id="timeslot_4am">
                                <label class="form-check-label time" for="timeslot_4am">
                                    4am
                                </label>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <input class="form-check-input" type="radio" name="timeslot" value="5am" id="timeslot_5am">
                                <label class="form-check-label time" for="timeslot_5am">
                                    5am
                                </label>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <input class="form-check-input" type="radio" name="timeslot" value="6am" id="timeslot_6am">
                                <label class="form-check-label time" for="timeslot_6am">
                                    6am
                                </label>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <input class="form-check-input" type="radio" name="timeslot" value="7am" id="timeslot_7am">
                                <label class="form-check-label time" for="timeslot_7am">
                                    7am
                                </label>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <input class="form-check-input" type="radio" name="timeslot" value="8am" id="timeslot_8am">
                                <label class="form-check-label time" for="timeslot_8am">
                                    8am
                                </label>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <input class="form-check-input" type="radio" name="timeslot" value="9am" id="timeslot_9am">
                                <label class="form-check-label time" for="timeslot_9am">
                                    9am
                                </label>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <input class="form-check-input" type="radio" name="timeslot" value="10am" id="timeslot_10am">
                                <label class="form-check-label time" for="timeslot_10am">
                                    10am
                                </label>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <input class="form-check-input" type="radio" name="timeslot" value="11am" id="timeslot_11am">
                                <label class="form-check-label time" for="timeslot_11am">
                                    11am
                                </label>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <input class="form-check-input" type="radio" name="timeslot" value="12pm" id="timeslot_12pm">
                                <label class="form-check-label time" for="timeslot_12pm">
                                    12pm
                                </label>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <input class="form-check-input" type="radio" name="timeslot" value="1pm" id="timeslot_1pm">
                                <label class="form-check-label time" for="timeslot_1pm">
                                    1pm
                                </label>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <input class="form-check-input" type="radio" name="timeslot" value="2pm" id="timeslot_2pm">
                                <label class="form-check-label time" for="timeslot_2pm">
                                    2pm
                                </label>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <input class="form-check-input" type="radio" name="timeslot" value="3pm" id="timeslot_3pm">
                                <label class="form-check-label time" for="timeslot_3pm">
                                    3pm
                                </label>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <input class="form-check-input" type="radio" name="timeslot" value="4pm" id="timeslot_4pm">
                                <label class="form-check-label time" for="timeslot_4pm">
                                    4pm
                                </label>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <input class="form-check-input" type="radio" name="timeslot" value="5pm" id="timeslot_5pm">
                                <label class="form-check-label time" for="timeslot_5pm">
                                    5pm
                                </label>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <input class="form-check-input" type="radio" name="timeslot" value="6pm" id="timeslot_6pm">
                                <label class="form-check-label time" for="timeslot_6pm">
                                    6pm
                                </label>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <input class="form-check-input" type="radio" name="timeslot" value="7pm" id="timeslot_7pm">
                                <label class="form-check-label time" for="timeslot_7pm">
                                    7pm
                                </label>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <input class="form-check-input" type="radio" name="timeslot" value="8pm" id="timeslot_8pm">
                                <label class="form-check-label time" for="timeslot_8pm">
                                    8pm
                                </label>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <input class="form-check-input" type="radio" name="timeslot" value="9pm" id="timeslot_9pm">
                                <label class="form-check-label time" for="timeslot_9pm">
                                    9pm
                                </label>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <input class="form-check-input" type="radio" name="timeslot" value="10pm" id="timeslot_10pm">
                                <label class="form-check-label time" for="timeslot_10pm">
                                    10pm
                                </label>
                            </div>
                            <div class="col-4 col-lg-3 col-xl-2">
                                <input class="form-check-input" type="radio" name="timeslot" value="11pm" id="timeslot_11pm">
                                <label class="form-check-label time" for="timeslot_11pm">
                                    11pm
                                </label>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="tab">
            <div class="fs-48 text-white fw-700 pb-1 lh-1 text-capitalize">Lastly, Leave A message to help us better your enquiry</div>
            <div class="pt-6">
                <div class="label">Message</div>
                <textarea name="message" rows="7" class="form-control" placeholder="Comment Here"></textarea>
            </div>
        </div>
    </div>
    <div class="buttons d-flex justify-content-start align-items-center flex-wrap mt-5 position-relative">
        <button type="button" id="nextBtn" class="btn btn-white d-inline-flex rounded-pill text-secondary fw-700 px-5 px-xl-8" onclick="nextPrev(1)">Next</button>
        <span class="px-3 py-md-0 py-2 text-white fw-700" id="prevBtn" onclick="nextPrev(-1)">Go Back</span>
    </div>
</div>