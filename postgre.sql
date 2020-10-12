Note: The below are structure for importing in PostGRE Database via PGAdmin 

Change the ENV file with postGRE credentials and that is it and just import this database. 



CREATE TABLE users (
  id integer NOT NULL UNIQUE,
  email varchar(191)  NOT NULL,
  password varchar(191)  NOT NULL,
  firstName varchar(191)  NOT NULL,
  lastName varchar(191)  NOT NULL,
  status varchar(1)  DEFAULT 0 NOT NULL,
  remember_token varchar(100)  DEFAULT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  flag INTEGER DEFAULT 0 NOT NULL,
  token varchar(255)  DEFAULT NULL,
  flagMaster INTEGER DEFAULT 0 NOT NULL,
  flagPHD INTEGER DEFAULT 0 NOT NULL
) ;


INSERT INTO users (id, email, password, firstName, lastName, status, remember_token, created_at, updated_at, flag, token, flagMaster, flagPHD) VALUES
(2, 'karimbaidar1@gmail.com', '$2y$10$MaegQWJsWTqr94cOulPoq.WzzSd/yCZQyjlMEunZx7ksmqGQCc0Ry', 'MOHE', 'Administrator', '3', 'HL9qBNHHVKA3ToAAgLHjNRoKZmlNJDoTJui7VZbLyVJOtggwpnirZOEw8huu', '2018-05-25 18:22:37', '2018-08-11 11:13:21', 1, NULL, 0, 0),
(4, 'attest.dept@gmail.com', '$2y$10$MaegQWJsWTqr94cOulPoq.WzzSd/yCZQyjlMEunZx7ksmqGQCc0Ry', 'muhabatullah', 'Attestation', '0', '6AdGgMBo0Avdx8Lbu2BjBu2KqCbyoFbIPr4jgdvnALRBddI5GFrITpVSIsiT', '2018-05-25 18:39:20', '2018-08-11 11:17:20', 0, NULL, 0, 0),
(5, 'tech.committee@mohe.gov.af', '$2y$10$G2vx8q91lGM.F.69v3YZNeS.XnO8z48J4zC1BPUnEyfdBZxUw7XF6', 'abdul', 'TechnicalCommittee', '0', 'tO1OQt7CjsRTHbSdT0HXScKcnKtwOMMVB9S6Lqdi3gtcRhv9uFvHhau6D7H4', '2018-05-26 00:42:47', '2018-05-26 00:45:08', 0, NULL, 0, 0),
(7, 'H.A.commissiion@mohe.gov.af', '$2y$10$MaegQWJsWTqr94cOulPoq.WzzSd/yCZQyjlMEunZx7ksmqGQCc0Ry', 'information', 'HA', '0', 'WyfU89Fhnki0pIK0JbSauoSu0Ke0yoqdxeiunIJt10ql1kMErkdJuucbMMWJ', '2018-05-26 01:09:09', '2018-05-26 01:10:14', 0, NULL, 0, 0),
(8, 'commissiondirector@mohe.gov.af', '$2y$10$MaegQWJsWTqr94cOulPoq.WzzSd/yCZQyjlMEunZx7ksmqGQCc0Ry', 'Commission', 'CommissionDirector', '0', 'uXWLxevxRvKnapwziCCFIdzIDRmWyRVGKKAgJ2vFQEI2VKxwjmsMgYJk1zBf', '2018-05-26 01:33:45', '2018-05-26 01:34:16', 0, NULL, 0, 0),
(9, 'tawabbalakarzai@gmail.com', '$2y$10$FRgCnK6iob9OC16Zw7..4um5G7bBD6JL/Vf1B52/dv2XJZss5fK.S', 'Tawab', 'Balakarzai', '0', '3q4mdX85EllNyBtpS4uAJphl7T297tQe0HyT17hYkUfHovrxoIfotZ76kmo0', '2018-08-11 15:55:38', '2018-08-11 17:06:49', 1, NULL, 0, 0);




