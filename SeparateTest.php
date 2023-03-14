<?php
require_once "Separator.php";

use PHPUnit\Framework\TestCase;

class SeparateTest extends TestCase
{
    public function test_separate_address()
    {
        $separator = new Separator();

        $address = 'Sankt Georgs Kirchhof 26';

        $result = $separator->separate($address);

        self::assertSame('Sankt Georgs Kirchhof', $result);
    }

    public function test_separate_address2()
    {
        $separator = new Separator();

        $address = 'Kreisbacherstrasse 3/1/19';

        $result = $separator->separate($address);

        self::assertSame('Kreisbacherstrasse', $result);
    }

}