<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    public function run() : void
    {

        DB::statement(
            "INSERT INTO `provinces` (`id`, `country_id`, `name`, `name_en`, `latitude`, `longitude`, `status`, `uuid`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`) VALUES
(1, 118, 'آذربایجان شرقی', 'East Azerbaijan', '37.90357330', '46.26821090', 1, 'IR.EA', NULL, NULL, NULL, NULL, NULL),
(2, 118, 'آذربایجان غربی', 'West Azerbaijan', '37.45500620', '45.00000000', 1, 'IR.WA', NULL, NULL, NULL, NULL, NULL),
(3, 118, 'اردبیل', 'Ardabil', '38.48532760', '47.89112090', 1, 'IR.AR', NULL, NULL, NULL, NULL, NULL),
(4, 118, 'اصفهان', 'Isfahan', '32.65462750', '51.66798260', 1, 'IR.ES', NULL, NULL, NULL, NULL, NULL),
(5, 118, 'البرز', 'Alborz', '35.99604670', '50.92892460', 1, 'IR.AL', NULL, NULL, NULL, NULL, NULL),
(6, 118, 'ایلام', 'Ilam', '33.29576180', '46.67053400', 1, 'IR.IL', NULL, NULL, NULL, NULL, NULL),
(7, 118, 'بوشهر', 'Bushehr', '28.92338370', '50.82031400', 1, 'IR.BS', NULL, NULL, NULL, NULL, NULL),
(8, 118, 'تهران', 'Tehran', '35.69611100', '51.42305600', 1, 'IR.TH', NULL, NULL, NULL, NULL, NULL),
(9, 118, 'چهارمحال و بختیاری', 'Chaharmahal and Bakhtiari ', '31.96143480', '50.84563230', 1, 'IR.CM', NULL, NULL, NULL, NULL, NULL),
(10, 118, 'خراسان جنوبی', 'South Khorasan', '32.51756430', '59.10417580', 1, 'IR.KJ', NULL, NULL, NULL, NULL, NULL),
(11, 118, 'خراسان رضوی', 'Razavi Khorasan', '35.10202530', '59.10417580', 1, 'IR.KV', NULL, NULL, NULL, NULL, NULL),
(12, 118, 'خراسان شمالی', 'North Khorasan', '37.47103530', '57.10131880', 1, 'IR.KS', NULL, NULL, NULL, NULL, NULL),
(13, 118, 'خوزستان', 'Khuzestan', '31.43601490', '49.04131200', 1, 'IR.KZ', NULL, NULL, NULL, NULL, NULL),
(14, 118, 'زنجان', 'Zanjan', '36.50181850', '48.39881860', 1, 'IR.ZA', NULL, NULL, NULL, NULL, NULL),
(15, 118, 'سمنان', 'Semnan', '35.22555850', '54.43421380', 1, 'IR.SM', NULL, NULL, NULL, NULL, NULL),
(16, 118, 'سیستان و بلوچستان', 'Sistan and Baluchestan ', '27.52999060', '60.58206760', 1, 'IR.SB', NULL, NULL, NULL, NULL, NULL),
(17, 118, 'فارس', 'Fars', '29.10438130', '53.04589300', 1, 'IR.FA', NULL, NULL, NULL, NULL, NULL),
(18, 118, 'قزوین', 'Qazvin', '36.08813170', '49.85472660', 1, 'IR.QZ', NULL, NULL, NULL, NULL, NULL),
(19, 118, 'قم', 'Qom', '34.63994430', '50.87594190', 1, 'IR.QM', NULL, NULL, NULL, NULL, NULL),
(20, 118, 'كردستان', 'Kurdistan', '35.95535790', '47.13621250', 1, 'IR.KD', NULL, NULL, NULL, NULL, NULL),
(21, 118, 'كرمان', 'Kerman', '30.28393790', '57.08336280', 1, 'IR.KE', NULL, NULL, NULL, NULL, NULL),
(22, 118, 'كرمانشاه', 'Kermanshah', '34.31416700', '47.06500000', 1, 'IR.BK', NULL, NULL, NULL, NULL, NULL),
(23, 118, 'کهگیلویه و بویراحمد', 'Kohgiluyeh and Boyer-Ahmad ', '30.65094790', '51.60525000', 1, 'IR.KB', NULL, NULL, NULL, NULL, NULL),
(24, 118, 'گلستان', 'Golestan', '37.28981230', '55.13758340', 1, 'IR.GO', NULL, NULL, NULL, NULL, NULL),
(25, 118, 'گیلان', 'Gilan', '37.11716170', '49.52799960', 1, 'IR.GI', NULL, NULL, NULL, NULL, NULL),
(26, 118, 'لرستان', 'Lorestan', '33.58183940', '48.39881860', 1, 'IR.LO', NULL, NULL, NULL, NULL, NULL),
(27, 118, 'مازندران', 'Mazandaran', '36.22623930', '52.53186040', 1, 'IR.MN', NULL, NULL, NULL, NULL, NULL),
(28, 118, 'مركزی', 'Markazi', '33.50932940', '-92.39611900', 1, 'IR.MK', NULL, NULL, NULL, NULL, NULL),
(29, 118, 'هرمزگان', 'Hormozgan', '27.13872300', '55.13758340', 1, 'IR.HG', NULL, NULL, NULL, NULL, NULL),
(30, 118, 'همدان', 'Hamadan', '34.76079990', '48.39881860', 1, 'IR.HD', NULL, NULL, NULL, NULL, NULL),
(31, 118, 'یزد', 'Yazd', '32.10063870', '54.43421380', 1, 'IR.YA', NULL, NULL, NULL, NULL, NULL);"
        );

    }
}
