# HTTP 5202 PHP Project: onRoute

#### Alexis Arevalo: Vehcile Rentals (Pages - vehicles.php, vehicleInfo.php, and vehicleSelection.php)

- All vehicles in the database are displayed, and the user can select a vehicle by clicking on it.
- The user will not be able to select or submit any vehicles without logging in first.
- When the user selects a vehicle, they are redirected to (vehicleSelection.php) a vehicle information page which is retrieved by the stored vehicle 'id'.
- All inputs made to the vehicle search form are validated against empty fields. - Working on Sanitizing input fields against malicious code injections.
- Users are able to search the database for vehicles based off of pick-up locations, pick-up dates, and return dates - What they will see once submitting the search, are all the vehicles that match pick up location.
- Pick up date and return date will be use to calcualte the total price from the the vehicle price/day.
- Vehicle that are already rented will not be available for selection.
- All searches selected are sent and retrieved in (vehicleSelection.php). If user selects a vehicle that is not searched then they will have to submit a pick up date and return date within (VehicleSelection.php)
- If a vehicle is already rented which matches the users date selections, then an error will appear stating that they must select a diffrent date.
- Upon approval, the vehicle selected is saved along with all it's information.
- Users can check their all their rentals and vehicle information by clicking the rental list button on the top right corner of (vehicles.php) which takes them to the (vehicleInfo.php) page.

## By: The < WebDevs >
### Developers:

- Alexis Arevalo
- Daniel Guinto
- Mohamed Sakr
- Nai-Hsien Chen
- William Midgette

#### Languages: 

<img alt="HTML5" src="https://img.shields.io/badge/html5-%23E34F26.svg?&style=for-the-badge&logo=html5&logoColor=white"/><img alt="CSS3" src="https://img.shields.io/badge/css3-%231572B6.svg?&style=for-the-badge&logo=css3&logoColor=white"/><img alt="PHP" src="https://img.shields.io/badge/php-%23777BB4.svg?&style=for-the-badge&logo=php&logoColor=white"/>

