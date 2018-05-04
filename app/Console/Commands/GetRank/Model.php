<?php

namespace App\Console\Commands\GetRank;

use App\Common\Database\Constant\TeamMConstant;

class Model
{
    const URL_CENTRAL = 'https://baseball.yahoo.co.jp/npb/standings/1/';
    const URL_PACIFIC = 'https://baseball.yahoo.co.jp/npb/standings/2/';

    // 項目の英名
    private $itemKey = [
        'rank',           // 順位
        'teamName',       // チーム名
        'match',          // 試合
        'win',            // 勝利
        'lose',           // 敗戦
        'draw',           // 引き分け
        'winPer',         // 勝率
        'differenceGame', // 勝差
        'remainingGame',  // 残試合
        'scorePoint',     // 得点
        'lostPoint',      // 失点
        'homeRun',        // ホームラン
        'steal',          // 盗塁
        'averagePer',     // 打率
        'protectionPer',  // 防御率
    ];

    // テーブルの関係上２番目から
    private $teamList = [2,3,4,5,6,7];
    // 項目数
    private $itemList = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];

    public function __construct()
    {

    }

    public function exec()
    {
        $db = new Database();
        // 更新IDを取得する・
        $updatedId = $db->getUpdatedId() + 1;

        $rankCentralList = $this->getRankDetail(self::URL_CENTRAL);
        Controller::outputLog4Batch('info', 'セントラルリーグのデータ取得完了');

        // １件ずつINSERT
        foreach ($rankCentralList as $rankData) {
            $db->insertRankData($updatedId, $rankData);
        }
        Controller::outputLog4Batch('info', 'セントラルリーグのデータ挿入完了');

        $rankPacificList = $this->getRankDetail(self::URL_PACIFIC);
        Controller::outputLog4Batch('info', 'パシフィックリーグのデータ取得完了');
        // １件ずつINSERT
        foreach ($rankPacificList as $rankData) {
            $db->insertRankData($updatedId, $rankData);
        }
        Controller::outputLog4Batch('info', 'パシフィックリーグのデータ挿入完了');

    }

    private function getRankDetail($url)
    {
        $dom = new \DOMDocument;
        @$dom->loadHTMLFile($url);
        $xpath = new \DOMXPath($dom);

        $rankList = [];
        foreach ($this->teamList as $team) {
            foreach ($this->itemList as $item) {
                foreach ($xpath->query("//table[@class='NpbPlSt yjM']/tr[{$team}]/td[{$item}]") as $node) {
                    $valList[] = trim($node->nodeValue);
                }
            }
            $rankList[] = $this->addItemKey($valList);
            $valList    = []; // 初期化
        }

        return $rankList;
    }

    private function addItemKey($itemValList)
    {
        $addKeyItem = [];
        foreach ($itemValList as $key => $itemVal) {
            $addKeyItem[$this->itemKey[$key]] = $itemVal;
        }
        // 順位(rank)なら、「位」がついているので取る
        $addKeyItem['rank'] = str_replace("位", "", $addKeyItem['rank']);

        $addKeyItem['codeList'] = TeamMConstant::$teamCdList[$addKeyItem['teamName']];

        return $addKeyItem;
    }

}