CREATE TABLE personal_details (
  id integer NOT NULL UNIQUE,
  reg_no varchar(191)  NOT NULL,
  reg_date date NOT NULL,
  name varchar(191)  NOT NULL,
  surname varchar(191)  DEFAULT NULL,
  father_name varchar(191)  NOT NULL,
  issueingCountry varchar(191)  NOT NULL,
  DiplomaNumber varchar(191)  DEFAULT NULL,
  TranscriptNumber varchar(191)  DEFAULT NULL,
  nic varchar(191)  DEFAULT NULL,
  EDocument varchar(191)  DEFAULT NULL,
  Grade varchar(191)  DEFAULT NULL,
  image varchar(191)  DEFAULT NULL,
  status varchar(191)  NOT NULL DEFAULT 'Pending',
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  pass varchar(255)  NOT NULL DEFAULT 'The Application is with Documents Evaluation Committee for Review',
  typeEducation varchar(255)  NOT NULL,
  rejection text ,
  userid INTEGER DEFAULT 0 NOT NULL,
  rejectionFlag INTEGER DEFAULT 0 NOT NULL,
  GPA varchar(191)  DEFAULT NULL,
  approvechecklist varchar(191)  DEFAULT 'No',
  approvechecklist1 varchar(191)  NOT NULL DEFAULT 'No',
  approvechecklist2 varchar(191)  NOT NULL DEFAULT 'No',
  submitted varchar(255)  NOT NULL DEFAULT 'false',
  edited INTEGER DEFAULT 0 NOT NULL,
  nondocument text ,
  nondocumentflag INTEGER DEFAULT 0 NOT NULL,
  typeScholarship varchar(255)  NOT NULL,
  UniID varchar(255)  DEFAULT NULL,
  RollNum varchar(255)  DEFAULT NULL,
  PersonalCellPhone varchar(255)  DEFAULT NULL,
  StudyDuration varchar(255)  NOT NULL,
  PAddress varchar(255)  DEFAULT NULL,
  CAddress varchar(255)  DEFAULT NULL,
  FEducation varchar(255)  NOT NULL,
  PersonalEmail varchar(255)  NOT NULL,
  EducationLevel varchar(255)  NOT NULL,
  Pbirth varchar(255)  DEFAULT NULL,
  dob varchar(255)  DEFAULT NULL,
  GYear varchar(255)  DEFAULT NULL,
  AYear varchar(255)  DEFAULT NULL,
  degree varchar(255)  DEFAULT NULL,
  from_date varchar(255)  DEFAULT NULL,
  to_date varchar(255)  DEFAULT NULL,
  university varchar(255)  DEFAULT NULL,
  address varchar(255)  DEFAULT NULL,
  contact varchar(255)  DEFAULT NULL,
  file_name varchar(255)  DEFAULT NULL,
  timeDuration timestamp NULL DEFAULT NULL,
  shamsi varchar(255)  DEFAULT NULL,
  thesistitle varchar(255)  DEFAULT NULL,
  details text ,
  edited1 INTEGER DEFAULT NULL,
  PersonalPhon2 varchar(255)  DEFAULT NULL,
  PersonalEmail2 varchar(255)  DEFAULT NULL
) ;





CREATE TABLE universities (
  id integer NOT NULL UNIQUE,
  code varchar(191)  NOT NULL,
  name varchar(191)  NOT NULL,
  type varchar(191)  NOT NULL,
  Blacklisted varchar(255)  DEFAULT NULL,
  created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  updated_at timestamp NOT NULL DEFAULT '2018-10-02 10:59:15'
) ;



