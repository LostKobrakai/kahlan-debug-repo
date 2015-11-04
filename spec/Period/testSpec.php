<?php

describe("Period", function() {

	it("should be a period", function() {
		$period = new \League\Period\Period("2015-11-02 15:00:00", "2015-11-03 15:00:00");

		expect($period)->toBeAnInstanceOf("\League\Period\Period");

	});

});