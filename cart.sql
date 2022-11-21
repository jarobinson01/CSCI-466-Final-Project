CREATE TABLE Cart(
    ITEM_ID int not null,
    ITEM_NAME char(50) not null,
    ITEM_COST decimal(4, 2) not null,
    ITEM_QTY int,
    primary key(ITEM_ID),
    foreign key(ITEM_ID) references Inventory(ITEM_ID);
);