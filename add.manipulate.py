"""   #TO add a new Key value
import json

# Load existing JSON data from file with explicit encoding
with open('job_listings.json', 'r', encoding='utf-8') as file:
    job_listings = json.load(file)

# Add new keys and values to all job listings
for job in job_listings:
    job['Agency'] = 'UNICEF'

# Save the updated JSON data back to file
with open('job_listings.json', 'w', encoding='utf-8') as file:
    json.dump(job_listings, file, indent=4)
"""
"""
#To convert Date format from this 06-mar-24 to this 04/08/2024
import json
from datetime import datetime

# Load existing JSON data from undp.json file
with open('undp.json', 'r', encoding='utf-8') as file:
    undp_data = json.load(file)

# Function to convert date-like strings to desired format
def convert_date_format(date_str):
    # Parse the date string using datetime.strptime
    date_obj = datetime.strptime(date_str, '%b-%d-%y')
    # Convert the date object to the desired format (day/month/year)
    return date_obj.strftime('%d/%m/%Y')

# Iterate through undp data and update date-like keys
for job in undp_data:
    for key, value in job.items():
        if key == 'Apply-by':
            job[key] = convert_date_format(value)

# Save the updated JSON data back to undp_updated.json file
with open('undp_updated.json', 'w', encoding='utf-8') as file:
    json.dump(undp_data, file, indent=4)
"""

#to remove time from date key
import json
from datetime import datetime

# Load existing JSON data from job_listings.json file
with open('job_listings.json', 'r', encoding='utf-8') as file:
    job_listings = json.load(file)

# Function to convert date-like strings to desired format without time component
def convert_date_format(date_str):
    # Parse the date string using datetime.strptime
    date_obj = datetime.strptime(date_str, '%b-%d-%y')
    # Convert the date object to the desired format without time component (day/month/year)
    return date_obj.strftime('%d/%m/%Y')

# Function to remove time component from date-like strings
def remove_time_from_date(date_str):
    return date_str.split()[0]

# Iterate through job listings and update date-like keys
for job in job_listings:
    for key, value in job.items():
        if key == 'Apply-by':
            converted_date = convert_date_format(value)
            job[key] = remove_time_from_date(converted_date)

# Save the updated JSON data back to job_listings_updated.json file
with open('job_listings_updated.json', 'w', encoding='utf-8') as file:
    json.dump(job_listings, file, indent=4)
