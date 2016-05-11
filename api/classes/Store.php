<?php

require 'db.php';

class Store {
    public function getAll() {
        $response = ['status' => false];

        $dbh = db::connect();

        $sql = "select gr.* , pl.bintang_value, bt.id as bintang_id, bt.name as aspect, rv.review from gerai gr
                    left join penilaian pl on gr.id = pl.id_gerai
                    left join bintang bt on bt.id = pl.id_bintang
                    left join review rv on gr.id = rv.id_gerai;";

        $query = $dbh->prepare($sql);
        $query->execute();

        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        $cleaned_result = [];

        foreach ($result as $r_k => $res) {
            if (!sizeof($cleaned_result)) {

                // New Data Strucutre
                $res['rating'] = [[
                    'aspect' => $res['aspect'],
                    'rating' => $res['bintang_value']
                ]];

                array_push($cleaned_result, $res);

            } else {
                foreach ($cleaned_result as $cr_k => &$cleaned_res) {
                    if ($cleaned_res['id'] === $res['id']) {
                        $temp = [
                            'aspect' => $res['aspect'],
                            'rating' => $res['bintang_value']
                        ];
                        array_push($cleaned_res['rating'], $temp);
                    } else {
                        $res['rating'] = [[
                            'aspect' => $res['aspect'],
                            'rating' => $res['bintang_value']
                        ]];

                        array_push($cleaned_result, $res);                        
                    }
                }
            }
        }

        // echo json_encode($cleaned_result); exit;

        if($result) {
            $response = [
                'status' => true,
                'data' => $cleaned_result
            ];
        }

        return $response;
    }

    public function getOne($store_id) {
        $response = ['status' => false];

        $dbh = db::connect();

        $sql = "select gr.* , pl.bintang_value, rv.review from gerai gr
                    left join penilaian pl on gr.id = pl.id_gerai
                    left join bintang bt on bt.id = pl.id_bintang
                    left join review rv on gr.id = rv.id_gerai
                where gr.id = :id;";

        $param = [":id"=> $store_id];

        $query = $dbh->prepare($sql);
        $query->execute($param);

        $result = $query->fetch(PDO::FETCH_ASSOC);

        if($result) {
            $response = [
                'status' => true,
                'data' => $result
            ];
        }

        return $response;
    }
}