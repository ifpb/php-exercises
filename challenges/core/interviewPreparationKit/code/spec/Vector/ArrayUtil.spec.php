<?php

use \Vector\ArrayUtil;
// use function Kahlan\describe;
// use function Kahlan\it;
// use function Kahlan\expect;

describe('Array Utils', function () {

  it('performing 4 left rotations', function () {
    $arrayUtil = new ArrayUtil([1, 2, 3, 4, 5]);
    $expected = [5, 1, 2, 3, 4];
    expect($arrayUtil->rotLeft(4))->toEqual($expected);
  });

  it('performing 10 left rotations', function () {
    $arrayUtil = new ArrayUtil([41, 73, 89, 7, 10, 1, 59, 58, 84, 77, 77, 97, 58, 1, 86, 58, 26, 10, 86, 51]);
    $expected = [77, 97, 58, 1, 86, 58, 26, 10, 86, 51, 41, 73, 89, 7, 10, 1, 59, 58, 84, 77];
    expect($arrayUtil->rotLeft(10))->toEqual($expected);
  });

  it('performing 13 left rotations', function () {
    $arrayUtil = new ArrayUtil([33, 47, 70, 37, 8, 53, 13, 93, 71, 72, 51, 100, 60, 87, 97]);
    $expected = [87, 97, 33, 47, 70, 37, 8, 53, 13, 93, 71, 72, 51, 100, 60];
    expect($arrayUtil->rotLeft(13))->toEqual($expected);
  });

  it('stats [-4, 3, -9, 0, 4, 1]', function () {
    $arrayUtil = new ArrayUtil([-4, 3, -9, 0, 4, 1]);
    $expected = ['0.500000', '0.333333', '0.166667'];
    expect($arrayUtil->stats())->toEqual($expected);
  });

  it('stats [1, 2, 3, -1, -2, -3, 0, 0]', function () {
    $arrayUtil = new ArrayUtil([1, 2, 3, -1, -2, -3, 0, 0]);
    $expected = ['0.375000', '0.375000', '0.250000'];
    expect($arrayUtil->stats())->toEqual($expected);
  });

  it('min and max of [1, 2, 3, 4, 5]', function () {
    $arrayUtil = new ArrayUtil([1, 2, 3, 4, 5]);
    $expected = [10, 14];
    expect($arrayUtil->miniMaxSum())->toEqual($expected);
  });

  it('highest frequency of [1, 4, 4, 4, 5, 3]', function () {
    $arrayUtil = new ArrayUtil([1, 4,  4, 4, 5, 3]);
    expect($arrayUtil->highestFrequency())->toEqual(4);
  });

  it('highest frequency of [1, 2, 3, 4, 5, 4, 3, 2, 1, 3, 4]', function () {
    $arrayUtil = new ArrayUtil([1, 2, 3, 4,  5, 4, 3, 2, 1,   3, 4]);
    expect($arrayUtil->highestFrequency())->toEqual(3);
  });
});
