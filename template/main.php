<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
   


   



    <div class="sec1">
        <div id="space"></div>


        <div class="searchSec">

            <div class="filterSearch">

                <div class="Agency filter">
                    <h2 class="filtertitle">Agency</h2>
                    <input type="checkbox" id="unicef" name="UNICEF" class="checkmark" value="UNICEF" onclick="loader()">
                    <label for="unicef" class="labelbox">UNICEF</label><br>

                    <input type="checkbox" id="undp" name="UNDP" class="checkmark" value="UNDP">
                    <label for="undp" class="labelbox">UNDP</label><br>

                    <input type="checkbox" id="UNWomen" name="UNWomen" class="checkmark" value="UNWomen">
                    <label for="UNWomen" class="labelbox">UNWomen</label><br>

                    <input type="checkbox" id="OTHER" name="Other UN Agencies" class="checkmark" value="Other UN Agencies">
                    <label for="OTHER" class="labelbox"> Other UN Agencies</label><br>
                </div>
                <div class="Location filter">
                    <h2 class="filtertitle">Location</h2>
                    <input type="text" id="locationSearch" placeholder="Search your country ">
                </div>
                <div class="Dealine filter">
                    <h2 class="filtertitle">Post Level</h2>
                    <input type="checkbox" id="Intern" name="Intern" value="Intern" class="checkmark">
                    <label for="Intern" class="labelbox">Intern</label><br>

                    <input type="checkbox" id="IPSA-11" name="IPSA-11" value="IPSA-11" class="checkmark">
                    <label for="IPSA-11" class="labelbox">IPSA-11</label><br>

                    <input type="checkbox" id="NPSA-6" name="NPSA-6" value="NPSA-6" class="checkmark">
                    <label for="NPSA-6" class="labelbox">NPSA-6</label><br>

                    <input type="checkbox" id="NPSA-7" name="NPSA-7" value="NPSA-7" class="checkmark">
                    <label for="NPSA-7" class="labelbox">NPSA-7</label><br>

                    <input type="checkbox" id="NPSA-8" name="NPSA-8" value="NPSA-8" class="checkmark">
                    <label for="NPSA-8" class="labelbox">NPSA-8</label><br>

                    <input type="checkbox" id="NPSA-9" name="NPSA-9" value="NPSA-9" class="checkmark">
                    <label for="NPSA-9" class="labelbox">NPSA-9</label><br>

                    <input type="checkbox" id="NPSA-10" name="NPSA-10" value="NPSA-10" class="checkmark">
                    <label for="NPSA-10" class="labelbox">NPSA-10</label><br>

                    <input type="checkbox" id="NPSA-11" name="NPSA-11" value="NPSA-11" class="checkmark">
                    <label for="NPSA-11" class="labelbox">NPSA-11</label><br>



                </div>
            </div>






        </div>


        <div class="listingSec">

            <div class="sticky">
                <div class="searchbar">
                    <div id="searchQuery"></div>

                    <div id="searchdiv"><object type="image/svg+xml" data="magnifying-glass-solid.svg" width="17" height="17"></object>
                        <input type="searchbar" id="titleSearch" placeholder="Search here">
                    </div>
                </div>
                <div class="co">
                    <span id="resultsCount"></span>
                </div>
            </div>

            <div id="jobListingsContainer">

            </div>



            <!-- <?php
                    // Read JSON file
                    /*  $jsonFile = '../job_listings.json';
                if (file_exists($jsonFile)) {
                    $jsonString = file_get_contents($jsonFile);
                    $jobListings = json_decode($jsonString, true);

                    if (is_array($jobListings)) {
                        // Loop through job listings
                        foreach ($jobListings as $job) {
                            // Access job data using keys
                            $jobTitle = $job['Job-Title'];
                            $description = $job['Description'];
                            $jobLocation = $job['Job-Location'];
                            $jobDeadline = $job['Job-Deadline'];
                            $jobLink = $job['Job-a'];
                            $jobAgency = $job['Agency'];

                            // Display job data
                            echo '<a href="' . $jobLink . '" class="job-link">';
                            echo '<div class="job-container">';
                            echo '<strong>' . $jobTitle . '</strong>';
                            echo '<p>Description: ' . $description . '</p>';
                            echo '<p><b>Location:</b> ' . $jobLocation . '</p>';
                            echo '<p><b>Deadline:</b> ' . $jobDeadline . '</p>';
                            echo '<p><b>Agency:</b> ' . $jobAgency . '</p>';
                            echo '</div>';
                            echo '</a>';
                        }
                    } else {
                        echo '<p>No job listings found.</p>';
                    }
                } else {
                    echo '<p>Error: JSON file not found.</p>';
                }*/
                    ?> -->
        </div>
    </div>





    </div>


    <script src="index.js"></script>
</body>



</html>