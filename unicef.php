<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Job Listings</title>
<!-- Add CSS styles here -->
<style>
    .container{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .job-listings{
        display: flex;
        
        flex-direction: column;
    }
    .job-link{
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 30px;
        padding-bottom: 30px;
        background-color: whitesmoke;
        margin-bottom: 20px;
        margin-left: 15px;
        margin-right: 15px;
        border-radius: 10px;
        text-decoration: none;
    }
    strong{
        color: black;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 600;
        font-size: 1.4em;
    }
    p{
        color: black;
        font-family: Arial, Helvetica, sans-serif;
        
    }
    h1{
        font-family: Arial, Helvetica, sans-serif;
    }
</style>
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
    <h1>Job Listings</h1>
    <div class="job-listings">
        <?php
        // Read JSON file
        $jsonFile = 'job_listings.json';
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
        }
        ?>
    </div>
</div>
<?php include 'footer.php' ?>
</body>
</html>
