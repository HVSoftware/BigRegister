<?php
/**
 * Created by PhpStorm.
 * User: HVSoftware
 * Date: 2-9-2019
 * Time: 15:28
 */

namespace BigRegister;

/**
 * Class BigSearch
 * @package BigRegister
 */
class BigSearch
{
    const HTTPS_SEARCH_BIG_REGISTER_NL_API = 'https://zoeken.bigregister.nl/api/search/';

    private $curl;

    /**
     * BigSearch constructor.
     */
    public function __construct()
    {
        $this->curl = curl_init();
    }

    /**
     * Valid criteria values:
     * - name
     * - dateOfBirth (in format DD-MM-YYYY)
     * - gender (where mail is 1 and female is 2)
     * - initial
     * - name
     * - professionalGroup
     * - specialismType
     *
     * @param array $array
     */
    public function searchByCriteria($array = [])
    {
        $url = self::HTTPS_SEARCH_BIG_REGISTER_NL_API . 'criteria?';

        foreach ($array as $key => $value) {
            $url .= $key . '=' . $value . '&';
        }

        $this->curlExecute($url);
    }

    /**
     * @param $id
     */
    public function searchByRegistration($id)
    {
        $url = self::HTTPS_SEARCH_BIG_REGISTER_NL_API . 'registration/' . $id;

        $this->curlExecute($url);
    }

    /**
     * @param string $url
     */
    protected function curlExecute(string $url): void
    {
        curl_setopt($this->curl, CURLOPT_URL, $url);
        curl_exec($this->curl);
    }
}
