<?php
$result = mysql_query (CREATE TABLE IF NOT EXISTS `recoveryemails_enc` (
  `ID` bigint(20) unsigned zerofill NOT NULL auto_increment,
  `UserID` bigint(20) NOT NULL,
  `Key` varchar(32) NOT NULL,
  `expDate` datetime NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` bigint(20) unsigned zerofill NOT NULL auto_increment,
  `Username` varchar(20) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `secQ` tinyint(4) NOT NULL,
  `secA` varchar(30) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;
INSERT INTO `users` (`ID`, `Username`, `Email`, `Password`, `secQ`, `secA`) VALUES (00000000000000000002, 'jDoe', 'jDoe@gmail.com', 'johnDoe2009', 0, 'Smith'),
(00000000000000000003, 'envato', 'webmaster@envato.com', 'envatouser', 1, 'Sydney'),
(00000000000000000004, 'sToaster', 'toast@yahoo.com', 'toastrules', 3, '2001');
CREATE TABLE IF NOT EXISTS `users_enc` (
  `ID` bigint(20) unsigned zerofill NOT NULL auto_increment,
  `Username` varchar(20) NOT NULL,
  `Password` char(32) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `secQ` tinyint(4) NOT NULL default '0',
  `secA` varchar(32) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;
INSERT INTO `users_enc` (`ID`, `Username`, `Password`, `Email`, `secQ`, `secA`) VALUES (00000000000000000001, 'jDoe', 'fd2ba57673c57ac5a0650c38fe60b648', 'jDoe@gmail.com', 0, 'Smith'),
(00000000000000000002, 'envato', '1ecc663314777c8e3c2328027447f194', 'webmaster@envato.com', 1, 'Sydney'),
(00000000000000000003, 'sToaster', 'e05fd29cbca7ea9add48ba6dafc300e8', 'toast@yahoo.com', 3, '2001');)

or die("dupa");
?>