<?php
use tad\FunctionMocker\FunctionMocker;

class WPSchedule_Schedule_ScheduleTest extends \PHPUnit_Framework_TestCase
{
    
    /**
     * @var WPSchedule_Schedule_Schedule
     */
    protected $sut;
    
    /**
     * @var string
     */
    protected $sutClass = 'WPSchedule_Schedule_Schedule';
    
    protected function setUp()
    {
        
        // first
        FunctionMocker::setUp();
        $this->sut = new WPSchedule_Schedule_Schedule();
    }
    
    protected function tearDown()
    {
        
        // last
        FunctionMocker::tearDown();
    }
    
    /**
     * @test
     * it should be initializable
     */
    public function it_should_be_initializable()
    {
        $this->assertInstanceOf($this->sutClass, $this->sut);
    }
    
    /**
     * @test
     * it should return false if wp_next_scheduled returns false
     */
    public function it_should_return_false_if_wp_next_scheduled_returns_false()
    {
        FunctionMocker::replace('wp_next_scheduled', false);
        
        $this->assertFalse($this->sut->isScheduled('some_hook'));
    }
    
    /**
     * @test
     * it should return true if wp_next_scheduled returns true
     */
    public function it_should_return_true_if_wp_next_scheduled_returns_true()
    {
        FunctionMocker::replace('wp_next_scheduled', true);
        
        $this->assertTrue($this->sut->isScheduled('some_hook'));
    }
    
    /**
     * @test
     * it should return false if wp_next_scheduled returns false with args
     */
    public function it_should_return_false_if_wp_next_scheduled_returns_false_with_args()
    {
        FunctionMocker::replace('wp_next_scheduled', function ($hook, $args)
        {
            return $args !== ['some', 'args'];
        });
        
        $this->assertFalse($this->sut->isScheduled('some_hook', ['some', 'args']));
        $this->assertTrue($this->sut->isScheduled('some_hook'));
    }

        /**
         * @test
         * it should return true if wp_next_scheduled returns true with args
         */
        public function it_should_return_true_if_wp_next_scheduled_returns_true_with_args()
        {
	        FunctionMocker::replace('wp_next_scheduled', function ($hook, $args)
	        {
	            return $args === ['some', 'args'];
	        });
        
	        $this->assertTrue($this->sut->isScheduled('some_hook', ['some', 'args']));
	        $this->assertFalse($this->sut->isScheduled('some_hook'));
        }
}
