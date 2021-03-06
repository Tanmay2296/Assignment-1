-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2017 at 03:08 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `BookNo` int(200) NOT NULL,
  `BookTitle` varchar(75) NOT NULL,
  `Author` varchar(80) NOT NULL,
  `NumberOfCopies` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`BookNo`, `BookTitle`, `Author`, `NumberOfCopies`) VALUES
(1, 'The C ProgrammingLanguage', 'D.Ritche', 12),
(2, 'Let Us C', 'yashwant kanetkar', 13),
(3, 'The C Book', 'Mike Banah', 25),
(4, 'Expert C Programming', 'Peter Linden', 20),
(5, 'Practical C programming ', 'Steve Oualline ', 10),
(6, 'The C puzzle book ', 'Alan R. Feuer ', 15),
(7, 'The Standard C Library ', 'P. J. Plauger ', 10),
(8, 'The C++ Programming Language ', 'Bjarne Stroustrup ', 20),
(9, 'C++ Primer ', 'Stanley B. Lippman ', 25),
(10, 'Programming: Principles and Practice Using C++ ', 'Bjarne Stroustrup ', 15),
(11, 'Modern C++ Design ', 'Andrei Alexandrescu ', 20),
(12, 'C Primer Plus ', 'Stephen Prata ', 10),
(13, 'C++ ', 'Herbert Schildt ', 11),
(14, 'The C++ standard library ', 'Nicolai M. Josuttis ', 20),
(15, 'The Design and Evolution of C++ ', 'Bjarne Stroustrup ', 20),
(16, 'A Tour of C++ ', 'Bjarne Stroustrup ', 20),
(17, 'More Exceptional C++: 40 New Engineering Puzzles, ', 'Herb Sutter ', 25),
(18, 'Thinking in Java ', 'Bruce Eckel ', 20),
(19, 'Head First Java ', 'Bert Bates ', 15),
(20, 'Learning Java ', 'Jonathan Knudsen ', 21),
(21, 'Java Concurrency in Practice ', 'Brian Goetz ', 20),
(22, 'Java The Complete Reference, 8th Edition ', 'Herbert Schildt ', 22),
(23, 'Core Java, Volume I--Fundamentals ', 'Cay S. Horstmann ', 21),
(25, 'The Java Language Specification ', 'Bill Joy ', 10),
(26, 'Java How to Program ', '?Paul Deitel ', 15),
(27, 'Java puzzlers ', 'Joshua Bloch ', 10),
(28, 'Java generics and collections ', 'Maurice Naftalin ', 15),
(29, 'Student Workbook Java in a Nutshell ', 'David Flanagan ', 20),
(30, 'Think Java: How to think like a computer scientist ', 'Allen B. Downey ', 21),
(31, 'Data structures and algorithms ', 'Bruno R. Preiss ', 21),
(32, 'Java: A Beginners Guide ', 'Herbert Schildt ', 25),
(33, 'Introduction to Java programming ', 'Y. Daniel Liang ', 22),
(34, 'Beginning Programming With Java for Dummies ', '?Barry A. Burd ', 25),
(35, 'Data Structures and Algorithms in Java ', 'Michael T. Goodrich ', 30),
(36, 'An introduction to computer science using Java ', 'Samuel N. Kamin ', 20),
(37, 'Java cookbook ', 'Ian Darwin ', 20),
(38, 'Beginning Java Programming: The Object-Oriented? ', 'Aimee Backiel ', 20),
(39, 'The Elements of Java Style ', 'Scott Ambler? ', 21),
(40, 'Java: Learning to Program with Robots ', 'Byron Weber? ', 25),
(41, 'Learning Python ', 'David Ascher ', 21),
(42, 'Learn Python the Hard Way: A Very Simple? ', 'Zed A. Shaw ', 20),
(43, 'Automate the Boring Stuff with Python ', 'Albert Sweigart ', 22),
(44, 'Beginning Python ', 'Magnus Lie Hetland ', 20),
(45, 'Core Python Programming ', 'Wesley Chun ', 20),
(46, 'Python Cookbook ', 'Brian K. Jones? ', 22),
(47, 'Python Pocket Reference ', 'Mark Lutz ', 11),
(48, 'Problem Solving with Algorithms and Data ', 'Bradley N. Miller? ', 22),
(49, 'Programming Collective Intelligence ', 'Toby Segaran ', 12),
(50, 'Invent Your Own Games with Python', 'AL Sweigart', 22),
(51, 'Text Processing in Python ', 'David Mertz ', 20),
(52, 'Test-Driven Development with Python ', 'Harry J. W. Percival ', 21),
(53, 'Building Machine Learning With Python', '?Luis Pedro? ', 30),
(54, 'Head First C# ', 'Andrew Stellman ', 30),
(55, 'Learning C# ', 'Jesse Liberty ', 22),
(56, 'C# Programming ', 'Barbara Doyle ', 20),
(57, 'C# 4.0 The Complete Reference ', 'Herbert Schildt ', 22),
(58, 'Programming in Scala ', 'Martin Odersky ', 20),
(59, 'Scala Functional Programming Patterns', 'Atul S Khot', 22),
(60, 'Learning Scala', 'Jason Swartz', 20),
(61, 'Functional Programming in Scala ', 'Paul Chiusano? ', 20),
(62, 'Programming Scala ', 'Alex Payne ', 25),
(63, 'Scala in Depth ', 'Joshua D. Suereth ', 22),
(64, 'Scala in Action ', 'Nilanjan Raychaudhuri ', 21),
(65, 'Programming Ruby ', 'Andy Hunt ', 22),
(66, 'The Well-Grounded Rubyist ', 'David A. Black ', 20),
(67, 'Beginning Ruby ', 'Peter Cooper ', 25),
(68, 'Ruby cookbook ', 'Leonard Richardson ', 28),
(69, 'The Ruby Programming Language ', 'ukihiro Matsumoto ', 25),
(70, 'Design Patterns in Ruby ', 'Russell A. Olsen ', 22),
(71, 'Ruby Pocket Reference ', 'Michael James Fitzgerald ', 25),
(72, 'Starting Out With Java', 'Tonny Gaddis ', 30),
(73, 'Digital Design ', 'Digital Design ', 40),
(74, 'Computer Organization ', 'Carl Hamacher ', 22),
(75, 'Statistics for Engineers and Scientists ', 'William Navidi ', 26),
(76, 'Internet and World Wide Web, How to Programme ', 'Deitel and Deitel ', 20),
(77, 'HTML5 Up and Running ', 'Mark Pilgrim ', 20),
(78, 'Discrete Mathematics and its Applications ', 'Kenneth H. Rosen ', 40),
(79, 'Linear Algebra and its Applica?ons', 'Gilbert Strang', 19),
(80, 'Higher Engg Mathema?cs', 'B S Grewal', 50),
(81, 'Introduction to the Design and Analysis of Algorithms', 'Anna Levtin', 40),
(82, 'Foundamentals Of DataBaseSyatems', 'Navathe', 40),
(83, 'Database Management Systems', 'Gherke', 40),
(84, 'Raspberry PI cookbook', 'Simon Monk', 40);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `Name` varchar(25) NOT NULL,
  `SRN` varchar(13) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`Name`, `SRN`, `Password`) VALUES
('Pradyumna', '01FB14ECS152', '1234'),
('Pramod', '01fb14ecs154', '4578');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `SRN` varchar(13) NOT NULL,
  `BookNo` int(11) NOT NULL,
  `BookTitle` varchar(50) NOT NULL,
  `Author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`BookNo`),
  ADD UNIQUE KEY `BookNo` (`BookNo`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`SRN`),
  ADD UNIQUE KEY `SRN` (`SRN`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`SRN`),
  ADD UNIQUE KEY `SRN` (`SRN`),
  ADD UNIQUE KEY `BookNo` (`BookNo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
