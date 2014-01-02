<?php
namespace Keymap;

class KeyUpTest extends TestCase
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
        $this->url('https://s3-ap-northeast-1.amazonaws.com/logn.in/keymap/keyup.html');
    }

    public function test000() { parent::execute('keyup', 0); }
    public function test001() { parent::execute('keyup', 1); }
    public function test002() { parent::execute('keyup', 2); }
    public function test003() { parent::execute('keyup', 3); }
    public function test004() { parent::execute('keyup', 4); }
    public function test005() { parent::execute('keyup', 5); }
    public function test006() { parent::execute('keyup', 6); }
    public function test007() { parent::execute('keyup', 7); }
    public function test008() { parent::execute('keyup', 8); }
    public function test009() { parent::execute('keyup', 9); }
    public function test010() { parent::execute('keyup', 10); }
    public function test011() { parent::execute('keyup', 11); }
    public function test012() { parent::execute('keyup', 12); }
    public function test013() { parent::execute('keyup', 13); }
    public function test014() { parent::execute('keyup', 14); }
    public function test015() { parent::execute('keyup', 15); }
    public function test016() { parent::execute('keyup', 16); }
    public function test017() { parent::execute('keyup', 17); }
    public function test018() { parent::execute('keyup', 18); }
    public function test019() { parent::execute('keyup', 19); }
    public function test020() { parent::execute('keyup', 20); }
    public function test021() { parent::execute('keyup', 21); }
    public function test022() { parent::execute('keyup', 22); }
    public function test023() { parent::execute('keyup', 23); }
    public function test024() { parent::execute('keyup', 24); }
    public function test025() { parent::execute('keyup', 25); }
    public function test026() { parent::execute('keyup', 26); }
    public function test027() { parent::execute('keyup', 27); }
    public function test028() { parent::execute('keyup', 28); }
    public function test029() { parent::execute('keyup', 29); }
    public function test030() { parent::execute('keyup', 30); }
    public function test031() { parent::execute('keyup', 31); }
    public function test032() { parent::execute('keyup', 32); }
    public function test033() { parent::execute('keyup', 33); }
    public function test034() { parent::execute('keyup', 34); }
    public function test035() { parent::execute('keyup', 35); }
    public function test036() { parent::execute('keyup', 36); }
    public function test037() { parent::execute('keyup', 37); }
    public function test038() { parent::execute('keyup', 38); }
    public function test039() { parent::execute('keyup', 39); }
    public function test040() { parent::execute('keyup', 40); }
    public function test041() { parent::execute('keyup', 41); }
    public function test042() { parent::execute('keyup', 42); }
    public function test043() { parent::execute('keyup', 43); }
    public function test044() { parent::execute('keyup', 44); }
    public function test045() { parent::execute('keyup', 45); }
    public function test046() { parent::execute('keyup', 46); }
    public function test047() { parent::execute('keyup', 47); }
    public function test048() { parent::execute('keyup', 48); }
    public function test049() { parent::execute('keyup', 49); }
    public function test050() { parent::execute('keyup', 50); }
    public function test051() { parent::execute('keyup', 51); }
    public function test052() { parent::execute('keyup', 52); }
    public function test053() { parent::execute('keyup', 53); }
    public function test054() { parent::execute('keyup', 54); }
    public function test055() { parent::execute('keyup', 55); }
    public function test056() { parent::execute('keyup', 56); }
    public function test057() { parent::execute('keyup', 57); }
    public function test058() { parent::execute('keyup', 58); }
    public function test059() { parent::execute('keyup', 59); }
    public function test060() { parent::execute('keyup', 60); }
    public function test061() { parent::execute('keyup', 61); }
    public function test062() { parent::execute('keyup', 62); }
    public function test063() { parent::execute('keyup', 63); }
    public function test064() { parent::execute('keyup', 64); }
    public function test065() { parent::execute('keyup', 65); }
    public function test066() { parent::execute('keyup', 66); }
    public function test067() { parent::execute('keyup', 67); }
    public function test068() { parent::execute('keyup', 68); }
    public function test069() { parent::execute('keyup', 69); }
    public function test070() { parent::execute('keyup', 70); }
    public function test071() { parent::execute('keyup', 71); }
    public function test072() { parent::execute('keyup', 72); }
    public function test073() { parent::execute('keyup', 73); }
    public function test074() { parent::execute('keyup', 74); }
    public function test075() { parent::execute('keyup', 75); }
    public function test076() { parent::execute('keyup', 76); }
    public function test077() { parent::execute('keyup', 77); }
    public function test078() { parent::execute('keyup', 78); }
    public function test079() { parent::execute('keyup', 79); }
    public function test080() { parent::execute('keyup', 80); }
    public function test081() { parent::execute('keyup', 81); }
    public function test082() { parent::execute('keyup', 82); }
    public function test083() { parent::execute('keyup', 83); }
    public function test084() { parent::execute('keyup', 84); }
    public function test085() { parent::execute('keyup', 85); }
    public function test086() { parent::execute('keyup', 86); }
    public function test087() { parent::execute('keyup', 87); }
    public function test088() { parent::execute('keyup', 88); }
    public function test089() { parent::execute('keyup', 89); }
    public function test090() { parent::execute('keyup', 90); }
    public function test091() { parent::execute('keyup', 91); }
    public function test092() { parent::execute('keyup', 92); }
    public function test093() { parent::execute('keyup', 93); }
    public function test094() { parent::execute('keyup', 94); }
    public function test095() { parent::execute('keyup', 95); }
    public function test096() { parent::execute('keyup', 96); }
    public function test097() { parent::execute('keyup', 97); }
    public function test098() { parent::execute('keyup', 98); }
    public function test099() { parent::execute('keyup', 99); }
    public function test100() { parent::execute('keyup', 100); }
    public function test101() { parent::execute('keyup', 101); }
    public function test102() { parent::execute('keyup', 102); }
    public function test103() { parent::execute('keyup', 103); }
    public function test104() { parent::execute('keyup', 104); }
    public function test105() { parent::execute('keyup', 105); }
    public function test106() { parent::execute('keyup', 106); }
    public function test107() { parent::execute('keyup', 107); }
    public function test108() { parent::execute('keyup', 108); }
    public function test109() { parent::execute('keyup', 109); }
    public function test110() { parent::execute('keyup', 110); }
    public function test111() { parent::execute('keyup', 111); }
    public function test112() { parent::execute('keyup', 112); }
    public function test113() { parent::execute('keyup', 113); }
    public function test114() { parent::execute('keyup', 114); }
    public function test115() { parent::execute('keyup', 115); }
    public function test116() { parent::execute('keyup', 116); }
    public function test117() { parent::execute('keyup', 117); }
    public function test118() { parent::execute('keyup', 118); }
    public function test119() { parent::execute('keyup', 119); }
    public function test120() { parent::execute('keyup', 120); }
    public function test121() { parent::execute('keyup', 121); }
    public function test122() { parent::execute('keyup', 122); }
    public function test123() { parent::execute('keyup', 123); }
    public function test124() { parent::execute('keyup', 124); }
    public function test125() { parent::execute('keyup', 125); }
    public function test126() { parent::execute('keyup', 126); }
    public function test127() { parent::execute('keyup', 127); }
    public function test128() { parent::execute('keyup', 128); }
    public function test129() { parent::execute('keyup', 129); }
    public function test130() { parent::execute('keyup', 130); }
    public function test131() { parent::execute('keyup', 131); }
    public function test132() { parent::execute('keyup', 132); }
    public function test133() { parent::execute('keyup', 133); }
    public function test134() { parent::execute('keyup', 134); }
    public function test135() { parent::execute('keyup', 135); }
    public function test136() { parent::execute('keyup', 136); }
    public function test137() { parent::execute('keyup', 137); }
    public function test138() { parent::execute('keyup', 138); }
    public function test139() { parent::execute('keyup', 139); }
    public function test140() { parent::execute('keyup', 140); }
    public function test141() { parent::execute('keyup', 141); }
    public function test142() { parent::execute('keyup', 142); }
    public function test143() { parent::execute('keyup', 143); }
    public function test144() { parent::execute('keyup', 144); }
    public function test145() { parent::execute('keyup', 145); }
    public function test146() { parent::execute('keyup', 146); }
    public function test147() { parent::execute('keyup', 147); }
    public function test148() { parent::execute('keyup', 148); }
    public function test149() { parent::execute('keyup', 149); }
    public function test150() { parent::execute('keyup', 150); }
    public function test151() { parent::execute('keyup', 151); }
    public function test152() { parent::execute('keyup', 152); }
    public function test153() { parent::execute('keyup', 153); }
    public function test154() { parent::execute('keyup', 154); }
    public function test155() { parent::execute('keyup', 155); }
    public function test156() { parent::execute('keyup', 156); }
    public function test157() { parent::execute('keyup', 157); }
    public function test158() { parent::execute('keyup', 158); }
    public function test159() { parent::execute('keyup', 159); }
    public function test160() { parent::execute('keyup', 160); }
    public function test161() { parent::execute('keyup', 161); }
    public function test162() { parent::execute('keyup', 162); }
    public function test163() { parent::execute('keyup', 163); }
    public function test164() { parent::execute('keyup', 164); }
    public function test165() { parent::execute('keyup', 165); }
    public function test166() { parent::execute('keyup', 166); }
    public function test167() { parent::execute('keyup', 167); }
    public function test168() { parent::execute('keyup', 168); }
    public function test169() { parent::execute('keyup', 169); }
    public function test170() { parent::execute('keyup', 170); }
    public function test171() { parent::execute('keyup', 171); }
    public function test172() { parent::execute('keyup', 172); }
    public function test173() { parent::execute('keyup', 173); }
    public function test174() { parent::execute('keyup', 174); }
    public function test175() { parent::execute('keyup', 175); }
    public function test176() { parent::execute('keyup', 176); }
    public function test177() { parent::execute('keyup', 177); }
    public function test178() { parent::execute('keyup', 178); }
    public function test179() { parent::execute('keyup', 179); }
    public function test180() { parent::execute('keyup', 180); }
    public function test181() { parent::execute('keyup', 181); }
    public function test182() { parent::execute('keyup', 182); }
    public function test183() { parent::execute('keyup', 183); }
    public function test184() { parent::execute('keyup', 184); }
    public function test185() { parent::execute('keyup', 185); }
    public function test186() { parent::execute('keyup', 186); }
    public function test187() { parent::execute('keyup', 187); }
    public function test188() { parent::execute('keyup', 188); }
    public function test189() { parent::execute('keyup', 189); }
    public function test190() { parent::execute('keyup', 190); }
    public function test191() { parent::execute('keyup', 191); }
    public function test192() { parent::execute('keyup', 192); }
    public function test193() { parent::execute('keyup', 193); }
    public function test194() { parent::execute('keyup', 194); }
    public function test195() { parent::execute('keyup', 195); }
    public function test196() { parent::execute('keyup', 196); }
    public function test197() { parent::execute('keyup', 197); }
    public function test198() { parent::execute('keyup', 198); }
    public function test199() { parent::execute('keyup', 199); }
    public function test200() { parent::execute('keyup', 200); }
    public function test201() { parent::execute('keyup', 201); }
    public function test202() { parent::execute('keyup', 202); }
    public function test203() { parent::execute('keyup', 203); }
    public function test204() { parent::execute('keyup', 204); }
    public function test205() { parent::execute('keyup', 205); }
    public function test206() { parent::execute('keyup', 206); }
    public function test207() { parent::execute('keyup', 207); }
    public function test208() { parent::execute('keyup', 208); }
    public function test209() { parent::execute('keyup', 209); }
    public function test210() { parent::execute('keyup', 210); }
    public function test211() { parent::execute('keyup', 211); }
    public function test212() { parent::execute('keyup', 212); }
    public function test213() { parent::execute('keyup', 213); }
    public function test214() { parent::execute('keyup', 214); }
    public function test215() { parent::execute('keyup', 215); }
    public function test216() { parent::execute('keyup', 216); }
    public function test217() { parent::execute('keyup', 217); }
    public function test218() { parent::execute('keyup', 218); }
    public function test219() { parent::execute('keyup', 219); }
    public function test220() { parent::execute('keyup', 220); }
    public function test221() { parent::execute('keyup', 221); }
    public function test222() { parent::execute('keyup', 222); }
    public function test223() { parent::execute('keyup', 223); }
    public function test224() { parent::execute('keyup', 224); }
    public function test225() { parent::execute('keyup', 225); }
    public function test226() { parent::execute('keyup', 226); }
    public function test227() { parent::execute('keyup', 227); }
    public function test228() { parent::execute('keyup', 228); }
    public function test229() { parent::execute('keyup', 229); }
    public function test230() { parent::execute('keyup', 230); }
    public function test231() { parent::execute('keyup', 231); }
    public function test232() { parent::execute('keyup', 232); }
    public function test233() { parent::execute('keyup', 233); }
    public function test234() { parent::execute('keyup', 234); }
    public function test235() { parent::execute('keyup', 235); }
    public function test236() { parent::execute('keyup', 236); }
    public function test237() { parent::execute('keyup', 237); }
    public function test238() { parent::execute('keyup', 238); }
    public function test239() { parent::execute('keyup', 239); }
    public function test240() { parent::execute('keyup', 240); }
    public function test241() { parent::execute('keyup', 241); }
    public function test242() { parent::execute('keyup', 242); }
    public function test243() { parent::execute('keyup', 243); }
    public function test244() { parent::execute('keyup', 244); }
    public function test245() { parent::execute('keyup', 245); }
    public function test246() { parent::execute('keyup', 246); }
    public function test247() { parent::execute('keyup', 247); }
    public function test248() { parent::execute('keyup', 248); }
    public function test249() { parent::execute('keyup', 249); }
    public function test250() { parent::execute('keyup', 250); }
    public function test251() { parent::execute('keyup', 251); }
    public function test252() { parent::execute('keyup', 252); }
    public function test253() { parent::execute('keyup', 253); }
    public function test254() { parent::execute('keyup', 254); }
    public function test255() { parent::execute('keyup', 255); }


}
