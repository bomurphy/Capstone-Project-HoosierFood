
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

CREATE TABLE menus(
	restaurantID INT NOT NULL,
    RestaurantName VARCHAR (100) NOT NULL,
	menuURL VARCHAR (225),
	FOREIGN KEY (restaurantID) REFERENCES restaurants(restaurantID)
	) ENGINE=INNODB;

CREATE TABLE foods(
	foodID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	food VARCHAR(50) NOT NULL,
	restaurantID INT NOT NULL,
	FOREIGN KEY (restaurantID) REFERENCES restaurants(restaurantID)
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
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (11, '3 Amigos', '340 S Patterson Dr', 'Bloomington', 'IN', '47401', '812-369-4192');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (12, 'Arbys', '2713 E 3rd St', 'Bloomington', 'IN', '47401', '812-332-1665');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (13, 'Applebees', '2800 E 3rd St', 'Bloomington', 'IN', '47401', '812-336-9147');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (14, 'Amrit India', '124 N Walnut St', 'Bloomington', 'IN', '47404', '812-650-3812');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (15, 'Asuka', '2632 E 3rd St', 'Bloomington', 'IN', '47401', '812-333-8325');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (16, 'Avers Pizza', '1285 S College Mall Rd', 'Bloomington', 'IN', '47401', '812-331-5555');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (17, 'Azzip Pizza', '2894 E 3rd St', 'Bloomington', 'IN', '47401', '812-336-2755');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (18, 'Baked Bloomington', '115 N Washington Street', 'Bloomington', 'IN', '47408', '812-336-2253');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (19, 'Bedrak Cafe', '409 S Walnut Street', 'Bloomington', 'IN', '47401', '812-650-1110');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (20, 'Big Woods Bloomington', '116 N Grant Street', 'Bloomington', 'IN', '47408', '812-335-1821');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (21, 'BJs Restaurant', '411 S College Mall Road', 'Bloomington', 'IN', '47401', '812-650-0740');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (22, 'Blondies Cookies', '2954 E 3rd Street', 'Bloomington', 'IN', '47401', '812-333-2710');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (23, 'Blooming Thai', '107 N College Avenue', 'Bloomington', 'IN', '47404', '812-369-4229');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (24, 'Bloomington Bagel Company', '1318 E Third Street', 'Bloomington', 'IN', '47401', '812-278-8353');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (25, 'Bubs Burgers', '480 N Morton Street', 'Bloomington', 'IN', '47404', '812-331-2827');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (26, 'Buffalo Wild Wings', '1350 W Bloomfield Road', 'Bloomington', 'IN', '47403', '812-339-2900');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (27, 'Burger King', '2718 E 3rd Street', 'Bloomington', 'IN', '47401', '812-394-2493');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (28, 'Butchs Grillacatessen & Eatzeria', '120 E 7th Street', 'Bloomington', 'IN', '47408', '812-822-0210');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (29, 'C3', '1505 S Piazza Drive', 'Bloomington', 'IN', '47401', '812-287-8027');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (30, 'The Cabin', '4015 S State Road 446', 'Bloomington', 'IN', '47401', '812-323-9654');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (31, 'Cafe Pizzaria', '405 E Kirkwood Avenue', 'Bloomington', 'IN', '47408', '812-332-2111');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (32, 'Casa Brava', '3482 W 3rd Street', 'Bloomington', 'IN', '47404', '812-339-1453');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (33, 'Che Bello', '106 W 6th Street', 'Bloomington', 'IN', '47404', '812-323-0303');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (34, 'Cheddars', '126 S Franklin Road', 'Bloomington', 'IN', '47404', '812-822-1628');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (35, 'Chilis Grill and Bar', '2811 East 3rd Street', 'Bloomington', 'IN', '47401', '812-334-0535');
insert into restaurants(restaurantID, RestaurantName, Street, City, State, Zip, PhoneNum) values (36, 'Chipotle', '2894 E 3rd Street', 'Bloomington', 'IN', '47401', '812-334-7623');

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
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (11, '3 Amigos', 'https://images.app.goo.gl/eBD6r67zfKKaCifJ8', '8123694192');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (12, 'Arbys', 'https://images.app.goo.gl/Laj7NWJxmJqDmKHT7', '8123321665');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (13, 'Applebees', 'https://images.app.goo.gl/Eghr34jUEYH84zAf8', '8123369147');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (14, 'Amrit India', 'https://images.app.goo.gl/ZN69rMw71S9Z2Qa4A', '8126503812');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (15, 'Asuka', 'https://images.app.goo.gl/M457uwk2mBoLPjmh6', '8123338325');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (16, 'Avers Pizza', 'https://images.app.goo.gl/PcNGfJC64Ngg8J2E7', '8123315555');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (17, 'Azzip Pizza', 'https://images.app.goo.gl/W7UY78wZhR1JwqVq6', '8123362755');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (18, 'Baked Bloomington', 'https://images.app.goo.gl/jbQbo2CXxFs2Adcc7', '8123362253');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (19, 'Bedrak Cafe', 'https://images.app.goo.gl/gPqhWGFLJX71CSds7', '8126501110');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (20, 'Big Woods Bloomington', 'https://images.app.goo.gl/ybjYUvwZd8coYX716', '8123351821');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (21, 'BJs Restaurant', 'https://images.app.goo.gl/xTodouLpR24Vs4nj6', '8126500740');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (22, 'Blondies Cookies', 'https://images.app.goo.gl/eb2St3QTCVdTUAf29', '8123332710');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (23, 'Blooming Thai', 'https://images.app.goo.gl/pb6Apo3SMe6BegYGA', '8123694229');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (24, 'Bloomington Bagel Company', 'https://images.app.goo.gl/Xxqf56UAJWfBEtXB7', '8122788353');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (25, 'Bubs Burgers', 'https://images.app.goo.gl/nFzTM3nhxVUGaZ16A', '8123312827');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (26, 'Buffalo Wild Wings', 'https://images.app.goo.gl/cSYrB525CfXat79h7', '8123392900');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (27, 'Burger King', 'https://images.app.goo.gl/cayW4xVba1LiniATA', '8123942493');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (28, 'Butchs Grillacatessen & Eatzeria', 'https://images.app.goo.gl/eoSDrLNsoJaEGjzV6', '8128220210');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (29, 'C3', 'https://images.app.goo.gl/ZMmTJ4GSQewXaUAD9', '8122878027');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (30, 'The Cabin', 'https://images.app.goo.gl/jJcSXRms7fVmfUL19', '8123239654');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (31, 'Cafe Pizzaria', 'https://images.app.goo.gl/r8PLXJiNhMWxdVFH6', '8123322111');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (32, 'Casa Brava', 'https://images.app.goo.gl/EpvU5BHvwZPhypc2A', '8123391453');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (33, 'Che Bello', 'https://images.app.goo.gl/PysuZ53hSHhsJuPJ8', '8123230303');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (34, 'Cheddars', 'https://images.app.goo.gl/fCXvNFRU71Uzeqi29', '8128221628');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (35, 'Chilis Grill and Bar', 'https://images.app.goo.gl/kv86JEwXDCNQg7oJ6', '8123340535');
insert into filter (restaurantID, RestaurantName, PictureURL, PhoneNum) values (36, 'Chipotle', 'https://images.app.goo.gl/jG2wrpdudod9Y8AL6', '8123347623');

insert into admins (FirstName, LastName, PhoneNum, Email) values ('Finn', 'McSweeney', '9177551050', 'fmcsween@iu.edu');
insert into admins (FirstName, LastName, PhoneNum, Email) values ('Bowen', 'Murphy', '8123408030', 'bomurphyiu.edu');
insert into admins (FirstName, LastName, PhoneNum, Email) values ('Luke', 'Faccenda', '5744009836', 'lfaccend@iu.edu');
insert into admins (FirstName, LastName, PhoneNum, Email) values ('Jack', 'Rebman', '2245954983', 'jrebman@iu.edu');

insert into menus (restaurantID, RestaurantName, menuURL) values (1, 'Buccetos Pizza Pasta','https://buccetos.com/menus/main/');
insert into menus (restaurantID, RestaurantName, menuURL) values (2, 'Pizza X East','https://www.pizzaxbloomington.com/our-menu');
insert into menus (restaurantID, RestaurantName, menuURL) values (3, 'Buffa Louies','https://buffalouies.com/our-menu/');
insert into menus (restaurantID, RestaurantName, menuURL) values (4, 'Subway','https://www.subway.com/en-US/MenuNutrition/Menu');
insert into menus (restaurantID, RestaurantName, menuURL) values (5, 'Mcdonalds','https://www.mcdonalds.com/us/en-us/full-menu.html');
insert into menus (restaurantID, RestaurantName, menuURL) values (6, 'Malibu Grill','https://www.malibugrill.net/');
insert into menus (restaurantID, RestaurantName, menuURL) values (7, 'Social Cantina','https://thesocialcantina.com/food-menu-2/');
insert into menus (restaurantID, RestaurantName, menuURL) values (8, 'The Tap','https://thetapbeerbar.com/menus/');
insert into menus (restaurantID, RestaurantName, menuURL) values (9, 'SmokeWorks','https://thesmokeworks.com/food-menu-2/');
insert into menus (restaurantID, RestaurantName, menuURL) values (10, 'Chick-fil-a','https://www.chick-fil-a.com/menu');

insert into foods (foodID, food, restaurantID) values (1, 'Tacos', 7);
insert into foods (foodID, food, restaurantID) values (2, 'Chicken Wings', 3);
insert into foods (foodID, food, restaurantID) values (3, 'Sub Sandwiches', 4);
insert into foods (foodID, food, restaurantID) values (4, 'Steak', 6);
insert into foods (foodID, food, restaurantID) values (5, 'Burgers', 5);
insert into foods (foodID, food, restaurantID) values (6, 'Chicken', 10);
insert into foods (foodID, food, restaurantID) values (7, 'Pasta', 1);
insert into foods (foodID, food, restaurantID) values (8, 'Brisket', 9);
insert into foods (foodID, food, restaurantID) values (9, 'Pizza', 2);