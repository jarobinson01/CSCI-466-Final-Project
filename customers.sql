CREATE TABLE Customers(
    CUST_ID int not null AUTO_INCREMENT,
    CUST_FNAME char(50) not null,
    CUST_LNAME char(50) not null,
    CUST_EMAIL char(100) not null,
    primary key(ORDER_NUM)
);

INSERT INTO Customers VALUES
    (1, 1, "Jane", "Doe", "email@gmail.com"),
    (1, 2, "Jane", "Doe", "email@gmail.com"),
    (3, 2, "John", "Smith", "jsmith@gmail.com"),
    (4, 3, "Peter", "Lee", "lee1980@gmail.com");