CREATE TABLE users(
	userID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	FirstName VARCHAR(50) NOT NULL,
	LastName VARCHAR(100) NOT NULL,
	Street VARCHAR(50) NOT NULL,
	City VARCHAR(50) NOT NULL,
	State CHAR(2) NOT NULL,
	Zip CHAR(10) NOT NULL,
	Email VARCHAR(50) NOT NULL UNIQUE,
	Password VARCHAR(255) NOT NULL
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
    UserName VARCHAR (100) NOT NULL,
    Password VARCHAR (225) NOT NUll,
    UserLocation VARCHAR (225) NOT NUll,
    Radius INT NOT NULL,
    FOREIGN KEY (userID) REFERENCES users(userID)
    ) ENGINE=INNODB;

CREATE TABLE location(
    userID INT NOT NULL,
    LastName VARCHAR (100) NOT NULL,
    FirstName VARCHAR (50) NOT NUll,
    PictureURL VARCHAR (225),
    PhoneNumber VARCHAR (10) NOT NULL,
    Biography VARCHAR (225) NOT NULL,
    FOREIGN KEY (userID) REFERENCES users(userID)
    ) ENGINE=INNODB;

CREATE TABLE filter(
    resturantID INT NOT NULL,
    ResturantName VARCHAR (100) NOT NULL,
    PictureURL VARCHAR (225),
    PhoneNumber VARCHAR (10) NOT NULL,
    FOREIGN KEY (resturantID) REFERENCES restaurants(restaurantID)
    ) ENGINE=INNODB;


insert into users (userID, FirstName, LastName, Street, City, State, Zip, Email, Password) values (1, 'Bob', 'Jones', '1534 American Street', 'Bloomington', 'IN', '47401', 'bob@iu.edu', 'bob1');
insert into users (userID, FirstName, LastName, Street, City, State, Zip, Email, Password) values (2, 'Minnie', 'Oliver', '1772 Howard Drive', 'Bloomington', 'IN', '47404', 'minnie@gmail.com', 'minnie1');
insert into users (userID, FirstName, LastName, Street, City, State, Zip, Email, Password) values (3, 'Phil', 'Scott', '635 Cardinal Circle', 'Bloomington', 'IN', '47401', 'phil@iu.edu', 'phil1');
insert into users (userID, FirstName, LastName, Street, City, State, Zip, Email, Password) values (4, 'Alexia', 'Ham', '721 Jay Street', 'Bloomington', 'IN', '47401', 'alexia@iu.edu', 'alexia1');
insert into users (userID, FirstName, LastName, Street, City, State, Zip, Email, Password) values (5, 'Cassie', 'Bill', '836 Hudson Drive', 'Bloomington', 'IN', '47401', 'cassie@gmail.com', 'cassie1');
insert into users (userID, FirstName, LastName, Street, City, State, Zip, Email, Password) values (6, 'Dory', 'Wells', '801 Brick Park', 'Bloomington', 'IN', '47401', 'dory@iu.edu', 'dory1');
insert into users (userID, FirstName, LastName, Street, City, State, Zip, Email, Password) values (7, 'Lauren', 'Bush', '573 Longview Street', 'Bloomington', 'IN', '47401', 'lauren@iu.edu', 'lauren1');
insert into users (userID, FirstName, LastName, Street, City, State, Zip, Email, Password) values (8, 'Cory', 'Potter', '891 Stella Ridge', 'Bloomington', 'IN', '47404', 'cory@gmail.com', 'cory1');
insert into users (userID, FirstName, LastName, Street, City, State, Zip, Email, Password) values (9, 'Gina', 'Pardi', '378 Indiana Circle', 'Bloomington', 'IN', '47404', 'gina@gmail.com', 'gina1');
insert into users (userID, FirstName, LastName, Street, City, State, Zip, Email, Password) values (10, 'Kate', 'Houser', '3725 Bluejay Road', 'Bloomington', 'IN', '47401', 'kate@gmail.com', 'kate1');

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