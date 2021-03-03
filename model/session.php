<?php 
class Session {
    
    public function testId() 
    {
        $testId = "";
        for ($i = 1; $i <= 6; $i++) {
            $testId .= rand(0, 9);
        }
        return $testId;
    }
}