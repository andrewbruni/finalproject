CREATE DATABASE drinkmaker;
CREATE TABLE Users(
	user_id int NOT NULL AUTO_INCREMENT,
	username VARCHAR(100) NOT NULL,
	password VARCHAR(100) NOT NULL,
	css1 VARCHAR(50) NOT NULL,
	css2 VARCHAR(50) NOT NULL,
	PRIMARY KEY(user_id),
	UNIQUE(username)
);
CREATE TABLE Ingredients(
	ingredient_id INT NOT NULL AUTO_INCREMENT,
	name varchar(250) NOT NULL,
	PRIMARY KEY(ingredient_id)
);
CREATE TABLE Recipes(
	recipe_id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(250) NOT NULL,
	short_description VARCHAR(500),
	PRIMARY KEY(recipe_id)
);
CREATE TABLE Recipe_Detail(
	recipe_id INT NOT NULL,
	recipe_instructions INT NOT NULL,
	PRIMARY KEY(recipe_id)
);
CREATE TABLE Recipe_Contents(
	recipe_id INT NOT NULL,
	ingredient_id INT NOT NULL,
	amount VARCHAR(100),
	PRIMARY KEY(recipe_id,ingredient_id)
);