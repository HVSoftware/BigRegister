<?php
/**
 * Created by PhpStorm.
 * User: HVSoftware
 * Date: 2-9-2019
 * Time: 15:28
 */

namespace BigRegister;

// https://zoeken.bigregister.nl/api/search/criteria?name=valk&dateOfBirth=09-02-1980
// https://zoeken.bigregister.nl/api/search/criteria?gender=2&initial=E&name=van%20der%20Valk&professionalGroup=17&specialismType=75&dateOfBirth=09-02-1980

// https://zoeken.bigregister.nl/api/search/registration/69064150217

/**
 * Class BigSearch
 * @package BigRegister
 */
class BigSearch
{
    const HTTPS_SEARCH_BIGREGISTER_NL_API = 'https://zoeken.bigregister.nl/api/search/';

    /**
     * @param array $array
     */
    public function searchByCriteria($array = [])
    {
        $url = self::HTTPS_SEARCH_BIGREGISTER_NL_API . 'criteria?';
        foreach ($array as $key => $value) {
            $url .= $key . '=' . $value . '&';
        }
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_exec($curl);
    }

    /**
     * @param $id
     */
    public function searchByRegistration($id)
    {
        $url = self::HTTPS_SEARCH_BIGREGISTER_NL_API . 'registration/' . $id;
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_exec($curl);
    }
}
