<?php

namespace HighSolutions\EloquentSequence\Test\Unit\Simple;

use HighSolutions\EloquentSequence\Test\SequenceTestCase;

class MethodLastTest extends SequenceTestCase
{
    /** @test */
    public function use_last_method_on_first_element()
    {
        $model1 = $this->newModel();
        $model2 = $this->newModel();

        $model1->moveToLast();

        $this->assertEquals(2, $model1->fresh()->seq);
        $this->assertEquals(1, $model2->fresh()->seq);
    }

    /** @test */
    public function use_last_method_on_last_element()
    {
        $model1 = $this->newModel();
        $model2 = $this->newModel();

        $model2->moveToLast();

        $this->assertEquals(1, $model1->fresh()->seq);
        $this->assertEquals(2, $model2->fresh()->seq);
    }

    /** @test */
    public function use_last_method_on_second_element()
    {
        $model1 = $this->newModel();
        $model2 = $this->newModel();
        $model3 = $this->newModel();

        $model2->moveToLast();

        $this->assertEquals(1, $model1->fresh()->seq);
        $this->assertEquals(3, $model2->fresh()->seq);
        $this->assertEquals(2, $model3->fresh()->seq);
    }

    /** @test */
    public function use_last_method_on_first_element_with_3_elements()
    {
        $model1 = $this->newModel();
        $model2 = $this->newModel();
        $model3 = $this->newModel();

        $model1->moveToLast();

        $this->assertEquals(3, $model1->fresh()->seq);
        $this->assertEquals(1, $model2->fresh()->seq);
        $this->assertEquals(2, $model3->fresh()->seq);
    }
}
