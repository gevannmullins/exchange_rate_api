# Exchange Rate Api
Allows user to view exchange rates

## Instructions
- Allow a user to enter a start and end date.
- User must select a base currency from a dropdown list.
- Once submitted, user should be able to view all exchange rates.
- Exchange rates should be used via 3rd party API.
- Exchange rates should be viewed with the selected value 
  as the base currency and ordered by newest to oldest date.
- At the bottom of the list of rates, display statistics on the 
  min, max and average rates for the period selected.
- The user should be able to save his/her search for future use.
- Saved information needs to be stored within a MySQL Database.
- Users should be able to delete saved searched from the MySQL Database.
- Should a user perform a search between a date range already saved in the past,
  information should be retrieved from the MySQL Database as opposed to requesting
  the same set of data from the API.
  
## Checklist
- Create a new public repository in Github and push all code to the repo.
- Update the Readme.md file with setup instruction for the assessor.
- Avoid using Laravel/Codigniter or any PHP frameworks.
- Ensure that code is commented where needed and that all input is validated
  on both client and server side
- Taking into consideration the fact that you will be connecting to
  a 3rd party API, ensure that exception handling has been built in.
- We'll be looking more at your approach to the story as opposed to the 
  cosmetics. With that said, having a responsive Webapp will count in your
  favor as it will show us that you have pride in the work you do ... from both a
  backend and frontend perspective.
  
## Setup Instructions
- This system was build using PHP7.3, please ensure that your server uses something 
  similar or higher. Ensure that the "index.php" file is in the root directory
  of your server.
- Please open the "dbinfo.php" file and fill in your database information.
- Included in the "sql" folder is the "exchange_rate_api.sql" file. Please import this file
  into your database. It will provide your database with the correct structure
  for the system to work.
- This should be all that is needed for the system to work.

## Last Word
This system was pretty easy to build. I have not yet tested every aspect of the system,
so I am sure you will find a few bugs that I might have overlooked.
I also was not sure what was allowed and what was not allowed, so I tried my very best 
to stick to your rule of not implementing any frameworks. The only frameworks I added was 
the Bootstrap and JQuery frameworks. Everything else I created from scratch.
If you have any questions, please do not hesitate to ask and I will explain.