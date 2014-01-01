<?php
namespace Keymap;

class KeyPressTest extends TestCase
{
    public static $browsers = array(
        // // array(
        // //     'browserName' => 'internet explorer',
        // //     'desiredCapabilities' => array(
        // //         'version' => '11',
        // //         'platform' => 'Windows 8.1',
        // //         'build' => $_ENV['TRAVIS_JOB_ID'],
        // //     )
        // // ),
        // // array(
        // //     'browserName' => 'internet explorer',
        // //     'desiredCapabilities' => array(
        // //         'version' => '10',
        // //         'platform' => 'Windows 8',
        // //         'build' => $_ENV['TRAVIS_JOB_ID'],
        // //     )
        // // ),
        // // array(
        // //     'browserName' => 'internet explorer',
        // //     'desiredCapabilities' => array(
        // //         'version' => '9',
        // //         'platform' => 'Windows 7',
        // //         'build' => $_ENV['TRAVIS_JOB_ID'],
        // //     )
        // // ),
        // // array(
        // //     'browserName' => 'internet explorer',
        // //     'desiredCapabilities' => array(
        // //         'version' => '8',
        // //         'platform' => 'Windows 7',
        // //         'build' => $_ENV['TRAVIS_JOB_ID'],
        // //     )
        // // ),
        // // array(
        // //     'browserName' => 'internet explorer',
        // //     'desiredCapabilities' => array(
        // //         'version' => '7',
        // //         'platform' => 'Windows XP',
        // //         'build' => $_ENV['TRAVIS_JOB_ID'],
        // //     )
        // // ),
        // // array(
        // //     'browserName' => 'internet explorer',
        // //     'desiredCapabilities' => array(
        // //         'version' => '6',
        // //         'platform' => 'Windows XP',
        // //         'build' => $_ENV['TRAVIS_JOB_ID'],
        // //     )
        // // ),
        // array(
        //     'browserName' => 'chrome',
        //     'desiredCapabilities' => array(
        //         'version' => '31',
        //         'platform' => 'Windows 8.1',
        //         'build' => $_ENV['TRAVIS_JOB_ID'],
        //     )
        // ),
        // array(
        //     'browserName' => 'firefox',
        //     'desiredCapabilities' => array(
        //         'version' => '25',
        //         'platform' => 'Windows 8.1',
        //         'build' => $_ENV['TRAVIS_JOB_ID'],
        //     )
        // ),
        // array(
        //     'browserName' => 'opera',
        //     'desiredCapabilities' => array(
        //         'version' => '12',
        //         'platform' => 'Windows 7',
        //         'build' => $_ENV['TRAVIS_JOB_ID'],
        //     )
        // ),
        // // array(
        // //     'browserName' => 'safari',
        // //     'desiredCapabilities' => array(
        // //         'version' => '7',
        // //         'platform' => 'OS X 10.9',
        // //         'build' => $_ENV['TRAVIS_JOB_ID'],
        // //     )
        // // ),
    );

    public function setUpPage()
    {
        $this->url('https://s3-ap-northeast-1.amazonaws.com/logn.in/keymap/keypress.html');
    }

    /**
     * Send key and logging event attribute.
     */
    public function testKeyPress()
    {
        parent::execute('keypress', 256);
    }


}
