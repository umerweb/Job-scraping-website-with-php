import json

# Load JSON data from file
with open('template/newp.json', 'r', encoding='utf-8') as file:
    job_listings = json.load(file)

# Iterate through each job listing
for job in job_listings:
    if 'Post-Level' not in job:
        # Add the Description key with a default value or an empty string
        job['Post-Level'] = ''  # You can change this default value as needed

# Save the updated JSON data back to file
with open('new.json', 'w') as file:
    json.dump(job_listings, file, indent=4)
