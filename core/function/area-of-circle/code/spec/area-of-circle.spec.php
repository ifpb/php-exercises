<?php
require __DIR__.'/../src/area-of-circle.php';

describe('Circle Tools', function() {

  it('Area of the circle of radius 10 is of 31.41592653589793', function() {
    expect(areaOfCircle(10))->toBe(314.1592653589793);
  });

  xit('Area of the circle of radius 1 is of 3.141592653589793', function() {
    expect(areaOfCircle(1))->toBe(3.141592653589793);
  });

});

?>