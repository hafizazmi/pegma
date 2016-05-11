<?php

require 'db.php';

class Store {

    private function filter($clean_array, $result_object) {
        $result_object['rating'] = [[
            'aspect' => $res['aspect'],
            'rating' => $res['bintang_value']
        ]];
        array_push($clean_array, $result_object);
    }

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

        if ($result) {

            $cleaned_result = [];

            // Pembersihan Data (Group rating)
            foreach ($result as $r_k => $res) {
                if (!sizeof($cleaned_result)) {

                    // New Data Strucutre
                    $res['ratings'] = [[
                        'aspect_id' => $res['bintang_id'],
                        'aspect' => $res['aspect'],
                        'rate' => $res['bintang_value']
                    ]];

                    array_push($cleaned_result, $res);

                } else {
                    foreach ($cleaned_result as $cr_k => &$cleaned_res) {
                        if ($cleaned_res['id'] === $res['id']) {
                            $temp = [
                                'aspect_id' => $res['bintang_id'],
                                'aspect' => $res['aspect'],
                                'rate' => $res['bintang_value']
                            ];
                            array_push($cleaned_res['ratings'], $temp);
                        } else {
                            $res['ratings'] = [[
                                'aspect_id' => $res['bintang_id'],
                                'aspect' => $res['aspect'],
                                'rate' => $res['bintang_value']
                            ]];

                            array_push($cleaned_result, $res);                        
                        }
                    }
                }
            }

            $temp_rate = [];

            // Kiraan bintang dan total rating
            foreach ($cleaned_result as $k => &$value) {
                foreach ($value['ratings'] as $__k => &$cr_rating) {
                    if (!sizeof($temp_rate)) {
                        $t = [
                            'aspect_id' => $cr_rating['aspect_id'],
                            'rate' => $cr_rating['rate'],
                            'total' => 1
                        ];
                        array_push($temp_rate, $t);
                    } else {
                        foreach ($temp_rate as $k => &$r_v) {
                            if ($r_v['aspect_id'] === $cr_rating['aspect_id']) {
                                $r_v['rate'] = $r_v['rate'] + $cr_rating['rate'];
                                $r_v['total']++;
                            }
                        }
                    }
                }
            }

            // Letak Value Bintang berdasarkan ID
            $exist = false;
            foreach ($cleaned_result as $k => &$value) {
                foreach ($value['ratings'] as $__k => &$cr_rating) {
                    foreach ($temp_rate as $key => $rate) {
                        if ($exist === $cr_rating['aspect_id']) {
                            array_splice($value['ratings'], $__k, 1);
                        } else {
                            if ($rate['aspect_id'] === $cr_rating['aspect_id']) {
                                $cr_rating['rate'] = $rate['rate'] / $rate['total'];
                                $exist = $rate['aspect_id'];
                            }
                        }
                    }
                }
            }

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