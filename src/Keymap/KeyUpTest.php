<?php
namespace Keymap;

class KeyUpTest extends TestCase
{
    public static $browsers = array(
        // array(
        //     'browserName' => 'internet explorer',
        //     'desiredCapabilities' => array(
        //         'version' => '11',
        //         'platform' => 'Windows 8.1',
        //     )
        // ),
        // array(
        //     'browserName' => 'internet explorer',
        //     'desiredCapabilities' => array(
        //         'version' => '10',
        //         'platform' => 'Windows 8',
        //     )
        // ),
        // // array(
        // //     'browserName' => 'internet explorer',
        // //     'desiredCapabilities' => array(
        // //         'version' => '9',
        // //         'platform' => 'Windows 7',
        // //     )
        // // ),
        // // array(
        // //     'browserName' => 'internet explorer',
        // //     'desiredCapabilities' => array(
        // //         'version' => '8',
        // //         'platform' => 'Windows 7',
        // //     )
        // // ),
        // // array(
        // //     'browserName' => 'internet explorer',
        // //     'desiredCapabilities' => array(
        // //         'version' => '7',
        // //         'platform' => 'Windows XP',
        // //     )
        // // ),
        // // array(
        // //     'browserName' => 'internet explorer',
        // //     'desiredCapabilities' => array(
        // //         'version' => '6',
        // //         'platform' => 'Windows XP',
        // //     )
        // // ),
        // array(
        //     'browserName' => 'chrome',
        //     'desiredCapabilities' => array(
        //         'version' => '31',
        //         'platform' => 'Windows 8.1',
        //     )
        // ),
        // array(
        //     'browserName' => 'firefox',
        //     'desiredCapabilities' => array(
        //         'version' => '25',
        //         'platform' => 'Windows 8.1',
        //     )
        // ),
        // array(
        //     'browserName' => 'opera',
        //     'desiredCapabilities' => array(
        //         'version' => '12',
        //         'platform' => 'Windows 7',
        //     )
        // ),
        // // array(
        // //     'browserName' => 'safari',
        // //     'desiredCapabilities' => array(
        // //         'version' => '7',
        // //         'platform' => 'OS X 10.9',
        // //     )
        // // ),
    );

    public function setUpPage()
    {
        $this->url('https://s3-ap-northeast-1.amazonaws.com/logn.in/keymap/keyup.html');
    }

    /**
     * Send key and logging event attribute.
     */
    public function testKeyup()
    {
        parent::execute('keyup', 256);
    }


}
