#
# TABLE STRUCTURE FOR: country
#

DROP TABLE IF EXISTS `country`;

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `iso_code_2` varchar(2) NOT NULL,
  `iso_code_3` varchar(3) NOT NULL,
  `address_format` text NOT NULL,
  `postcode_required` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`country_id`)
) ENGINE=MyISAM AUTO_INCREMENT=258 DEFAULT CHARSET=utf8;

INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (1, 'Afghanistan', 'AF', 'AFG', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (2, 'Albania', 'AL', 'ALB', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (3, 'Algeria', 'DZ', 'DZA', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (4, 'American Samoa', 'AS', 'ASM', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (5, 'Andorra', 'AD', 'AND', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (6, 'Angola', 'AO', 'AGO', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (7, 'Anguilla', 'AI', 'AIA', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (8, 'Antarctica', 'AQ', 'ATA', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (9, 'Antigua and Barbuda', 'AG', 'ATG', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (10, 'Argentina', 'AR', 'ARG', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (11, 'Armenia', 'AM', 'ARM', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (12, 'Aruba', 'AW', 'ABW', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (13, 'Australia', 'AU', 'AUS', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (14, 'Austria', 'AT', 'AUT', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (15, 'Azerbaijan', 'AZ', 'AZE', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (16, 'Bahamas', 'BS', 'BHS', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (17, 'Bahrain', 'BH', 'BHR', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (18, 'Bangladesh', 'BD', 'BGD', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (19, 'Barbados', 'BB', 'BRB', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (20, 'Belarus', 'BY', 'BLR', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (21, 'Belgium', 'BE', 'BEL', '{firstname} {lastname}\r\n{company}\r\n{address_1}\r\n{address_2}\r\n{postcode} {city}\r\n{country}', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (22, 'Belize', 'BZ', 'BLZ', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (23, 'Benin', 'BJ', 'BEN', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (24, 'Bermuda', 'BM', 'BMU', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (25, 'Bhutan', 'BT', 'BTN', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (26, 'Bolivia', 'BO', 'BOL', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (27, 'Bosnia and Herzegovina', 'BA', 'BIH', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (28, 'Botswana', 'BW', 'BWA', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (29, 'Bouvet Island', 'BV', 'BVT', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (30, 'Brazil', 'BR', 'BRA', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (31, 'British Indian Ocean Territory', 'IO', 'IOT', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (32, 'Brunei Darussalam', 'BN', 'BRN', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (33, 'Bulgaria', 'BG', 'BGR', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (34, 'Burkina Faso', 'BF', 'BFA', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (35, 'Burundi', 'BI', 'BDI', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (36, 'Cambodia', 'KH', 'KHM', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (37, 'Cameroon', 'CM', 'CMR', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (38, 'Canada', 'CA', 'CAN', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (39, 'Cape Verde', 'CV', 'CPV', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (40, 'Cayman Islands', 'KY', 'CYM', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (41, 'Central African Republic', 'CF', 'CAF', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (42, 'Chad', 'TD', 'TCD', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (43, 'Chile', 'CL', 'CHL', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (44, 'China', 'CN', 'CHN', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (45, 'Christmas Island', 'CX', 'CXR', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (46, 'Cocos (Keeling) Islands', 'CC', 'CCK', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (47, 'Colombia', 'CO', 'COL', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (48, 'Comoros', 'KM', 'COM', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (49, 'Congo', 'CG', 'COG', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (50, 'Cook Islands', 'CK', 'COK', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (51, 'Costa Rica', 'CR', 'CRI', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (52, 'Cote D\'Ivoire', 'CI', 'CIV', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (53, 'Croatia', 'HR', 'HRV', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (54, 'Cuba', 'CU', 'CUB', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (55, 'Cyprus', 'CY', 'CYP', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (56, 'Czech Republic', 'CZ', 'CZE', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (57, 'Denmark', 'DK', 'DNK', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (58, 'Djibouti', 'DJ', 'DJI', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (59, 'Dominica', 'DM', 'DMA', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (60, 'Dominican Republic', 'DO', 'DOM', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (61, 'East Timor', 'TL', 'TLS', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (62, 'Ecuador', 'EC', 'ECU', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (63, 'Egypt', 'EG', 'EGY', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (64, 'El Salvador', 'SV', 'SLV', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (65, 'Equatorial Guinea', 'GQ', 'GNQ', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (66, 'Eritrea', 'ER', 'ERI', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (67, 'Estonia', 'EE', 'EST', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (68, 'Ethiopia', 'ET', 'ETH', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (69, 'Falkland Islands (Malvinas)', 'FK', 'FLK', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (70, 'Faroe Islands', 'FO', 'FRO', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (71, 'Fiji', 'FJ', 'FJI', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (72, 'Finland', 'FI', 'FIN', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (74, 'France, Metropolitan', 'FR', 'FRA', '{firstname} {lastname}\r\n{company}\r\n{address_1}\r\n{address_2}\r\n{postcode} {city}\r\n{country}', 1, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (75, 'French Guiana', 'GF', 'GUF', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (76, 'French Polynesia', 'PF', 'PYF', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (77, 'French Southern Territories', 'TF', 'ATF', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (78, 'Gabon', 'GA', 'GAB', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (79, 'Gambia', 'GM', 'GMB', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (80, 'Georgia', 'GE', 'GEO', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (81, 'Germany', 'DE', 'DEU', '{company}\r\n{firstname} {lastname}\r\n{address_1}\r\n{address_2}\r\n{postcode} {city}\r\n{country}', 1, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (82, 'Ghana', 'GH', 'GHA', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (83, 'Gibraltar', 'GI', 'GIB', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (84, 'Greece', 'GR', 'GRC', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (85, 'Greenland', 'GL', 'GRL', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (86, 'Grenada', 'GD', 'GRD', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (87, 'Guadeloupe', 'GP', 'GLP', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (88, 'Guam', 'GU', 'GUM', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (89, 'Guatemala', 'GT', 'GTM', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (90, 'Guinea', 'GN', 'GIN', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (91, 'Guinea-Bissau', 'GW', 'GNB', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (92, 'Guyana', 'GY', 'GUY', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (93, 'Haiti', 'HT', 'HTI', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (94, 'Heard and Mc Donald Islands', 'HM', 'HMD', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (95, 'Honduras', 'HN', 'HND', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (96, 'Hong Kong', 'HK', 'HKG', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (97, 'Hungary', 'HU', 'HUN', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (98, 'Iceland', 'IS', 'ISL', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (99, 'India', 'IN', 'IND', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (100, 'Indonesia', 'ID', 'IDN', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (101, 'Iran (Islamic Republic of)', 'IR', 'IRN', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (102, 'Iraq', 'IQ', 'IRQ', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (103, 'Ireland', 'IE', 'IRL', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (104, 'Israel', 'IL', 'ISR', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (105, 'Italy', 'IT', 'ITA', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (106, 'Jamaica', 'JM', 'JAM', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (107, 'Japan', 'JP', 'JPN', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (108, 'Jordan', 'JO', 'JOR', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (109, 'Kazakhstan', 'KZ', 'KAZ', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (110, 'Kenya', 'KE', 'KEN', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (111, 'Kiribati', 'KI', 'KIR', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (112, 'North Korea', 'KP', 'PRK', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (113, 'South Korea', 'KR', 'KOR', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (114, 'Kuwait', 'KW', 'KWT', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (115, 'Kyrgyzstan', 'KG', 'KGZ', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (116, 'Lao People\'s Democratic Republic', 'LA', 'LAO', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (117, 'Latvia', 'LV', 'LVA', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (118, 'Lebanon', 'LB', 'LBN', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (119, 'Lesotho', 'LS', 'LSO', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (120, 'Liberia', 'LR', 'LBR', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (121, 'Libyan Arab Jamahiriya', 'LY', 'LBY', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (122, 'Liechtenstein', 'LI', 'LIE', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (123, 'Lithuania', 'LT', 'LTU', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (124, 'Luxembourg', 'LU', 'LUX', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (125, 'Macau', 'MO', 'MAC', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (126, 'FYROM', 'MK', 'MKD', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (127, 'Madagascar', 'MG', 'MDG', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (128, 'Malawi', 'MW', 'MWI', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (129, 'Malaysia', 'MY', 'MYS', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (130, 'Maldives', 'MV', 'MDV', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (131, 'Mali', 'ML', 'MLI', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (132, 'Malta', 'MT', 'MLT', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (133, 'Marshall Islands', 'MH', 'MHL', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (134, 'Martinique', 'MQ', 'MTQ', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (135, 'Mauritania', 'MR', 'MRT', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (136, 'Mauritius', 'MU', 'MUS', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (137, 'Mayotte', 'YT', 'MYT', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (138, 'Mexico', 'MX', 'MEX', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (139, 'Micronesia, Federated States of', 'FM', 'FSM', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (140, 'Moldova, Republic of', 'MD', 'MDA', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (141, 'Monaco', 'MC', 'MCO', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (142, 'Mongolia', 'MN', 'MNG', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (143, 'Montserrat', 'MS', 'MSR', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (144, 'Morocco', 'MA', 'MAR', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (145, 'Mozambique', 'MZ', 'MOZ', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (146, 'Myanmar', 'MM', 'MMR', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (147, 'Namibia', 'NA', 'NAM', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (148, 'Nauru', 'NR', 'NRU', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (149, 'Nepal', 'NP', 'NPL', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (150, 'Netherlands', 'NL', 'NLD', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (151, 'Netherlands Antilles', 'AN', 'ANT', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (152, 'New Caledonia', 'NC', 'NCL', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (153, 'New Zealand', 'NZ', 'NZL', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (154, 'Nicaragua', 'NI', 'NIC', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (155, 'Niger', 'NE', 'NER', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (156, 'Nigeria', 'NG', 'NGA', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (157, 'Niue', 'NU', 'NIU', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (158, 'Norfolk Island', 'NF', 'NFK', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (159, 'Northern Mariana Islands', 'MP', 'MNP', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (160, 'Norway', 'NO', 'NOR', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (161, 'Oman', 'OM', 'OMN', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (162, 'Pakistan', 'PK', 'PAK', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (163, 'Palau', 'PW', 'PLW', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (164, 'Panama', 'PA', 'PAN', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (165, 'Papua New Guinea', 'PG', 'PNG', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (166, 'Paraguay', 'PY', 'PRY', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (167, 'Peru', 'PE', 'PER', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (168, 'Philippines', 'PH', 'PHL', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (169, 'Pitcairn', 'PN', 'PCN', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (170, 'Poland', 'PL', 'POL', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (171, 'Portugal', 'PT', 'PRT', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (172, 'Puerto Rico', 'PR', 'PRI', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (173, 'Qatar', 'QA', 'QAT', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (174, 'Reunion', 'RE', 'REU', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (175, 'Romania', 'RO', 'ROM', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (176, 'Russian Federation', 'RU', 'RUS', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (177, 'Rwanda', 'RW', 'RWA', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (178, 'Saint Kitts and Nevis', 'KN', 'KNA', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (179, 'Saint Lucia', 'LC', 'LCA', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (180, 'Saint Vincent and the Grenadines', 'VC', 'VCT', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (181, 'Samoa', 'WS', 'WSM', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (182, 'San Marino', 'SM', 'SMR', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (183, 'Sao Tome and Principe', 'ST', 'STP', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (184, 'Saudi Arabia', 'SA', 'SAU', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (185, 'Senegal', 'SN', 'SEN', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (186, 'Seychelles', 'SC', 'SYC', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (187, 'Sierra Leone', 'SL', 'SLE', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (188, 'Singapore', 'SG', 'SGP', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (189, 'Slovak Republic', 'SK', 'SVK', '{firstname} {lastname}\r\n{company}\r\n{address_1}\r\n{address_2}\r\n{city} {postcode}\r\n{zone}\r\n{country}', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (190, 'Slovenia', 'SI', 'SVN', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (191, 'Solomon Islands', 'SB', 'SLB', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (192, 'Somalia', 'SO', 'SOM', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (193, 'South Africa', 'ZA', 'ZAF', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (194, 'South Georgia &amp; South Sandwich Islands', 'GS', 'SGS', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (195, 'Spain', 'ES', 'ESP', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (196, 'Sri Lanka', 'LK', 'LKA', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (197, 'St. Helena', 'SH', 'SHN', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (198, 'St. Pierre and Miquelon', 'PM', 'SPM', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (199, 'Sudan', 'SD', 'SDN', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (200, 'Suriname', 'SR', 'SUR', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (201, 'Svalbard and Jan Mayen Islands', 'SJ', 'SJM', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (202, 'Swaziland', 'SZ', 'SWZ', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (203, 'Sweden', 'SE', 'SWE', '{company}\r\n{firstname} {lastname}\r\n{address_1}\r\n{address_2}\r\n{postcode} {city}\r\n{country}', 1, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (204, 'Switzerland', 'CH', 'CHE', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (205, 'Syrian Arab Republic', 'SY', 'SYR', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (206, 'Taiwan', 'TW', 'TWN', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (207, 'Tajikistan', 'TJ', 'TJK', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (208, 'Tanzania, United Republic of', 'TZ', 'TZA', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (209, 'Thailand', 'TH', 'THA', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (210, 'Togo', 'TG', 'TGO', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (211, 'Tokelau', 'TK', 'TKL', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (212, 'Tonga', 'TO', 'TON', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (213, 'Trinidad and Tobago', 'TT', 'TTO', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (214, 'Tunisia', 'TN', 'TUN', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (215, 'Turkey', 'TR', 'TUR', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (216, 'Turkmenistan', 'TM', 'TKM', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (217, 'Turks and Caicos Islands', 'TC', 'TCA', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (218, 'Tuvalu', 'TV', 'TUV', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (219, 'Uganda', 'UG', 'UGA', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (220, 'Ukraine', 'UA', 'UKR', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (221, 'United Arab Emirates', 'AE', 'ARE', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (222, 'United Kingdom', 'GB', 'GBR', '', 1, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (223, 'United States', 'US', 'USA', '{firstname} {lastname}\r\n{company}\r\n{address_1}\r\n{address_2}\r\n{city}, {zone} {postcode}\r\n{country}', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (224, 'United States Minor Outlying Islands', 'UM', 'UMI', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (225, 'Uruguay', 'UY', 'URY', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (226, 'Uzbekistan', 'UZ', 'UZB', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (227, 'Vanuatu', 'VU', 'VUT', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (228, 'Vatican City State (Holy See)', 'VA', 'VAT', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (229, 'Venezuela', 'VE', 'VEN', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (230, 'Viet Nam', 'VN', 'VNM', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (231, 'Virgin Islands (British)', 'VG', 'VGB', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (232, 'Virgin Islands (U.S.)', 'VI', 'VIR', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (233, 'Wallis and Futuna Islands', 'WF', 'WLF', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (234, 'Western Sahara', 'EH', 'ESH', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (235, 'Yemen', 'YE', 'YEM', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (237, 'Democratic Republic of Congo', 'CD', 'COD', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (238, 'Zambia', 'ZM', 'ZMB', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (239, 'Zimbabwe', 'ZW', 'ZWE', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (242, 'Montenegro', 'ME', 'MNE', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (243, 'Serbia', 'RS', 'SRB', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (244, 'Aaland Islands', 'AX', 'ALA', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (245, 'Bonaire, Sint Eustatius and Saba', 'BQ', 'BES', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (246, 'Curacao', 'CW', 'CUW', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (247, 'Palestinian Territory, Occupied', 'PS', 'PSE', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (248, 'South Sudan', 'SS', 'SSD', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (249, 'St. Barthelemy', 'BL', 'BLM', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (250, 'St. Martin (French part)', 'MF', 'MAF', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (251, 'Canary Islands', 'IC', 'ICA', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (252, 'Ascension Island (British)', 'AC', 'ASC', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (253, 'Kosovo, Republic of', 'XK', 'UNK', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (254, 'Isle of Man', 'IM', 'IMN', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (255, 'Tristan da Cunha', 'TA', 'SHN', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (256, 'Guernsey', 'GG', 'GGY', '', 0, 1);
INSERT INTO `country` (`country_id`, `name`, `iso_code_2`, `iso_code_3`, `address_format`, `postcode_required`, `status`) VALUES (257, 'Jersey', 'JE', 'JEY', '', 0, 1);


#
# TABLE STRUCTURE FOR: home
#

DROP TABLE IF EXISTS `home`;

CREATE TABLE `home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `about_me` text NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL,
  `whatsapp` varchar(250) NOT NULL,
  `github` varchar(250) NOT NULL,
  `youtube` varchar(250) NOT NULL,
  `instagram` varchar(250) NOT NULL,
  `behance` varchar(250) NOT NULL,
  `dribbble` varchar(250) NOT NULL,
  `fiverr` varchar(250) NOT NULL,
  `upwork` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `home` (`id`, `user_id`, `title`, `about_me`, `facebook`, `twitter`, `whatsapp`, `github`, `youtube`, `instagram`, `behance`, `dribbble`, `fiverr`, `upwork`, `created_at`) VALUES (1, 1, 'Hi, I am Devid Chester', 'I am a frontend web developer. I can provide clean code and pixel perfect design. I also make website more & more interactive with web animations.', 'facebook.com', 'twitter.com', 'whatsapp.com', 'github.com', '', 'instagram.com', '', '', '', '', '2019-12-07 21:17:14');
INSERT INTO `home` (`id`, `user_id`, `title`, `about_me`, `facebook`, `twitter`, `whatsapp`, `github`, `youtube`, `instagram`, `behance`, `dribbble`, `fiverr`, `upwork`, `created_at`) VALUES (2, 2, 'Hi, I am User', 'I am a frontend web developer. I can provide clean code and pixel perfect design. I also make website more & more interactive with web animations.', 'facebook.com/user', '', '', '', '', '', '', '', '', '', '2019-12-04 12:29:19');


#
# TABLE STRUCTURE FOR: portfolio
#

DROP TABLE IF EXISTS `portfolio`;

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `thumb` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `portfolio` (`id`, `user_id`, `type_id`, `image`, `thumb`, `title`, `link`, `status`, `created_at`) VALUES (1, 1, 1, 'uploads/portfolio/00a528c0f1a8c5a266495b71783ee295.jpg', 'uploads/portfolio/thumb/00a528c0f1a8c5a266495b71783ee295.jpg', 'Boat', '#', 1, '2019-12-07 17:50:39');
INSERT INTO `portfolio` (`id`, `user_id`, `type_id`, `image`, `thumb`, `title`, `link`, `status`, `created_at`) VALUES (2, 1, 1, 'uploads/portfolio/497e32aed7dbe8a0f351d1098320918b.jpg', 'uploads/portfolio/thumb/497e32aed7dbe8a0f351d1098320918b.jpg', 'Flower', '#', 1, '2019-12-07 17:50:39');
INSERT INTO `portfolio` (`id`, `user_id`, `type_id`, `image`, `thumb`, `title`, `link`, `status`, `created_at`) VALUES (3, 1, 1, 'uploads/portfolio/6ef6ad47151afb2322ff5b9b01137604.jpg', 'uploads/portfolio/thumb/6ef6ad47151afb2322ff5b9b01137604.jpg', 'Crow', '#', 1, '2019-12-07 17:50:39');


#
# TABLE STRUCTURE FOR: portfolio_type
#

DROP TABLE IF EXISTS `portfolio_type`;

CREATE TABLE `portfolio_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `portfolio_type` (`id`, `user_id`, `name`, `status`, `created_at`) VALUES (1, 1, 'Web Design', 1, '2019-12-07 11:29:37');


#
# TABLE STRUCTURE FOR: resume
#

DROP TABLE IF EXISTS `resume`;

CREATE TABLE `resume` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `designation` varchar(250) NOT NULL,
  `details` text NOT NULL,
  `start_year` int(4) NOT NULL,
  `end_year` int(4) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `resume` (`id`, `user_id`, `type_id`, `title`, `designation`, `details`, `start_year`, `end_year`, `status`, `created_at`) VALUES (1, 1, 1, 'SSC', 'Rajibpur High school', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, magni mollitia, aspernatur consequatur accusamus vero eum facere exercitationem velit suscipit ipsam placeat libero. Deleniti exercitationem nostrum quasi. Molestiae, vel porro.', 2007, 2008, 1, '2019-12-07 10:55:38');
INSERT INTO `resume` (`id`, `user_id`, `type_id`, `title`, `designation`, `details`, `start_year`, `end_year`, `status`, `created_at`) VALUES (2, 1, 1, 'HSC', 'Dhaka Cant Public', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, magni mollitia, aspernatur consequatur accusamus vero eum facere exercitationem velit suscipit ipsam placeat libero. Deleniti exercitationem nostrum quasi. Molestiae, vel porro.', 2008, 2009, 1, '2019-12-07 10:50:11');
INSERT INTO `resume` (`id`, `user_id`, `type_id`, `title`, `designation`, `details`, `start_year`, `end_year`, `status`, `created_at`) VALUES (3, 1, 1, 'BSC', 'Southeast University', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, magni mollitia, aspernatur consequatur accusamus vero eum facere exercitationem velit suscipit ipsam placeat libero. Deleniti exercitationem nostrum quasi. Molestiae, vel porro.', 2012, 2016, 1, '2019-12-07 10:50:53');
INSERT INTO `resume` (`id`, `user_id`, `type_id`, `title`, `designation`, `details`, `start_year`, `end_year`, `status`, `created_at`) VALUES (4, 1, 2, 'RamesITech', 'Web Developer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem tenetur ratione quod.', 2017, 2018, 1, '2019-12-07 21:30:24');
INSERT INTO `resume` (`id`, `user_id`, `type_id`, `title`, `designation`, `details`, `start_year`, `end_year`, `status`, `created_at`) VALUES (5, 1, 2, 'SristiWeb.com', 'Web Developer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem tenetur ratione quod.', 2018, 0, 1, '2019-12-07 21:30:56');


#
# TABLE STRUCTURE FOR: resume_type
#

DROP TABLE IF EXISTS `resume_type`;

CREATE TABLE `resume_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `icon` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `resume_type` (`id`, `user_id`, `type_name`, `icon`, `status`, `created_at`) VALUES (1, 1, 'Education', '<i class=\"fa fa-book\"></i>', 1, '2019-12-05 12:36:28');
INSERT INTO `resume_type` (`id`, `user_id`, `type_name`, `icon`, `status`, `created_at`) VALUES (2, 1, 'Job Experience', '<i class=\"fa fa-briefcase\"></i>', 1, '2019-12-05 17:20:58');


#
# TABLE STRUCTURE FOR: reviews
#

DROP TABLE IF EXISTS `reviews`;

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `images` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `reviews` (`id`, `user_id`, `name`, `designation`, `comments`, `images`, `status`, `created_at`) VALUES (1, 1, 'Mr. Alex', 'Web Developer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem tenetur ratione quod.Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem tenetur ratione quod.', 'uploads/reviews/44c7da176d399c46ad127b2e82abd8e2.png', 1, '2019-12-05 11:34:31');
INSERT INTO `reviews` (`id`, `user_id`, `name`, `designation`, `comments`, `images`, `status`, `created_at`) VALUES (2, 1, 'Mr. Smith', 'Client', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem tenetur ratione quod.', '', 1, '2019-12-07 21:27:27');
INSERT INTO `reviews` (`id`, `user_id`, `name`, `designation`, `comments`, `images`, `status`, `created_at`) VALUES (3, 1, 'Miss Arenda', 'Client', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem tenetur ratione quod.', 'uploads/reviews/455426051541f373023b1ecdb23c0559.png', 1, '2019-12-07 21:28:11');


#
# TABLE STRUCTURE FOR: services
#

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `images` varchar(200) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `services` (`id`, `user_id`, `title`, `images`, `icon`, `details`, `status`, `created_at`) VALUES (1, 1, 'Web development', 'uploads/services/45009702017d4d069c84fc0d1e099d0e.png', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem tenetur ratione quod.', 1, '2019-12-05 11:22:33');
INSERT INTO `services` (`id`, `user_id`, `title`, `images`, `icon`, `details`, `status`, `created_at`) VALUES (2, 1, 'Web Design', '', '<i class=\"fa fa-code\"></i>', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem tenetur ratione quod.', 1, '2019-12-04 18:03:06');
INSERT INTO `services` (`id`, `user_id`, `title`, `images`, `icon`, `details`, `status`, `created_at`) VALUES (3, 1, 'React js', '0732a5297e72404733dba46d376dc10f.png', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem tenetur ratione quod.', 1, '2019-12-07 21:26:31');


#
# TABLE STRUCTURE FOR: setting
#

DROP TABLE IF EXISTS `setting`;

CREATE TABLE `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `approve_option` int(11) NOT NULL,
  `registration_option` tinyint(11) NOT NULL DEFAULT 1,
  `email` varchar(255) NOT NULL,
  `site_name` varchar(250) CHARACTER SET latin1 NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `post_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `setting` (`id`, `approve_option`, `registration_option`, `email`, `site_name`, `favicon`, `post_time`) VALUES (1, 0, 1, 'admin@gmail.com', 'Portfolio', 'uploads/site_images/cd10cb63e9330a124019a2bb8d897b54.jpg', '2019-12-03 12:55:30');


#
# TABLE STRUCTURE FOR: skills
#

DROP TABLE IF EXISTS `skills`;

CREATE TABLE `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `level` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `skills` (`id`, `user_id`, `title`, `level`, `status`, `created_at`) VALUES (1, 1, 'HTML', '95', 1, '2019-12-04 12:37:39');
INSERT INTO `skills` (`id`, `user_id`, `title`, `level`, `status`, `created_at`) VALUES (2, 1, 'PHP', '80', 1, '2019-12-04 13:00:51');
INSERT INTO `skills` (`id`, `user_id`, `title`, `level`, `status`, `created_at`) VALUES (3, 2, 'HTML', '90', 1, '2019-12-04 13:13:57');
INSERT INTO `skills` (`id`, `user_id`, `title`, `level`, `status`, `created_at`) VALUES (4, 1, 'REACTJS', '40', 1, '2019-12-07 21:28:57');
INSERT INTO `skills` (`id`, `user_id`, `title`, `level`, `status`, `created_at`) VALUES (5, 1, 'Jquery', '80', 1, '2019-12-07 21:29:17');


#
# TABLE STRUCTURE FOR: social_sites
#

DROP TABLE IF EXISTS `social_sites`;

CREATE TABLE `social_sites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO `social_sites` (`id`, `name`, `icon`, `status`, `created_at`) VALUES (1, 'facebook', '<i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>', 1, '2019-12-03 16:26:13');
INSERT INTO `social_sites` (`id`, `name`, `icon`, `status`, `created_at`) VALUES (2, 'twitter', '<i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>', 1, '2019-12-03 16:30:07');
INSERT INTO `social_sites` (`id`, `name`, `icon`, `status`, `created_at`) VALUES (3, 'instagram', '<i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>', 1, '2019-12-03 16:31:10');
INSERT INTO `social_sites` (`id`, `name`, `icon`, `status`, `created_at`) VALUES (4, 'github', '<i class=\"fa fa-github\" aria-hidden=\"true\"></i>', 1, '2019-12-03 16:31:46');
INSERT INTO `social_sites` (`id`, `name`, `icon`, `status`, `created_at`) VALUES (5, 'youtube', '<i class=\"fa fa-youtube\" aria-hidden=\"true\"></i>', 1, '2019-12-03 16:32:02');
INSERT INTO `social_sites` (`id`, `name`, `icon`, `status`, `created_at`) VALUES (6, 'whatsapp', '<i class=\"fa fa-whatsapp\" aria-hidden=\"true\"></i>', 1, '2019-12-03 16:32:49');
INSERT INTO `social_sites` (`id`, `name`, `icon`, `status`, `created_at`) VALUES (7, 'behance', '<i class=\"fa fa-behance\" aria-hidden=\"true\"></i>', 1, '2019-12-03 16:33:19');
INSERT INTO `social_sites` (`id`, `name`, `icon`, `status`, `created_at`) VALUES (8, 'dribbble', '<i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i>', 1, '2019-12-03 16:34:32');
INSERT INTO `social_sites` (`id`, `name`, `icon`, `status`, `created_at`) VALUES (9, 'fiverr', '<i class=\"fa fa-times-circle\" aria-hidden=\"true\"></i>', 1, '2019-12-03 16:35:38');
INSERT INTO `social_sites` (`id`, `name`, `icon`, `status`, `created_at`) VALUES (10, 'upwork', '<i class=\"fa fa-times-circle\" aria-hidden=\"true\"></i>', 1, '2019-12-03 16:35:48');


#
# TABLE STRUCTURE FOR: users
#

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(30) NOT NULL,
  `country` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `blood_group` int(11) NOT NULL,
  `designation` varchar(250) NOT NULL,
  `website` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `messege` text CHARACTER SET utf8 NOT NULL,
  `login_time` datetime NOT NULL DEFAULT current_timestamp(),
  `post_time` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `country`, `password`, `gender`, `address`, `blood_group`, `designation`, `website`, `user_type`, `is_active`, `messege`, `login_time`, `post_time`) VALUES (1, 'Admin', 'admin@gmail.com', '', 13, 'e10adc3949ba59abbe56e057f20f883e', 'Male', '', 0, 'Web Developer', '', 1, 1, '', '2019-12-08 21:10:17', '2018-08-07 12:49:55');
INSERT INTO `users` (`id`, `username`, `email`, `phone`, `country`, `password`, `gender`, `address`, `blood_group`, `designation`, `website`, `user_type`, `is_active`, `messege`, `login_time`, `post_time`) VALUES (2, 'user', 'user@gmail.com', '', 18, 'e10adc3949ba59abbe56e057f20f883e', 'Male', '', 0, '', '', 0, 1, '', '2019-12-04 12:27:42', '2018-08-07 12:57:13');
INSERT INTO `users` (`id`, `username`, `email`, `phone`, `country`, `password`, `gender`, `address`, `blood_group`, `designation`, `website`, `user_type`, `is_active`, `messege`, `login_time`, `post_time`) VALUES (3, 'Demo1', 'demo1@gmail.com', '', 2, 'e10adc3949ba59abbe56e057f20f883e', 'Male', '', 0, '', '', 0, 0, '', '2018-08-14 15:30:37', '2018-08-14 15:30:37');


