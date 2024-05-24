-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 24, 2024 at 05:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inc_resolve`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(8) NOT NULL,
  `admin_fname` varchar(30) NOT NULL,
  `admin_lname` varchar(30) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_role` varchar(10) NOT NULL,
  `admin_department` varchar(10) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_fname`, `admin_lname`, `admin_email`, `admin_role`, `admin_department`, `password`) VALUES
(23464575, 'Fred', 'Peskoff', 'fpeskoff@bmcc.cuny.edu', 'chair', 'MATH', 'fpeskoff@bmcc.cuny.edu'),
(53426375, 'Ching-Song', 'Wei', 'cwei@bmcc.cuny.edu', 'chair', 'CIS', 'cwei@bmcc.cuny.edu'),
(64378087, 'Mariana', 'Hermansson', 'mhermansson@bmcc.cuny.edu', 'admin', NULL, 'mhermansson@bmcc.cuny.edu');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assignment_id` int(255) NOT NULL,
  `assignment_name` varchar(256) NOT NULL,
  `instructor_id` int(8) NOT NULL,
  `content` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment_id`, `assignment_name`, `instructor_id`, `content`) VALUES
(1, 'dcsfvdx ', 79052756, 'cdcdefdcdzc'),
(2, 'Paper 4: A Final Documented Essay', 86044222, 'Assignment demo content. You will write a final documented essay'),
(3, 'Departmental Final Exam', 86044222, 'You will get the final exam from the department'),
(4, 'Final Exam', 79052756, NULL),
(5, 'Mid Report  Phase 2 @ Honors Project', 79052756, NULL),
(6, 'iwybciucbiuead', 79052756, 'wrvscdwfswefc'),
(1000, 'hbuascihac', 79052756, 'adcqefcdszxcczx'),
(1001, 'adcsqefdacx', 79052756, 'eadscadfcadsvcadfsc'),
(1002, '1', 79052756, ''),
(1003, 'test', 79052756, ''),
(1004, 'fndsjkbc', 79052756, ''),
(1005, 'fwejdcbubc', 79052756, ''),
(1006, 'wrsdfsgbsf', 79052756, ''),
(1007, 'hbkwesfibi ouueafbuib', 79052756, ''),
(1008, 'bhsdkvuobe ufhduzhc', 79052756, '\nbhsdicbiubc iubaduoczbu '),
(1009, 'hesvidzvciyv qwjavsciyv asvcyuvyvawsx ivaiysxgi', 79052756, '<h1>bhiaduiguogf</h1>\nLorem ipsum <strong>dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet est placerat in egestas erat <u>imperdiet</u> sed. Nec feugiat nisl pretium fusce. Cursus vitae congue mauris rhoncus aenean vel elit. Urna cursus eget nunc scelerisque viverra mauris in aliquam sem. Aliquet enim tortor at auctor urna nunc id. Nec feugiat in fermentum posuere urna nec tincidunt. Adipiscing enim eu turpis egestas pretium aenean. Aenean euismod elementum nisi quis eleifend quam. Sed elementum tempus egestas sed sed risus. Auctor eu augue ut lectus arcu bibendum at. Eu consequat ac felis donec et odio pellentesque diam volutpat. Nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque purus.\n<br>\nSed egestas egestas fringilla phasellus. Commodo elit at imperdiet dui accumsan sit amet nulla. Volutpat consequat mauris nunc congue nisi vitae suscipit. Posuere morbi leo urna molestie at elementum eu. Cursus in hac habitasse platea dictumst <strong><u>quisque</u></strong>. Sed risus ultricies tristique nulla <em>aliquet</em> enim tortor. Amet cursus sit amet dictum sit amet justo donec enim. Velit dignissim sodales ut eu sem integer. Id aliquet risus feugiat in ante metus. Et leo duis ut diam. Sit amet facilisis magna etiam tempor orci. Scelerisque <strong><em><u>fermentum</u></em></strong> dui faucibus in ornare. Id ornare arcu odio ut sem nulla pharetra diam. Eget nunc scelerisque viverra mauris in aliquam sem fringilla ut. Pharetra pharetra massa massa ultricies mi. Sed turpis tincidunt id aliquet. Neque aliquam vestibulum morbi blandit cursus risus at ultrices mi. In massa tempor nec feugiat nisl.'),
(1010, 'njdsncubbuosbcoub', 79052756, '<h1>Cin id fugiunt, re eadem defendunt, quae Peripatetici, verba.</h1>\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Hoc enim constituto in philosophia constituta sunt omnia. <a href=\"http://loripsum.net/\" rel=\"noopener noreferrer\" target=\"_blank\">Virtutis, magnitudinis animi, patientiae, fortitudinis fomentis dolor mitigari solet.</a> Quid ergo aliud intellegetur nisi uti ne quae pars naturae neglegatur? Duo Reges: constructio interrete. <a href=\"http://loripsum.net/\" rel=\"noopener noreferrer\" target=\"_blank\">Quis negat?</a> <strong>Nunc agendum est subtilius.</strong><ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Quid igitur dubitamus in tota eius natura quaerere quid sit effectum?</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Quo modo autem optimum, si bonum praeterea nullum est?</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Miserum hominem! Si dolor summum malum est, dici aliter non potest.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Modo etiam paulum ad dexteram de via declinavi, ut ad Pericli sepulcrum accederem.</li></ol>\nConsequens enim est et post oritur, ut dixi. Ego vero isti, inquam, permitto. Ipse Epicurus fortasse redderet, ut Sextus Peducaeus, Sex. Atqui, inquam, Cato, si istud optinueris, traducas me ad te totum licebit. <strong>Nunc haec primum fortasse audientis servire debemus.</strong> In quibus doctissimi illi veteres inesse quiddam caeleste et divinum putaverunt. <em>Non semper, inquam;</em> Videmusne ut pueri ne verberibus quidem a contemplandis rebus perquirendisque deterreantur? Compensabatur, inquit, cum summis doloribus laetitia. <a href=\"http://loripsum.net/\" rel=\"noopener noreferrer\" target=\"_blank\">Satis est ad hoc responsum.</a>'),
(1011, 'O magnam vim ingenii causamque iustam, cur nova existeret disciplina! Perge porro.', 79052756, '<h1>O magnam vim ingenii causamque iustam, cur nova existeret disciplina! Perge porro.</h1>\nLorem ipsum dolor sit amet, consectetur adipiscing elit. <a href=\"http://loripsum.net/\" rel=\"noopener noreferrer\" target=\"_blank\">Non quam nostram quidem, inquit Pomponius iocans;</a> <a href=\"http://loripsum.net/\" rel=\"noopener noreferrer\" target=\"_blank\">Duo Reges: constructio interrete.</a> At enim hic etiam dolore. Cur post Tarentum ad Archytam? <em>Eadem fortitudinis ratio reperietur.</em> Venit ad extremum;<ol><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Quamquam id quidem licebit iis existimare, qui legerint.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Ego vero isti, inquam, permitto.</li></ol>\n<strong><em>Sed hoc sane concedamus.</em></strong>\nSatis est tibi in te, satis in legibus, satis in mediocribus amicitiis praesidii.\n<strong><em>Bork</em></strong>\nQuo modo autem optimum, si bonum praeterea nullum est?\n<strong><em>Bork</em></strong>\nEquidem soleo etiam quod uno Graeci, si aliter non possum, idem pluribus verbis exponere.\n<strong><em>Sullae consulatum?</em></strong>\nQualem igitur hominem natura inchoavit?\nCerte non potest. Sed tamen intellego quid velit. Haec quo modo conveniant, non sane intellego.\nEt quod est munus, quod opus sapientiae? Videamus animi partes, quarum est conspectus illustrior; Sed nimis multa. Quid ad utilitatem tantae pecuniae? Qui est in parvis malis. Disserendi artem nullam habuit.<ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Ne amores quidem sanctos a sapiente alienos esse arbitrantur.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Hoc non est positum in nostra actione.</li></ol>\n<br>'),
(1012, 'O magnam vim ingenii causamque iustam, cur nova existeret disciplina! Perge porro.', 79052756, '<h2>O magnam vim ingenii causamque iustam, cur nova existeret disciplina! Perge porro.</h2>\nLorem ipsum dolor sit amet, consectetur adipiscing elit. <a href=\"http://loripsum.net/\" rel=\"noopener noreferrer\" target=\"_blank\">Non quam nostram quidem, inquit Pomponius iocans;</a> <a href=\"http://loripsum.net/\" rel=\"noopener noreferrer\" target=\"_blank\">Duo Reges: constructio interrete.</a> At enim hic etiam dolore. Cur post Tarentum ad Archytam? <em>Eadem fortitudinis ratio reperietur.</em> Venit ad extremum;<ol><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Quamquam id quidem licebit iis existimare, qui legerint.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Ego vero isti, inquam, permitto.</li></ol>\n<strong><em>Sed hoc sane concedamus.</em></strong> Satis est tibi in te, satis in legibus, satis in mediocribus amicitiis praesidii. <strong><em>Bork</em></strong> Quo modo autem optimum, si bonum praeterea nullum est? <strong><em>Bork</em></strong> Equidem soleo etiam quod uno Graeci, si aliter non possum, idem pluribus verbis exponere. <strong><em>Sullae consulatum?</em></strong> Qualem igitur hominem natura inchoavit? Certe non potest. Sed tamen intellego quid velit. Haec quo modo conveniant, non sane intellego. Et quod est munus, quod opus sapientiae? Videamus animi partes, quarum est conspectus illustrior; Sed nimis multa. Quid ad utilitatem tantae pecuniae? Qui est in parvis malis. Disserendi artem nullam habuit.<ol><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Ne amores quidem sanctos a sapiente alienos esse arbitrantur.</li><li data-list=\"bullet\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Hoc non est positum in nostra actione.</li></ol>\n<br>\n <a href=\"http://loripsum.net/\" rel=\"noopener noreferrer\" target=\"_blank\">Satis est ad hoc responsum.</a>'),
(1013, 'Exploring the Impact of Artificial Intelligence on Modern Society', 79052756, '<h3>Objective:</h3>\nThe rapid advancements in artificial intelligence (AI) technologies have significantly transformed various aspects of our daily lives. This assignment aims to explore and analyze the multifaceted impact of AI on modern society. Students are expected to investigate specific applications, challenges, and ethical considerations associated with the widespread adoption of AI in different sectors.\n<br><h3>Assignment Tasks:</h3>\n<br><ol><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Introduction to AI (10 points):</strong></li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Provide a concise definition of artificial intelligence and its key components.</li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Present a brief historical overview of AI development.</li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Highlight the fundamental concepts that form the basis of AI technologies.</li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Applications in Healthcare (20 points):</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Analyze the role of AI in healthcare, focusing on diagnostic tools and personalized medicine.</strong></li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Explore specific use cases where AI has made a significant impact on patient care.</li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Discuss potential challenges and ethical considerations associated with AI implementation in healthcare.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>AI in Education (15 points):</strong></li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Investigate the applications of AI in the field of education, with a focus on adaptive learning and intelligent tutoring systems.</li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Assess the benefits and drawbacks of incorporating AI into educational practices.</li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Discuss the potential future developments in AI-driven education.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Financial Technology (FinTech) and AI (20 points):</strong></li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Examine the role of AI algorithms in FinTech, particularly in algorithmic trading and risk management.</li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Explore how AI is used for fraud detection and customer service in the financial industry.</li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Analyze the impact of AI on the evolution of financial services.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Autonomous Vehicles and Transportation (15 points):</strong></li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Provide an overview of AI applications in autonomous vehicles and smart transportation systems.</li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Discuss the potential benefits and challenges associated with the integration of AI in the transportation sector.</li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Address ethical dilemmas and safety considerations related to AI-driven transportation.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Ethical Considerations and Challenges (20 points):</strong></li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Explore the ethical considerations surrounding AI, including issues of bias, fairness, and transparency.</li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Discuss the privacy concerns associated with AI applications and data collection.</li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Evaluate the responsibilities of developers and policymakers in addressing ethical challenges.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Conclusion (10 points):</strong></li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>In the conclusion, summarize the key findings of your analysis and provide insights into the future implications of AI on modern society. Reflect on the ethical considerations discussed and propose recommendations for responsible AI development and deployment.</li></ol>\n<br><h3>Submission Guidelines:</h3>\n<br>\nThe assignment should be submitted in a well-organized document.\nProper citations and references should be included for any external sources used.\nThe assignment is due on [Due Date]. Late submissions will incur a penalty.\n<br>\n<em>Note: This assignment is designed to encourage students to critically examine the impact of AI across different domains, fostering a deeper understanding of the societal implications and ethical considerations associated with AI technologies.</em>'),
(1014, 'Assignment Question: Introduction to Artificial Intelligence (AI)', 79052756, '\nhello world'),
(1015, 'Algorithmic Challenge - Sorting Sprint', 79052756, '<h3>Objective:</h3>\nImplement and compare the performance of three sorting algorithms: Bubble Sort, Merge Sort, and Quick Sort. Create a Python program that generates random lists of integers and applies each sorting algorithm to analyze their time complexity.\n<br><h3>Requirements:</h3>\n<br><ol><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Sorting Algorithms:</strong></li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Implement Bubble Sort, Merge Sort, and Quick Sort algorithms.</li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Ensure the algorithms work on lists of integers.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Random List Generator:</strong></li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Develop a function to generate random lists of integers with varying sizes (e.g., 100, 500, 1000 elements).</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Time Complexity Analysis:</strong></li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Measure and compare the execution time of each sorting algorithm for lists of different sizes.</li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Present the results in a clear and visually appealing format (e.g., a graph).</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Code Modularity:</strong></li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Organize the code into separate functions for each sorting algorithm, list generation, and time analysis.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span><strong>Documentation:</strong></li><li data-list=\"ordered\" class=\"ql-indent-1\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Provide concise comments within the code to explain the logic of each algorithm and any noteworthy implementation details.</li></ol>\nInclude a README file with instructions on how to run the program and interpret the results.<h3><br></h3><h3>Submission Guidelines:</h3>\n<br>\nSubmit the Python source code along with any necessary files.\nInclude a README file with clear instructions on running the program and interpreting the results.\nClearly mention any external libraries or tools used.<h3><br></h3><h3><br></h3>\n<br>');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `classid` int(10) NOT NULL,
  `subject` varchar(5) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `section` int(5) NOT NULL,
  `classname` varchar(256) NOT NULL,
  `semester_term` varchar(10) NOT NULL,
  `semester_year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`classid`, `subject`, `unit`, `section`, `classname`, `semester_term`, `semester_year`) VALUES
