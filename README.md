# php-test-1

## To fetch all users
```
php read.php
```
## Fetch one user by id:
```
php read.php -i{ID}
```
replace {ID} with the id, eg: "php read.php -i1" or "php read.php -i25"

## Create a new User:
```
php create.php -t"Title" -f"Firstname" -s"Surname" -m"Mobile" -e"Email" -h"Home Address 1" -H"Home Address 2" -w"Home Town" -c"Home County" -z"Home Zipcode" -b"Billing Address 1" -B"Billing Address 2" -T"Billing Town" -C"Billing County" -Z"Billing Zipcode"
```
Title, Home Address 2, Home Zip Code, Billing Address 2, Billing Zip Code are optional

## Update a user:
```
php update.php -i{ID} -t"Title" -f"Firstname" -s"Surname" -m"Mobile" -e"Email" -h"Home Address 1" -H"Home Address 2" -w"Home Town" -c"Home County" -z"Home Zipcode" -b"Billing Address 1" -B"Billing Address 2" -T"Billing Town" -C"Billing County" -Z"Billing Zipcode"
```
The id is the only required parameter, the rest are optional
## Delete a user:
```
php delete.php -i{ID} 
```

# The Frontend
The frontend is accessible via http://localhost/path/to/test/frontend
Used libraries are: jQuery & Bootstrap

# SQL Mock data
The mock data was generated using mockaroo (https://www.mockaroo.com/)