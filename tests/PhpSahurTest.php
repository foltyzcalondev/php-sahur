<?php
   use PHPUnit\Framework\TestCase;
   use PhpSahur\PhpSahur;

   class PhpSahurTest extends TestCase {
       public function TestingSahur() {
           $sahur = new PhpSahur();
           $this->assertEquals("Sahurrr!!!", $sahur->sahur());
       }
   }
?>
