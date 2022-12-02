CREATE TABLE Inventory(
    ITEM_ID int not null,
    ITEM_NAME char(50) not null,
    ITEM_COST decimal(4, 2) not null,
    ITEM_QTY int,
    key(ITEM_ID, ITEM_NAME, ITEM_COST),
    primary key(ITEM_ID)
);

CREATE TABLE Customers(
    CUST_ID int not null AUTO_INCREMENT,
    CUST_FNAME char(50) not null,
    CUST_LNAME char(50) not null,
    CUST_EMAIL char(100) not null,
    primary key(CUST_ID)
);

CREATE TABLE Cart(
    ITEM_ID int not null,
    ITEM_NAME char(50) not null,
    ITEM_COST decimal(4, 2) not null,
    ITEM_QTY int not null,
    primary key(ITEM_ID),
    foreign key(ITEM_ID, ITEM_NAME, ITEM_COST) references Inventory(ITEM_ID, ITEM_NAME, ITEM_COST)
);

CREATE TABLE Orders(
    TRACKING_NUM int not null AUTO_INCREMENT,
    CUST_ID int not null,
    ORDER_COST decimal(6, 2) not null,
    ORDER_STATUS char(10) not null,
    primary key(TRACKING_NUM),
    foreign key(CUST_ID) references Customers(CUST_ID)
);