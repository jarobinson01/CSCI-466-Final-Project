CREATE TABLE Orders(
    TRACKING_NUM int not null AUTO_INCREMENT,
    ORDER_COST decimal(6, 2) not null,
    ORDER_STATUS char(10) not null,
    primary key(TRACKING_NUM)
);

INSERT INTO Orders VALUES
    (1, 149.99, "PROCESSING"),
    (2, 19.99, "PROCESSING"),
    (3, 199.99, "FULFILLED"),
    (4, 119.99, "PROCESSING");