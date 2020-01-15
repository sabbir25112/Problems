<?php

use PHPUnit\Framework\TestCase;

class DepthCheckerTest extends TestCase
{
    /**
     * @dataProvider calculateDepthDataProvider
     * @param $data
     * @param $response
     */
    public function testDepth($data, $response)
    {
        $arr = [];
        calculate_depth($arr, $data);
        $this->assertEquals($arr, $response);
    }

    public function calculateDepthDataProvider()
    {
        return [
            "empty_test" => [
                [],
                []
            ],
            "first_level_test" => [
                ['abc' => 'value_of_abc', 'def' => 'value_of_def'],
                [
                    ['key' => 'abc', 'depth' => 1],
                    ['key' => 'def', 'depth' => 1]
                ]
            ],
            "second_level_test" => [
                [
                    "abc" => "abc",
                    "def" => [
                        "xyz" => "end"
                    ]
                ],
                [
                    ["key" => "abc", "depth" => 1],
                    ["key" => "def", "depth" => 1],
                    ["key" => "xyz", "depth" => 2],
                ]
            ],
            "null_check" => [
                [null, null],
                [
                    ["key" => "0", "depth" => 1],
                    ["key" => "1", "depth" => 1]
                ]
            ]
        ];
    }
}