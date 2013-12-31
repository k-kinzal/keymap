<?php

require_once 'vendor/autoload.php';

class WebDriverDemo extends Sauce\Sausage\WebDriverTestCase
{
    public static $browsers = array(
        array(
            'browserName' => 'internet explorer',
            'desiredCapabilities' => array(
                'version' => '11',
                'platform' => 'Windows 8.1',
            )
        ),
        array(
            'browserName' => 'internet explorer',
            'desiredCapabilities' => array(
                'version' => '10',
                'platform' => 'Windows 8',
            )
        ),
        array(
            'browserName' => 'internet explorer',
            'desiredCapabilities' => array(
                'version' => '10',
                'platform' => 'Windows 8',
            )
        ),
        array(
            'browserName' => 'internet explorer',
            'desiredCapabilities' => array(
                'version' => '9',
                'platform' => 'Windows 7',
            )
        ),
        array(
            'browserName' => 'internet explorer',
            'desiredCapabilities' => array(
                'version' => '6',
                'platform' => 'Windows XP',
            )
        ),
        array(
            'browserName' => 'chrome',
            'desiredCapabilities' => array(
                'version' => '31',
                'platform' => 'Windows 8.1',
            )
        ),
        array(
            'browserName' => 'firefox',
            'desiredCapabilities' => array(
                'version' => '25',
                'platform' => 'Windows 8.1',
            )
        ),
        array(
            'browserName' => 'opera',
            'desiredCapabilities' => array(
                'version' => '12',
                'platform' => 'Windows 7',
            )
        ),
        array(
            'browserName' => 'safari',
            'desiredCapabilities' => array(
                'version' => '7',
                'platform' => 'OS X 10.9',
            )
        ),
    );

    public function setUpPage()
    {
        $this->url('https://s3-ap-northeast-1.amazonaws.com/logn.in/keydown.html');
    }

    public function testKeydown()
    {
        for ($i = 0; $i <= 255; $i++)
        {
            $this->byId('input')->click();

            $unicodeChar = sprintf('\u%04x', $i);
            $char = json_decode('"'.$unicodeChar.'"');
            $this->keys($char);

            try
            {
                $this->dismissAlert();
            }
            catch (Exception $e)
            {
            }

            foreach (split("<br/>", $this->byId('target')->text()) as $index => $line)
            {
                if ($index != 0 && $line == "")
                {
                    continue;
                }
                $line = '"'.$unicodeChar.'", "'.addcslashes($char, "\0..\37").'", '.$line."\n";
                file_put_contents('logs/keydown_'.$this->getBrowser().'_'.$this->getDesiredCapabilities()['version'].'_'.$this->getDesiredCapabilities()['platform'], $line, FILE_APPEND);
            }

            $this->byId('target')->clear();
        }
    }


}
