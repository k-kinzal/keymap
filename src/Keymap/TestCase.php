<?php
namespace KeyMap;

class TestCase extends \Sauce\Sausage\WebDriverTestCase
{
    /**
     * Send key and logging event attribute.
     */
    public function execute($name, $length)
    {
        // initialize.
        $input = $this->byId('input');
        $target = $this->byId('target');
        $str = ''; $prev = '';
        // send keys U+0000 - length.
        // U+0000 - U+00FF 255
        // U+0000 - U+FFFF 65535
        for ($i = 0; $i <= $length; $i++)
        {
            // clear textarea element.
            $target->clear();
            // active textbox element.
            $input->click();
            // send key.
            $unicodeChar = sprintf('\u%04x', $i);
            $char = json_decode('"'.$unicodeChar.'"');
            $this->keys($char);
            // fixed alert off on ie.
            try { $this->dismissAlert();} catch (Exception $e) { }
            // get result by javascript event.
            // fixed ie and other browser.
            if ($this->getBrowser() == 'internet explorer') {
                $str = $target->text(); // get last send key
            } else {
                $str = $target->text(); // get all send key
                $s = str_replace($prev, '', $str);
                $prev = $str;
                $str = $s;
            }
            file_put_contents('log', '['.trim($str, ',').']'."\n");
            $obj = json_decode('['.trim($str, ',').']', true); // $str format is {...},{...},
            // logging
            foreach ($obj as $index => $line)
            {
                file_put_contents('log', print_r($line, true), FILE_APPEND);
                $line['name'] = $name;
                $line['browser'] = $this->getBrowser();
                $line['version'] = $this->getDesiredCapabilities()['version'];
                $line['platform'] = $this->getDesiredCapabilities()['platform'];
                $line['index'] = $index;
                $line['unicode'] = $unicodeChar;
                $line['glyph'] = addcslashes($char, "\0..\32");

                \DB::insert($line);
            }
        }
    }


}
