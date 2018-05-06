<?php
namespace App\Http\Controllers\Web\Top;

class Model
{
    public function getRssData()
    {
        $rss = simplexml_load_file(url('blog/feed'));
        $result = [];
        foreach ($rss->channel->item as $item) {
            $rssData = [];
            $rssData['title'] = (string)$item->title;
            $rssData['link']  = (string)$item->link;
            $rssData['date']  = date('Y/m/d H:i:s', strtotime($item->pubDate));
            $rssData['description'] = mb_strimwidth(strip_tags($item->description), 0 , 50, "…", "utf-8");

            $result[] = $rssData;
        }

        return $result;
    }
}