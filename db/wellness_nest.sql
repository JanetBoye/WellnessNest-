
-- Create the database
CREATE DATABASE wellnessnest CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Use the newly created database
USE wellnessnest;

-- Set the time zone to UTC
SET time_zone = "+00:00";

-- Create the Users table
CREATE TABLE IF NOT EXISTS Users (
    UID INT AUTO_INCREMENT PRIMARY KEY,
    First_name VARCHAR(100) NOT NULL,
    Last_name VARCHAR(100) NOT NULL,
    Email VARCHAR(100) UNIQUE NOT NULL,
    Password VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create the MentalHealthTopics table
CREATE TABLE IF NOT EXISTS MentalHealthTopics (
    MHTID INT AUTO_INCREMENT PRIMARY KEY,
    Title VARCHAR(100) NOT NULL,
    Description TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create the MentalHealthEvents table
CREATE TABLE IF NOT EXISTS MentalHealthEvents (
    EventID INT AUTO_INCREMENT PRIMARY KEY,
    Title VARCHAR(100) NOT NULL,
    Description TEXT,
    Event_time TIME,
    Event_date DATE,
    Venue VARCHAR(255),
    Speakers TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create the Discussions table
CREATE TABLE IF NOT EXISTS Discussions (
    DiscussionID INT AUTO_INCREMENT PRIMARY KEY,
    UID INT,
    MHTID INT,
    Message TEXT,
    Discussion_date DATE,
    FOREIGN KEY (UID) REFERENCES Users(UID) ON DELETE CASCADE,
    FOREIGN KEY (MHTID) REFERENCES MentalHealthTopics(MHTID) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create the JournalEntries table
CREATE TABLE IF NOT EXISTS JournalEntries (
    JID INT AUTO_INCREMENT PRIMARY KEY,
    UID INT,
    Journal_date DATE,
    Title VARCHAR(255),
    Content TEXT,
    FOREIGN KEY (UID) REFERENCES Users(UID) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
