<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Twitter;
use \File;

class TwitterController extends Controller
{
    private $count = 10;
    private $format = 'array';
    //

    public function twitterUserTimeLine() {
        $data = Twitter::getUserTimeLine(['count' => $this->count, 'format' => $this->format]);

        return view('twitter', compact('data'));
    }

    public function tweet(Request $request){
        $this->validate($request, [
            'tweet' => 'required'
        ]);

        $newTweet = ['status' => $request->tweet];

        if(!empty($request->images)){
            foreach($request->images as $key => $value) {
                $media = Twitter::uploadMedia(['media' => File::get($value->getRealPath())]);
                if(!empty($media)){
                    $newTweet['media_ids'][$media->media_id_string] = $media->media_id_string;
                }
            }
        }

        $twitter = Twitter::postTweet($newTweet);
        return back();
    }
}
