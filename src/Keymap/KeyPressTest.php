<?php
namespace Keymap;

class KeyPressTest extends TestCase
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
        // array(
        //     'browserName' => 'internet explorer',
        //     'desiredCapabilities' => array(
        //         'version' => '9',
        //         'platform' => 'Windows 7',
        //     )
        // ),
        // array(
        //     'browserName' => 'internet explorer',
        //     'desiredCapabilities' => array(
        //         'version' => '8',
        //         'platform' => 'Windows 7',
        //     )
        // ),
        // array(
        //     'browserName' => 'internet explorer',
        //     'desiredCapabilities' => array(
        //         'version' => '7',
        //         'platform' => 'Windows XP',
        //     )
        // ),
        // array(
        //     'browserName' => 'internet explorer',
        //     'desiredCapabilities' => array(
        //         'version' => '6',
        //         'platform' => 'Windows XP',
        //     )
        // ),
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
        // array(
        //     'browserName' => 'safari',
        //     'desiredCapabilities' => array(
        //         'version' => '7',
        //         'platform' => 'OS X 10.9',
        //     )
        // ),
    );

    public function setUpPage()
    {
        $this->url('https://s3-ap-northeast-1.amazonaws.com/logn.in/keymap/keypress.html');
    }

    public function test000() { parent::execute('keypress', 0); }
    public function test001() { parent::execute('keypress', 1); }
    public function test002() { parent::execute('keypress', 2); }
    public function test003() { parent::execute('keypress', 3); }
    public function test004() { parent::execute('keypress', 4); }
    public function test005() { parent::execute('keypress', 5); }
    public function test006() { parent::execute('keypress', 6); }
    public function test007() { parent::execute('keypress', 7); }
    public function test008() { parent::execute('keypress', 8); }
    public function test009() { parent::execute('keypress', 9); }
    public function test010() { parent::execute('keypress', 10); }
    public function test011() { parent::execute('keypress', 11); }
    public function test012() { parent::execute('keypress', 12); }
    public function test013() { parent::execute('keypress', 13); }
    public function test014() { parent::execute('keypress', 14); }
    public function test015() { parent::execute('keypress', 15); }
    public function test016() { parent::execute('keypress', 16); }
    public function test017() { parent::execute('keypress', 17); }
    public function test018() { parent::execute('keypress', 18); }
    public function test019() { parent::execute('keypress', 19); }
    public function test020() { parent::execute('keypress', 20); }
    public function test021() { parent::execute('keypress', 21); }
    public function test022() { parent::execute('keypress', 22); }
    public function test023() { parent::execute('keypress', 23); }
    public function test024() { parent::execute('keypress', 24); }
    public function test025() { parent::execute('keypress', 25); }
    public function test026() { parent::execute('keypress', 26); }
    public function test027() { parent::execute('keypress', 27); }
    public function test028() { parent::execute('keypress', 28); }
    public function test029() { parent::execute('keypress', 29); }
    public function test030() { parent::execute('keypress', 30); }
    public function test031() { parent::execute('keypress', 31); }
    public function test032() { parent::execute('keypress', 32); }
    public function test033() { parent::execute('keypress', 33); }
    public function test034() { parent::execute('keypress', 34); }
    public function test035() { parent::execute('keypress', 35); }
    public function test036() { parent::execute('keypress', 36); }
    public function test037() { parent::execute('keypress', 37); }
    public function test038() { parent::execute('keypress', 38); }
    public function test039() { parent::execute('keypress', 39); }
    public function test040() { parent::execute('keypress', 40); }
    public function test041() { parent::execute('keypress', 41); }
    public function test042() { parent::execute('keypress', 42); }
    public function test043() { parent::execute('keypress', 43); }
    public function test044() { parent::execute('keypress', 44); }
    public function test045() { parent::execute('keypress', 45); }
    public function test046() { parent::execute('keypress', 46); }
    public function test047() { parent::execute('keypress', 47); }
    public function test048() { parent::execute('keypress', 48); }
    public function test049() { parent::execute('keypress', 49); }
    public function test050() { parent::execute('keypress', 50); }
    public function test051() { parent::execute('keypress', 51); }
    public function test052() { parent::execute('keypress', 52); }
    public function test053() { parent::execute('keypress', 53); }
    public function test054() { parent::execute('keypress', 54); }
    public function test055() { parent::execute('keypress', 55); }
    public function test056() { parent::execute('keypress', 56); }
    public function test057() { parent::execute('keypress', 57); }
    public function test058() { parent::execute('keypress', 58); }
    public function test059() { parent::execute('keypress', 59); }
    public function test060() { parent::execute('keypress', 60); }
    public function test061() { parent::execute('keypress', 61); }
    public function test062() { parent::execute('keypress', 62); }
    public function test063() { parent::execute('keypress', 63); }
    public function test064() { parent::execute('keypress', 64); }
    public function test065() { parent::execute('keypress', 65); }
    public function test066() { parent::execute('keypress', 66); }
    public function test067() { parent::execute('keypress', 67); }
    public function test068() { parent::execute('keypress', 68); }
    public function test069() { parent::execute('keypress', 69); }
    public function test070() { parent::execute('keypress', 70); }
    public function test071() { parent::execute('keypress', 71); }
    public function test072() { parent::execute('keypress', 72); }
    public function test073() { parent::execute('keypress', 73); }
    public function test074() { parent::execute('keypress', 74); }
    public function test075() { parent::execute('keypress', 75); }
    public function test076() { parent::execute('keypress', 76); }
    public function test077() { parent::execute('keypress', 77); }
    public function test078() { parent::execute('keypress', 78); }
    public function test079() { parent::execute('keypress', 79); }
    public function test080() { parent::execute('keypress', 80); }
    public function test081() { parent::execute('keypress', 81); }
    public function test082() { parent::execute('keypress', 82); }
    public function test083() { parent::execute('keypress', 83); }
    public function test084() { parent::execute('keypress', 84); }
    public function test085() { parent::execute('keypress', 85); }
    public function test086() { parent::execute('keypress', 86); }
    public function test087() { parent::execute('keypress', 87); }
    public function test088() { parent::execute('keypress', 88); }
    public function test089() { parent::execute('keypress', 89); }
    public function test090() { parent::execute('keypress', 90); }
    public function test091() { parent::execute('keypress', 91); }
    public function test092() { parent::execute('keypress', 92); }
    public function test093() { parent::execute('keypress', 93); }
    public function test094() { parent::execute('keypress', 94); }
    public function test095() { parent::execute('keypress', 95); }
    public function test096() { parent::execute('keypress', 96); }
    public function test097() { parent::execute('keypress', 97); }
    public function test098() { parent::execute('keypress', 98); }
    public function test099() { parent::execute('keypress', 99); }
    public function test100() { parent::execute('keypress', 100); }
    public function test101() { parent::execute('keypress', 101); }
    public function test102() { parent::execute('keypress', 102); }
    public function test103() { parent::execute('keypress', 103); }
    public function test104() { parent::execute('keypress', 104); }
    public function test105() { parent::execute('keypress', 105); }
    public function test106() { parent::execute('keypress', 106); }
    public function test107() { parent::execute('keypress', 107); }
    public function test108() { parent::execute('keypress', 108); }
    public function test109() { parent::execute('keypress', 109); }
    public function test110() { parent::execute('keypress', 110); }
    public function test111() { parent::execute('keypress', 111); }
    public function test112() { parent::execute('keypress', 112); }
    public function test113() { parent::execute('keypress', 113); }
    public function test114() { parent::execute('keypress', 114); }
    public function test115() { parent::execute('keypress', 115); }
    public function test116() { parent::execute('keypress', 116); }
    public function test117() { parent::execute('keypress', 117); }
    public function test118() { parent::execute('keypress', 118); }
    public function test119() { parent::execute('keypress', 119); }
    public function test120() { parent::execute('keypress', 120); }
    public function test121() { parent::execute('keypress', 121); }
    public function test122() { parent::execute('keypress', 122); }
    public function test123() { parent::execute('keypress', 123); }
    public function test124() { parent::execute('keypress', 124); }
    public function test125() { parent::execute('keypress', 125); }
    public function test126() { parent::execute('keypress', 126); }
    public function test127() { parent::execute('keypress', 127); }
    public function test128() { parent::execute('keypress', 128); }
    public function test129() { parent::execute('keypress', 129); }
    public function test130() { parent::execute('keypress', 130); }
    public function test131() { parent::execute('keypress', 131); }
    public function test132() { parent::execute('keypress', 132); }
    public function test133() { parent::execute('keypress', 133); }
    public function test134() { parent::execute('keypress', 134); }
    public function test135() { parent::execute('keypress', 135); }
    public function test136() { parent::execute('keypress', 136); }
    public function test137() { parent::execute('keypress', 137); }
    public function test138() { parent::execute('keypress', 138); }
    public function test139() { parent::execute('keypress', 139); }
    public function test140() { parent::execute('keypress', 140); }
    public function test141() { parent::execute('keypress', 141); }
    public function test142() { parent::execute('keypress', 142); }
    public function test143() { parent::execute('keypress', 143); }
    public function test144() { parent::execute('keypress', 144); }
    public function test145() { parent::execute('keypress', 145); }
    public function test146() { parent::execute('keypress', 146); }
    public function test147() { parent::execute('keypress', 147); }
    public function test148() { parent::execute('keypress', 148); }
    public function test149() { parent::execute('keypress', 149); }
    public function test150() { parent::execute('keypress', 150); }
    public function test151() { parent::execute('keypress', 151); }
    public function test152() { parent::execute('keypress', 152); }
    public function test153() { parent::execute('keypress', 153); }
    public function test154() { parent::execute('keypress', 154); }
    public function test155() { parent::execute('keypress', 155); }
    public function test156() { parent::execute('keypress', 156); }
    public function test157() { parent::execute('keypress', 157); }
    public function test158() { parent::execute('keypress', 158); }
    public function test159() { parent::execute('keypress', 159); }
    public function test160() { parent::execute('keypress', 160); }
    public function test161() { parent::execute('keypress', 161); }
    public function test162() { parent::execute('keypress', 162); }
    public function test163() { parent::execute('keypress', 163); }
    public function test164() { parent::execute('keypress', 164); }
    public function test165() { parent::execute('keypress', 165); }
    public function test166() { parent::execute('keypress', 166); }
    public function test167() { parent::execute('keypress', 167); }
    public function test168() { parent::execute('keypress', 168); }
    public function test169() { parent::execute('keypress', 169); }
    public function test170() { parent::execute('keypress', 170); }
    public function test171() { parent::execute('keypress', 171); }
    public function test172() { parent::execute('keypress', 172); }
    public function test173() { parent::execute('keypress', 173); }
    public function test174() { parent::execute('keypress', 174); }
    public function test175() { parent::execute('keypress', 175); }
    public function test176() { parent::execute('keypress', 176); }
    public function test177() { parent::execute('keypress', 177); }
    public function test178() { parent::execute('keypress', 178); }
    public function test179() { parent::execute('keypress', 179); }
    public function test180() { parent::execute('keypress', 180); }
    public function test181() { parent::execute('keypress', 181); }
    public function test182() { parent::execute('keypress', 182); }
    public function test183() { parent::execute('keypress', 183); }
    public function test184() { parent::execute('keypress', 184); }
    public function test185() { parent::execute('keypress', 185); }
    public function test186() { parent::execute('keypress', 186); }
    public function test187() { parent::execute('keypress', 187); }
    public function test188() { parent::execute('keypress', 188); }
    public function test189() { parent::execute('keypress', 189); }
    public function test190() { parent::execute('keypress', 190); }
    public function test191() { parent::execute('keypress', 191); }
    public function test192() { parent::execute('keypress', 192); }
    public function test193() { parent::execute('keypress', 193); }
    public function test194() { parent::execute('keypress', 194); }
    public function test195() { parent::execute('keypress', 195); }
    public function test196() { parent::execute('keypress', 196); }
    public function test197() { parent::execute('keypress', 197); }
    public function test198() { parent::execute('keypress', 198); }
    public function test199() { parent::execute('keypress', 199); }
    public function test200() { parent::execute('keypress', 200); }
    public function test201() { parent::execute('keypress', 201); }
    public function test202() { parent::execute('keypress', 202); }
    public function test203() { parent::execute('keypress', 203); }
    public function test204() { parent::execute('keypress', 204); }
    public function test205() { parent::execute('keypress', 205); }
    public function test206() { parent::execute('keypress', 206); }
    public function test207() { parent::execute('keypress', 207); }
    public function test208() { parent::execute('keypress', 208); }
    public function test209() { parent::execute('keypress', 209); }
    public function test210() { parent::execute('keypress', 210); }
    public function test211() { parent::execute('keypress', 211); }
    public function test212() { parent::execute('keypress', 212); }
    public function test213() { parent::execute('keypress', 213); }
    public function test214() { parent::execute('keypress', 214); }
    public function test215() { parent::execute('keypress', 215); }
    public function test216() { parent::execute('keypress', 216); }
    public function test217() { parent::execute('keypress', 217); }
    public function test218() { parent::execute('keypress', 218); }
    public function test219() { parent::execute('keypress', 219); }
    public function test220() { parent::execute('keypress', 220); }
    public function test221() { parent::execute('keypress', 221); }
    public function test222() { parent::execute('keypress', 222); }
    public function test223() { parent::execute('keypress', 223); }
    public function test224() { parent::execute('keypress', 224); }
    public function test225() { parent::execute('keypress', 225); }
    public function test226() { parent::execute('keypress', 226); }
    public function test227() { parent::execute('keypress', 227); }
    public function test228() { parent::execute('keypress', 228); }
    public function test229() { parent::execute('keypress', 229); }
    public function test230() { parent::execute('keypress', 230); }
    public function test231() { parent::execute('keypress', 231); }
    public function test232() { parent::execute('keypress', 232); }
    public function test233() { parent::execute('keypress', 233); }
    public function test234() { parent::execute('keypress', 234); }
    public function test235() { parent::execute('keypress', 235); }
    public function test236() { parent::execute('keypress', 236); }
    public function test237() { parent::execute('keypress', 237); }
    public function test238() { parent::execute('keypress', 238); }
    public function test239() { parent::execute('keypress', 239); }
    public function test240() { parent::execute('keypress', 240); }
    public function test241() { parent::execute('keypress', 241); }
    public function test242() { parent::execute('keypress', 242); }
    public function test243() { parent::execute('keypress', 243); }
    public function test244() { parent::execute('keypress', 244); }
    public function test245() { parent::execute('keypress', 245); }
    public function test246() { parent::execute('keypress', 246); }
    public function test247() { parent::execute('keypress', 247); }
    public function test248() { parent::execute('keypress', 248); }
    public function test249() { parent::execute('keypress', 249); }
    public function test250() { parent::execute('keypress', 250); }
    public function test251() { parent::execute('keypress', 251); }
    public function test252() { parent::execute('keypress', 252); }
    public function test253() { parent::execute('keypress', 253); }
    public function test254() { parent::execute('keypress', 254); }
    public function test255() { parent::execute('keypress', 255); }


}
