<?php
/**
 * Created by PhpStorm.
 * User: )0(
 * Date: 03.02.2019
 * Time: 6:16
 */

class Router
{

    private $router;
    private $urlData;

    /**
     * @return mixed
     */
    public function getRouter()
    {
        return $this->router;
    }

    /**
     * @param mixed $router
     */
    public function setRouter($router): void
    {
        $this->router = $router;
    }

    /**
     * @return array
     */
    public function getUrlData(): array
    {
        return $this->urlData;
    }

    /**
     * @param array $urlData
     */
    public function setUrlData(array $urlData): void
    {
        $this->urlData = $urlData;
    }

    /**
     * Router constructor.
     * @param $router
     */
    public function __construct($urls)
    {
        $this->router = $urls[0];
        $this->urlData = array_slice($urls, 1);
    }

    public function toJson($method, $urlData, $formData)
    {
        if ($method === 'GET' && count($this->urlData) === 1) {
            $id = $urlData[0];

            new DBHelper('', '', '', '') . read();

            echo json_encode(array(
                'method' => 'GET',
                'id' => $id,
                'good' => 'phone',
                'price' => 10000
            ));
        }
        return;

        header('HTTP/1.0 400 Bad Request');
        echo json_encode(array(
            'error' => 'Bad Request'
        ));
    }


}

?>
