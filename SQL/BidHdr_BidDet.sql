CREATE TABLE BidDet (
	id int NOT NULL AUTO_INCREMENT,
	bidID int,
	propertyType varchar(255),
	distanceToWork varchar(255),
	apartmentSize int NOT NULL,
	rateAmount FLOAT NOT NULL,
	rateUOM varchar(255) NOT NULL,
	taxRate FLOAT NOT NULL,
	otherFees varchar(255),
	dateAvailable varchar(255) NOT NULL,
	minLeaseTerm varchar(255),
	longTermDiscount varchar(255),
	internet varchar(255) NOT NULL,
	phone varchar(255) NOT NULL,
	cable varchar(255) NOT NULL,
	laundry varchar(255) NOT NULL,
	parking varchar(255) NOT NULL,
	parkingFee varchar(255) NOT NULL,
	petPolicy varchar(255),
	petFee FLOAT,
	petDeposit FLOAT,
	maid varchar(255),
	webLink varchar(255),
	other TEXT,
	PRIMARY KEY (id),
	FOREIGN KEY (bidID) REFERENCES BidHdr(bidID)
);

-- INSERT INTO BidDet (apartmentSize, rateAmount, rateUOM, taxRate, dateAvailable, internet, phone, cable, laundry, parking, parkingFee, , , )

CREATE TABLE BidHdr (
	bidID int NOT NULL AUTO_INCREMENT,
	unitSize int NOT NULL,
	arrivalDate varchar(255) NOT NULL,
	duration int,
	area varchar(255),
	PRIMARY KEY (bidID)
);

