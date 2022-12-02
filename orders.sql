CREATE TABLE Orders(
    TRACKING_NUM int not null AUTO_INCREMENT,
    CUST_ID int not null,
    ORDER_COST decimal(6, 2) not null,
    ORDER_STATUS char(10) not null,
    primary key(TRACKING_NUM),
    foreign key(CUST_ID) references Customers(CUST_ID)
);

INSERT INTO Orders VALUES
    (1, 149.99, "PROCESSING"),
    (2, 19.99, "PROCESSING"),
    (3, 199.99, "FULFILLED"),
    (4, 119.99, "PROCESSING");