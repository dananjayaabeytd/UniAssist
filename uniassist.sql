-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 04:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uniassist`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Ad_ID` varchar(10) NOT NULL,
  `Ad_Username` varchar(30) NOT NULL,
  `Ad_Password` varchar(15) NOT NULL,
  `Ad_NIC` varchar(15) NOT NULL,
  `Ad_Role` varchar(20) NOT NULL,
  `Ad_Name` varchar(20) NOT NULL,
  `SA_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Ad_ID`, `Ad_Username`, `Ad_Password`, `Ad_NIC`, `Ad_Role`, `Ad_Name`, `SA_ID`) VALUES
('AD0001', 'anuraAD01', 'anu@123', '199909876567', 'role', 'Anura Kumara', 'SA000001'),
('AD0002', 'thenukaAD02', 'thenu0987', '198912343212', 'role', 'Sashith Thenuka', 'SA000002'),
('AD0003', 'aravindaAD03', 'ara@12345', '199776758493', 'role', 'Aravinda Silva', 'SA000003'),
('AD0004', 'denuwanAD04', 'denu@8767', '199487968574', 'role', 'Denuwan Perera', 'SA000004'),
('AD0005', 'tharinduAD05', 'tharindu@1134', '199612321234', 'role', 'Tharindu Abeysinghe', 'SA000005');

-- --------------------------------------------------------

--
-- Table structure for table `adminemail`
--

