<?php
use \Date\Format;

describe('Format Date', function () {
  it('long format of 22/04/1983', function () {
    expect(Format::long("22/04/1983"))->toBe("22 de abril de 1983");
  });
});
