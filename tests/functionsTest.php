<?php 


class ClassificationTest extends \PHPUnit\Framework\TestCase{


    public function testgetClassificationWorks()
    {

        $grade = new \App\functions;

        $inputText = 'software engineering,99newlinedatabases,55newlineweb development,1newlinecomputing foundations,1newlinecloud computing,1';
        $result = $grade->getClassification($inputText);

        $this->assertEquals('Fail',$result);


}

public function testgetClassificationPasses()
{

    $grade = new \App\functions;

    $inputText = 'software engineering,9999newlinedatabases,55newlineweb development,1newlinecomputing foundations,1newlinecloud computing,1';
    $result = $grade->getClassification($inputText);

    $this->assertEquals('Distinction',$result);


}

public function testdoubleWeighted()
{


    // will only pass if programming is double weighted - otherwise will fail
    $grade = new \App\functions;

    $inputText = 'software engineering,99newlinedatabases,50newlineweb development,50newlinecomputing foundations,50newlineprogramming,26';
    $result = $grade->getClassification($inputText);

    $this->assertEquals('Pass',$result);


}


}?>