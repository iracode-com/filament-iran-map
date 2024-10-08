<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    public function run() : void
    {

        DB::statement("INSERT INTO `ar_countries` (`id`, `fips`, `iso`, `domain`, `fa_name`, `en_name`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`, `deleted_at`) VALUES
(1, 'AA', 'AW', '.aw', 'آروبا', 'Aruba', 1, NULL, NULL, NULL, NULL, NULL),
(2, 'AC', 'AG', '.ag', 'آنتیگوا و باربودا', 'Antigua and Barbuda', 1, NULL, '2024-04-27 08:20:19', NULL, NULL, NULL),
(3, 'AE', 'AE', '.ae', 'امارات متحده عربی', 'United Arab Emirates', 1, NULL, NULL, NULL, NULL, NULL),
(4, 'AF', 'AF', '.af', 'افغانستان', 'Afghanistan', 1, NULL, NULL, NULL, NULL, NULL),
(5, 'AG', 'DZ', '.dz', 'الجزایر', 'Algeria', 1, NULL, NULL, NULL, NULL, NULL),
(6, 'AJ', 'AZ', '.az', 'آذربایجان', 'Azerbaijan', 1, NULL, NULL, NULL, NULL, NULL),
(7, 'AL', 'AL', '.al', 'آلبانی', 'Albania', 1, NULL, NULL, NULL, NULL, NULL),
(8, 'AM', 'AM', '.am', 'ارمنستان', 'Armenia', 1, NULL, NULL, NULL, NULL, NULL),
(9, 'AN', 'AD', '.ad', 'آندورا', 'Andorra', 1, NULL, NULL, NULL, NULL, NULL),
(10, 'AO', 'AO', '.ao', 'آنگولا', 'Angola', 1, NULL, NULL, NULL, NULL, NULL),
(11, 'AQ', 'AS', '.as', 'ساموای آمریکایی', 'American Samoa', 1, NULL, NULL, NULL, NULL, NULL),
(12, 'AR', 'AR', '.ar', 'آرژانتین', 'Argentina', 1, NULL, NULL, NULL, NULL, NULL),
(13, 'AS', 'AU', '.au', 'استرالیا', 'Australia', 1, NULL, NULL, NULL, NULL, NULL),
(14, 'AT', '-', '-', 'اشکمور و جزایر کارتیه', 'Ashmore and Cartier Islands', 1, NULL, NULL, NULL, NULL, NULL),
(15, 'AU', 'AT', '.at', 'اتریش', 'Austria', 1, NULL, NULL, NULL, NULL, NULL),
(16, 'AV', 'AI', '.ai', 'آنگویلا', 'Anguilla', 1, NULL, NULL, NULL, NULL, NULL),
(17, 'AX', 'AX', '.ax', 'جزایر الند', 'Åland Islands', 1, NULL, NULL, NULL, NULL, NULL),
(18, 'AY', 'AQ', '.aq', 'قطب جنوب', 'Antarctica', 1, NULL, NULL, NULL, NULL, NULL),
(19, 'BA', 'BH', '.bh', 'بحرین', 'Bahrain', 1, NULL, NULL, NULL, NULL, NULL),
(20, 'BB', 'BB', '.bb', 'باربادوس', 'Barbados', 1, NULL, NULL, NULL, NULL, NULL),
(21, 'BC', 'BW', '.bw', 'بوتسوانا', 'Botswana', 1, NULL, NULL, NULL, NULL, NULL),
(22, 'BD', 'BM', '.bm', 'برمودا', 'Bermuda', 1, NULL, NULL, NULL, NULL, NULL),
(23, 'BE', 'BE', '.be', 'بلژیک', 'Belgium', 1, NULL, NULL, NULL, NULL, NULL),
(24, 'BF', 'BS', '.bs', 'باهاما، The', 'Bahamas, The', 1, NULL, NULL, NULL, NULL, NULL),
(25, 'BG', 'BD', '.bd', 'بنگلادش', 'Bangladesh', 1, NULL, NULL, NULL, NULL, NULL),
(26, 'BH', 'BZ', '.bz', 'بلیز', 'Belize', 1, NULL, NULL, NULL, NULL, NULL),
(27, 'BK', 'BA', '.ba', 'بوسنی و هرزگوین', 'Bosnia and Herzegovina', 1, NULL, NULL, NULL, NULL, NULL),
(28, 'BL', 'BO', '.bo', 'بولیوی', 'Bolivia', 1, NULL, NULL, NULL, NULL, NULL),
(29, 'BM', 'MM', '.mm', 'میانمار', 'Myanmar', 1, NULL, NULL, NULL, NULL, NULL),
(30, 'BN', 'BJ', '.bj', 'بنین', 'Benin', 1, NULL, NULL, NULL, NULL, NULL),
(31, 'BO', 'BY', '.by', 'بلاروس', 'Belarus', 1, NULL, NULL, NULL, NULL, NULL),
(32, 'BP', 'SB', '.sb', 'جزایر سلیمان', 'Solomon Islands', 1, NULL, NULL, NULL, NULL, NULL),
(33, 'BQ', '-', '-', 'جزیره ناواسا', 'Navassa Island', 1, NULL, NULL, NULL, NULL, NULL),
(34, 'BR', 'BR', '.br', 'برزیل', 'Brazil', 1, NULL, NULL, NULL, NULL, NULL),
(35, 'BS', '-', '-', 'باساس دا هند', 'Bassas da India', 1, NULL, NULL, NULL, NULL, NULL),
(36, 'BT', 'BT', '.bt', 'بوتان', 'Bhutan', 1, NULL, NULL, NULL, NULL, NULL),
(37, 'BU', 'BG', '.bg', 'بلغارستان', 'Bulgaria', 1, NULL, NULL, NULL, NULL, NULL),
(38, 'BV', 'BV', '.bv', 'جزیره Bouvet', 'Bouvet Island', 1, NULL, NULL, NULL, NULL, NULL),
(39, 'BX', 'BN', '.bn', 'برونئی', 'Brunei', 1, NULL, NULL, NULL, NULL, NULL),
(40, 'BY', 'BI', '.bi', 'بوروندی', 'Burundi', 1, NULL, NULL, NULL, NULL, NULL),
(41, 'CA', 'CA', '.ca', 'کانادا', 'Canada', 1, NULL, NULL, NULL, NULL, NULL),
(42, 'CB', 'KH', '.kh', 'کامبوج', 'Cambodia', 1, NULL, NULL, NULL, NULL, NULL),
(43, 'CD', 'TD', '.td', 'چاد', 'Chad', 1, NULL, NULL, NULL, NULL, NULL),
(44, 'CE', 'LK', '.lk', 'سری لانکا', 'Sri Lanka', 1, NULL, NULL, NULL, NULL, NULL),
(45, 'CF', 'CG', '.cg', 'کنگو، جمهوری', 'Congo, Republic of the', 1, NULL, NULL, NULL, NULL, NULL),
(46, 'CG', 'CD', '.cd', 'کنگو، جمهوری دموکراتیک', 'Congo, Democratic Republic of the', 1, NULL, NULL, NULL, NULL, NULL),
(47, 'CH', 'CN', '.cn', 'چين', 'China', 1, NULL, NULL, NULL, NULL, NULL),
(48, 'CI', 'CL', '.cl', 'شیلی', 'Chile', 1, NULL, NULL, NULL, NULL, NULL),
(49, 'CJ', 'KY', '.ky', 'جزایر کیمن', 'Cayman Islands', 1, NULL, NULL, NULL, NULL, NULL),
(50, 'CK', 'CC', '.cc', 'جزایر کوکوس (کایلینگ)', 'Cocos (Keeling) Islands', 1, NULL, NULL, NULL, NULL, NULL),
(51, 'CM', 'CM', '.cm', 'کامرون', 'Cameroon', 1, NULL, NULL, NULL, NULL, NULL),
(52, 'CN', 'KM', '.km', 'کومور', 'Comoros', 1, NULL, NULL, NULL, NULL, NULL),
(53, 'CO', 'CO', '.co', 'کلمبیا', 'Colombia', 1, NULL, NULL, NULL, NULL, NULL),
(54, 'CQ', 'MP', '.mp', 'جزایر ماریانای شمالی', 'Northern Mariana Islands', 1, NULL, NULL, NULL, NULL, NULL),
(55, 'CR', '-', '-', 'جزایر دریای مرجانی', 'Coral Sea Islands', 1, NULL, NULL, NULL, NULL, NULL),
(56, 'CS', 'CR', '.cr', 'کاستاریکا', 'Costa Rica', 1, NULL, NULL, NULL, NULL, NULL),
(57, 'CT', 'CF', '.cf', 'جمهوری آفریقای مرکزی', 'Central African Republic', 1, NULL, NULL, NULL, NULL, NULL),
(58, 'CU', 'CU', '.cu', 'کوبا', 'Cuba', 1, NULL, NULL, NULL, NULL, NULL),
(59, 'CV', 'CV', '.cv', 'کیپ ورد', 'Cape Verde', 1, NULL, NULL, NULL, NULL, NULL),
(60, 'CW', 'CK', '.ck', 'جزایر کوک', 'Cook Islands', 1, NULL, NULL, NULL, NULL, NULL),
(61, 'CY', 'CY', '.cy', 'قبرس', 'Cyprus', 1, NULL, NULL, NULL, NULL, NULL),
(62, 'DA', 'DK', '.dk', 'دانمارک', 'Denmark', 1, NULL, NULL, NULL, NULL, NULL),
(63, 'DJ', 'DJ', '.dj', 'جیبوتی', 'Djibouti', 1, NULL, NULL, NULL, NULL, NULL),
(64, 'DO', 'DM', '.dm', 'دومینیکا', 'Dominica', 1, NULL, NULL, NULL, NULL, NULL),
(65, 'DQ', 'UM', '-', 'جزیره جارویس', 'Jarvis Island', 1, NULL, NULL, NULL, NULL, NULL),
(66, 'DR', 'DO', '.do', 'جمهوری دومینیکن', 'Dominican Republic', 1, NULL, NULL, NULL, NULL, NULL),
(67, 'DX', '-', '-', 'منطقه ممنوعه Dhekelia', 'Dhekelia Sovereign Base Area', 1, NULL, NULL, NULL, NULL, NULL),
(68, 'EC', 'EC', '.ec', 'اکوادور', 'Ecuador', 1, NULL, NULL, NULL, NULL, NULL),
(69, 'EG', 'EG', '.eg', 'مصر', 'Egypt', 1, NULL, NULL, NULL, NULL, NULL),
(70, 'EI', 'IE', '.ie', 'ایرلند', 'Ireland', 1, NULL, NULL, NULL, NULL, NULL),
(71, 'EK', 'GQ', '.gq', 'گینه استوایی', 'Equatorial Guinea', 1, NULL, NULL, NULL, NULL, NULL),
(72, 'EN', 'EE', '.ee', 'استونی', 'Estonia', 1, NULL, NULL, NULL, NULL, NULL),
(73, 'ER', 'ER', '.er', 'اریتره', 'Eritrea', 1, NULL, NULL, NULL, NULL, NULL),
(74, 'ES', 'SV', '.sv', 'السالوادور', 'El Salvador', 1, NULL, NULL, NULL, NULL, NULL),
(75, 'ET', 'ET', '.et', 'اتیوپی', 'Ethiopia', 1, NULL, NULL, NULL, NULL, NULL),
(76, 'EU', '-', '-', 'جزیره اروپا', 'Europa Island', 1, NULL, NULL, NULL, NULL, NULL),
(77, 'EZ', 'CZ', '.cz', 'جمهوری چک', 'Czech Republic', 1, NULL, NULL, NULL, NULL, NULL),
(78, 'FG', 'GF', '.gf', 'گویان فرانسه', 'French Guiana', 1, NULL, NULL, NULL, NULL, NULL),
(79, 'FI', 'FI', '.fi', 'فنلاند', 'Finland', 1, NULL, NULL, NULL, NULL, NULL),
(80, 'FJ', 'FJ', '.fj', 'فیجی', 'Fiji', 1, NULL, NULL, NULL, NULL, NULL),
(81, 'FK', 'FK', '.fk', 'جزایر فالکلند (جزایر مالویناس)', 'Falkland Islands (Islas Malvinas)', 1, NULL, NULL, NULL, NULL, NULL),
(82, 'FM', 'FM', '.fm', 'میکرونزی، ایالات فدرال', 'Micronesia, Federated States of', 1, NULL, NULL, NULL, NULL, NULL),
(83, 'FO', 'FO', '.fo', 'جزایر فارو', 'Faroe Islands', 1, NULL, NULL, NULL, NULL, NULL),
(84, 'FP', 'PF', '.pf', 'پلینزی فرانسه', 'French Polynesia', 1, NULL, NULL, NULL, NULL, NULL),
(85, 'FQ', 'UM', '-', 'جزیره بیکر', 'Baker Island', 1, NULL, NULL, NULL, NULL, NULL),
(86, 'FR', 'FR', '.fr', 'فرانسه', 'France', 1, NULL, NULL, NULL, NULL, NULL),
(87, 'FS', 'TF', '.tf', 'زمینهای جنوب و جنوب قطب جنوب فرانسه', 'French Southern and Antarctic Lands', 1, NULL, NULL, NULL, NULL, NULL),
(88, 'GA', 'GM', '.gm', 'گامبیا، The', 'Gambia, The', 1, NULL, NULL, NULL, NULL, NULL),
(89, 'GB', 'GA', '.ga', 'گابن', 'Gabon', 1, NULL, NULL, NULL, NULL, NULL),
(90, 'GG', 'GE', '.ge', 'جورجیا', 'Georgia', 1, NULL, NULL, NULL, NULL, NULL),
(91, 'GH', 'GH', '.gh', 'غنا', 'Ghana', 1, NULL, NULL, NULL, NULL, NULL),
(92, 'GI', 'GI', '.gi', 'جبل الطارق', 'Gibraltar', 1, NULL, NULL, NULL, NULL, NULL),
(93, 'GJ', 'GD', '.gd', 'گرانادا', 'Grenada', 1, NULL, NULL, NULL, NULL, NULL),
(94, 'GK', '-', '.gg', 'گورنسی', 'Guernsey', 1, NULL, NULL, NULL, NULL, NULL),
(95, 'GL', 'GL', '.gl', 'گرینلند', 'Greenland', 1, NULL, NULL, NULL, NULL, NULL),
(96, 'GM', 'DE', '.de', 'آلمان', 'Germany', 1, NULL, NULL, NULL, NULL, NULL),
(97, 'GO', '-', '-', 'جزایر گلوریوزو', 'Glorioso Islands', 1, NULL, NULL, NULL, NULL, NULL),
(98, 'GP', 'GP', '.gp', 'گوادلوپ', 'Guadeloupe', 1, NULL, NULL, NULL, NULL, NULL),
(99, 'GQ', 'GU', '.gu', 'گوام', 'Guam', 1, NULL, NULL, NULL, NULL, NULL),
(100, 'GR', 'GR', '.gr', 'یونان', 'Greece', 1, NULL, NULL, NULL, NULL, NULL),
(101, 'GT', 'GT', '.gt', 'گواتمالا', 'Guatemala', 1, NULL, NULL, NULL, NULL, NULL),
(102, 'GV', 'GN', '.gn', 'گینه', 'Guinea', 1, NULL, NULL, NULL, NULL, NULL),
(103, 'GY', 'GY', '.gy', 'گایانا', 'Guyana', 1, NULL, NULL, NULL, NULL, NULL),
(104, 'GZ', '-', '-', 'نوار غزه', 'Gaza Strip', 1, NULL, NULL, NULL, NULL, NULL),
(105, 'HA', 'HT', '.ht', 'هائیتی', 'Haiti', 1, NULL, NULL, NULL, NULL, NULL),
(106, 'HK', 'HK', '.hk', 'هنگ کنگ', 'Hong Kong', 1, NULL, NULL, NULL, NULL, NULL),
(107, 'HM', 'HM', '.hm', 'جزایر هرد و جزایر مک دونالد', 'Heard Island and McDonald Islands', 1, NULL, NULL, NULL, NULL, NULL),
(108, 'HO', 'HN', '.hn', 'هندوراس', 'Honduras', 1, NULL, NULL, NULL, NULL, NULL),
(109, 'HQ', 'UM', '-', 'جزیره Howland', 'Howland Island', 1, NULL, NULL, NULL, NULL, NULL),
(110, 'HR', 'HR', '.hr', 'کرواسی', 'Croatia', 1, NULL, NULL, NULL, NULL, NULL),
(111, 'HU', 'HU', '.hu', 'مجارستان', 'Hungary', 1, NULL, NULL, NULL, NULL, NULL),
(112, 'IC', 'IS', '.is', 'ایسلند', 'Iceland', 1, NULL, NULL, NULL, NULL, NULL),
(113, 'ID', 'ID', '.id', 'اندونزی', 'Indonesia', 1, NULL, NULL, NULL, NULL, NULL),
(114, 'IM', 'IM', '.im', 'جزیره من', 'Isle of Man', 1, NULL, NULL, NULL, NULL, NULL),
(115, 'IN', 'IN', '.in', 'هندوستان', 'India', 1, NULL, NULL, NULL, NULL, NULL),
(116, 'IO', 'IO', '.io', 'قلمرو اقیانوس هند بریتانیا', 'British Indian Ocean Territory', 1, NULL, NULL, NULL, NULL, NULL),
(117, 'IP', '-', '-', 'جزیره Clipperton', 'Clipperton Island', 1, NULL, NULL, NULL, NULL, NULL),
(118, 'IR', 'IR', '.ir', 'ایران', 'Iran', 1, NULL, NULL, NULL, NULL, NULL),
(119, 'IS', 'IL', '.il', 'اسرائيل', 'Israel', 1, NULL, NULL, NULL, NULL, NULL),
(120, 'IT', 'IT', '.it', 'ایتالیا', 'Italy', 1, NULL, NULL, NULL, NULL, NULL),
(121, 'IV', 'CI', '.ci', 'ساحل عاج', 'Cote d\'Ivoire', 1, NULL, NULL, NULL, NULL, NULL),
(122, 'IZ', 'IQ', '.iq', 'عراق', 'Iraq', 1, NULL, NULL, NULL, NULL, NULL),
(123, 'JA', 'JP', '.jp', 'ژاپن', 'Japan', 1, NULL, NULL, NULL, NULL, NULL),
(124, 'JE', 'JE', '.je', 'جرسی', 'Jersey', 1, NULL, NULL, NULL, NULL, NULL),
(125, 'JM', 'JM', '.jm', 'جامائیکا', 'Jamaica', 1, NULL, NULL, NULL, NULL, NULL),
(126, 'JN', 'SJ', '-', 'Jan Mayen', 'Jan Mayen', 1, NULL, NULL, NULL, NULL, NULL),
(127, 'JO', 'JO', '.jo', 'اردن', 'Jordan', 1, NULL, NULL, NULL, NULL, NULL),
(128, 'JQ', 'UM', '-', 'جانستون اتول', 'Johnston Atoll', 1, NULL, NULL, NULL, NULL, NULL),
(129, 'JU', '-', '-', 'جزیره خوان جزیره نوا', 'Juan de Nova Island', 1, NULL, NULL, NULL, NULL, NULL),
(130, 'KE', 'KE', '.ke', 'کنیا', 'Kenya', 1, NULL, NULL, NULL, NULL, NULL),
(131, 'KG', 'KG', '.kg', 'قرقیزستان', 'Kyrgyzstan', 1, NULL, NULL, NULL, NULL, NULL),
(132, 'KN', 'KP', '.kp', 'کره شمالی', 'Korea, North', 1, NULL, NULL, NULL, NULL, NULL),
(133, 'KQ', 'UM', '-', 'کینگمن ریف', 'Kingman Reef', 1, NULL, NULL, NULL, NULL, NULL),
(134, 'KR', 'KI', '.ki', 'کیریباتی', 'Kiribati', 1, NULL, NULL, NULL, NULL, NULL),
(135, 'KS', 'KR', '.kr', 'کره جنوبی', 'Korea, South', 1, NULL, NULL, NULL, NULL, NULL),
(136, 'KT', 'CX', '.cx', 'جزیره کریسمس', 'Christmas Island', 1, NULL, NULL, NULL, NULL, NULL),
(137, 'KU', 'KW', '.kw', 'کویت', 'Kuwait', 1, NULL, NULL, NULL, NULL, NULL),
(138, 'KV', 'KV', '-', 'کوزوو', 'Kosovo', 1, NULL, NULL, NULL, NULL, NULL),
(139, 'KZ', 'KZ', '.kz', 'قزاقستان', 'Kazakhstan', 1, NULL, NULL, NULL, NULL, NULL),
(140, 'LA', 'LA', '.la', 'لائوس', 'Laos', 1, NULL, NULL, NULL, NULL, NULL),
(141, 'LE', 'LB', '.lb', 'لبنان', 'Lebanon', 1, NULL, NULL, NULL, NULL, NULL),
(142, 'LG', 'LV', '.lv', 'لتونی', 'Latvia', 1, NULL, NULL, NULL, NULL, NULL),
(143, 'LH', 'LT', '.lt', 'لیتوانی', 'Lithuania', 1, NULL, NULL, NULL, NULL, NULL),
(144, 'LI', 'LR', '.lr', 'لیبریا', 'Liberia', 1, NULL, NULL, NULL, NULL, NULL),
(145, 'LO', 'SK', '.sk', 'اسلواکی', 'Slovakia', 1, NULL, NULL, NULL, NULL, NULL),
(146, 'LQ', 'UM', '-', 'پالمیرا اتل', 'Palmyra Atoll', 1, NULL, NULL, NULL, NULL, NULL),
(147, 'LS', 'LI', '.li', 'لیختن اشتاین', 'Liechtenstein', 1, NULL, NULL, NULL, NULL, NULL),
(148, 'LT', 'LS', '.ls', 'لسوتو', 'Lesotho', 1, NULL, NULL, NULL, NULL, NULL),
(149, 'LU', 'LU', '.lu', 'لوکزامبورگ', 'Luxembourg', 1, NULL, NULL, NULL, NULL, NULL),
(150, 'LY', 'LY', '.ly', 'عرب لیبی', 'Libyan Arab', 1, NULL, NULL, NULL, NULL, NULL),
(151, 'MA', 'MG', '.mg', 'ماداگاسکار', 'Madagascar', 1, NULL, NULL, NULL, NULL, NULL),
(152, 'MB', 'MQ', '.mq', 'مارتینیک', 'Martinique', 1, NULL, NULL, NULL, NULL, NULL),
(153, 'MC', 'MO', '.mo', 'ماکائو', 'Macau', 1, NULL, NULL, NULL, NULL, NULL),
(154, 'MD', 'MD', '.md', 'مولداوی، جمهوری', 'Moldova, Republic of', 1, NULL, NULL, NULL, NULL, NULL),
(155, 'MF', 'YT', '.yt', 'مایوت', 'Mayotte', 1, NULL, NULL, NULL, NULL, NULL),
(156, 'MG', 'MN', '.mn', 'مغولستان', 'Mongolia', 1, NULL, NULL, NULL, NULL, NULL),
(157, 'MH', 'MS', '.ms', 'مونتسرات', 'Montserrat', 1, NULL, NULL, NULL, NULL, NULL),
(158, 'MI', 'MW', '.mw', 'مالاوی', 'Malawi', 1, NULL, NULL, NULL, NULL, NULL),
(159, 'MJ', 'ME', '.me', 'مونته نگرو', 'Montenegro', 1, NULL, NULL, NULL, NULL, NULL),
(160, 'MK', 'MK', '.mk', 'جمهوری مقدونیه یوگسلاوی سابق', 'The Former Yugoslav Republic of Macedonia', 1, NULL, NULL, NULL, NULL, NULL),
(161, 'ML', 'ML', '.ml', 'مالزی', 'Mali', 1, NULL, NULL, NULL, NULL, NULL),
(162, 'MN', 'MC', '.mc', 'موناکو', 'Monaco', 1, NULL, NULL, NULL, NULL, NULL),
(163, 'MO', 'MA', '.ma', 'مراکش', 'Morocco', 1, NULL, NULL, NULL, NULL, NULL),
(164, 'MP', 'MU', '.mu', 'موریس', 'Mauritius', 1, NULL, NULL, NULL, NULL, NULL),
(165, 'MQ', 'UM', '-', 'جزایر میدوی', 'Midway Islands', 1, NULL, NULL, NULL, NULL, NULL),
(166, 'MR', 'MR', '.mr', 'موریتانی', 'Mauritania', 1, NULL, NULL, NULL, NULL, NULL),
(167, 'MT', 'MT', '.mt', 'مالت', 'Malta', 1, NULL, NULL, NULL, NULL, NULL),
(168, 'MU', 'OM', '.om', 'عمان', 'Oman', 1, NULL, NULL, NULL, NULL, NULL),
(169, 'MV', 'MV', '.mv', 'مالدیو', 'Maldives', 1, NULL, NULL, NULL, NULL, NULL),
(170, 'MX', 'MX', '.mx', 'مکزیک', 'Mexico', 1, NULL, NULL, NULL, NULL, NULL),
(171, 'MY', 'MY', '.my', 'مالزی', 'Malaysia', 1, NULL, NULL, NULL, NULL, NULL),
(172, 'MZ', 'MZ', '.mz', 'موزامبیک', 'Mozambique', 1, NULL, NULL, NULL, NULL, NULL),
(173, 'NC', 'NC', '.nc', 'کالدونیای جدید', 'New Caledonia', 1, NULL, NULL, NULL, NULL, NULL),
(174, 'NE', 'NU', '.nu', 'نیو', 'Niue', 1, NULL, NULL, NULL, NULL, NULL),
(175, 'NF', 'NF', '.nf', 'جزیره نورفولک', 'Norfolk Island', 1, NULL, NULL, NULL, NULL, NULL),
(176, 'NG', 'NE', '.ne', 'نیجر', 'Niger', 1, NULL, NULL, NULL, NULL, NULL),
(177, 'NH', 'VU', '.vu', 'وانواتو', 'Vanuatu', 1, NULL, NULL, NULL, NULL, NULL),
(178, 'NI', 'NG', '.ng', 'نیجریه', 'Nigeria', 1, NULL, NULL, NULL, NULL, NULL),
(179, 'NL', 'NL', '.nl', 'هلند', 'Netherlands', 1, NULL, NULL, NULL, NULL, NULL),
(180, 'NM', '', '', 'هیچ مردی زمین نیست', 'No Man\'s Land', 1, NULL, NULL, NULL, NULL, NULL),
(181, 'NO', 'NO', '.no', 'نروژ', 'Norway', 1, NULL, NULL, NULL, NULL, NULL),
(182, 'NP', 'NP', '.np', 'نپال', 'Nepal', 1, NULL, NULL, NULL, NULL, NULL),
(183, 'NR', 'NR', '.nr', 'نائورو', 'Nauru', 1, NULL, NULL, NULL, NULL, NULL),
(184, 'NS', 'SR', '.sr', 'سورینام', 'Suriname', 1, NULL, NULL, NULL, NULL, NULL),
(185, 'NT', 'AN', '.an', 'آنتیل هلند', 'Netherlands Antilles', 1, NULL, NULL, NULL, NULL, NULL),
(186, 'NU', 'NI', '.ni', 'نیکاراگوئه', 'Nicaragua', 1, NULL, NULL, NULL, NULL, NULL),
(187, 'NZ', 'NZ', '.nz', 'نیوزلند', 'New Zealand', 1, NULL, NULL, NULL, NULL, NULL),
(188, 'PA', 'PY', '.py', 'پاراگوئه', 'Paraguay', 1, NULL, NULL, NULL, NULL, NULL),
(189, 'PC', 'PN', '.pn', 'جزایر پیتکرن', 'Pitcairn Islands', 1, NULL, NULL, NULL, NULL, NULL),
(190, 'PE', 'PE', '.pe', 'پرو', 'Peru', 1, NULL, NULL, NULL, NULL, NULL),
(191, 'PF', '-', '-', 'جزایر پاراسل', 'Paracel Islands', 1, NULL, NULL, NULL, NULL, NULL),
(192, 'PG', '-', '-', 'جزایر اسپارتلی', 'Spratly Islands', 1, NULL, NULL, NULL, NULL, NULL),
(193, 'PK', 'PK', '.pk', 'پاکستان', 'Pakistan', 1, NULL, NULL, NULL, NULL, NULL),
(194, 'PL', 'PL', '.pl', 'لهستان', 'Poland', 1, NULL, NULL, NULL, NULL, NULL),
(195, 'PM', 'PA', '.pa', 'پاناما', 'Panama', 1, NULL, NULL, NULL, NULL, NULL),
(196, 'PO', 'PT', '.pt', 'کشور پرتغال', 'Portugal', 1, NULL, NULL, NULL, NULL, NULL),
(197, 'PP', 'PG', '.pg', 'پاپوآ گینه نو', 'Papua New Guinea', 1, NULL, NULL, NULL, NULL, NULL),
(198, 'PS', 'PW', '.pw', 'پالائو', 'Palau', 1, NULL, NULL, NULL, NULL, NULL),
(199, 'PU', 'GW', '.gw', 'گینه بیسائو', 'Guinea-Bissau', 1, NULL, NULL, NULL, NULL, NULL),
(200, 'QA', 'QA', '.qa', 'قطر', 'Qatar', 1, NULL, NULL, NULL, NULL, NULL),
(201, 'RE', 'RE', '.re', 'تجدید دیدار', 'Reunion', 1, NULL, NULL, NULL, NULL, NULL),
(202, 'RI', 'RS', '.rs', 'صربستان', 'Serbia', 1, NULL, NULL, NULL, NULL, NULL),
(203, 'RM', 'MH', '.mh', 'جزایر مارشال', 'Marshall Islands', 1, NULL, NULL, NULL, NULL, NULL),
(204, 'RN', 'MF', '-', 'سنت مارتین', 'Saint Martin', 1, NULL, NULL, NULL, NULL, NULL),
(205, 'RO', 'RO', '.ro', 'رومانی', 'Romania', 1, NULL, NULL, NULL, NULL, NULL),
(206, 'RP', 'PH', '.ph', 'فیلیپین', 'Philippines', 1, NULL, NULL, NULL, NULL, NULL),
(207, 'RQ', 'PR', '.pr', 'پورتوریکو', 'Puerto Rico', 1, NULL, NULL, NULL, NULL, NULL),
(208, 'RS', 'RU', '.ru', 'روسیه', 'Russia', 1, NULL, NULL, NULL, NULL, NULL),
(209, 'RW', 'RW', '.rw', 'رواندا', 'Rwanda', 1, NULL, NULL, NULL, NULL, NULL),
(210, 'SA', 'SA', '.sa', 'عربستان سعودی', 'Saudi Arabia', 1, NULL, NULL, NULL, NULL, NULL),
(211, 'SB', 'PM', '.pm', 'سنت پیر و میکلون', 'Saint Pierre and Miquelon', 1, NULL, NULL, NULL, NULL, NULL),
(212, 'SC', 'KN', '.kn', 'سنت کیتس و نویس', 'Saint Kitts and Nevis', 1, NULL, NULL, NULL, NULL, NULL),
(213, 'SE', 'SC', '.sc', 'سیشل', 'Seychelles', 1, NULL, NULL, NULL, NULL, NULL),
(214, 'SF', 'ZA', '.za', 'آفریقای جنوبی', 'South Africa', 1, NULL, NULL, NULL, NULL, NULL),
(215, 'SG', 'SN', '.sn', 'سنگال', 'Senegal', 1, NULL, NULL, NULL, NULL, NULL),
(216, 'SH', 'SH', '.sh', 'سنت هلن', 'Saint Helena', 1, NULL, NULL, NULL, NULL, NULL),
(217, 'SI', 'SI', '.si', 'اسلوونی', 'Slovenia', 1, NULL, NULL, NULL, NULL, NULL),
(218, 'SL', 'SL', '.sl', 'سیرا لئون', 'Sierra Leone', 1, NULL, NULL, NULL, NULL, NULL),
(219, 'SM', 'SM', '.sm', 'سان مارینو', 'San Marino', 1, NULL, NULL, NULL, NULL, NULL),
(220, 'SN', 'SG', '.sg', 'سنگاپور', 'Singapore', 1, NULL, NULL, NULL, NULL, NULL),
(221, 'SO', 'SO', '.so', 'سومالی', 'Somalia', 1, NULL, NULL, NULL, NULL, NULL),
(222, 'SP', 'ES', '.es', 'اسپانیا', 'Spain', 1, NULL, NULL, NULL, NULL, NULL),
(223, 'ST', 'LC', '.lc', 'سنت لوسیا', 'Saint Lucia', 1, NULL, NULL, NULL, NULL, NULL),
(224, 'SU', 'SD', '.sd', 'سودان', 'Sudan', 1, NULL, NULL, NULL, NULL, NULL),
(225, 'SV', 'SJ', '.sj', 'اسباب بازی', 'Svalbard', 1, NULL, NULL, NULL, NULL, NULL),
(226, 'SW', 'SE', '.se', 'سوئد', 'Sweden', 1, NULL, NULL, NULL, NULL, NULL),
(227, 'SX', 'GS', '.gs', 'جنوب گرجستان و جزایر', 'South Georgia and the Islands', 1, NULL, NULL, NULL, NULL, NULL),
(228, 'SY', 'SY', '.sy', 'جمهوری عربی سوریه', 'Syrian Arab Republic', 1, NULL, NULL, NULL, NULL, NULL),
(229, 'SZ', 'CH', '.ch', 'سوئیس', 'Switzerland', 1, NULL, NULL, NULL, NULL, NULL),
(230, 'TD', 'TT', '.tt', 'ترینیداد و توباگو', 'Trinidad and Tobago', 1, NULL, NULL, NULL, NULL, NULL),
(231, 'TE', '-', '-', 'جزیره ترولین', 'Tromelin Island', 1, NULL, NULL, NULL, NULL, NULL),
(232, 'TH', 'TH', '.th', 'تایلند', 'Thailand', 1, NULL, NULL, NULL, NULL, NULL),
(233, 'TI', 'TJ', '.tj', 'تاجیکستان', 'Tajikistan', 1, NULL, NULL, NULL, NULL, NULL),
(234, 'TK', 'TC', '.tc', 'جزایر ترکس و کایکوس', 'Turks and Caicos Islands', 1, NULL, NULL, NULL, NULL, NULL),
(235, 'TL', 'TK', '.tk', 'توکلو', 'Tokelau', 1, NULL, NULL, NULL, NULL, NULL),
(236, 'TN', 'TO', '.to', 'تونگا', 'Tonga', 1, NULL, NULL, NULL, NULL, NULL),
(237, 'TO', 'TG', '.tg', 'رفتن', 'Togo', 1, NULL, NULL, NULL, NULL, NULL),
(238, 'TP', 'ST', '.st', 'سائوتومه و پرنسیپه', 'Sao Tome and Principe', 1, NULL, NULL, NULL, NULL, NULL),
(239, 'TS', 'TN', '.tn', 'تونس', 'Tunisia', 1, NULL, NULL, NULL, NULL, NULL),
(240, 'TT', 'TL', '.tl', 'تیمور شرقی', 'East Timor', 1, NULL, NULL, NULL, NULL, NULL),
(241, 'TU', 'TR', '.tr', 'بوقلمون', 'Turkey', 1, NULL, NULL, NULL, NULL, NULL),
(242, 'TV', 'TV', '.tv', 'توووالو', 'Tuvalu', 1, NULL, NULL, NULL, NULL, NULL),
(243, 'TW', 'TW', '.tw', 'تایوان', 'Taiwan', 1, NULL, NULL, NULL, NULL, NULL),
(244, 'TX', 'TM', '.tm', 'ترکمنستان', 'Turkmenistan', 1, NULL, NULL, NULL, NULL, NULL),
(245, 'TZ', 'TZ', '.tz', 'تانزانیا، جمهوری متحده', 'Tanzania, United Republic of', 1, NULL, NULL, NULL, NULL, NULL),
(246, 'UG', 'UG', '.ug', 'اوگاندا', 'Uganda', 1, NULL, NULL, NULL, NULL, NULL),
(247, 'UK', 'GB', '.uk', 'انگلستان', 'United Kingdom', 1, NULL, NULL, NULL, NULL, NULL),
(248, 'UP', 'UA', '.ua', 'اوکراین', 'Ukraine', 1, NULL, NULL, NULL, NULL, NULL),
(249, 'US', 'US', '.us', 'ایالات متحده', 'United States', 1, NULL, NULL, NULL, NULL, NULL),
(250, 'UV', 'BF', '.bf', 'بورکینافاسو', 'Burkina Faso', 1, NULL, NULL, NULL, NULL, NULL),
(251, 'UY', 'UY', '.uy', 'اروگوئه', 'Uruguay', 1, NULL, NULL, NULL, NULL, NULL),
(252, 'UZ', 'UZ', '.uz', 'ازبکستان', 'Uzbekistan', 1, NULL, NULL, NULL, NULL, NULL),
(253, 'VC', 'VC', '.vc', 'سنت وینسنت و گرنادین', 'Saint Vincent and the Grenadines', 1, NULL, NULL, NULL, NULL, NULL),
(254, 'VE', 'VE', '.ve', 'ونزوئلا', 'Venezuela', 1, NULL, NULL, NULL, NULL, NULL),
(255, 'VI', 'VG', '.vg', 'جزایر ویرجین بریتانیا', 'British Virgin Islands', 1, NULL, NULL, NULL, NULL, NULL),
(256, 'VM', 'VN', '.vn', 'ویتنام', 'Vietnam', 1, NULL, NULL, NULL, NULL, NULL),
(257, 'VQ', 'VI', '.vi', 'جزایر ویرجین (ایالات متحده)', 'Virgin Islands (US)', 1, NULL, NULL, NULL, NULL, NULL),
(258, 'VT', 'VA', '.va', 'مقدس (واتیکان)', 'Holy See (Vatican City)', 1, NULL, NULL, NULL, NULL, NULL),
(259, 'WA', 'NA', '.na', 'نامیبیا', 'Namibia', 1, NULL, NULL, NULL, NULL, NULL),
(260, 'WE', '-', '-', 'بانک غرب', 'West Bank', 1, NULL, NULL, NULL, NULL, NULL),
(261, 'WF', 'WF', '.wf', 'والیس و فوتونا', 'Wallis and Futuna', 1, NULL, NULL, NULL, NULL, NULL),
(262, 'WI', 'EH', '.eh', 'صحرای غربی', 'Western Sahara', 1, NULL, NULL, NULL, NULL, NULL),
(263, 'WQ', 'UM', '-', 'جزیره ویک', 'Wake Island', 1, NULL, NULL, NULL, NULL, NULL),
(264, 'WS', 'WS', '.ws', 'ساموآ', 'Samoa', 1, NULL, NULL, NULL, NULL, NULL),
(265, 'WZ', 'SZ', '.sz', 'سوازیلند', 'Swaziland', 1, NULL, NULL, NULL, NULL, NULL),
(266, 'YI', 'CS', '.yu', 'صربستان و مونته نگرو', 'Serbia and Montenegro', 1, NULL, NULL, NULL, NULL, NULL),
(267, 'YM', 'YE', '.ye', 'یمن', 'Yemen', 1, NULL, NULL, NULL, NULL, NULL),
(268, 'ZA', 'ZM', '.zm', 'زامبیا', 'Zambia', 1, NULL, NULL, NULL, NULL, NULL),
(269, 'ZI', 'ZW', '.zw', 'زیمبابوه', 'Zimbabwe', 1, NULL, NULL, NULL, NULL, NULL);");

    }
}
