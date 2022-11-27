CREATE TABLE Orders(
    TRACKING_NUM int not null AUTO_INCREMENT,
    ORDER_STATUS char(10) not null,
    primary key(TRACKING_NUM)
);