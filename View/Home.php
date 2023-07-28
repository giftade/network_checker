<div class="px-5">
    <div class="hero  ">
        <div id="map">
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="1352" height="510" id="gmap_canvas" src="https://maps.google.com/maps?q=california&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 55vh;
                            /* width: 100%; */
                        }
                    </style><a href="https://embedgooglemap.2yu.co">html embed google map</a>
                    <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 55vh;
                            /* width: 100%; */
                        }
                    </style>
                </div>
            </div>
        </div>
        <!-- Add this inside the <div id="search_section" class="pt-3"> -->
        <div id="loading-icon" style="display: none;" class="w-100 h-100 bg-secondary">
            <i class="fa fa-spinner fa-spin"></i> Loading...
        </div>

        <div class="d-flex justify-content-center pt-3">

            <div id="search_section" class="pt-3">
                <div class="d-flex justify-content-center">
                    <h1 style="font-size: 18px">ENTER YOUR ADDRESS OR LOCATION CORDINATE</h1>
                </div>
                <div class="d-flex justify-content-center items-center text-center pb-4">
                    <!-- signalForm -->
                    <form id="signalForm">
                        <div class="">
                            <input type="button" class="network-type-button" data-type="2G" value="2G" style="height:40px; border-radius: 4px; border:0; ;">
                            <input type="button" class="network-type-button mx-3" data-type="3G" value="3G" style="height:40px; border-radius: 4px; border:0; ;">
                            <input type="button" class="network-type-button" data-type="4G" value="4G" style="height:40px; border-radius: 4px; border:0; ;">
                        </div>

                        <div class="my-4">
                            <input type="button" class="service-provider-button" data-provider="MTN" value="MTN" style="height:40px; border-radius: 4px; border:0; ">
                            <input type="button" class="service-provider-button mx-3" data-provider="GLO" value="GLO" style="height:40px; border-radius: 4px; border:0; ">
                            <input type="button" class="service-provider-button" data-provider="AIRTEL" value="AIRTEL" style="height:40px; border-radius: 4px; border:0; ">
                            <input type="button" class="service-provider-button mx-3" data-provider="9MOBILE" value="9MOBILE" style="height:40px; border-radius: 4px; border:0; ">
                        </div>

                        <div class="form-group d-flex">
                            <input type="text" name="" id="search_term" class="form-control " style="width: 487px;" placeholder="e.g faculty of CIS, University of Ilorin">
                            <button type="submit" class="btn mx-2" style="border:0;  color:white; background-color: #48A8C1; ">Check mobile signal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="jumbotron px-5 py-1">
        <p class="jumbotron_text">Use our Network Status Checker to find out how your network operator’s performing where you are – including up-to-date information on anything going on that might affect your signal. Simply enter your location or postcode and choose what type of service you want to check.</p>
    </div>

    <div class="faq-section px-5">
        <p class="need_help text-center my-4">NEED MORE HELP?</p>

        <p class="check">
            Check our FAQs
        </p>

        <div id="accordion">
            <!-- FAQ Item 1 -->
            <div class="card card-theme my-3" style="text-decoration:none">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <div class="btn collapsed mr-auto w-100  d-flex justify-content-between" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <p class="faq_header" style="text-decoration: none;">
                                What is mobile coverage / signal checking?
                            </p>
                            <i class="fa fa-angle-down ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9L12 15L18 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </i>
                        </div>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        It refers to the strength of signal or reception you’ll get, both for data and voice calls, in your area.
                    </div>
                </div>
            </div>
            <!-- Add more FAQ items here -->
            <!-- FAQ Item 1 -->
            <div class="card card-theme my-3" style="text-decoration:none">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <div class="btn collapsed mr-auto w-100  d-flex justify-content-between" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">
                            <p class="faq_header">
                                Why can’t I connect to the internet?
                            </p>
                            <i class="fa fa-angle-down ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9L12 15L18 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </i>
                        </div>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        It maybe due to obstruction of line of sight connectivity to the network or a bad weather condition.
                    </div>
                </div>
            </div>
            <!-- Add more FAQ items here -->

            <!-- FAQ Item 1 -->
            <div class="card card-theme my-3" style="text-decoration:none">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <div class="btn collapsed mr-auto w-100  d-flex justify-content-between" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseOne">
                            <p class="faq_header">
                                What types of mobile coverage are there?
                            </p>
                            <i class="fa fa-angle-down ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9L12 15L18 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </i>
                        </div>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        Voice, 3G, 4G. 5G
                    </div>
                </div>
            </div>
            <!-- Add more FAQ items here -->

            <!-- FAQ Item 1 -->
            <div class="card card-theme my-3" style="text-decoration:none">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <div class="btn collapsed mr-auto w-100  d-flex justify-content-between" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseOne">
                            <p class="faq_header">
                                What affects mobile signal coverage?
                            </p>
                            <i class="fa fa-angle-down ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9L12 15L18 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </i>
                        </div>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        It could be your location, your local environment, travelling, your phone, the weather.
                    </div>
                </div>
            </div>
            <!-- Add more FAQ items here -->

            <!-- FAQ Item 1 -->
            <div class="card card-theme my-3" style="text-decoration:none">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <div class="btn collapsed mr-auto w-100  d-flex justify-content-between" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseOne">
                            <p class="faq_header">
                                How can I improve my mobile signal?
                            </p>
                            <i class="fa fa-angle-down ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9L12 15L18 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </i>
                        </div>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        Open your windows, get high up, turn off and turn on your phone, switch network, mobile phone signal booster.
                    </div>
                </div>
            </div>
            <!-- Add more FAQ items here -->

            <!-- FAQ Item 1 -->
            <div class="card card-theme my-3" style="text-decoration:none">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <div class="btn collapsed mr-auto w-100  d-flex justify-content-between" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseOne">
                            <p class="faq_header">
                                Will a new phone improve my mobile signal?
                            </p>
                            <i class="fa fa-angle-down ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M6 9L12 15L18 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </i>
                        </div>
                    </h5>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        The surprising answer is that yes in many cases it can, the newer model phones tend on average to have better reception than older ones.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        var selectedNetworkType = '';
        var selectedServiceProvider = '';

        $('.network-type-button').click(function() {
            selectedNetworkType = $(this).data('type');
            $('.network-type-button').removeClass('active_button');
            $(this).addClass('active_button');
        });

        $('.service-provider-button').click(function() {
            selectedServiceProvider = $(this).data('provider');
            $('.service-provider-button').removeClass('active_button');
            $(this).addClass('active_button');
        });

            // Submit form using AJAX
            $('#signalForm').submit(function(event) {
                event.preventDefault(); // Prevent form submission and page reload

                // Show the loading icon
                $('#loading-icon').show();

                var searchTerm = $("#search_term").val();

                // AJAX POST request
                $.ajax({
                    type: 'POST',
                    url: '/search',
                    data: {
                        networkType: selectedNetworkType,
                        serviceProvider: selectedServiceProvider,
                        searchTerm: searchTerm,
                    },
                    success: function(response) {
                        console.log('Response from server:', response);
                        console.log('Response from server:', response.data);

                        var responseData = JSON.stringify(response.data);
                        // Hide the loading icon after successful response
                        $('#loading-icon').hide();
                        // Redirect to the new PHP page with the data as URL parameters
                        var url = 'searchpage?networkType=' + response.networkType + '&serviceProvider=' + response.serviceProvider + '&searchTerm=' + response.searchTerm + '&data=' + responseData;
                        // var url = 'SearchPage.php' + $.param(response);
                        window.location.href = url;
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                        // Hide the loading icon on error
                        $('#loading-icon').hide();
                    }
                });
            });
    });
</script>