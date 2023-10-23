<?php

namespace App\Http\Repositories\Backoffice;

use App\Traits\HttpResponses;
use Illuminate\Support\Facades\Validator;

class HomepageRepository
{
    use HttpResponses;

    public static function changeInitialBanner($dataImages)
    {
        $validator = Validator::make($dataImages, [
            'banner-desktop' => 'image|max:4500',
            'banner-mobile' => 'image|max:4500'
        ]);

        if ($validator->fails()) {
            return HttpResponses::error('Data invalid', 422, $validator->errors());
        }

        $ambienceImages = [
            [
                'inputName' => 'banner-desktop',
                'fileName' => 'banner-initial.png',
                'folder' => 'img/homepage/',
            ],
            [
                'inputName' => 'banner-mobile',
                'fileName' => 'banner-initial-m.png',
                'folder' => 'img/homepage/',
            ],
        ];

        foreach ($ambienceImages as $image) {
            if (isset($dataImages[$image['inputName']]) && $dataImages[$image['inputName']]->isValid()) {
                $path = $dataImages[$image['inputName']];
                $path->move($image['folder'], $image['fileName']);
            }
        }
        return HttpResponses::success('Banner has been updated', 200);
    }
}
