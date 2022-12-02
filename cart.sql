CREATE TABLE Cart(
    ITEM_ID int not null,
    ITEM_NAME char(50) not null,
    ITEM_COST decimal(4, 2) not null,
    ITEM_QTY int not null,
    primary key(ITEM_ID),
    foreign key(ITEM_ID, ITEM_NAME, ITEM_COST) 
    references Inventory(ITEM_ID, ITEM_NAME, ITEM_COST)
);

INSERT INTO Cart VALUES
    (1, "Shirt", 9.99, 1),
    (2, "Jeans", 19.99, 2);