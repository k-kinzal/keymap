<?php
namespace Keymap;

class TestCase extends \Sauce\Sausage\WebDriverTestCase
{
    /**
     * Send key and logging event attribute.
     */
    public function execute($name, $char)
    {
        // initialize.
        $input = $this->byId('input');
        $target = $this->byId('target');
        // clear textarea element.
        $target->clear();
        // active textbox element.
        $input->click();
        // send key.
        $unicodeChar = sprintf('\u%04x', $char);
        $char = json_decode('"'.$unicodeChar.'"');
        $this->keys($char);
        // fixed alert off on ie.
        try { $this->dismissAlert(); } catch (\Exception $e) { }
        // get result by javascript event.
        // fixed ie and other browser.
        $str = $target->text();
        $obj = json_decode('['.trim($str, ',').']', true); // $str format is {...},{...},
        // logging
        foreach ($obj as $index => $line) {
            $line['name'] = $name;
            $line['browser'] = $this->getBrowser();
            $line['version'] = $this->getDesiredCapabilities()['version'];
            $line['platform'] = $this->getDesiredCapabilities()['platform'];
            $line['no'] = $index;
            $line['unicode'] = $unicodeChar;
            $line['glyph'] = addcslashes($char, "\0..\32");

            \DB::insert($line);
        }
        $this->assertTrue(true);
    }


}
