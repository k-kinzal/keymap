<?php
namespace Keymap;

class KeyDownTest extends TestCase
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
        $this->url('https://s3-ap-northeast-1.amazonaws.com/logn.in/keymap/keydown.html');
    }

    public function test000() { parent::execute('keydown', 0); }
    public function test001() { parent::execute('keydown', 1); }
    public function test002() { parent::execute('keydown', 2); }
    public function test003() { parent::execute('keydown', 3); }
    public function test004() { parent::execute('keydown', 4); }
    public function test005() { parent::execute('keydown', 5); }
    public function test006() { parent::execute('keydown', 6); }
    public function test007() { parent::execute('keydown', 7); }
    public function test008() { parent::execute('keydown', 8); }
    public function test009() { parent::execute('keydown', 9); }
    public function test010() { parent::execute('keydown', 10); }
    public function test011() { parent::execute('keydown', 11); }
    public function test012() { parent::execute('keydown', 12); }
    public function test013() { parent::execute('keydown', 13); }
    public function test014() { parent::execute('keydown', 14); }
    public function test015() { parent::execute('keydown', 15); }
    public function test016() { parent::execute('keydown', 16); }
    public function test017() { parent::execute('keydown', 17); }
    public function test018() { parent::execute('keydown', 18); }
    public function test019() { parent::execute('keydown', 19); }
    public function test020() { parent::execute('keydown', 20); }
    public function test021() { parent::execute('keydown', 21); }
    public function test022() { parent::execute('keydown', 22); }
    public function test023() { parent::execute('keydown', 23); }
    public function test024() { parent::execute('keydown', 24); }
    public function test025() { parent::execute('keydown', 25); }
    public function test026() { parent::execute('keydown', 26); }
    public function test027() { parent::execute('keydown', 27); }
    public function test028() { parent::execute('keydown', 28); }
    public function test029() { parent::execute('keydown', 29); }
    public function test030() { parent::execute('keydown', 30); }
    public function test031() { parent::execute('keydown', 31); }
    public function test032() { parent::execute('keydown', 32); }
    public function test033() { parent::execute('keydown', 33); }
    public function test034() { parent::execute('keydown', 34); }
    public function test035() { parent::execute('keydown', 35); }
    public function test036() { parent::execute('keydown', 36); }
    public function test037() { parent::execute('keydown', 37); }
    public function test038() { parent::execute('keydown', 38); }
    public function test039() { parent::execute('keydown', 39); }
    public function test040() { parent::execute('keydown', 40); }
    public function test041() { parent::execute('keydown', 41); }
    public function test042() { parent::execute('keydown', 42); }
    public function test043() { parent::execute('keydown', 43); }
    public function test044() { parent::execute('keydown', 44); }
    public function test045() { parent::execute('keydown', 45); }
    public function test046() { parent::execute('keydown', 46); }
    public function test047() { parent::execute('keydown', 47); }
    public function test048() { parent::execute('keydown', 48); }
    public function test049() { parent::execute('keydown', 49); }
    public function test050() { parent::execute('keydown', 50); }
    public function test051() { parent::execute('keydown', 51); }
    public function test052() { parent::execute('keydown', 52); }
    public function test053() { parent::execute('keydown', 53); }
    public function test054() { parent::execute('keydown', 54); }
    public function test055() { parent::execute('keydown', 55); }
    public function test056() { parent::execute('keydown', 56); }
    public function test057() { parent::execute('keydown', 57); }
    public function test058() { parent::execute('keydown', 58); }
    public function test059() { parent::execute('keydown', 59); }
    public function test060() { parent::execute('keydown', 60); }
    public function test061() { parent::execute('keydown', 61); }
    public function test062() { parent::execute('keydown', 62); }
    public function test063() { parent::execute('keydown', 63); }
    public function test064() { parent::execute('keydown', 64); }
    public function test065() { parent::execute('keydown', 65); }
    public function test066() { parent::execute('keydown', 66); }
    public function test067() { parent::execute('keydown', 67); }
    public function test068() { parent::execute('keydown', 68); }
    public function test069() { parent::execute('keydown', 69); }
    public function test070() { parent::execute('keydown', 70); }
    public function test071() { parent::execute('keydown', 71); }
    public function test072() { parent::execute('keydown', 72); }
    public function test073() { parent::execute('keydown', 73); }
    public function test074() { parent::execute('keydown', 74); }
    public function test075() { parent::execute('keydown', 75); }
    public function test076() { parent::execute('keydown', 76); }
    public function test077() { parent::execute('keydown', 77); }
    public function test078() { parent::execute('keydown', 78); }
    public function test079() { parent::execute('keydown', 79); }
    public function test080() { parent::execute('keydown', 80); }
    public function test081() { parent::execute('keydown', 81); }
    public function test082() { parent::execute('keydown', 82); }
    public function test083() { parent::execute('keydown', 83); }
    public function test084() { parent::execute('keydown', 84); }
    public function test085() { parent::execute('keydown', 85); }
    public function test086() { parent::execute('keydown', 86); }
    public function test087() { parent::execute('keydown', 87); }
    public function test088() { parent::execute('keydown', 88); }
    public function test089() { parent::execute('keydown', 89); }
    public function test090() { parent::execute('keydown', 90); }
    public function test091() { parent::execute('keydown', 91); }
    public function test092() { parent::execute('keydown', 92); }
    public function test093() { parent::execute('keydown', 93); }
    public function test094() { parent::execute('keydown', 94); }
    public function test095() { parent::execute('keydown', 95); }
    public function test096() { parent::execute('keydown', 96); }
    public function test097() { parent::execute('keydown', 97); }
    public function test098() { parent::execute('keydown', 98); }
    public function test099() { parent::execute('keydown', 99); }
    public function test100() { parent::execute('keydown', 100); }
    public function test101() { parent::execute('keydown', 101); }
    public function test102() { parent::execute('keydown', 102); }
    public function test103() { parent::execute('keydown', 103); }
    public function test104() { parent::execute('keydown', 104); }
    public function test105() { parent::execute('keydown', 105); }
    public function test106() { parent::execute('keydown', 106); }
    public function test107() { parent::execute('keydown', 107); }
    public function test108() { parent::execute('keydown', 108); }
    public function test109() { parent::execute('keydown', 109); }
    public function test110() { parent::execute('keydown', 110); }
    public function test111() { parent::execute('keydown', 111); }
    public function test112() { parent::execute('keydown', 112); }
    public function test113() { parent::execute('keydown', 113); }
    public function test114() { parent::execute('keydown', 114); }
    public function test115() { parent::execute('keydown', 115); }
    public function test116() { parent::execute('keydown', 116); }
    public function test117() { parent::execute('keydown', 117); }
    public function test118() { parent::execute('keydown', 118); }
    public function test119() { parent::execute('keydown', 119); }
    public function test120() { parent::execute('keydown', 120); }
    public function test121() { parent::execute('keydown', 121); }
    public function test122() { parent::execute('keydown', 122); }
    public function test123() { parent::execute('keydown', 123); }
    public function test124() { parent::execute('keydown', 124); }
    public function test125() { parent::execute('keydown', 125); }
    public function test126() { parent::execute('keydown', 126); }
    public function test127() { parent::execute('keydown', 127); }
    public function test128() { parent::execute('keydown', 128); }
    public function test129() { parent::execute('keydown', 129); }
    public function test130() { parent::execute('keydown', 130); }
    public function test131() { parent::execute('keydown', 131); }
    public function test132() { parent::execute('keydown', 132); }
    public function test133() { parent::execute('keydown', 133); }
    public function test134() { parent::execute('keydown', 134); }
    public function test135() { parent::execute('keydown', 135); }
    public function test136() { parent::execute('keydown', 136); }
    public function test137() { parent::execute('keydown', 137); }
    public function test138() { parent::execute('keydown', 138); }
    public function test139() { parent::execute('keydown', 139); }
    public function test140() { parent::execute('keydown', 140); }
    public function test141() { parent::execute('keydown', 141); }
    public function test142() { parent::execute('keydown', 142); }
    public function test143() { parent::execute('keydown', 143); }
    public function test144() { parent::execute('keydown', 144); }
    public function test145() { parent::execute('keydown', 145); }
    public function test146() { parent::execute('keydown', 146); }
    public function test147() { parent::execute('keydown', 147); }
    public function test148() { parent::execute('keydown', 148); }
    public function test149() { parent::execute('keydown', 149); }
    public function test150() { parent::execute('keydown', 150); }
    public function test151() { parent::execute('keydown', 151); }
    public function test152() { parent::execute('keydown', 152); }
    public function test153() { parent::execute('keydown', 153); }
    public function test154() { parent::execute('keydown', 154); }
    public function test155() { parent::execute('keydown', 155); }
    public function test156() { parent::execute('keydown', 156); }
    public function test157() { parent::execute('keydown', 157); }
    public function test158() { parent::execute('keydown', 158); }
    public function test159() { parent::execute('keydown', 159); }
    public function test160() { parent::execute('keydown', 160); }
    public function test161() { parent::execute('keydown', 161); }
    public function test162() { parent::execute('keydown', 162); }
    public function test163() { parent::execute('keydown', 163); }
    public function test164() { parent::execute('keydown', 164); }
    public function test165() { parent::execute('keydown', 165); }
    public function test166() { parent::execute('keydown', 166); }
    public function test167() { parent::execute('keydown', 167); }
    public function test168() { parent::execute('keydown', 168); }
    public function test169() { parent::execute('keydown', 169); }
    public function test170() { parent::execute('keydown', 170); }
    public function test171() { parent::execute('keydown', 171); }
    public function test172() { parent::execute('keydown', 172); }
    public function test173() { parent::execute('keydown', 173); }
    public function test174() { parent::execute('keydown', 174); }
    public function test175() { parent::execute('keydown', 175); }
    public function test176() { parent::execute('keydown', 176); }
    public function test177() { parent::execute('keydown', 177); }
    public function test178() { parent::execute('keydown', 178); }
    public function test179() { parent::execute('keydown', 179); }
    public function test180() { parent::execute('keydown', 180); }
    public function test181() { parent::execute('keydown', 181); }
    public function test182() { parent::execute('keydown', 182); }
    public function test183() { parent::execute('keydown', 183); }
    public function test184() { parent::execute('keydown', 184); }
    public function test185() { parent::execute('keydown', 185); }
    public function test186() { parent::execute('keydown', 186); }
    public function test187() { parent::execute('keydown', 187); }
    public function test188() { parent::execute('keydown', 188); }
    public function test189() { parent::execute('keydown', 189); }
    public function test190() { parent::execute('keydown', 190); }
    public function test191() { parent::execute('keydown', 191); }
    public function test192() { parent::execute('keydown', 192); }
    public function test193() { parent::execute('keydown', 193); }
    public function test194() { parent::execute('keydown', 194); }
    public function test195() { parent::execute('keydown', 195); }
    public function test196() { parent::execute('keydown', 196); }
    public function test197() { parent::execute('keydown', 197); }
    public function test198() { parent::execute('keydown', 198); }
    public function test199() { parent::execute('keydown', 199); }
    public function test200() { parent::execute('keydown', 200); }
    public function test201() { parent::execute('keydown', 201); }
    public function test202() { parent::execute('keydown', 202); }
    public function test203() { parent::execute('keydown', 203); }
    public function test204() { parent::execute('keydown', 204); }
    public function test205() { parent::execute('keydown', 205); }
    public function test206() { parent::execute('keydown', 206); }
    public function test207() { parent::execute('keydown', 207); }
    public function test208() { parent::execute('keydown', 208); }
    public function test209() { parent::execute('keydown', 209); }
    public function test210() { parent::execute('keydown', 210); }
    public function test211() { parent::execute('keydown', 211); }
    public function test212() { parent::execute('keydown', 212); }
    public function test213() { parent::execute('keydown', 213); }
    public function test214() { parent::execute('keydown', 214); }
    public function test215() { parent::execute('keydown', 215); }
    public function test216() { parent::execute('keydown', 216); }
    public function test217() { parent::execute('keydown', 217); }
    public function test218() { parent::execute('keydown', 218); }
    public function test219() { parent::execute('keydown', 219); }
    public function test220() { parent::execute('keydown', 220); }
    public function test221() { parent::execute('keydown', 221); }
    public function test222() { parent::execute('keydown', 222); }
    public function test223() { parent::execute('keydown', 223); }
    public function test224() { parent::execute('keydown', 224); }
    public function test225() { parent::execute('keydown', 225); }
    public function test226() { parent::execute('keydown', 226); }
    public function test227() { parent::execute('keydown', 227); }
    public function test228() { parent::execute('keydown', 228); }
    public function test229() { parent::execute('keydown', 229); }
    public function test230() { parent::execute('keydown', 230); }
    public function test231() { parent::execute('keydown', 231); }
    public function test232() { parent::execute('keydown', 232); }
    public function test233() { parent::execute('keydown', 233); }
    public function test234() { parent::execute('keydown', 234); }
    public function test235() { parent::execute('keydown', 235); }
    public function test236() { parent::execute('keydown', 236); }
    public function test237() { parent::execute('keydown', 237); }
    public function test238() { parent::execute('keydown', 238); }
    public function test239() { parent::execute('keydown', 239); }
    public function test240() { parent::execute('keydown', 240); }
    public function test241() { parent::execute('keydown', 241); }
    public function test242() { parent::execute('keydown', 242); }
    public function test243() { parent::execute('keydown', 243); }
    public function test244() { parent::execute('keydown', 244); }
    public function test245() { parent::execute('keydown', 245); }
    public function test246() { parent::execute('keydown', 246); }
    public function test247() { parent::execute('keydown', 247); }
    public function test248() { parent::execute('keydown', 248); }
    public function test249() { parent::execute('keydown', 249); }
    public function test250() { parent::execute('keydown', 250); }
    public function test251() { parent::execute('keydown', 251); }
    public function test252() { parent::execute('keydown', 252); }
    public function test253() { parent::execute('keydown', 253); }
    public function test254() { parent::execute('keydown', 254); }
    public function test255() { parent::execute('keydown', 255); }
}