(21345, 'CSC', '101', 2100, 'Principles in Information Technology and Computation', 'Spring', 2024),
(31806, 'ENG', '201', 504, 'Introduction to Literature', 'Spring', 2024),
(32456, 'CSC', '111', 1502, 'Introduction to Programming', 'Spring', 2024),
(34070, 'CSC', '211H', 1500, 'Advanced Programming Technique (Honors)', 'Spring', 2024),
(111345, 'CSC', '101', 1500, 'Intro to Computer Sci', 'Spring', 2022);

-- --------------------------------------------------------

--
-- Table structure for table `class_assignment`
--

CREATE TABLE `class_assignment` (
  `classid` int(10) NOT NULL,
  `assignment_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_assignment`
--

INSERT INTO `class_assignment` (`classid`, `assignment_id`) VALUES
(31806, 2),
(31806, 3),
(34070, 1008),
(34070, 1009),
(34070, 1013),
(34070, 1014),
(34070, 1015);

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `cunyid` int(8) NOT NULL,
  `fname` varchar(46) NOT NULL,
  `lname` varchar(46) NOT NULL,
  `email` varchar(62) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`cunyid`, `fname`, `lname`, `email`, `password`) VALUES
(79052756, 'Arethusa', 'Kazimiera', 'test@test.net', '1234'),
(86044222, 'Chaza\'el', 'Nilofer', 'test1@test.net', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_class`
--

CREATE TABLE `instructor_class` (
  `instructor_cunyid` int(8) NOT NULL,
  `classid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructor_class`
--

INSERT INTO `instructor_class` (`instructor_cunyid`, `classid`) VALUES
(79052756, 21345),
(86044222, 31806),
(79052756, 32456),
(79052756, 34070),
(79052756, 111345);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(16) NOT NULL,
  `instructor_id` int(8) NOT NULL,
  `student_id` int(8) NOT NULL,
  `class_id` int(10) NOT NULL,
  `admin_id` int(8) NOT NULL,
  `request_type` varchar(16) NOT NULL,
  `request_status` varchar(16) NOT NULL,
  `request_description` varchar(256) DEFAULT NULL,
  `chair_note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `instructor_id`, `student_id`, `class_id`, `admin_id`, `request_type`, `request_status`, `request_description`, `chair_note`) VALUES
