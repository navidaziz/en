@include('psra_new.header')
@include('psra_new.menu')

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<main role="main">
    <div style="text-align: center; padding-top:10px; position: relative !important;">

        <img src="http://psra.gkp.pk/v1/assets/admin/img/psra_log.png" width="100px" />
        <h4>Private Schools Regulatory Authority </h4>
        <h6>Government Of Khyber Pakhtunkhwa</h6>

    </div>
    @include('psra_new.slider')


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing" style="text-align: center;">
        <div class="row">

            <div class="col-lg-8">
                <div class="row">
                    <?php if (1 == 2) { ?>
                        <div class="col-lg-12">
                            <img class="float-left " width="100" style="margin-right: 10px;" src="https://psra.gkp.pk/shahram_khan_taikai.jpeg" />

                            <!-- <h5 style="text-align: left;">Shahram Khan Tarakai</h5> -->
                            <h6 style="text-align: left; font-size:13px">Minister Elementary & Secondary Education Khyber Pakhtunkhwa</h6>
                            <p style="text-align: left;">
                                <i>"No country of world can succeed in attaining the cherished goal of socio economic development without having an efficient, highly skilled and qualified public."</i>
                            </p>
                        </div>
                        <hr class="featurette-divider">


                        <div class="col-lg-6">
                            <div style="margin-bottom: 100px !important; ">
                                <img class="float-left " width="100" style="margin-right: 10px;" src="https://psra.gkp.pk/sec_education.jpeg" />

                                <!-- <h5 style="text-align: left;">Motasim Billah Shah</h5> -->
                                <h6 style="text-align: left; font-size: 13px;">Secretary Secretary E&SE</h6>
                                <p style="font-size: 10px; text-align:left; ">
                                    <i>"Education broadens one’s thoughts and plays a vital role in shaping a successful life. An educated mind can do many things which an uneducated cannot do."</i>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div style="margin-bottom: 100px !important; ">
                                <img class="float-left " width="100" style="margin-right: 10px;" src="https://psra.gkp.pk/md_psra.jpeg" />

                                <!-- <h5 style="text-align: left;">Kabir Afridi</h5> -->
                                <h6 style="text-align: left; font-size: 13px;">Managing Director PSRA</h6>
                                <p style="font-size: 10px; text-align:left; ">
                                    <i>"Education broadens one’s thoughts and plays a vital role in shaping a successful life. An educated mind can do many things which an uneducated cannot do."</i>
                                </p>
                            </div>
                        </div>

                    <?php } ?>

                    <hr class="featurette-divider">

                    <div class="p-4 col-lg-12 bg-light rounded">
                        <h4 class="font-italic">About Private Schools Regulatory Authority</h4>
                        <p class="mb-0">
                            PSRA is an auhtority for <i><strong>Registration,</strong></i>
                            <i><strong>Regulation</strong></i> and
                            <i><strong>Supervision</strong></i> of private schools in the Khyber Pakhtunkhwa.
                        </p>
                    </div>

                    <div class="col-md-12">

                        <script>
                            function check_school_registration() {
                                registration_number = $('#registration_no').val();
                                $.ajax({
                                        method: "POST",
                                        url: "https://psra.gkp.pk/schoolReg/Temp_controller/check_school_registration",
                                        data: {
                                            registration_no: registration_number,
                                        },
                                    })
                                    .done(function(respose) {
                                        $('#registartion_detail').html(respose);
                                        //$('#search_result').html(respose);
                                        // $('#request_detail').modal('show');
                                        // $('#modal_title').html("School Case Details");
                                        // $('#request_detail_body').html(respose);
                                    });
                            }
                        </script>
                        <div style="text-align:center; margin-top:30px;">
                            <h4>Verify Private School Registration Online</h4>
                            Please Enter School Registration Number: <input type="text" value="" id="registration_no" name="registration_no" placeholder="Registration Number">
                            <button onclick="check_school_registration()">Check School Registration</button>
                        </div>

                        <div style="margin-top:30px;" id="registartion_detail"></div>

                    </div>


                </div>
            </div><!-- /.col-lg-4 -->
            <aside class="col-md-4 blog-sidebar">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="font-italic">Notifications & Updates</h4>
                    <p class="mb-0">

                        <script>
                            $(document).ready(function() {
                                get_notifications();
                            });

                            function get_notifications() {
                                $.ajax({
                                        method: "POST",
                                        url: "https://psra.gkp.pk/institute/Temp_controller/get_notifications",
                                        data: {},
                                    })
                                    .done(function(respose) {
                                        $('#notifications').html(respose);

                                    });
                            }
                        </script>


                    <div class="panel-body">
                        <div class="bs-callout bs-callout-danger">
                            <a target="new" style="color:red" href="https://psra.gkp.pk/uploads/22-23 Notification due dates.pdf"> Notification Regarding Session 2022-23
                                - Download
                            </a>
                        </div>
                        <marquee height="300px" scrollamount="3" direction="up" onMouseover="this.stop();" onMouseout="this.start();" id="notifications">

                            <!-- <div class="bs-callout bs-callout-danger">
                                <a style="" href="{{asset('uploads/Vacations notification.pdf')}}"> Notification Regarding Vacations for Educational Institutes</a>
                            </div>
                            <hr />

                            <div class="bs-callout bs-callout-danger">
                                <a style="" href="{{asset('uploads/New Doc 05-10-2022 13.02.pdf')}}">Extend Cooperation To Health Teams In Polio Campaign From 23rd May 2022 To 29th May 2022</a>
                            </div>
                            <hr />
                            <div class="bs-callout bs-callout-danger">
                                <a style="" href="{{asset('uploads/detail of approved textbook.pdf')}}">
                                    Approved textbooks on curricula 2020 for grade I - V developed by private pusblishers for academic year 2021-22 and onwards.</a>
                            </div>
                            <hr />
                            <div class="bs-callout bs-callout-danger">
                                <a style="" href="{{asset('uploads/springvacationnotificationfinal.pdf')}}"> Notification: Spring Vacation 2022</a>
                            </div>
                            <hr />
                            <div class="bs-callout bs-callout-danger">
                                <a style="" href="{{asset('uploads/CamScanner 03-11-2022 14.30.pdf')}}"> Career counseling fest organized for young students in islamabad by the M/O FE&PT</a>
                            </div>
                            <hr />
                            <div class="bs-callout bs-callout-danger">
                                <a href="{{asset('uploads/CamScanner 03-11-2022 14.32.pdf')}}">BISE Mardan: Installation / Functionalization of CCTV cameras in examination halls</a>
                            </div>
                            <hr />
                            <div class="bs-callout bs-callout-danger">
                                <a href="{{asset('uploads/District_readiness_meeting_for_NIDs_March_2022_Polio_campaign.pdf')}}"> District readiness meeting for NIDs March 2022 Polio campaign</a>
                            </div>
                            <hr />
                            <div class="bs-callout bs-callout-danger">
                                <a href="{{asset('uploads/Approved Publishers DCTE.pdf')}}"> Approved Publishers DCTE</a>
                            </div>
                            <hr />
                            <div class="bs-callout bs-callout-danger">
                                <a href="{{asset('uploads/old_vehicles.pdf')}}"> Submission of Data as per Meeting Regarding Ban on Old Model of School / College Vehicles</a>
                            </div>
                            <hr />
                            <div class="bs-callout bs-callout-danger">
                                <a href="{{asset('uploads/session_start_notification.pdf')}}"> Notification Regarding Academic Year 2022-23 & 2023-24</a>
                            </div>
                            <hr />
                            <div class="bs-callout bs-callout-danger">
                                <a href="{{asset('uploads/Kashmir_Solidarity_Day.pdf')}}"> Kashmir solidarity day 5th February 2022</a>
                            </div>
                            <hr />
                            <div class="bs-callout bs-callout-danger">

                                <a target="_new" href="{{asset('uploads/Admission_fee_is_illegal.pdf')}}"> Circular issued by PSRA in light of Peshwar High Court judgment in wirt petition bearing numner WP No. 1995-P of 2020 dated 14.12.2021.</a>
                            </div>
                            <hr />
                            <div class="bs-callout bs-callout-danger">
                                <a target="_new" href="{{asset('uploads/WP_notification.pdf')}}"> Notification issued by PSRA in light of Peshwar High Court judgment in wirt petition bearing numner WP No. 1995-P of 2020 dated 14.12.2021.</a>
                            </div>
                            <hr />
                            <div class="bs-callout bs-callout-danger">
                                <a href="{{asset('uploads/extension_of_relief_act_2020.pdf')}}"> Notification regarding extension of relief in monthly tuition fees under khyber pakhtunkhwa epidemic control and emergency relief act, 2020</a>
                            </div>
                            <hr />
                            <div class="bs-callout bs-callout-danger">
                                <a href="{{asset('uploads/student-vaccination-report.pdf')}}"> Submission of Students Vaccination Report</a>
                            </div>
                            <hr />
                            <div class="bs-callout bs-callout-danger">
                                <a href="{{asset('uploads/IMG-20210902-WA0041.jpg')}}"> Circular regarding increase in fee</a>
                            </div>
                            <hr />
                            <div class="bs-callout bs-callout-danger">
                                <a href="{{asset('uploads/student-covid letter.pdf')}}"> Notification regarding submission of student vaccination report</a>
                            </div>
                            <hr />
                            <div class="bs-callout bs-callout-danger">
                                <a href="{{asset('uploads/covid 19 letter.pdf')}}"> Notification regarding Covid vaccination</a>
                            </div>
                            <hr /> -->
                            <!--   <div class="bs-callout bs-callout-danger" > -->
                            <!--   <a  style="color:green;" href="{{asset('uploads/notification-2021-2022-ext.pdf')}}"> Notification regarding extension of 2021-2022 session</a>-->
                            <!--</div>-->
                            <!--   <div class="bs-callout bs-callout-danger" > -->
                            <!--<a   href="{{asset('uploads/notification-fee-latefee.pdf')}}"> Circular regarding fee/late fee</a>-->
                            <!--</div>-->
                            <!--   <div class="bs-callout bs-callout-danger" > -->
                            <!--<a   href="{{asset('uploads/Circular-SLC.pdf')}}"> Circular regarding School Leaving Certificate</a>-->

                            <!--</div>-->
                        </marquee>

                    </div>

                    </p>
                </div>

            </aside>

        </div><!-- /.row -->
        <hr class="featurette-divider">
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="bd-placeholder-img rounded-circle" style="margin:0 auto; padding: 10px; border:1px solid #777777; height:140px; width:140px">
                    <img width="100" height="100" src="https://psra.gkp.pk/primary.png" />
                </div>
                <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
          <title>Primary</title>
          <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
        </svg> -->

                <script>
                    $(document).ready(function() {
                        get_registered_schools();
                    });

                    function get_registered_schools() {
                        $.ajax({
                                method: "POST",
                                url: "https://psra.gkp.pk/institute/Temp_controller/get_registered_schools",
                                data: {},
                            })
                            .done(function(respose) {
                                var total_reg = jQuery.parseJSON(respose);
                                $('#primary').html(total_reg.total_primary);
                                $('#middle').html(total_reg.total_middle);
                                $('#high').html(total_reg.total_high);
                                $('#high_sec').html(total_reg.total_high_sec);

                            });
                    }
                </script>

                <h2>Primary</h2>
                <p><span style="color: #5A5A5A!important"> Total Registered: </span>
                    <strong> <span id="primary" style="color: #6c757d!important;">00</span> </strong>
                </p>
                <!-- <p><a class="btn btn-secondary" href="#" role="button">Criteria »</a></p> -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="bd-placeholder-img rounded-circle" style="margin:0 auto; padding: 10px; border:1px solid #777777; height:140px; width:140px">
                    <img width="100" height="100" src="https://psra.gkp.pk/middle.png" />
                </div>
                <h2>Middle</h2>
                <p><span style="color: #5A5A5A!important"> Total Registered: </span>
                    <strong> <span id="middle" style="color: #6c757d!important;">00</span></strong>
                </p>
                <!-- <p><a class="btn btn-secondary" href="#" role="button">Criteria »</a></p> -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="bd-placeholder-img rounded-circle" style="margin:0 auto; padding: 10px; border:1px solid #777777; height:140px; width:140px">
                    <img width="100" height="100" src="https://psra.gkp.pk/high.png" />
                </div>
                <h2>High</h2>
                <p><span style="color: #5A5A5A!important"> Total Registered: </span>
                    <strong> <span id="high" style="color: #6c757d!important;">00</span> </strong>
                </p>
                <!-- <p><a class="btn btn-secondary" href="#" role="button">Criteria »</a></p> -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="bd-placeholder-img rounded-circle" style="margin:0 auto; padding: 10px; border:1px solid #777777; height:140px; width:140px">
                    <img width="100" height="100" src="https://psra.gkp.pk/high_sec.png" />
                </div>
                <h2>High Secondary</h2>
                <p><span style="color: #5A5A5A!important"> Total Registered: </span>
                    <strong> <span id="high_sec" style="color: #6c757d!important;">00</span> </strong>
                </p>
                <!-- <p><a class="btn btn-secondary" href="#" role="button">Criteria »</a></p> -->
            </div>
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Current Session, <span class="text-muted">2022-23</span></h2>
                <p class="lead">
                    Last Dates for New Registration, Upgradation and Renewals of private schools of khyber pakhtunkhwa for session 2022-23
                </p>
            </div>
            <div class="col-md-5">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Due Dates for fee submission of Session 2022-23</th>
                            <th>From</th>
                            <th>To</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>With Normal Fee</td>
                            <td>01 March, 2022</td>
                            <td>31 May, 2022</td>
                        </tr>
                        <tr>
                            <td>Normal Fee + Late Fee (15% of the total fee excluding security fee)</td>
                            <td>01 June, 2022</td>
                            <td>15 July, 2022</td>
                        </tr>
                        <tr>
                            <td>Normal Fee + Late Fee (30% of the total fee excluding security fee)</td>
                            <td>16 July, 2022</td>
                            <td>31 August, 2022</td>
                        </tr>
                        <tr>
                            <td>Normal Fee + Late Fee (45% of the total fee excluding security fee)</td>
                            <td>01 Sep, 2022</td>
                            <td>30 Sep, 2022</td>
                        </tr>
                        <tr>
                            <td>Normal Fee + Late Fee (100% of the total fee excluding security fee)</td>
                            <td colspan="2" style="text-align:center">After 01 Oct, 2022</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Online Complaints <span class="text-muted"> and Feedback.</span></h2>
                <p class="lead">
                    complaints and grievance redressal <a target="new" href="https://apkpure.com/pakistan-citizen-portal/com.govpk.citizensportal">download</a> pakistan citizen portal.
                    For feedback email us at <a target="new" href="mailto:psra.pmdu@gmail.com">psra.pmdu@gmail.com</a>.
                    <br />
                    <br />
                    Contact us on office landline number
                <p class="lead" style="text-align: left;">
                    Mangaging Director Office: <a target="new" href="tel:+920919216367">091-9216367</a><br />
                    Director Registration Office: <a target="new" href="tel:+920919216197">091-9216197</a><br />
                    Director Operation Office:
                    <a target="new" href="tel:+920919216194">091-9216194</a>,
                    <a target="new" href="tel:+920919216195">091-9216195</a>,
                    <a target="new" href="tel:+920919216196">091-9216196</a>
                    <br />
                    Director Admin Office: <a target="new" href="tel:+920919222182">091-9222182</a><br />
                    PSRA MIS Section: <a target="new" href="tel:+920919216194">091-9216205</a>
                </p>
                </p>
            </div>
            <div class="col-md-5 order-md-1">
                <img style="width: 100%;" data-u="image" src="https://psra.gkp.pk/pmcp.jpeg" />
            </div>
        </div>

        <hr class="featurette-divider">
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0&appId=562217605313684&autoLogAppEvents=1" nonce="KZpqZ3ZJ"></script>
        <div class="row featurette">
            <div class="col-md-5">
                <h2 class="featurette-heading">Follow Us on <span class="text-muted">Facebook.</span></h2>
                <p class="lead">
                    For recent activities and updates, follow us on facebook page.
                </p>
            </div>
            <div class="col-md-7">
                <div class="fb-page" data-href="https://www.facebook.com/KPPSRA/" data-tabs="timeline" data-width="700" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false">
                    <blockquote cite="https://www.facebook.com/KPPSRA/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/KPPSRA/">Private Schools Regulatory Authority Khyber Pakhtunkhwa</a></blockquote>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
    @include('psra_new.footer')