<?php

    use tad\FunctionMocker\FunctionMocker;

    class WPSchedule_Interval_FactoryTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp() {
        FunctionMocker::setUp();
    }

    protected function tearDown() {
        FunctionMocker::tearDown();
    }

    /**
     * @test
     * it should return 1 minute interval if option not set
     */
    public function it_should_return_1_minute_interval_if_option_not_set() {
        FunctionMocker::replace( 'get_option', false );

        $interval = WPSchedule_Interval_Factory::make( 'some_hook' );
        $sut = new WPSchedule_Interval_Factory();

        $this->assertInstanceOf( $sut->getDefaultClass(), $interval );
    }

    public function notAnIntervalSlug() {
        return [
            [ 23 ],
            [ 'foo' ],
            [ [ ] ],
            [ [ 'one' => 1 ] ],
            [ [ 'one' => 1, 'two' => 'two' ] ]
        ];
    }

    /**
     * @test
     * it should return 1 minute interval by default
     * @dataProvider notAnIntervalSlug
     */
    public function it_should_return_1_minute_interval_by_default( $slug ) {
        FunctionMocker::replace( 'get_option', $slug );

        $interval = WPSchedule_Interval_Factory::make( 'some_hook' );
        $sut = new WPSchedule_Interval_Factory();

        $this->assertInstanceOf( $sut->getDefaultClass(), $interval );
    }

    public function legitIntervalSlugs() {
        $factory = new WPSchedule_Interval_Factory();
        $pairs = $factory->getSlugsAndClasses();
        $out = [ ];
        array_walk( $pairs, function ( $class, $slug ) use ( &$out ) {
            $out[] = [ $slug, $class ];
        } );

        return $out;
    }

    /**
     * @test
     * it should return right time for slug
     * @dataProvider legitIntervalSlugs
     */
    public function it_should_return_right_time_for_slug( $intervalSlug, $class ) {
        FunctionMocker::replace( 'get_option', $intervalSlug );

        $interval = WPSchedule_Interval_Factory::make( 'some_hook' );
        $sut = new WPSchedule_Interval_Factory();

        $this->assertInstanceOf( $class, $interval );
    }
}