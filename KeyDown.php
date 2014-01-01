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
                'version' => '9',
                'platform' => 'Windows 7',
            )
        ),
        array(
            'browserName' => 'internet explorer',
            'desiredCapabilities' => array(
                'version' => '8',
                'platform' => 'Windows 7',
            )
        ),
        array(
            'browserName' => 'internet explorer',
            'desiredCapabilities' => array(
                'version' => '7',
                'platform' => 'Windows XP',
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

    /**
     * Send key and logging event attribute.
     */
    public function testKeydown()
    {
        $text = '';
        $prev = '';

        // U+0000 - U+00FF 255
        // U+0000 - U+FFFF 65535
        for ($i = 0; $i <= 255; $i++)
        {
            $this->byId('input')->click();

            $unicodeChar = sprintf('\u%04x', $i);
            $char = json_decode('"'.$unicodeChar.'"');
            $this->keys($char);

            // fixed ie
            try
            {
                $this->dismissAlert();
            }
            catch (Exception $e)
            {
            }

			$this->byId('target')->click();

            // fixed ie and other browser
            if ($this->getBrowser() == 'internet explorer') {
                $text = $this->byId('target')->text(); // get last send key
            } else {
                $text = $this->byId('target')->text(); // get all send key
                $s = str_replace($prev, '', $text);
                $prev = $text;
                $text = $s;
            }

            // write log
            foreach (split("<br/>", $text) as $index => $line)
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
