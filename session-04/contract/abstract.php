<?php
abstract class OnlineGetway {
    protected $options;
    public function __construct()
    {
        $this->options = array(
            'mellat' => array(
                'merchant' => 'jdhjhdjgd',
                'username' => 'shjhauheu',
                'password' => 'ieuiyeuyeiuyeuyey'
            ),
            'parsian' => array(
                'key_api' => 'ajkhshdhhduuh'
            ),
            'saman' => array(
                'username' => 'jhjhsisjij',
                'password' => 'dkjjiejiej'
            )
        );
    }

    abstract public function sendRequest();
    abstract public function verifyRequest();
}

class Mellat extends OnlineGetway{

    private $getway_name;
    private $getway_options;
    public function __construct()
    {
        $this->getway_name = 'mellat';

        parent::__construct();
        $this->getway_options = $this->options[$this->getway_name];
    }
    public function sendRequest()
    {
        var_dump($this->getway_options);
        // TODO: Implement sendRequest() method.
    }

    public function verifyRequest()
    {
        // TODO: Implement verifyRequest() method.
    }
}

$mellatObj = new Mellat();
$mellatObj->sendRequest();