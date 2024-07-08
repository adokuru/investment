@extends('layouts.public')
@section('title', 'Contact')
@section('content')

    <div class="page-title-area title-bg-five">
        <div class="title-shape">
            <img src="assets/img/title/title-bg-shape.png" alt="Shape">
        </div>
    </div>


    <div class="contact-area pt-100 pb-70">
        {{-- <div class="contact-shape">
            <img src="assets/img/contact-shape.png" alt="Shape">
        </div> --}}
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2>Get In Touch</h2>
                    </div>
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Email" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" placeholder="Phone" required
                                        data-error="Please enter your number" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                        placeholder="Subject" required data-error="Please enter your subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Write message"
                                        required data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <div class="form-check agree-label">
                                        <input name="gridCheck" value="I agree to the terms and privacy policy."
                                            class="form-check-input" type="checkbox" id="gridCheck" required>
                                        <label class="form-check-label" for="gridCheck">
                                            Accept <a href="terms-conditions.html">Terms of Services</a> and <a
                                                href="privacy-policy.html">Privacy Policy</a>
                                        </label>
                                        <div class="help-block with-errors gridCheck-error"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn common-btn">
                                    Send Message
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info">
                        <h3>Contact Info</h3>

                        <p><b>Allianz</b></p>
                        <p>58 Waterloo Street, Glasgow G2 7Da, Scotland.</p>

                        <p><b>Support Email</b></p>
                        <p>
                            <a href="mailto:support@allnzonlineasset.org"><span
                                    class="__cf_email__">support@allnzonlineasset.org</span></a>
                        </p>
                        <p><b>Support Phone Number</b></p>

                        <p>
                            <a href="tel:+447418604460"><span class="__cf_email__">+44 7418 604460</span></a>
                        </p>

                        <p><b>Office Hours</b></p>
                        <p>Monday - Friday</p>
                        <p>8:30am - 5:00pm</p>

                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="map-area pb-100">
        <div class="container">
            <iframe id="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59843174.53779284!2d62.17507173408573!3d23.728204508550373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3663f18a24cbe857%3A0xa9416bfcd3a0f459!2sAsia!5e0!3m2!1sen!2sbd!4v1604317797619!5m2!1sen!2sbd"
                allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div> --}}

@endsection
