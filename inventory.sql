CREATE TABLE Inventory(
    ITEM_ID int not null,
    ITEM_NAME char(50) not null,
    ITEM_COST decimal(4, 2) not null,
    primary key(ITEM_ID)
);

INSERT INTO Inventory VALUES
    (1, "Shirt", 9.99),
    (2, "Jeans", 19.99),
    (3, "Socks", 4.99),
    (4, "Sweater", 29.99),
    (5, "Sweatshirt", 49.99);