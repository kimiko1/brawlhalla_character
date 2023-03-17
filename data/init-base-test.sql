CREATE TABLE "character" (
	"id"	INTEGER NOT NULL UNIQUE,
	"nom"	TEXT NOT NULL UNIQUE,
	"description"	TEXT NOT NULL UNIQUE,
	"weapons"	TEXT NOT NULL UNIQUE,
	"image"	TEXT UNIQUE,
	"strength"	INTEGER,
	"defence"	INTEGER,
	"dexterity"	INTEGER,
	"speed"	INTEGER,
	PRIMARY KEY("id" AUTOINCREMENT)
);
INSERT INTO character("id","nom", "description", "weapons", "image", "strength", "defence", "dexterity", "speed") VALUES(1,"Bödvar", "idk", "épée et marteau","../www/img/image_persos/BÖDVAR_Default_Classic_Colors.png", 1,1,1,1);