(2, 79052756, 97050708, 21345, 53426375, 'new', '', NULL, ''),
(3, 79052756, 13396547, 111345, 23464575, 'new', 'new', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `cunyid` int(8) NOT NULL,
  `fname` varchar(46) NOT NULL,
  `lname` varchar(46) NOT NULL,
  `email` varchar(62) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`cunyid`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'Jessie', 'Ryan', 'demo@student.com', 'demo@student.com'),
(66207, 'Curcio', 'Forsythe', 'cforsythe26@yale.edu', 'cD8AhWO`RvI}S}'),
(3466291, 'Sheila-kathryn', 'Pick', 'spick2k@tuttocitta.it', 'nO1*i/P|5)z8FX'),
(4070129, 'Irvine', 'Jarrelt', 'ijarrelt1g@independent.co.uk', 'jG1#S=lBCP'),
(5161844, 'Tristan', 'Gauson', 'tgauson1c@devhub.com', 'iH1f>/nN/DkGKD'),
(8015274, 'Aylmar', 'Horning', 'ahorning6@sbwire.com', 'qR0{8gl(Dd/JB7w'),
(8430161, 'Hillier', 'Medler', 'hmedler2m@github.com', 'cE5@#B~m(PCK'),
(8482588, 'Melania', 'Karolowski', 'mkarolowski0@squarespace.com', 'fN3LH#=XJ&*'),
(9876543, 'Annie', 'Norton', 'annienorton@test.net', 'annienorton@test.net'),
(10582557, 'Bernarr', 'Penrith', 'bpenrithv@theglobeandmail.com', 'rR2~}r,#),EZ'),
(11744295, 'Netty', 'Skeleton', 'nskeleton4@sohu.com', 'oV6*JJZqxyCgiE'),
(12345678, 'John', 'Doe', 'test@test.net', '12345678'),
(13396547, 'Lauree', 'Jeacocke', 'ljeacocke1d@globo.com', 'lY6(!}?4Aj)xUV'),
(14186345, 'Misti', 'Brind', 'mbrind1g@ed.gov', 'uC7LS8CN3nazs'),
(16626215, 'Kelby', 'Gardener', 'kgardener16@who.int', 'eE6.Cy!qs3HP'),
(17624801, 'Ed', 'Aubri', 'eaubri21@bizjournals.com', 'aS9\"s=HH6Ej~/3'),
(20005354, 'Nelson', 'Speirs', 'nspeirs1w@weather.com', 'bI9o=L<oHDEA7C'),
(20645512, 'Pascale', 'Clifforth', 'pclifforth1m@va.gov', 'tZ8eTKdNJ.Nq'),
(22757494, 'Rosalinda', 'Caldero', 'rcaldero24@prnewswire.com', 'lA5MYi\'1'),
(22881527, 'Jade', 'Mashal', 'jmashal5@smugmug.com', 'kN2<Obtgw*v0(='),
(22887292, 'Kassey', 'Beagin', 'kbeagin1t@tiny.cc', 'rV6q~_ph4od'),
(23456789, 'Methsara', 'Perera', 'methsaramp@gmail.com', '1234'),
(24225272, 'Brigg', 'Borrett', 'bborrett8@bluehost.com', 'nN7i5G0'),
(24354640, 'Waldon', 'Balharry', 'wbalharry1b@bigcartel.com', 'rJ0q*</+3IBuB,#o'),
(24375782, 'Georgeanna', 'Geekin', 'ggeekin28@state.gov', 'dE0_lnNAUZ*|+2,L'),
(24563441, 'Whittaker', 'Cappel', 'wcappel1a@paypal.com', 'nJ4>rA,aFE'),
(26166145, 'Ellery', 'Irnis', 'eirnis2@yahoo.com', 'fV0\"Y~VkUz1JF`x'),
(27432844, 'Brenda', 'Eliesco', 'beliesco2h@gravatar.com', 'qC9uNk>/\''),
(30066210, 'Rancell', 'Greggs', 'rgreggs3@cisco.com', 'rJ5.6=u1v22mI1~'),
(30317284, 'Courtnay', 'Stonebridge', 'cstonebridgen@un.org', 'jR1,B!V'),
(30389090, 'Clotilda', 'Heersma', 'cheersmaq@sakura.ne.jp', 'kX0&O@DayANY$'),
(30399846, 'Lee', 'McMackin', 'lmcmackinx@springer.com', 'sO6}(gF\"'),
(30491333, 'Julita', 'Gillivrie', 'jgillivriel@microsoft.com', 'wH1$.ll#gTl'),
(30580882, 'Kaila', 'Jumont', 'kjumont19@wisc.edu', 'jP4,3Adiq{'),
(33836117, 'Brooks', 'Daftor', 'bdaftorm@privacy.gov.au', 'aD9|.r_+q*T\'w'),
(35129305, 'Dulcy', 'Moukes', 'dmoukes1k@baidu.com', 'qC9Z?Ti&NpoX6iZD'),
(39093709, 'Demetris', 'Christer', 'dchrister29@prnewswire.com', 'oA8_(.Ul(1dHDQ6A'),
(39420291, 'Conant', 'Binge', 'cbinge2a@yahoo.com', 'sU7O5IURR?2tRX'),
(41207006, 'Agneta', 'Livingston', 'alivingston17@amazon.co.uk', 'xG3{~JM6h'),
(41226270, 'Shep', 'Scardifeild', 'sscardifeild1b@pen.io', 'eW3#i|>RmGH{7J'),
(45275848, 'Arliene', 'Ligertwood', 'aligertwood18@state.tx.us', 'mE5%)1x&`0'),
(45477783, 'Atalanta', 'Vaar', 'avaar2g@examiner.com', 'eV03GU*!'),
(45802991, 'Adi', 'Cuttell', 'acuttell22@accuweather.com', 'uF8c+,C@Z}_rXV'),
(46270036, 'Dag', 'Lewry', 'dlewry1s@foxnews.com', 'gG8.JGHCmwgE6'),
(46883343, 'Conant', 'Toderbrugge', 'ctoderbrugge27@walmart.com', 'gB2XnDm3VHkM\"J'),
(47440444, 'Constantino', 'Romney', 'cromney1k@yellowbook.com', 'yG6+H\"s*E<'),
(49038078, 'Elisa', 'Holdin', 'eholdinw@mashable.com', 'cK0.wRC7<3Kjx('),
(49272116, 'Wynne', 'Gussie', 'wgussie1u@hc360.com', 'mO9%K/F/u91'),
(49627177, 'Ashlin', 'Trasler', 'atrasler1o@e-recht24.de', 'uG27/0!q~q@t'),
(51666489, 'Kelli', 'Langstone', 'klangstone1j@blogspot.com', 'zR11|SNXTro?UcA'),
(52591866, 'Deb', 'Inworth', 'dinworth1e@nhs.uk', 'qM3=\'0<z@H|'),
(53921808, 'Lesley', 'Iohananof', 'liohananof1d@telegraph.co.uk', 'bQ7Gu$bIXhC!d8nr'),
(55791978, 'Fitzgerald', 'Dipple', 'fdipple1h@pbs.org', 'cS1@%>W5'),
(55925206, 'Martguerita', 'Couper', 'mcoupero@irs.gov', 'yH2~5+qpU3r5oSq7'),
(56100277, 'Nata', 'Sandle', 'nsandle2b@myspace.com', 'jM7d\'N1tZ}#'),
(58400575, 'Earlie', 'Oldaker', 'eoldakeri@purevolume.com', 'mR0xBxb}nP'),
(58607178, 'Franklin', 'Fattorini', 'ffattorini9@about.me', 'pB1}Ir4tF+'),
(59859049, 'Reginald', 'Gascone', 'rgascone1r@dion.ne.jp', 'cS6&A.9tn&d'),
(60021956, 'Norris', 'Mardell', 'nmardellk@ustream.tv', 'zR0\'7$tk{3'),
(61486206, 'Gar', 'Blas', 'gblas2j@odnoklassniki.ru', 'uT07,!W9`mXlE*y~'),
(63010610, 'Chicky', 'Bedford', 'cbedford25@odnoklassniki.ru', 'uR1El+ULC3'),
(63580918, 'Morrie', 'Arnoult', 'marnoults@eepurl.com', 'qL3`,d3Y'),
(63843914, 'Leigh', 'Klugel', 'lklugelh@ucsd.edu', 'yH1~4{Z'),
(64023151, 'Tito', 'Glantz', 'tglantzu@kickstarter.com', 'pL8?=F9xa5_12W'),
(64876605, 'Ingelbert', 'Ruffles', 'iruffles1i@sciencedaily.com', 'gA2`16HbI~p'),
(66692703, 'Laetitia', 'Carvell', 'lcarvellr@a8.net', 'bO3#)<ZxR3rXm+=w'),
(66883264, 'Enrica', 'Elsie', 'eelsie1f@bloglines.com', 'sX6l3|flkbq2'),
(67770819, 'Kipper', 'Harcase', 'kharcase2l@webeden.co.uk', 'cA7!Cmr!D3z,'),
(68391562, 'Clareta', 'Hulson', 'chulson1n@netscape.com', 'lP0v0uL>t,nq2MC'),
(69436079, 'Clair', 'Bront', 'cbront2c@eepurl.com', 'uL2AHmI('),
(69498932, 'Milzie', 'Domb', 'mdomb1y@kickstarter.com', 'iP3*1?b$Z4yzd'),
(69678865, 'Wallis', 'De Blasi', 'wdeblasi1x@delicious.com', 'mN8S8HC7SLb+\','),
(70315974, 'Iago', 'Bengal', 'ibengal2f@wiley.com', 'xX7<9P8ur'),
(70580694, 'Katheryn', 'Butting', 'kbuttingd@odnoklassniki.ru', 'qF0(#D/4&vhbF'),
(70872226, 'Myrta', 'Fliege', 'mfliegef@ask.com', 'yZ5\'.Kj{!LGc|z)'),
(71663725, 'Cybill', 'Chatelet', 'cchatelet2e@eepurl.com', 'kH2l\"_SzY#'),
(72577084, 'Gwynne', 'Andrey', 'gandrey1c@ucoz.com', 'hM0>&{cG'),
(72788633, 'Fernande', 'Kingzeth', 'fkingzeth2d@phpbb.com', 'uF1od&d'),
(73827898, 'Weston', 'Simco', 'wsimco1f@ning.com', 'pR7_O8+s'),
(75865138, 'Carlita', 'Lamboll', 'clamboll2n@typepad.com', 'iY69z@vF\'=\'f|kUV'),
(76554870, 'Beverley', 'Paulillo', 'bpaulillot@sun.com', 'tG5,/jE{ItCD~v+'),
(77410715, 'Nanni', 'Clifton', 'nclifton20@auda.org.au', 'lN4*ZJJk'),
(77963676, 'Selig', 'Delahunty', 'sdelahuntya@storify.com', 'cX7)zNBFF'),
(78279780, 'Starr', 'Montez', 'smontez1z@photobucket.com', 'rU4u1G\"DwCQx'),
(78549477, 'Malissa', 'Smylie', 'msmyliey@shutterfly.com', 'qS5$XU9TS/vWqNG'),
(78789898, 'Hana', 'G', 'hana@test.net', 'hana@test.net'),
(79559226, 'Scarlett', 'O\'Haire', 'sohaire1v@sbwire.com', 'rY5N6b(h1wV'),
(79867554, 'Tris', 'Zorro', 'tzorro1j@go.com', 'aE5,yp2&f,R5'),
(81200723, 'Ruben', 'Flucker', 'rflucker1i@yahoo.co.jp', 'cO6)!50Rf6U9wD'),
(81626091, 'Perren', 'Edward', 'pedward1l@macromedia.com', 'xU8oWXqdQ'),
(82562257, 'Olimpia', 'Jacquet', 'ojacquetc@twitpic.com', 'iT5/RZM%+/Q\"yH/9'),
(82850314, 'Tab', 'Swainston', 'tswainstonp@cocolog-nifty.com', 'lI6?pLWU)/,l'),
(84365210, 'Gabie', 'Purselowe', 'gpurselowe1@shop-pro.jp', 'bO6}bBE/Lo'),
(85175414, 'Cally', 'Caddell', 'ccaddellj@disqus.com', 'wZ7\'#J|\''),
(87989587, 'Kerr', 'Jonsson', 'kjonsson23@meetup.com', 'wE30B}kRT\'{'),
(88786360, 'Afton', 'Draisey', 'adraisey7@telegraph.co.uk', 'oZ6#|f\'5rpW}J'),
(89734956, 'Noell', 'Killgus', 'nkillgus0@prlog.org', 'qB9#|?!3!jt7sz|'),
(90500382, 'Carie', 'Phelan', 'cphelan2i@soundcloud.com', 'jU1Q8033)Dg{98'),
(91481615, 'Essa', 'Jellico', 'ejellicob@meetup.com', 'rD7(M%PIi_3KP'),
(94290588, 'Kiri', 'Morse', 'kmorseg@rakuten.co.jp', 'eL5{#3*5zlSb'),
(95234348, 'Jo-anne', 'Duckers', 'jduckers1p@go.com', 'pC9OQA6dv~a5'),
(97050708, 'Erena', 'Le Conte', 'eleconte1h@exblog.jp', 'vH1qLi4@l0'),
(98291133, 'Dallis', 'Whawell', 'dwhawelle@jalbum.net', 'nM7~Ty@Us|)'),
(99550710, 'Candy', 'Fasson', 'cfasson1q@wordpress.com', 'wB8Li&qJ'),
(99820416, 'Humbert', 'Spilsbury', 'hspilsbury1e@harvard.edu', 'fI0HVFe{y9/TnJ');