INSERT INTO universities (id, code, name, type, Blacklisted, created_at, updated_at) VALUES
(1, 'AE', 'Abu Dhabi University', 'http://www.adu.ac.ae/', NULL, '2018-10-02 10:59:15', '2018-10-02 10:59:15'),
(2, 'AE', 'Ajman University of Science & Technology', 'http://www.ajman.ac.ae/', NULL, '2018-10-02 10:59:15', '2018-10-02 10:59:15'),
(3, 'AE', 'Alain University of Science and Technology', 'http://www.alainuniversity.ac.ae/', NULL, '2018-10-02 10:59:15', '2018-10-02 10:59:15'),
(4, 'AE', 'Al Ghurair University', 'http://www.agu.ae/', NULL, '2018-10-02 10:59:15', '2018-10-02 10:59:15'),
(5, 'AE', 'Alhosn University', 'http://www.alhosnu.ae/', NULL, '2018-10-02 10:59:15', '2018-10-02 10:59:15'),
(6, 'AE', 'Al Khawarizmi International College', 'http://www.khawarizmi.com/', NULL, '2018-10-02 10:59:15', '2018-10-02 10:59:15'),
(7, 'AE', 'American College Of Dubai', 'http://www.acd.ac.ae/', NULL, '2018-10-02 10:59:15', '2018-10-02 10:59:15'),
(8, 'AE', 'American University in Dubai', 'http://www.aud.edu/', NULL, '2018-10-02 10:59:15', '2018-10-02 10:59:15'),
(9, 'AE', 'American University in the Emirates', 'http://www.aue.ae/', NULL, '2018-10-02 10:59:15', '2018-10-02 10:59:15'),
(10, 'AE', 'American University of Sharjah', 'http://www.aus.edu/', NULL, '2018-10-02 10:59:15', '2018-10-02 10:59:15'),
(11, 'AE', 'British University in Dubai', 'http://www.buid.ac.ae/', NULL, '2018-10-02 10:59:15', '2018-10-02 10:59:15'),
(12, 'AE', 'Dubai Medical College for Girls', 'http://www.dmcg.edu/', NULL, '2018-10-02 10:59:15', '2018-10-02 10:59:15'),
(13, 'AE', 'Dubai Pharmacy College', 'http://www.dpc.edu/', NULL, '2018-10-02 10:59:15', '2018-10-02 10:59:15'),
(14, 'AE', 'Etisalat University College', 'http://www.ece.ac.ae/', NULL, '2018-10-02 10:59:15', '2018-10-02 10:59:15'),
(15, 'AE', 'Gulf Medical University', 'http://www.gmu.ac.ae/', NULL, '2018-10-02 10:59:15', '2018-10-02 10:59:15'),
(16, 'AE', 'Hamdan Bin Mohammed e-University', 'http://www.hbmeu.ac.ae/', NULL, '2018-10-02 10:59:15', '2018-10-02 10:59:15'),
(17, 'AE', 'Higher Colleges of Technology', 'http://www.hct.ac.ae/', NULL, '2018-10-02 10:59:15', '2018-10-02 10:59:15'),
(18, 'AE', 'Ittihad University', 'http://www.ittihad.ac.ae/', NULL, '2018-10-02 10:59:15', '2018-10-02 10:59:15'),
(19, 'AE', 'Jumeira University', 'http://www.ju.ac.ae/', NULL, '2018-10-02 10:59:15', '2018-10-02 10:59:15'),
(20, 'AE', 'Khalifa University', 'http://www.kustar.ac.ae/', NULL, '2018-10-02 10:59:15', '2018-10-02 10:59:15'),
(21, 'AE', 'Khalifa University of Science, Technology and Research', 'http://www.ku.ac.ae/', NULL, '2018-10-02 10:59:15', '2018-10-02 10:59:15'),
(22, 'AE', 'Masdar University Of Science And Technology', 'http://www.masdar.ac.ae/', NULL, '2018-10-02 10:59:15', '2018-10-02 10:59:15'),
(23, 'AE', 'New York University, Abu Dhabi', 'http://nyuad.nyu.edu/', NULL, '2018-10-02 10:59:15', '2018-10-02 10:59:15'),
(24, 'AE', 'Paris-Sorbonne University Abu Dhabi', 'http://www.sorbonne.ae/', NULL, '2018-10-02 10:59:15', '2018-10-02 10:59:15');