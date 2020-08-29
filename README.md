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