@extends('web-layout.main')

@section('content')
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    
    <!-- section begin -->
    <section id="subheader" class="jarallax">
        <img class="jarallax-img" src="assets/img/background/5.jpg" alt="" />
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Reservation</h1>
                        <p>Welcome to Stradale Cafe</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section>
        <div class="container">
            <div class="row">
                    <div class="col-md-8 offset-md-2">
                    <form name="contactForm" id='contact_form' method="post">
                        <div id="step-1" class="row">

                            <div class="col-md-4 mb10">
                                <h4>Select Date</h4>
                                <input type="date" name="date" id="date" class="form-control" min="1997-01-01" required />
                            </div>

                            <div class="col-md-4 mb10">
                                <h4>Select Time</h4>
                                <select name="Unit Size" id="unit_size" value="" class="form-control">
                                    <option selected disabled>Select time</option>
                                    <option value="10:00">10:00</option>
                                </select>
                            </div>

                            <div class="col-md-4 mb10">
                                <h4>How many guests?</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <select name="Budget" id="budget" value="" class="form-control">
                                          <option value="1-4">1 - 4</option>
                                          <option value="5-8">5 - 10</option>
                                          <option value="5-8">11 - 20</option>
                                          <option value="20+">More than 20</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>

                        </div>

                        <div id="step-2" class="row">
                            <h4>Enter your details</h4>

                            <div class="col-md-6">
                                <div id='name_error' class='error'>Please enter your name.</div>
                                <div>
                                    <input type='text' name='Name' id='name' class="form-control" placeholder="Your Name" required>
                                </div>

                                <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                <div>
                                    <input type='email' name='Email' id='email' class="form-control" placeholder="Your Email" required>
                                </div>

                                <div id='phone_error' class='error'>Please enter your phone number.</div>
                                <div>
                                    <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id='message_error' class='error'>Please enter your message.</div>
                                <div>
                                    <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="g-recaptcha" data-sitekey="copy-your-site-key-here"></div>
                                <p id='submit' class="mt20">
                                    <input type='submit' id='send_message' value='Submit Form' class="btn btn-main">
                                </p>
                            </div>
                        </div>
                    </form>

                    <div id="success_message" class='success'>
                        Your message has been sent successfully. Refresh this page if you want to send more messages.
                    </div>
                    <div id="error_message" class='error'>
                        Sorry there was an error sending your form.
                    </div>

                </div>
            </div>
        </div>    
    </section>
    <!-- section close -->

</div>
<!-- content close -->
@endsection