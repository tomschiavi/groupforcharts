<?php

namespace TSCH\GroupForCharts;

use App\Models;

class GroupForCharts {

    public static function groupByMonth($model) {
        $dataList = $model::select(\DB::raw('DATE_FORMAT(created_at, "%m") as month, count(id) as total'))
            ->whereBetween('created_at', [\Carbon\Carbon::parse('01-01-' . \Carbon\Carbon::now()->format('Y')), \Carbon\Carbon::parse('31-12-' . \Carbon\Carbon::now()->format('Y'))])
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month')
            ->all();

        for ($i = 1; $i <= 12; $i++) {
            if(!array_key_exists("0". $i, $dataList)) {
                if($i > 9) {
                    $dataList[strval($i)] = 0;
                } else {
                    $dataList[intval("0" . $i)] = 0;
                }
            } else {
                if($i > 9) {
                    $dataList[intval($i)] = $dataList["" . $i];
                    unset($dataList["" . $i]);
                } else {
                    $dataList[intval("0" . $i)] = $dataList["0" . $i];
                    unset($dataList["0" . $i]);
                }
            }
        }

        ksort($dataList);

        return array_values($dataList);
    }

}
