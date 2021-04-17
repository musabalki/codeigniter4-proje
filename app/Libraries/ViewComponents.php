<?php


namespace App\Libraries;

class ViewComponents
{
    public function getUserView()
    {
        $data = [
            'users' => 
           [
            [
                'isim' => 'Test 2',
                'meslek' => 'Test 2',
                'yas' => 'test 2'
            ],
            [
                'isim' => 'Test 3',
                'meslek' => 'Test 3',
                'yas' => 'test 3'
            ],
            [
                'isim' => 'Test 4',
                'meslek' => 'Test 4',
                'yas' => 'test 4'
            ]
           ]
        ];
        return view('backend/components/user_data', $data);
    }
}