-- --------------------------------------------------------

--
-- Stand-in structure for view `students`
-- (See below for the actual view)
--
CREATE TABLE `students` (
`cunyid` int(8)
,`email` varchar(62)
,`grade` varchar(5)
,`classid` int(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `student_assignment`
--

CREATE TABLE `student_assignment` (
  `student_id` int(81) NOT NULL,
  `assignment_id` int(255) NOT NULL,
  `last_day` date NOT NULL,
  `grade` varchar(5) NOT NULL DEFAULT '-',
  `status` varchar(16) NOT NULL DEFAULT 'enabled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_assignment`
--

INSERT INTO `student_assignment` (`student_id`, `assignment_id`, `last_day`, `grade`, `status`) VALUES
(12345678, 2, '2024-03-31', 'INC', 'In Review'),
(12345678, 3, '2024-08-31', 'INC', 'In Review'),
(12345678, 1013, '2024-12-31', 'INC', 'In Review'),
(12345678, 1014, '2024-12-31', 'INC', '-'),
(12345678, 1015, '2024-12-31', 'INC', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `student_class`
--

CREATE TABLE `student_class` (
  `classid` int(10) NOT NULL,
  `student_id` int(8) NOT NULL,
  `grade` varchar(5) NOT NULL,
  `last_day` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_class`
--

INSERT INTO `student_class` (`classid`, `student_id`, `grade`, `last_day`, `status`) VALUES
(21345, 12345678, 'INC', '2024-03-31', ''),
(21345, 17624801, 'INC', '2024-09-30', ''),
(21345, 23456789, 'INC', '2024-04-30', 'In Review'),
(21345, 24225272, 'INC', '2024-04-30', 'In Review'),
(21345, 24354640, 'INC', '2024-09-30', 'Completed'),
(21345, 97050708, 'INC', '2024-04-19', 'approved'),
(31806, 12345678, 'INC', '2024-12-31', 'reject'),
(32456, 4070129, 'INC', '2024-12-31', ''),
(32456, 5161844, 'INC', '2024-12-31', ''),
(32456, 17624801, 'INC', '2024-04-26', ''),
(32456, 23456789, 'INC', '2024-10-31', 'In Review'),
(32456, 78789898, 'INC', '2024-05-10', ''),
(34070, 12345678, 'INC', '2024-12-31', ''),
(34070, 22757494, 'INC', '2025-01-31', ''),
(111345, 13396547, 'INC', '2024-10-31', 'In Review'),
(111345, 23456789, 'INC', '2024-10-07', 'In Review');

-- --------------------------------------------------------

--
-- Structure for view `students`
--
DROP TABLE IF EXISTS `students`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `students`  AS SELECT `student`.`cunyid` AS `cunyid`, `student`.`email` AS `email`, `student_assignment`.`grade` AS `grade`, `student_class`.`classid` AS `classid` FROM ((`student` join `student_assignment` on(`student`.`cunyid` = `student_assignment`.`student_id`)) join `student_class` on(`student_class`.`student_id` = `student`.`cunyid`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`assignment_id`),
  ADD KEY `fk_assignins` (`instructor_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`classid`);

--
-- Indexes for table `class_assignment`
--
ALTER TABLE `class_assignment`
  ADD PRIMARY KEY (`classid`,`assignment_id`),
  ADD KEY `fk_assignmentid` (`assignment_id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`cunyid`);

--
-- Indexes for table `instructor_class`
--
ALTER TABLE `instructor_class`
  ADD PRIMARY KEY (`classid`,`instructor_cunyid`),
  ADD KEY `fk_insid_class` (`instructor_cunyid`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `stu_id` (`student_id`),
  ADD KEY `ins_id` (`instructor_id`),
  ADD KEY `cls_id` (`class_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`cunyid`);

--
-- Indexes for table `student_assignment`
--
ALTER TABLE `student_assignment`
  ADD PRIMARY KEY (`student_id`,`assignment_id`),
  ADD KEY `fk_assign_assign` (`assignment_id`);

--
-- Indexes for table `student_class`
--
ALTER TABLE `student_class`
  ADD PRIMARY KEY (`classid`,`student_id`),
  ADD KEY `fk_class_stu` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `assignment_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1016;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignment`
--
ALTER TABLE `assignment`
  ADD CONSTRAINT `fk_assignins` FOREIGN KEY (`instructor_id`) REFERENCES `instructor` (`cunyid`);

--
-- Constraints for table `class_assignment`
--
ALTER TABLE `class_assignment`
  ADD CONSTRAINT `fk_assignmentid` FOREIGN KEY (`assignment_id`) REFERENCES `assignment` (`assignment_id`),
  ADD CONSTRAINT `fk_classid` FOREIGN KEY (`classid`) REFERENCES `class` (`classid`);

--
-- Constraints for table `instructor_class`
--
ALTER TABLE `instructor_class`
  ADD CONSTRAINT `fk_classid_ins` FOREIGN KEY (`classid`) REFERENCES `class` (`classid`),
  ADD CONSTRAINT `fk_insid_class` FOREIGN KEY (`instructor_cunyid`) REFERENCES `instructor` (`cunyid`);

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `admin_id` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `cls_id` FOREIGN KEY (`class_id`) REFERENCES `class` (`classid`),
  ADD CONSTRAINT `ins_id` FOREIGN KEY (`instructor_id`) REFERENCES `instructor` (`cunyid`),
  ADD CONSTRAINT `stu_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`cunyid`);

--
-- Constraints for table `student_assignment`
--
ALTER TABLE `student_assignment`
  ADD CONSTRAINT `fk_assign_assign` FOREIGN KEY (`assignment_id`) REFERENCES `assignment` (`assignment_id`),
  ADD CONSTRAINT `fk_stu_assign` FOREIGN KEY (`student_id`) REFERENCES `student` (`cunyid`);

--
-- Constraints for table `student_class`
--
ALTER TABLE `student_class`
  ADD CONSTRAINT `fk_class_stu` FOREIGN KEY (`student_id`) REFERENCES `student` (`cunyid`),
  ADD CONSTRAINT `fk_stuid_class` FOREIGN KEY (`classid`) REFERENCES `class` (`classid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
