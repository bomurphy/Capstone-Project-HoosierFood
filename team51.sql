
CREATE TABLE users(
	userID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	FirstName VARCHAR(50) NOT NULL,
	LastName VARCHAR(100) NOT NULL,
	Street VARCHAR(50) NOT NULL,
	City VARCHAR(50) NOT NULL,
	State CHAR(2) NOT NULL,
	Zip CHAR(10) NOT NULL,
	Email VARCHAR(50) NOT NULL UNIQUE
	) ENGINE=INNODB;

CREATE TABLE orders(
	orderID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	orderNum INT,
    userID INT,
	FOREIGN KEY (userID) REFERENCES users(userID)
	) ENGINE=INNODB;

CREATE TABLE restaurants(
	restaurantID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	RestaurantName VARCHAR(50) NOT NULL,
	Street VARCHAR(50) NOT NULL,
	City VARCHAR(50) NOT NULL,
	State CHAR(2) NOT NULL,
	Zip CHAR(10) NOT NULL,
	PhoneNum VARCHAR(12)
	) ENGINE=INNODB;

CREATE TABLE favorites(
    userID INT NOT NULL,
    restaurantID INT NOT NULL,
    UserLocation VARCHAR (225) NOT NUll,
    distance VARCHAR(50) NOT NULL,
    FOREIGN KEY (userID) REFERENCES users(userID),
    FOREIGN KEY (restaurantID) REFERENCES restaurants(restaurantID)
    ) ENGINE=INNODB;

CREATE TABLE location(
    userID INT NOT NULL,
    LastName VARCHAR (100) NOT NULL,
    FirstName VARCHAR (50) NOT NUll,
    PictureURL VARCHAR (225),
    PhoneNumber VARCHAR (10) NOT NULL,
    FOREIGN KEY (userID) REFERENCES users(userID)
    ) ENGINE=INNODB;

CREATE TABLE filter(
    restaurantID INT NOT NULL,
    RestaurantName VARCHAR (100) NOT NULL,
    PictureURL VARCHAR (225),
    PhoneNum VARCHAR (15) NOT NULL,
    FOREIGN KEY (restaurantID) REFERENCES restaurants(restaurantID)
    ) ENGINE=INNODB;

CREATE TABLE admins(
	adminID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	FirstName VARCHAR(50) NOT NULL,
	LastName VARCHAR(100) NOT NULL,
	PhoneNum VARCHAR(10) NOT NULL,
	Email VARCHAR(50) NOT NULL UNIQUE
	) ENGINE=INNODB;


insert into users (userID, FirstName, LastName, Street, City, State, Zip, Email) values (1, 'Bob', 'Jones', '1534 American Street', 'Bloomington', 'IN', '47401', 'bob@iu.edu');
insert into users (userID, FirstName, LastName, Street, City, State, Zip, Email) values (2, 'Minnie', 'Oliver', '1772 Howard Drive', 'Bloomington', 'IN', '47404', 'minnie@gmail.com');
insert into users (userID, FirstName, LastName, Street, City, State, Zip, Email) values (3, 'Phil', 'Scott', '635 Cardinal Circle', 'Bloomington', 'IN', '47401', 'phil@iu.edu');
insert into users (userID, FirstName, LastName, Street, City, State, Zip, Email) values (4, 'Alexia', 'Ham', '721 Jay Street', 'Bloomington', 'IN', '47401', 'alexia@iu.edu');
insert into users (userID, FirstName, LastName, Street, City, State, Zip, Email) values (5, 'Cassie', 'Bill', '836 Hudson Drive', 'Bloomington', 'IN', '47401', 'cassie@gmail.com');
insert into users (userID, FirstName, LastName, Street, City, State, Zip, Email) values (6, 'Dory', 'Wells', '801 Brick Park', 'Bloomington', 'IN', '47401', 'dory@iu.edu');
insert into users (userID, FirstName, LastName, Street, City, State, Zip, Email) values (7, 'Lauren', 'Bush', '573 Longview Street', 'Bloomington', 'IN', '47401', 'lauren@iu.edu');
insert into users (userID, FirstName, LastName, Street, City, State, Zip, Email) values (8, 'Cory', 'Potter', '891 Stella Ridge', 'Bloomington', 'IN', '47404', 'cory@gmail.com');
insert into users (userID, FirstName, LastName, Street, City, State, Zip, Email) values (9, 'Gina', 'Pardi', '378 Indiana Circle', 'Bloomington', 'IN', '47404', 'gina@gmail.com');
insert into users (userID, FirstName, LastName, Street, City, State, Zip, Email) values (10, 'Kate', 'Houser', '3725 Bluejay Road', 'Bloomington', 'IN', '47401', 'kate@gmail.com');

insert into orders (orderID, orderNum, userID) values (1, 1, 3);
insert into orders (orderID, orderNum, userID) values (2, 6, 7);
insert into orders (orderID, orderNum, userID) values (3, 4, 1);
insert into orders (orderID, orderNum, userID) values (4, 8, 9);
insert into orders (orderID, orderNum, userID) values (5, 10, 4);
insert into orders (orderID, orderNum, userID) values (6, 5, 2);
insert into orders (orderID, orderNum, userID) values (7, 2, 3);
insert into orders (orderID, orderNum, userID) values (8, 11, 10);
insert into orders (orderID, orderNum, userID) values (9, 5, 3);
insert into orders (orderID, orderNum, userID) values (10, 6, 8);

insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (1, 'Buccetos Pizza Pasta', '115 E State Rd 46 Bypass', 'Bloomington', 'IN', '47401', '812-331-1234');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (2, 'Pizza X East', '877 S College Mall Rd', 'Bloomington', 'IN', '47401', '812-355-5000');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (3, 'Buffa Louies', '114 S Indiana Ave', 'Bloomington', 'IN', '47401', '812-333-3030');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (4, 'Subway', '907 S College Mall Rd', 'Bloomington', 'IN', '47401', '812-336-7827');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (5, 'Mcdonalds', '2819 E 3rd St', 'Bloomington', 'IN', '47401', '812-332-7184');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (6, 'Malibu Grill', '106 N Walnut St', 'Bloomington', 'IN', '47404', '812-332-4334');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (7, 'Social Cantina', '125 N College Ave', 'Bloomington', 'IN', '47404', '812-287-8199');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (8, 'The Tap', '101 N College Ave', 'Bloomington', 'IN', '47404', '812-278-8579');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (9, 'SmokeWorks', '121 N College Ave', 'Bloomington', 'IN', '47404', '812-287-8190');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (10, 'Chick-fil-a', '3020 E 3rd St College Mall pad', 'Bloomington', 'IN', '47401', '812-330-5590');

insert into favorites (userID, restaurantID, userLocation, distance) values (3, 1, '635 Cardinal Circle, Bloomington, IN 47401', '4 mi');
insert into favorites (userID, restaurantID, userLocation, distance) values (7, 6, '573 Longview Street, Bloomington, IN 47401', '3.7 mi');
insert into favorites (userID, restaurantID, userLocation, distance) values (5, 4, '836 Hudson Drive, Bloomington, IN 47401', '2.2 mi');
insert into favorites (userID, restaurantID, userLocation, distance) values (9, 8, '378 Indiana Circle, Bloomington, IN 47401', '1.4 mi');
insert into favorites (userID, restaurantID, userLocation, distance) values (3, 10, '635 Cardinal Circle, Bloomington, IN 47401', '2.5 mi');
insert into favorites (userID, restaurantID, userLocation, distance) values (10, 5, '3725 Bluejay Road, Bloomington, IN 47401', '1.7 mi');
insert into favorites (userID, restaurantID, userLocation, distance) values (4, 2, '721 Jay Street, Bloomington, IN 47401', '3.9 mi');
insert into favorites (userID, restaurantID, userLocation, distance) values (6, 7, '801 Brick Park, Bloomington, IN 47401', '5.1 mi');
insert into favorites (userID, restaurantID, userLocation, distance) values (1, 5, '1534 American Street, Bloomington, IN 47401', '3.3 mi');
insert into favorites (userID, restaurantID, userLocation, distance) values (2, 6, '1772 Howard Drive, Bloomington, IN 47401', '4.3 mi');

insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (1, 'Buccetos Pizza Pasta', 'https://images.app.goo.gl/n3xpgWgJ1TowJm3AA', '8123311234');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (2, 'Pizza X East', 'https://images.app.goo.gl/mJ8K7G6aTQi6RqTWA', '8123555000');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (3, 'Buffa Louies', 'https://images.app.goo.gl/gWnJadxbpT1Nqnmt8', '8123333030');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (4, 'Subway', 'https://images.app.goo.gl/uDG7kMCfrKHkppA99', '8123367827');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (5, 'Mcdonalds', 'https://images.app.goo.gl/WhqgyMiyPyqVTxnx6', '8123327184');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (6, 'Malibu Grill', 'https://images.app.goo.gl/aczhZzzkFeHoTvzq5', '8123324334');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (7, 'Social Cantina', 'https://images.app.goo.gl/uwpW42E6wg2hUa8R6', '8122878199');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (8, 'The Tap', 'https://images.app.goo.gl/YnGMWFfgcMYrUAqY9', '8122788579');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (9, 'SmokeWorks', 'https://images.app.goo.gl/t4yZfALQFGpBKtuG9', '8122878190');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (10, 'Chick-fil-a', 'https://images.app.goo.gl/C4pnzWjX82jGymBdA', '8123305590');

insert into admins (FirstName, LastName, PhoneNum, Email) values ('Finn', 'McSweeney', '9177551050', 'fmcsween@iu.edu');
insert into admins (FirstName, LastName, PhoneNum, Email) values ('Bowen', 'Murphy', '8123408030', 'bomurphyiu.edu');
insert into admins (FirstName, LastName, PhoneNum, Email) values ('Luke', 'Faccenda', '5744009836', 'lfaccend@iu.edu');
insert into admins (FirstName, LastName, PhoneNum, Email) values ('Jack', 'Rebman', '2245954983', 'jrebman@iu.edu');