<?php

use App\Http\Controllers\Frontend\Auth\LoginController;
use App\Http\Controllers\Frontend\Auth\RegisterController;
use App\Http\Controllers\Frontend\Home\HomeController;
use App\Http\Controllers\Frontend\Language\LanguageController;
use App\Models\Country;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomeController::class, 'index'])->name('index');


Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('login');
Route::post('login/post', [LoginController::class, 'login'])->name('login.post');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register/post', [RegisterController::class, 'register'])->name('register.post');

Route::get('language/{language}', [LanguageController::class, 'changeLanguage'])->name('language.change');

Route::get('country', function () {
    $modal = ["BD" => "Bangladesh", "BE" => "Belgium", "BF" => "Burkina Faso", "BG" => "Bulgaria", "BA" => "Bosnia and Herzegovina", "BB" => "Barbados", "WF" => "Wallis and Futuna", "BL" => "Saint Barthelemy", "BM" => "Bermuda", "BN" => "Brunei", "BO" => "Bolivia", "BH" => "Bahrain", "BI" => "Burundi", "BJ" => "Benin", "BT" => "Bhutan", "JM" => "Jamaica", "BV" => "Bouvet Island", "BW" => "Botswana", "WS" => "Samoa", "BQ" => "Bonaire, Saint Eustatius and Saba ", "BR" => "Brazil", "BS" => "Bahamas", "JE" => "Jersey", "BY" => "Belarus", "BZ" => "Belize", "RU" => "Russia", "RW" => "Rwanda", "RS" => "Serbia", "TL" => "East Timor", "RE" => "Reunion", "TM" => "Turkmenistan", "TJ" => "Tajikistan", "RO" => "Romania", "TK" => "Tokelau", "GW" => "Guinea-Bissau", "GU" => "Guam", "GT" => "Guatemala", "GS" => "South Georgia and the South Sandwich Islands", "GR" => "Greece", "GQ" => "Equatorial Guinea", "GP" => "Guadeloupe", "JP" => "Japan", "GY" => "Guyana", "GG" => "Guernsey", "GF" => "French Guiana", "GE" => "Georgia", "GD" => "Grenada", "GB" => "United Kingdom", "GA" => "Gabon", "SV" => "El Salvador", "GN" => "Guinea", "GM" => "Gambia", "GL" => "Greenland", "GI" => "Gibraltar", "GH" => "Ghana", "OM" => "Oman", "TN" => "Tunisia", "JO" => "Jordan", "HR" => "Croatia", "HT" => "Haiti", "HU" => "Hungary", "HK" => "Hong Kong", "HN" => "Honduras", "HM" => "Heard Island and McDonald Islands", "VE" => "Venezuela", "PR" => "Puerto Rico", "PS" => "Palestinian Territory", "PW" => "Palau", "PT" => "Portugal", "SJ" => "Svalbard and Jan Mayen", "PY" => "Paraguay", "IQ" => "Iraq", "PA" => "Panama", "PF" => "French Polynesia", "PG" => "Papua New Guinea", "PE" => "Peru", "PK" => "Pakistan", "PH" => "Philippines", "PN" => "Pitcairn", "PL" => "Poland", "PM" => "Saint Pierre and Miquelon", "ZM" => "Zambia", "EH" => "Western Sahara", "EE" => "Estonia", "EG" => "Egypt", "ZA" => "South Africa", "EC" => "Ecuador", "IT" => "Italy", "VN" => "Vietnam", "SB" => "Solomon Islands", "ET" => "Ethiopia", "SO" => "Somalia", "ZW" => "Zimbabwe", "SA" => "Saudi Arabia", "ES" => "Spain", "ER" => "Eritrea", "ME" => "Montenegro", "MD" => "Moldova", "MG" => "Madagascar", "MF" => "Saint Martin", "MA" => "Morocco", "MC" => "Monaco", "UZ" => "Uzbekistan", "MM" => "Myanmar", "ML" => "Mali", "MO" => "Macao", "MN" => "Mongolia", "MH" => "Marshall Islands", "MK" => "Macedonia", "MU" => "Mauritius", "MT" => "Malta", "MW" => "Malawi", "MV" => "Maldives", "MQ" => "Martinique", "MP" => "Northern Mariana Islands", "MS" => "Montserrat", "MR" => "Mauritania", "IM" => "Isle of Man", "UG" => "Uganda", "TZ" => "Tanzania", "MY" => "Malaysia", "MX" => "Mexico", "IL" => "Israel", "FR" => "France", "IO" => "British Indian Ocean Territory", "SH" => "Saint Helena", "FI" => "Finland", "FJ" => "Fiji", "FK" => "Falkland Islands", "FM" => "Micronesia", "FO" => "Faroe Islands", "NI" => "Nicaragua", "NL" => "Netherlands", "NO" => "Norway", "NA" => "Namibia", "VU" => "Vanuatu", "NC" => "New Caledonia", "NE" => "Niger", "NF" => "Norfolk Island", "NG" => "Nigeria", "NZ" => "New Zealand", "NP" => "Nepal", "NR" => "Nauru", "NU" => "Niue", "CK" => "Cook Islands", "XK" => "Kosovo", "CI" => "Ivory Coast", "CH" => "Switzerland", "CO" => "Colombia", "CN" => "China", "CM" => "Cameroon", "CL" => "Chile", "CC" => "Cocos Islands", "CA" => "Canada", "CG" => "Republic of the Congo", "CF" => "Central African Republic", "CD" => "Democratic Republic of the Congo", "CZ" => "Czech Republic", "CY" => "Cyprus", "CX" => "Christmas Island", "CR" => "Costa Rica", "CW" => "Curacao", "CV" => "Cape Verde", "CU" => "Cuba", "SZ" => "Swaziland", "SY" => "Syria", "SX" => "Sint Maarten", "KG" => "Kyrgyzstan", "KE" => "Kenya", "SS" => "South Sudan", "SR" => "Suriname", "KI" => "Kiribati", "KH" => "Cambodia", "KN" => "Saint Kitts and Nevis", "KM" => "Comoros", "ST" => "Sao Tome and Principe", "SK" => "Slovakia", "KR" => "South Korea", "SI" => "Slovenia", "KP" => "North Korea", "KW" => "Kuwait", "SN" => "Senegal", "SM" => "San Marino", "SL" => "Sierra Leone", "SC" => "Seychelles", "KZ" => "Kazakhstan", "KY" => "Cayman Islands", "SG" => "Singapore", "SE" => "Sweden", "SD" => "Sudan", "DO" => "Dominican Republic", "DM" => "Dominica", "DJ" => "Djibouti", "DK" => "Denmark", "VG" => "British Virgin Islands", "DE" => "Germany", "YE" => "Yemen", "DZ" => "Algeria", "US" => "United States", "UY" => "Uruguay", "YT" => "Mayotte", "UM" => "United States Minor Outlying Islands", "LB" => "Lebanon", "LC" => "Saint Lucia", "LA" => "Laos", "TV" => "Tuvalu", "TW" => "Taiwan", "TT" => "Trinidad and Tobago", "TR" => "Turkey", "LK" => "Sri Lanka", "LI" => "Liechtenstein", "LV" => "Latvia", "TO" => "Tonga", "LT" => "Lithuania", "LU" => "Luxembourg", "LR" => "Liberia", "LS" => "Lesotho", "TH" => "Thailand", "TF" => "French Southern Territories", "TG" => "Togo", "TD" => "Chad", "TC" => "Turks and Caicos Islands", "LY" => "Libya", "VA" => "Vatican", "VC" => "Saint Vincent and the Grenadines", "AE" => "United Arab Emirates", "AD" => "Andorra", "AG" => "Antigua and Barbuda", "AF" => "Afghanistan", "AI" => "Anguilla", "VI" => "U.S. Virgin Islands", "IS" => "Iceland", "IR" => "Iran", "AM" => "Armenia", "AL" => "Albania", "AO" => "Angola", "AQ" => "Antarctica", "AS" => "American Samoa", "AR" => "Argentina", "AU" => "Australia", "AT" => "Austria", "AW" => "Aruba", "IN" => "India", "AX" => "Aland Islands", "AZ" => "Azerbaijan", "IE" => "Ireland", "ID" => "Indonesia", "UA" => "Ukraine", "QA" => "Qatar", "MZ" => "Mozambique"];
    foreach ($modal as $key => $item) {

        $c = new Country();
        $c->country_code = $key;
        $c->country_name = $item;
        $c->is_active = true;
        $c->save();
    }
    dd(Country::all());
});
