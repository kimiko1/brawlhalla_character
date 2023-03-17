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
