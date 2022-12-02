CREATE TABLE Customers(
    CUST_ID int not null AUTO_INCREMENT,
    CUST_FNAME char(50) not null,
    CUST_LNAME char(50) not null,
    CUST_EMAIL char(100) not null,
    primary key(CUST_ID)
);

INSERT INTO Customers VALUES
    (1, "Jane", "Doe", "email@gmail.com"),
    (1, "Jane", "Doe", "email@gmail.com"),
    (3, "John", "Smith", "jsmith@gmail.com"),
    (4, "Peter", "Lee", "lee1980@gmail.com");