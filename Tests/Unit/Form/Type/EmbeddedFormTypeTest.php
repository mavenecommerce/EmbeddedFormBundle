<?php

namespace Maven\Bundle\EmbeddedFormBundle\Tests\Unit\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;

use Maven\Bundle\EmbeddedFormBundle\Form\Type\EmbeddedFormType;

/**
 * @package Maven\Bundle\EmbeddedFormBundle\Tests\Unit\Form\Type
 */
class EmbeddedFormTypeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldBeConstructed()
    {
        new EmbeddedFormType();
    }

    /**
     * @test
     */
    public function shouldBuildForm()
    {
        /** @var \PHPUnit_Framework_MockObject_MockObject | FormBuilderInterface $builder */
        $builder = $this->createMock('\Symfony\Component\Form\FormBuilder', [], [], '', false);
        $builder->expects($this->at(0))
            ->method('add')
            ->with('title', 'text')
            ->will($this->returnSelf());
        $builder->expects($this->at(1))
            ->method('add')
            ->with('formType', 'oro_available_embedded_forms')
            ->will($this->returnSelf());
        $builder->expects($this->at(2))
            ->method('add')
            ->with('css', 'textarea')
            ->will($this->returnSelf());
        $builder->expects($this->at(3))
            ->method('add')
            ->with('external_css', 'textarea')
            ->will($this->returnSelf());
        $builder->expects($this->at(4))
            ->method('add')
            ->with('external_js', 'textarea')
            ->will($this->returnSelf());
        $builder->expects($this->at(5))
            ->method('add')
            ->with('successMessage', 'textarea')
            ->will($this->returnSelf());

        $formType = new EmbeddedFormType();
        $formType->buildForm($builder, []);
    }

    /**
     * @test
     */
    public function shouldReturnFormName()
    {
        $formType = new EmbeddedFormType();

        $this->assertEquals('embedded_form', $formType->getName());
    }
}
