<?php
if (isset($_GET['networkType']) && isset($_GET['serviceProvider']) && isset($_GET['searchTerm'])) {
    // Get the data from URL parameters
    $networkType = $_GET['networkType'];
    $serviceProvider = $_GET['serviceProvider'];
    $searchTerm = $_GET['searchTerm'];
    $dataJson = $_GET['data'];
    $data = json_decode($dataJson, true);

    // Decode the nested JSON strings within specific keys
    if ($data == "No data for this location found") { ?>
        <script>
            var url = '/?errorMessage=' + "No Data found for the location you entered.";
            window.location.href = url;
        </script>
    <?php

    }

    if ($data != "No data for this location found") {
        $data['rscp_rsrp'] = json_decode($data['rscp_rsrp'], true);
        $data['ecno'] = json_decode($data['ecno'], true);
        $data['ul'] = json_decode($data['ul'], true);
        $data['dl'] = json_decode($data['dl'], true);
    }
} else { ?>
    <script>
        var url = "/";
        window.location.href = url;
    </script>
<?php echo "Error: Missing parameters.";
} ?>

<div class="px-5 ">
    <div class="hero">
        <div id="map">
        </div>
        <a class="link" href="/">
            <a class="back_button d-flex  my-4"  href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M9 14L4 9L9 4" stroke="#0B1E23" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M20 20V13C20 11.9391 19.5786 10.9217 18.8284 10.1716C18.0783 9.42143 17.0609 9 16 9H4" stroke="#0B1E23" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="back_button_text mx-2 ">back</p>
            </a>
        </a>

        <div class="d-flex justify-content-start pt-3">
            <div id="result_output" class="pt-3 p-3">
                <div class="d-flex">
                    <h1 class="search_info">DISPLAYING RF PROPERTIES OF <?php echo $searchTerm ?>
                        ON <span class="search_info_device"><?= $_SERVER['HTTP_SEC_CH_UA_PLATFORM'] ?></span> </h1>
                </div>
                <div class="d-flex">
                    <div class="search_network_btn"><?php echo $networkType ?></div>
                    <div class="search_network_btn mx-3"><?php echo $serviceProvider ?></div>
                </div>

                <p class="my-3" style=" font-size: 22px; font-weight: 400; line-height: 31px; letter-spacing: 0em; text-align: left; "> <?php echo $data['message']; ?></p>

                <div class="w-100 h-100 d-flex align-items-center inner_blue">
                    <h1 class="network_tech_G ">
                        <?php echo $data['network_type']; ?>
                    </h1>
                    <p class="long_message mx-2">- <?php echo $data['long_message']; ?></p>
                </div>

                <div class="d-flex my-4">
                    <div class="small_box border border-1">
                        <p class="box_text">longitute: <?php echo $data['longitute']; ?></p>
                    </div>
                    <div class="small_box border border-1 mx-1">
                        <p class="box_text">latitude: <?php echo $data['latitude']; ?></p>
                    </div>
                    <div class="small_box border border-1">
                        <p class="box_text">Cell ID: <?php echo $data['cell_id']; ?></p>
                    </div>
                </div>

                <div class="d-flex mt-2">
                    <div class="small_box border border-1">
                        <p class="box_text">Tech Type: <?php echo $data['tech_type']; ?></p>
                    </div>
                    <div class="small_box border border-1 mx-1">
                        <p class="box_text">Location Area Code: <?php echo $data['location_area_code']; ?></p>
                    </div>
                    <div class="small_box border border-1">
                        <p class="box_text">Azimuth: <?php echo $data['azimuth']; ?></p>
                    </div>
                </div>

                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <td scope="col"></td>
                                <td scope="col">Value</td>
                                <td scope="col">Good</td>
                                <td scope="col">Average</td>
                                <td scope="col">bad</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>RSCP/RSRP/Rx Level (Signal Strength):</td>
                                <td> <?= $data['rscp_rsrp']['name'] ?></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>RSRQ/Rx Quality (Signal Quality):</td>
                                <td><?php echo $data['ecno']['Test']; ?></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>ECNO/SINR (Signal to Noise ratio):</td>
                                <td><?php echo $data['ul']['Testing2']; ?></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>UL (Upload speed/throughput):</td>
                                <td><?php echo $data['ul']['Testing2']; ?></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>DL (Download speed/throughput)::</td>
                                <td><?php echo $data['dl']['Testing3']; ?></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>



    </div>

    <div class="faq-section px-5 mt-5 text-start">
        <p class="need_help text-center my-4 ">NEARBY SEARCHES</p>


        <div class="d-flex justify-content-between">
            <p class="nearby_searches">Item 7 Oke-odo</p>
            <p class="nearby_searches">Faculty of CIS</p>
            <p class="nearby_searches">School Clinic</p>
        </div>

        <div class="d-flex justify-content-between my-2">
            <p class="nearby_searches">Community Primary School</p>
            <p class="nearby_searches">School Library</p>
            <p class="nearby_searches">School Park</p>
        </div>

        <div class="d-flex justify-content-between">
            <p class="nearby_searches">Bus Terminus, Post Office</p>
            <p class="nearby_searches">School Bank Area</p>
            <p class="nearby_searches">School Stadium</p>
        </div>
    </div>


</div>