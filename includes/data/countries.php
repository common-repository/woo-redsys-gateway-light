<?php
/**
 * Devuelve los códigos de los países
 *
 * @package WooCommerce Redsys Gateway Ligth
 *
 * @return array
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Devuelve los códigos de los países
 *
 * @return array
 */
function redsys_get_country_code() {

	return array(
		'AF' => '4',
		'AX' => '248',
		'AL' => '8',
		'DE' => '276',
		'AD' => '20',
		'AO' => '24',
		'AI' => '660',
		'AQ' => '10',
		'AG' => '28',
		'SA' => '682',
		'DZ' => '12',
		'AR' => '32',
		'AM' => '51',
		'AW' => '533',
		'AU' => '36',
		'AT' => '40',
		'AZ' => '31',
		'BS' => '44',
		'BD' => '50',
		'BB' => '52',
		'BH' => '48',
		'BE' => '56',
		'BZ' => '84',
		'BJ' => '204',
		'BM' => '60',
		'BY' => '112',
		'BO' => '68',
		'BQ' => '535',
		'BA' => '70',
		'BW' => '72',
		'BR' => '76',
		'BN' => '96',
		'BG' => '100',
		'BF' => '854',
		'BI' => '108',
		'BT' => '64',
		'CV' => '132',
		'KH' => '116',
		'CM' => '120',
		'CA' => '124',
		'QA' => '634',
		'TD' => '148',
		'CL' => '152',
		'CN' => '156',
		'CY' => '196',
		'CO' => '170',
		'KM' => '174',
		'KP' => '408',
		'KR' => '410',
		'CI' => '384',
		'CR' => '188',
		'HR' => '191',
		'CU' => '192',
		'CW' => '531',
		'DK' => '208',
		'DM' => '212',
		'EC' => '218',
		'EG' => '818',
		'SV' => '222',
		'AE' => '784',
		'ER' => '232',
		'SK' => '703',
		'SI' => '705',
		'ES' => '724',
		'US' => '840',
		'EE' => '233',
		'ET' => '231',
		'PH' => '608',
		'FI' => '246',
		'FJ' => '242',
		'FR' => '250',
		'GA' => '266',
		'GM' => '270',
		'GE' => '268',
		'GH' => '288',
		'GI' => '292',
		'GD' => '308',
		'GR' => '300',
		'GL' => '304',
		'GP' => '312',
		'GU' => '316',
		'GT' => '320',
		'GF' => '254',
		'GG' => '831',
		'GN' => '324',
		'GW' => '624',
		'GQ' => '226',
		'GY' => '328',
		'HT' => '332',
		'HN' => '340',
		'HK' => '344',
		'HU' => '348',
		'IN' => '356',
		'ID' => '360',
		'IQ' => '368',
		'IR' => '364',
		'IE' => '372',
		'BV' => '74',
		'IM' => '833',
		'CX' => '162',
		'IS' => '352',
		'KY' => '136',
		'CC' => '166',
		'CK' => '184',
		'FO' => '234',
		'GS' => '239',
		'HM' => '334',
		'FK' => '238',
		'MP' => '580',
		'MH' => '584',
		'PN' => '612',
		'SB' => '90',
		'TC' => '796',
		'UM' => '581',
		'VG' => '92',
		'VI' => '850',
		'IL' => '376',
		'IT' => '380',
		'JM' => '388',
		'JP' => '392',
		'JE' => '832',
		'JO' => '400',
		'KZ' => '398',
		'KE' => '404',
		'KG' => '417',
		'KI' => '296',
		'KW' => '414',
		'LA' => '418',
		'LS' => '426',
		'LV' => '428',
		'LB' => '422',
		'LR' => '430',
		'LY' => '434',
		'LI' => '438',
		'LT' => '440',
		'LU' => '442',
		'MO' => '446',
		'MK' => '807',
		'MG' => '450',
		'MY' => '458',
		'MW' => '454',
		'MV' => '462',
		'ML' => '466',
		'MT' => '470',
		'MA' => '504',
		'MQ' => '474',
		'MU' => '480',
		'MR' => '478',
		'YT' => '175',
		'MX' => '484',
		'FM' => '583',
		'MD' => '498',
		'MC' => '492',
		'MN' => '496',
		'ME' => '499',
		'MS' => '500',
		'MZ' => '508',
		'MM' => '104',
		'NA' => '516',
		'NR' => '520',
		'NP' => '524',
		'NI' => '558',
		'NE' => '562',
		'NG' => '566',
		'NU' => '570',
		'NF' => '574',
		'NO' => '578',
		'NC' => '540',
		'NZ' => '554',
		'OM' => '512',
		'NL' => '528',
		'PK' => '586',
		'PW' => '585',
		'PS' => '275',
		'PA' => '591',
		'PG' => '598',
		'PY' => '600',
		'PE' => '604',
		'PF' => '258',
		'PL' => '616',
		'PT' => '620',
		'PR' => '630',
		'GB' => '826',
		'EH' => '732',
		'CF' => '140',
		'CZ' => '203',
		'CG' => '178',
		'CD' => '180',
		'DO' => '214',
		'RE' => '638',
		'RW' => '646',
		'RO' => '642',
		'RU' => '643',
		'WS' => '882',
		'AS' => '16',
		'BL' => '652',
		'KN' => '659',
		'SM' => '674',
		'MF' => '663',
		'PM' => '666',
		'VC' => '670',
		'SH' => '654',
		'LC' => '662',
		'ST' => '678',
		'SN' => '686',
		'RS' => '688',
		'SC' => '690',
		'SL' => '694',
		'SG' => '702',
		'SX' => '534',
		'SY' => '760',
		'SO' => '706',
		'LK' => '144',
		'SZ' => '748',
		'ZA' => '710',
		'SD' => '729',
		'SS' => '728',
		'SE' => '752',
		'CH' => '756',
		'SR' => '740',
		'SJ' => '744',
		'TH' => '764',
		'TW' => '158',
		'TZ' => '834',
		'TJ' => '762',
		'IO' => '86',
		'TF' => '260',
		'TL' => '626',
		'TG' => '768',
		'TK' => '772',
		'TO' => '776',
		'TT' => '780',
		'TN' => '788',
		'TM' => '795',
		'TR' => '792',
		'TV' => '798',
		'UA' => '804',
		'UG' => '800',
		'UY' => '858',
		'UZ' => '860',
		'VU' => '548',
		'VA' => '336',
		'VE' => '862',
		'VN' => '704',
		'WF' => '876',
		'YE' => '887',
		'DJ' => '262',
		'ZM' => '894',
		'ZW' => '716',
	);
}
