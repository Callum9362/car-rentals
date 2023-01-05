### Models

Cars: This table would contain information about the cars available for rent, such as the make, model, year, and license plate number.

Customers: This table would contain information about the customers who are renting the cars, such as their name, contact information, and driver's license number.

Rentals: This table would contain information about the rentals themselves, such as the start and end dates, the car being rented, the customer renting it, and the rental rate.

Locations: This table would contain information about the rental locations, such as the address, phone number, and hours of operation.

Reservations: This table would contain information about reservations for cars, including the start and end dates, the car being reserved, and the customer making the reservation.

Payments: This table would contain information about the payments made by customers, including the payment amount, the payment method, and the date of the payment.****


### Relationships

The Cars table and the Rentals table might have a one-to-many relationship, where each car can have many rentals, but each rental is for a single car.

The Customers table and the Rentals table might have a one-to-many relationship, where each customer can have many rentals, but each rental is for a single customer.

The Locations table and the Rentals table might have a one-to-many relationship, where each location can have many rentals, but each rental is at a single location.

The Rentals table and the Payments table might have a one-to-many relationship, where each rental can have many payments


### Useful commands
sail artisan migrate:fresh --seed

