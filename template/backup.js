// Function to filter job listings based on agency, title, and location
function filterJobListings() {
    fetch('new.json')
        .then(response => response.json())
        .then(jobListingsData => {
            // Get all checkbox elements
            const checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');

            // Get the search input elements for job titles and locations
            const titleQuery = document.getElementById('titleSearch').value.trim().toLowerCase();
            const locationQuery = document.getElementById('locationSearch').value.trim().toLowerCase();

            // Filter job listings based on checked checkboxes
            let filteredJobListings = jobListingsData;

            if (checkboxes.length > 0) {
                // Filter job listings based on checked checkboxes
                filteredJobListings = jobListingsData.filter(job => {
                    return Array.from(checkboxes).some(checkbox => {
                        switch (checkbox.id.toUpperCase()) {
                            case 'UNICEF':
                                return job.Agency === 'UNICEF';
                            case 'UNDP':
                                return job.Agency === 'UNDP';
                            case 'UNWOMEN':
                                return job.Agency === 'UNWomen';
                            case 'OTHER':
                                return job.Agency === 'Other UN Agencies';
                            case 'OTHER':
                                return job.Agency === 'Other UN Agencies';
                            case 'INTERN':
                                return job['Post-Level'] === 'Intern';
                            case 'IPSA-11':
                                return job['Post-Level'] === 'IPSA-11';
                            case 'NPSA-6':
                                return job['Post-Level'] === 'NPSA-6';
                            case 'NPSA-7':
                                return job['Post-Level'] === 'NPSA-7';
                            case 'NPSA-8':
                                return job['Post-Level'] === 'NPSA-8';
                            case 'NPSA-9':
                                return job['Post-Level'] === 'NPSA-9';
                            case 'NPSA-10':
                                return job['Post-Level'] === 'NPSA-10';
                            case 'NPSA-11':
                                return job['Post-Level'] === 'NPSA-11';
                            // Add more cases for additional checkboxes here
                            default:
                                return false;
                        }
                    });
                });
            }

            // Filter job listings based on title query
            if (titleQuery) {
                filteredJobListings = filteredJobListings.filter(job => {
                    const jobTitle = job['Job-Title'].toLowerCase();
                    return jobTitle.includes(titleQuery);
                });
            }

            // Filter job listings based on location query
            if (locationQuery) {
                filteredJobListings = filteredJobListings.filter(job => {
                    const jobLocation = job['Location'].toLowerCase();
                    return jobLocation.includes(locationQuery);
                });
            }

            // Display filtered job listings
            displayJobListings(filteredJobListings);

            // Check if both search queries are empty and display all job listings
            if (!titleQuery && !locationQuery && checkboxes.length === 0) {
                displayJobListings(jobListingsData);
            }
        })
        .catch(error => console.error('Error fetching data:', error));
}

// Function to display job listings
function displayJobListings(jobListings) {
    // Get the container element where you want to display the job listings
    const container = document.getElementById('jobListingsContainer');

    // Clear the container
    container.innerHTML = '';

    // Check if jobListings array is empty
    if (jobListings.length === 0) {
        // Display "No jobs found" message
        container.innerHTML = '<p>No jobs found.</p>';
        return; // Exit the function
    }

    // Create and append elements for each job listing
    jobListings.forEach(job => {
        // Create job listing element
        const jobElement = document.createElement('div');
        jobElement.classList.add('job-listing');
        jobElement.innerHTML = `
            <h2 class="title">${job['Job-Title']}</h2>
            <div class="description-container">
                <p class="job-description">${truncateDescription(job.Description)}</p>
                ${job.Description ? `<button class="read-more-btn">Read More</button>` : ''}
                <div class="additional-description" style="display: none;">${job.Description}</div>
            </div>
            <div class="con">
                <p class="pcon"><img src="img/agency.png" id="agency" class="icon">${job['Agency']}</p>
                ${job['Post-Level'] ? `<p class="pcon"><img src="img/post.png" id="post" class="icon"> ${job['Post-Level']}</p>` : ''}
                <p class="pcon"><img src="img/location.png" id="location" class="icon">${job['Location']}</p>
                <p class="pcon"><img src="img/deadline.png" id="deadline" class="icon">${job['Deadline']}</p>
                <a href="${job['Job-Link']}" target="" id="apply"><img src="img/apply.png" id="applyimg" ></a>
            </div>
        `;

        // Append job element to container using prepend to add it to the top
        container.prepend(jobElement);

        // Add event listener to "Read More" button if it exists
        const readMoreBtn = jobElement.querySelector('.read-more-btn');
        if (readMoreBtn) {
            const jobDescription = jobElement.querySelector('.job-description');
            const additionalDescription = jobElement.querySelector('.additional-description');

            readMoreBtn.addEventListener('click', () => {
                if (additionalDescription.style.display === 'none') {
                    additionalDescription.style.display = 'block';
                    jobDescription.style.display = 'none';
                    readMoreBtn.textContent = 'Read Less';
                } else {
                    additionalDescription.style.display = 'none';
                    jobDescription.style.display = 'block';
                    readMoreBtn.textContent = 'Read More';
                }
            });
        }
    });
}

// Get the search bar and search query div
const titleSearch = document.getElementById('titleSearch');
const searchQueryDiv = document.getElementById('searchQuery');
// Add an input event listener to the search bar
titleSearch.addEventListener('input', function() {
    // Get the value of the search bar
    const searchValue = titleSearch.value;

    // Update the content of the search query div
   
    

    if (searchValue === "") {

         searchQueryDiv.textContent = "";
    }else{
        searchQueryDiv.textContent =  "Search results for " + "\""+ searchValue + "\"";

    }
});



// Function to truncate description to a certain number of words
function truncateDescription(description) {
    const words = description.split(' ');
    const truncatedWords = words.slice(0, 20); // Change 20 to the desired number of words
    return truncatedWords.join(' ') + '';
}

// Add event listeners to checkboxes and search inputs
const checkboxes = document.querySelectorAll('input[type="checkbox"]');
(document.querySelectorAll('input[type="checkbox"]')).forEach(checkbox => {
    checkbox.addEventListener('change', filterJobListings);
});

const titleSearchInput = document.getElementById('titleSearch');
titleSearchInput.addEventListener('input', filterJobListings);

const locationSearchInput = document.getElementById('locationSearch');
locationSearchInput.addEventListener('input', filterJobListings);

// Initial call to display all job listings
filterJobListings();
