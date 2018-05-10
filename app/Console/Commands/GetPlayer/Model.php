<?php

namespace App\Console\Commands\GetPlayer;

use App\Common\Database\Constant\TeamMConstant;

class Model
{
    const PITCHER_COLUMN = 28;
    const BATTER_COLUMN  = 26;

    private $db;


    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * メイン実行
     */
    public function exec()
    {
        // 各種更新IDを取得する
        $updatedId4Pitcher = $this->db->getUpdatedId4Pitcher() + 1;
        $updatedId4Batter  = $this->db->getUpdatedId4Batter() + 1;

        foreach (Constant::$playerGetUrlList as $key => $playerUrl) {
            $codeList    = TeamMConstant::$teamCdList[$key];
            $pitcherList = $this->getPlayerList($playerUrl['p'], self::PITCHER_COLUMN);
            // 取得できなかった場合はスキップ
            if (!$pitcherList) {
                Controller::outputLog4Batch('alert', "データ取得できなかったのでスキップ url:{$playerUrl['p']}");
            } else {
                Controller::outputLog4Batch('info', "{$key}:投手データ取得");
                // ピッチャー
                foreach ($pitcherList as $pitcher) {
                    // 背番号と名前を配列から抜き取る
                    $playerNumber = array_shift($pitcher);
                    $playerName   = array_shift($pitcher);
                    // player_idを取得する
                    $playerId = $this->getPlayerId($playerNumber, $playerName, $codeList['leagueCd'], $codeList['teamCd']);
                    if (!$playerId) {
                        Controller::outputLog4Batch('alert', "playerIdが取得できないため処理をスキップ playerName:{$playerName}");
                        continue;
                    }
                    // 成績データを挿入する。
                    $this->db->insertRecordPitcher($updatedId4Pitcher, $playerId, $pitcher);
                }
            }

            $batterList = $this->getPlayerList($playerUrl['b'], self::BATTER_COLUMN);
            // 取得できなかった場合はスキップ
            if (!$batterList) {
                Controller::outputLog4Batch('alert', "データ取得できなかったのでスキップ url:{$playerUrl['b']}");
            } else {
                Controller::outputLog4Batch('info', "{$key}:野手データ取得");
                // バッター
                foreach ($batterList as $batter) {
                    // 背番号と名前を配列から抜き取る
                    $playerNumber = array_shift($batter);
                    $playerName   = array_shift($batter);
                    // player_idを取得する
                    $playerId = $this->getPlayerId($playerNumber, $playerName, $codeList['leagueCd'], $codeList['teamCd']);
                    if (!$playerId) {
                        Controller::outputLog4Batch('alert', "playerIdが取得できないため処理をスキップ playerName:{$playerName}");
                        continue;
                    }
                    // 成績データを挿入する。
                    $this->db->insertRecordBatter($updatedId4Batter, $playerId, $batter);
                }
            }
        }

        // 実行日付けの古いデータを削除する
        $this->db->deleteOldData($updatedId4Pitcher, $updatedId4Batter);

    }

    /**
     * スクレイピングで選手の成績データを取得する
     * @param $url
     * @param $column
     * @return array|bool|string
     */
    private function getPlayerList($url, $column)
    {
        $dom = new \DOMDocument;
        @$dom->loadHTMLFile($url);
        $xpath = new \DOMXPath($dom);
        $playerList = '';
        foreach ($xpath->query("//table[@class='NpbPlSt mb10']") as $node) {
            $playerList = trim($node->nodeValue);
        }
        if (strlen($playerList) <= 0) {
            return false;
        }
        // 改行で配列、カラム分で分割
        $playerList = explode("\n", $playerList);
        $playerList = array_chunk($playerList, $column);

        // 最初と最後の配列はヘッダデータなので除外する
        array_shift($playerList);
        array_pop($playerList);

        return $playerList;

    }

    /**
     * 選手IDを取得する
     * @param $playerNumber
     * @param $playerName
     * @param $leagueCd
     * @param $teamCd
     * @return bool|string
     */
    private function getPlayerId($playerNumber, $playerName, $leagueCd, $teamCd)
    {
        $playerId = '';

        $playerData = $this->db->getPlayerData($playerName, $leagueCd, $teamCd);
        if (count($playerData) === 0) {
            // 新規データの挿入
            $this->db->insertPlayer($playerNumber, $playerName, $leagueCd, $teamCd);
            $insPlayer = $this->db->getPlayerData($playerName, $leagueCd, $teamCd);
            foreach ($insPlayer as $player) {
                $playerId = $player->player_id;
            }
            Controller::outputLog4Batch('info', "選手を登録しました:{$playerName}");
        } elseif (count($playerData) === 1) {
            foreach ($playerData as $player) {
                $playerId = $player->player_id;
                if ($player->player_number != $playerNumber) {
                    $this->db->updatePlayer($playerId, $playerNumber, $leagueCd, $teamCd);
                    Controller::outputLog4Batch('info', "選手を更新しました:{$playerName}");
                }
            }
        } else {
            foreach ($playerData as $player) {
                if ($player->player_number == $playerNumber) {
                    $playerId = $player->player_id;
                    break;
                }
            }
            if (strlen($playerId) <= 0) {
                return false;
            }
        }
        return $playerId;
    }

}
