<?php
// new_php_page.php
// Check if the required parameters are present in the URL
if (isset($_GET['networkType']) && isset($_GET['serviceProvider']) && isset($_GET['searchTerm'])) {
    // Get the data from URL parameters
    $networkType = $_GET['networkType'];
    $serviceProvider = $_GET['serviceProvider'];
    $searchTerm = $_GET['searchTerm'];
    // $data = $_GET['data'];

    // Now you can use this data as needed in your new PHP page
    // ...
} else { ?>
    <script>
        var url = "/";
        window.location.href = url;
    </script>
<?php  echo "Error: Missing parameters."; } ?>
   
<div class="px-5">
    <div class="hero  ">
        <div id="map">
        </div>
        <a class="link" href="/">
            <div class="back_button d-flex  my-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M9 14L4 9L9 4" stroke="#0B1E23" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M20 20V13C20 11.9391 19.5786 10.9217 18.8284 10.1716C18.0783 9.42143 17.0609 9 16 9H4" stroke="#0B1E23" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="back_button_text mx-2 ">back</p>
            </div>
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
            </div>
        </div>
    </div>

</div>



<div class="faq-section px-5">
    <p class="need_help text-center my-4">NEARBY SEARCHES</p>
</div>
</div>



<p><?php echo $networkType ?></p>
<p><?php echo $serviceProvider ?></p>
<p><?php echo $searchTerm ?></p>
<?php
// Assuming you have received the 'data' parameter in the URL
$dataJson = $_GET['data'];

// Decode the JSON string into a PHP associative array
$data = json_decode($dataJson, true);

var_dump($data);

?>

<p>location: <?php echo $data['location']; ?></p>
<p>device_info: <?php echo $data['device_info']; ?></p>


