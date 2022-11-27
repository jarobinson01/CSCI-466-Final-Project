CREATE TABLE Inventory(
    ITEM_ID int not null,
    ITEM_NAME char(50) not null,
    ITEM_COST decimal(4, 2) not null,
    ITEM_QTY int,
    primary key(ITEM_ID)
);

INSERT INTO Inventory VALUES
    (1, "Shirt", 9.99, 50),
    (2, "Jeans", 19.99, 50),
    (3, "Socks", 4.99, 50),
    (4, "Sweater", 29.99, 50),
    (5, "Sweatshirt", 49.99, 50),
    (6, "Tie", 19.99, 50),
    (7, "Shoes", 89.99, 50),
    (8, "Boots", 49.99, 50),
    (9, "Hat", 19.99, 50),
    (10, "Gloves", 9.99, 50),
    (11, "Sunglasses", 99.99, 50),
    (12, "Jacket", 49.99, 50),
    (13, "Coat", 99.99, 50),
    (14, "Scarf", 19.99, 50),
    (15, "Sandals", 49.99, 50),
    (16, "Blazer", 99.99, 50),
    (17, "Belt", 9.99, 50),
    (18, "Shorts", 49.99, 50),
    (19, "Headband", 9.99, 50),
    (20, "Backpack", 59.99, 50);