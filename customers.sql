CREATE TABLE Customers(
    CUST_ID int not null,
    ORDER_NUM int not null,
    primary key(ORDER_NUM),
    foreign key(ORDER_NUM) references Orders(TRACKING_NUM)
);