CREATE TABLE `adminemail` (
  `Ad_Email` varchar(30) NOT NULL,
  `Ad_ID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminemail`
--

INSERT INTO `adminemail` (`Ad_Email`, `Ad_ID`) VALUES
('anurakumara@gmail.com', 'AD0001'),
('thenuka654@gmail.com', 'AD0002'),
('thenukathenuka@gmail.com', 'AD0002'),
('aravindas@gmail.com', 'AD0003'),
('denuwanp21@gmail.com', 'AD0004'),
('denuwanpp123@gmail.com', 'AD0004'),
('tharinduabey@gmail.com', 'AD0005');

-- --------------------------------------------------------

--
-- Table structure for table `admin_man_notices`
--

CREATE TABLE `admin_man_notices` (
  `Ad_ID` varchar(10) NOT NULL,
  `N_No` varchar(5) NOT NULL,
  `Exp_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `C_ID` varchar(5) NOT NULL,
  `C_Name` varchar(75) NOT NULL,
  `C_Fee` int(11) NOT NULL,
  `F_ID` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`C_ID`, `C_Name`, `C_Fee`, `F_ID`) VALUES
('AF', 'BBA (Hons) Specializing in Accounting & Finance', 2350000, 'BS'),
('ARC', 'Bsc (Hons) degree in Architecture', 2300000, 'AR'),
('BA', 'BBA (Hons) Specializing in Business Analytics', 2800000, 'BS'),
('BT', 'Bsc (Hons) in Biotechnology', 2200000, 'HS'),
('CE', 'BSc Engineering (Hons) in Civil Engineering', 3000000, 'EN'),
('CS', 'BSc (Hons) in Computer Science', 2750000, 'IT'),
('CSNE', 'Bsc (Hons) in Computer Systems and Network Engineering', 2500000, 'IT'),
('DN', 'Higher Diploma in Nursing', 2450000, 'HS'),
('DS', 'BSc (Hons) in Data Science', 3000000, 'IT'),
('ID', 'BA (Hons) Interior Design', 2750000, 'AR'),
('ME', 'BSc Engineering (Hons) in Materials Engineering', 2200000, 'EN'),
('MM', 'BBA (Hons) Specializing in Marketing Management', 2950000, 'BS'),
('MOSR', 'M.Sc.Architecture', 2600000, 'AR'),
('NUR', 'BSc (Hons) Nursing', 2400000, 'HS'),
('PS', 'B.Ed (Hons) in Physical science', 2000000, 'HS'),
('QS', 'BSc Engineering (Hons) in Quantity Surveying', 2600000, 'EN'),
('SE', 'BSc (Hons) in Software Engineering', 2450000, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `F_ID` varchar(5) NOT NULL,
  `F_Name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`F_ID`, `F_Name`) VALUES
('AR', 'Architecture Faculty'),
('BS', 'Business Faculty'),
('EN', 'Faculty of Engineering'),
('HS', 'Faculty of Humanities and Sciences'),
('IT', 'Faculty of Computing');

-- --------------------------------------------------------

--
-- Table structure for table `facultyhead`
--

CREATE TABLE `facultyhead` (
  `FH_ID` varchar(10) NOT NULL,
  `F_ID` varchar(5) NOT NULL,
  `FH_Username` varchar(30) NOT NULL,
  `FH_Password` varchar(15) NOT NULL,
  `FH_Name` varchar(20) NOT NULL,
  `FH_Address` varchar(50) NOT NULL,
  `FH_NIC` varchar(12) NOT NULL,
  `FH_DOB` date NOT NULL,
  `FH_Gender` char(1) DEFAULT NULL,
  `SA_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facultyhead`
--

INSERT INTO `facultyhead` (`FH_ID`, `F_ID`, `FH_Username`, `FH_Password`, `FH_Name`, `FH_Address`, `FH_NIC`, `FH_DOB`, `FH_Gender`, `SA_ID`) VALUES
('FH000001', 'IT', 'KamalFH1', 'kamal@111', 'Kamal Thennakoon', '46 Castle Street colombo', '199087654567', '1990-01-31', 'M', 'SA000001'),
('FH000002', 'EN', 'SunimalFH2', 'perera098', 'Sunimal Perera', '11 sea street colombo', '199254321234', '1992-09-13', 'M', 'SA000002'),
('FH000003', 'BS', 'NimalFH3', 'cde12345', 'Nimal Abeyrathne', '270 Vauxhall Street, 02 colombo', '199598767890', '1995-10-04', 'M', 'SA000003'),
('FH000004', 'HS', 'SadunFH4', 'abc98705', 'Sadun Rajapakse', 'NO.390 ganemulla road , kadawatha', '199609876543', '1996-05-06', 'M', 'SA000004'),
('FH000005', 'AR', 'chamariFH5', 'chamari@345', 'Chmari Fernando', 'No.5 De Saram Road mount lavinia', '198912345671', '1989-01-03', 'F', 'SA000005');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FB_No` varchar(6) NOT NULL,
  `FB_Value` int(11) DEFAULT NULL,
  `FB_Date` date NOT NULL,
  `S_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FB_No`, `FB_Value`, `FB_Date`, `S_ID`) VALUES
('FB0001', 5, '2022-01-05', 'IT00000001'),
('FB0002', 4, '2022-02-25', 'BS00000001'),
('FB0003', 5, '2023-01-31', 'IT00000002'),
('FB0004', 3, '2023-04-13', 'EN00000001'),
('FB0005', 2, '2023-05-10', 'AR00000001');

-- --------------------------------------------------------

--
-- Table structure for table `fhemail`
--

CREATE TABLE `fhemail` (
  `FH_Email` varchar(30) NOT NULL,
  `FH_ID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fhemail`
--

INSERT INTO `fhemail` (`FH_Email`, `FH_ID`) VALUES
('kamal99@gmail.com', 'FH000001'),
('kamalthennakoon@gmail.com', 'FH000001'),
('sunimalperera@gmail.com', 'FH000002'),
('nimalabey678@gmail.com', 'FH000003'),
('nimalabey@gmail.com', 'FH000003'),
('sadunraj@gmail.com', 'FH000004'),
('chamarip36@gmail.com', 'FH000005');

-- --------------------------------------------------------

--
-- Table structure for table `fhphone`
--

CREATE TABLE `fhphone` (
  `FH_Tel` varchar(10) NOT NULL,
  `FH_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fhphone`
--

INSERT INTO `fhphone` (`FH_Tel`, `FH_ID`) VALUES
('0712321768', 'FH000001'),
('0712321999', 'FH000001'),
('0721234321', 'FH000002'),
('0719876111', 'FH000003'),
('0719876546', 'FH000003'),
('0779944433', 'FH000004'),
('0779988776', 'FH000004'),
('0711123492', 'FH000005');

-- --------------------------------------------------------

--
-- Table structure for table `fh_man_notices`
--

CREATE TABLE `fh_man_notices` (
  `FH_ID` varchar(10) NOT NULL,
  `N_No` varchar(5) NOT NULL,
  `Exp_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `knowledgebase`
--

CREATE TABLE `knowledgebase` (
  `K_No` varchar(6) NOT NULL,
  `K_Des` varchar(500) DEFAULT NULL,
  `K_Title` varchar(50) DEFAULT NULL,
  `Ad_ID` varchar(6) DEFAULT NULL CHECK (`Ad_ID` like '%AD_%')
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `knowledgebase`
--

INSERT INTO `knowledgebase` (`K_No`, `K_Des`, `K_Title`, `Ad_ID`) VALUES
('KB0001', 'Career Guidance and Counseling Unit is established to provide undergraduates with \r\n	an enhanced understandingof career options and industry-required technical and non-technical skills along with available employment\r\n	opportunities. We seek to empower our students with the knowledge and know-how needed to balance their academic and extracurricular\r\n	activities, achieve their career aspirations, througha range of course-specific events, workshops and services', 'Career Guidance', 'AD0005'),
('KB0002', 'During the orientation program, the students are also introduced to support services such as IT \r\n	Services,Library, Career Guidance & Counseling,  Sports,  Medical and Student Services, which will be frequently used by students once the \r\n	academic activities start. Furthermore, Students will be introduced to many other extra curricular activities available at the University \r\n	via the introduction of Clubs andSocieties', 'Orientation Program', 'AD0004'),
('KB0003', 'All University students would be bound by the Student Disciplinary Rules, Academic Administrative\r\n	Regulations including Admission and Registration Regulations, Rules applicable to Library, Laboratories and Hostel use(where applicable), the \r\n	IT Policy and other Regulations in so far as they are applicable to them.', 'Rules and Regulations for students', 'AD0003'),
('KB0004', 'Regular registration is the admission granted to a student who has completed the requirements \r\n	stated by the institute, a faculty and or a specific study programme to proceed to the next academic year/semeste', 'Regular Semester \r\n	Registration', 'AD0002'),
('KB0005', 'Education loans are issued for the purpose of attending an accredited fee-levying \r\n	Institute or a university to pursue an academic degree.Education loans can be obtained from ones workplace as well as via private-sector\r\n	lending sources such as banks.You may require a Studentship Confirmation Letter along with semester payment details from the Institute \r\n	to request for the loan facility.', 'Education Loans', 'AD0001');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `N_No` varchar(5) NOT NULL,
  `N_Title` varchar(50) NOT NULL,
  `N_Des` varchar(500) NOT NULL,
  `N_PostDate` date NOT NULL,
  `author` varchar(6) DEFAULT NULL,
  `F_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`N_No`, `N_Title`, `N_Des`, `N_PostDate`, `author`, `F_Name`) VALUES
('N0002', 'Scholarship Application Deadline Extension', 'Announcement regarding an extension of the deadline for scholarship applications. Students are informed of the new deadline and encouraged to take advantage of the additional time to submit their scholarship applications.', '2023-05-20', 'AD0002', 'Computing'),
('N0003', 'Student Club Fair', 'Announcement about a student club fair where various student organizations and clubs will showcase their activities, recruitment opportunities, and upcoming events. Students are encouraged to attend and learn more about the diverse range of extracurricular activities available on campus.', '2023-03-30', 'FH0001', 'Computing'),
('N0005', 'Academic Advising Appointment Scheduling', ' Announcement regarding the availability of academic advising appointments for course selection and academic guidance. Students are instructed on how to schedule appointments and provided with contact information for the advising office.', '2023-05-01', 'FH0003', 'Engineering'),
('N1636', 'test 8', 'test 8\r\nsd', '2023-05-20', 'AD0001', 'AD0001'),
('N1796', 'test 6', 'test 6', '2023-05-20', 'AD0001', 'AD0001');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `SA_ID` varchar(10) NOT NULL,
  `FH_ID` varchar(10) NOT NULL,
  `R_title` varchar(255) NOT NULL,
  `R_Des` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `R_date` datetime NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`SA_ID`, `FH_ID`, `R_title`, `R_Des`, `status`, `R_date`, `id`) VALUES
('SA000001', 'FH000005', 'Search Functionality', ' Implement a product search feature that enables users to search for products based on keywords. The system should return relevant results and provide filtering options such as price range and category.', 0, '2023-06-09 14:45:52', 1),
('SA000002', 'FH000005', 'Reporting and Analytics Dashboard', 'Create a reporting and analytics dashboard that provides real-time insights into key performance indicators (KPIs) and business metrics. The system should generate visualizations and allow users to customize reports.', 0, '2023-06-09 14:45:52', 2),
('SA000003', 'FH000005', 'Email Notification System update', 'Set up an email notification system that sends automated notifications to users for various events, such as order confirmation, password reset, and important system updates. The system should support customization of email templates.', 0, '2023-06-09 14:45:52', 3),
('SA000004', 'FH000005', 'Authentication and Authorization update ', 'Implement a robust user authentication and authorization system to secure access to sensitive data and system functionalities. The system should support different user roles and permissions.', 0, '2023-06-09 14:45:52', 4),
('', '', 'test 1', 'test 3', 0, '2023-06-09 21:46:00', 5),
('SA000003', '', 'test 4', 'test 4', 0, '2023-06-09 21:48:50', 6),
('SA000003', '', 'test 8', 'test 8', 0, '2023-06-09 21:51:38', 7),
('SA000003', '', 'test 1', 'test 1', 0, '2023-06-09 21:52:49', 8);

-- --------------------------------------------------------

--
-- Table structure for table `studemail`
--

CREATE TABLE `studemail` (
  `S_Email` varchar(30) NOT NULL CHECK (`S_Email` like '%_@_%._%'),
  `S_ID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studemail`
--

INSERT INTO `studemail` (`S_Email`, `S_ID`) VALUES
('nethimperera@gmail.com', 'AR00000001'),
('saduni12345@gmail.com', 'BS00000001'),
('sadunijayasinghe@gmail.com', 'BS00000001'),
('dinukasadaruwan@gmail.com', 'IT00000001'),
('isharadilhara@gmail.com', 'IT00000002'),
('isharaishara@gmail.com', 'IT00000002'),
('tharushakeshan@gmail.com', 'IT00000002');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `S_ID` varchar(10) NOT NULL,
  `S_Name` varchar(20) NOT NULL,
  `S_Gender` char(1) DEFAULT NULL,
  `S_DOB` date NOT NULL,
  `S_Username` varchar(30) NOT NULL,
  `S_Password` varchar(500) NOT NULL,
  `S_Citizen` varchar(10) NOT NULL,
  `S_NIC` varchar(15) NOT NULL,
  `S_AcademicYR` varchar(2) NOT NULL,
  `S_Type` varchar(10) NOT NULL,
  `S_HouseNo` int(11) NOT NULL,
  `S_Street` varchar(10) NOT NULL,
  `S_City` varchar(15) NOT NULL,
  `S_District` varchar(15) NOT NULL,
  `S_Province` varchar(15) NOT NULL,
  `C_ID` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`S_ID`, `S_Name`, `S_Gender`, `S_DOB`, `S_Username`, `S_Password`, `S_Citizen`, `S_NIC`, `S_AcademicYR`, `S_Type`, `S_HouseNo`, `S_Street`, `S_City`, `S_District`, `S_Province`, `C_ID`) VALUES
('AR00000001', 'Nethmi Perera', 'F', '2002-08-30', 'tharusha', '$2y$10$3hMId4TdPJ1QRf9avmmQdOvV.ur9Ue6/GXIEFVQzoS6CPUheSx9/S', 'Sri lankan', '200209898789', 'Y1', 'weekday', 20, '4th street', 'Welimada', 'Badulla', 'Uva', 'ID');

-- --------------------------------------------------------

--
-- Table structure for table `studphone`
--

CREATE TABLE `studphone` (
  `S_Tel` varchar(10) NOT NULL,
  `S_ID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studphone`
--

INSERT INTO `studphone` (`S_Tel`, `S_ID`) VALUES
('0767676767', 'AR00000001'),
('0777678987', 'AR00000001'),
('0798765432', 'BS00000001'),
('0709898787', 'EN00000001'),
('0787777777', 'EN00000001'),
('0712345678', 'IT00000001'),
('0798989898', 'IT00000001'),
('0712323434', 'IT00000002');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `SA_ID` varchar(10) NOT NULL,
  `SA_Username` varchar(30) NOT NULL,
  `SA_Password` varchar(15) NOT NULL,
  `SA_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`SA_ID`, `SA_Username`, `SA_Password`, `SA_Name`) VALUES
('SA000001', 'Saman001', 'saman@123', 'Saman Kumara'),
('SA000002', 'Nishantha002', 'nish456', 'Nishantha Silva'),
('SA000003', 'Sapumal003', 'mal789', 'Sapumal Perera'),
('SA000004', 'Krishantha004', 'shan@890', 'Krishantha Alwis'),
('SA000005', 'Kamal005', 'kamalkamal123', 'Kamal Rajapakse');

-- --------------------------------------------------------

--
-- Table structure for table `system`
--

CREATE TABLE `system` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `available` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system`
--

INSERT INTO `system` (`id`, `user`, `available`) VALUES
(1, 'student', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `T_No` varchar(5) NOT NULL,
  `S_ID` varchar(10) NOT NULL,
  `T_title` varchar(100) NOT NULL,
  `T_Des` varchar(500) NOT NULL,
  `T_Status` varchar(10) NOT NULL,
  `Ad_ID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`T_No`, `S_ID`, `T_title`, `T_Des`, `T_Status`, `Ad_ID`) VALUES
('T0001', 'IT00000001', 'Course Enrollment Assistance', ' I am having trouble enrolling in the IT course. When I try to register, I receive an error message saying \"Course capacity reached.\" Can you please assist me in adding this course to my schedule?', 'closed', 'AD0005'),
('T0002', 'AR00000001', 'Financial Aid Inquiry', 'I submitted my financial aid application two weeks ago and would like to check the status. Could you please provide an update on the progress of my application? ', 'pending', 'AD0001'),
('T0003', 'IT00000002', 'IT Support Request', 'I am unable to log in to my university email account. After entering my credentials, the page just refreshes, and I cannot access my emails. I have already tried clearing my browser cache and using a different browser, but the issue persists. Can you please assist me in resolving this login problem?', 'closed', 'AD0003'),
('T0004', 'EN00000001', 'Library Resource Support', ' I am having difficulty finding a specific journal article titled Computer World. Could you please assist me in locating this article or suggest alternative resources?', 'closed', 'AD0002'),
('T0005', 'AR00000001', 'Student Account Assistance', ' I have noticed an incorrect charge on my student account statement. There is a fee of Rs.20000 labeled as \"Lab Equipment Fee,\" but I have not utilized any lab facilities this semester. Could you please review this charge and provide clarification? I can provide any additional information or supporting documents if required.', 'pending', 'AD0001'),
('T0006', 'IT00000001', 'Course Enrollment Assistance', ' I am having trouble enrolling in the IT course. When I try to register, I receive an error message saying \"Course capacity reached.\" Can you please assist me in adding this course to my schedule?', 'pending', 'AD0005'),
('T1473', 'IT00000001', 'test 4', 'test 4', 'pending', 'AD0001'),
('T1511', 'AR00000001', 'test 00', 'test 00', 'pending', 'AD0001'),
('T1844', 'AR00000001', 'test 99', 'test 99', 'pending', 'AD0001'),
('T6327', 'IT00000001', 'test', ' test', 'pending', 'AD0001'),
('T9190', 'IT00000001', 'test 5', 'test5', 'pending', 'AD0001'),
('test', 'IT00000001', 'test 1', 'test 1', 'pending', 'AD0001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Ad_ID`),
  ADD KEY `Admin_FK` (`SA_ID`);

--
-- Indexes for table `adminemail`
--
ALTER TABLE `adminemail`
  ADD PRIMARY KEY (`Ad_Email`),
  ADD KEY `adminemail_FK` (`Ad_ID`);

--
-- Indexes for table `admin_man_notices`
--
ALTER TABLE `admin_man_notices`
  ADD PRIMARY KEY (`Ad_ID`,`N_No`),
  ADD KEY `admin_man_notices_FK_2` (`N_No`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`C_ID`),
  ADD KEY `Course_FK` (`F_ID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `facultyhead`
--
ALTER TABLE `facultyhead`
  ADD PRIMARY KEY (`FH_ID`),
  ADD KEY `FacultyHead_FK_1` (`SA_ID`),
  ADD KEY `FacultyHead_FK_2` (`F_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FB_No`),
  ADD KEY `Feedback_FK` (`S_ID`);

--
-- Indexes for table `fhemail`
--
ALTER TABLE `fhemail`
  ADD PRIMARY KEY (`FH_Email`),
  ADD KEY `fhemail_FK` (`FH_ID`);

--
-- Indexes for table `fhphone`
--
ALTER TABLE `fhphone`
  ADD PRIMARY KEY (`FH_Tel`),
  ADD KEY `fhphone_FK` (`FH_ID`);

--
-- Indexes for table `fh_man_notices`
--
ALTER TABLE `fh_man_notices`
  ADD PRIMARY KEY (`FH_ID`,`N_No`),
  ADD KEY `fh_man_notices_FK_2` (`N_No`);

--
-- Indexes for table `knowledgebase`
--
ALTER TABLE `knowledgebase`
  ADD PRIMARY KEY (`K_No`),
  ADD KEY `Knowledgebase_FK` (`Ad_ID`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`N_No`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `approve_req_FK_2` (`FH_ID`);

--
-- Indexes for table `studemail`
--
ALTER TABLE `studemail`
  ADD PRIMARY KEY (`S_Email`),
  ADD KEY `studemail_FK` (`S_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`S_ID`),
  ADD KEY `Student_FK_1` (`C_ID`);

--
-- Indexes for table `studphone`
--
ALTER TABLE `studphone`
  ADD PRIMARY KEY (`S_Tel`),
  ADD KEY `studphone_FK` (`S_ID`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`SA_ID`);

--
-- Indexes for table `system`
--
ALTER TABLE `system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`T_No`),
  ADD KEY `Ticket_FK_1` (`S_ID`),
  ADD KEY `Ticket_FK_2` (`Ad_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `system`
--
ALTER TABLE `system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `Admin_FK` FOREIGN KEY (`SA_ID`) REFERENCES `superadmin` (`SA_ID`);

--
-- Constraints for table `adminemail`
--
ALTER TABLE `adminemail`
  ADD CONSTRAINT `adminemail_FK` FOREIGN KEY (`Ad_ID`) REFERENCES `admin` (`Ad_ID`);

--
-- Constraints for table `admin_man_notices`
--
ALTER TABLE `admin_man_notices`
  ADD CONSTRAINT `admin_man_notices_FK_2` FOREIGN KEY (`N_No`) REFERENCES `notices` (`N_No`),
  ADD CONSTRAINT `admin_man_notices__FK_1` FOREIGN KEY (`Ad_ID`) REFERENCES `admin` (`Ad_ID`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `Course_FK` FOREIGN KEY (`F_ID`) REFERENCES `faculty` (`F_ID`);

--
-- Constraints for table `facultyhead`
--
ALTER TABLE `facultyhead`
  ADD CONSTRAINT `FacultyHead_FK_1` FOREIGN KEY (`SA_ID`) REFERENCES `superadmin` (`SA_ID`),
  ADD CONSTRAINT `FacultyHead_FK_2` FOREIGN KEY (`F_ID`) REFERENCES `faculty` (`F_ID`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `Feedback_FK` FOREIGN KEY (`S_ID`) REFERENCES `student` (`S_ID`);

--
-- Constraints for table `fhemail`
--
ALTER TABLE `fhemail`
  ADD CONSTRAINT `fhemail_FK` FOREIGN KEY (`FH_ID`) REFERENCES `facultyhead` (`FH_ID`);

--
-- Constraints for table `fhphone`
--
ALTER TABLE `fhphone`
  ADD CONSTRAINT `fhphone_FK` FOREIGN KEY (`FH_ID`) REFERENCES `facultyhead` (`FH_ID`);

--
-- Constraints for table `fh_man_notices`
--
ALTER TABLE `fh_man_notices`
  ADD CONSTRAINT `fh_man_notices_FK_1` FOREIGN KEY (`FH_ID`) REFERENCES `facultyhead` (`FH_ID`),
  ADD CONSTRAINT `fh_man_notices_FK_2` FOREIGN KEY (`N_No`) REFERENCES `notices` (`N_No`);

--
-- Constraints for table `knowledgebase`
--
ALTER TABLE `knowledgebase`
  ADD CONSTRAINT `Knowledgebase_FK` FOREIGN KEY (`Ad_ID`) REFERENCES `admin` (`Ad_ID`);

--
-- Constraints for table `studemail`
--
ALTER TABLE `studemail`
  ADD CONSTRAINT `studemail_FK` FOREIGN KEY (`S_ID`) REFERENCES `student` (`S_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
