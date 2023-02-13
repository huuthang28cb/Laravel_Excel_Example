<?php

namespace App\Http\Controllers;

use App\Special_user_healths;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function index()
    {

        // $data = $dataOrigin->map(function ($item) {
        //     return collect($item)->only([
        //         '0','1','2','3','4','7','8','9','10','11','12','13','14','16','18','20','22','23','24','26','27','28','29','30','31','32','34','36','38',
        //         '40','41','42','44','45','46','47','48','49','50','51','52','54','55','56','57','58','59','61','62','68','69','70','71','72','73','74','75','76','77','81','82','83',
        //         '84','85','86','88','89','91','94','95','96','97','98','100','101','102','104',
        //     ])->values();
        //   });
        // dd(json_decode($data));
        //
        $arrayTitle = [
            'year', 'patient_num', 'ticket_ref_num', 'use_ticket_ref_num', 'insured_num', 'kana_name', 'kanji_name', 'date_of_birth', 'sex', 'age', 'postal_code', 'address', 'apartment_num',
            'phone', 'email', 'medical', 'health_checkup_date', 'metabolic_syndrome', 'health_guidance_level', 'health_guide', 'doctor_diagnosis', 'instructions_doctor',
            'height', 'body_weight', 'bmi', 'waist_circum', 'history_present_illness', 'medical_history', 'subjective_symptoms', 'objective_symptoms', 'maximum_blood_pressure', 'minimum_blood_pressure', 'neutral_fat',
            'hdl_cholesterol', 'ldl_cholesterol', 'got_ast', 'gpt_alt', 'y_gpt', 'hba1c', 'creatinine', 'axit_uric', 'diabetes', 'urine_protein', 'hematocrit',
            'hemoglobin_content', 'red_blood_cells_num', 'white_blood_cells_num', 'platelet', 'electro_cardiogram', 'electro_cardiogram_diagno', 'egfr', 'fundus_eye_check', 'fundus_eye_check_diabetes', 'medica_blood_pressure',
            'medica_blood_sugar', 'medica_fat', 'medical_history_kidney', 'health_condition', 'sleep_rest', 'waking_up_refreshed', 'weight_change', 'weight_change_up_down',
            'one_weight_change', 'one_weight_change_up_down', 'exercise_more_min', 'life_activities', 'walking_speed', 'eating_speed', 'three_meals_day', 'skip_breakfast',
            'eat_drink_before_bed', 'snack_after_dinner', 'main_main_minor', 'sweets', 'drinking_frequency', 'alcohol_consumed_num', 'smoking'
        ];
        $arrayTitle2 = [
            'year', 'patient_num', 'ticket_ref_num', 'use_ticket_ref_num', 'insured_num', 'kana_name', 'kanji_name', 'date_of_birth', 'sex', 'age', 'postal_code', 'address', 'apartment_num',
            'phone', 'email', 'medical', 'health_checkup_date', 'metabolic_syndrome', 'health_guidance_level', 'health_guide', 'doctor_diagnosis', 'instructions_doctor',
            'height', 'body_weight', 'bmi', 'waist_circum', 'history_present_illness', 'medical_history', 'subjective_symptoms', 'objective_symptoms', 'maximum_blood_pressure', 'minimum_blood_pressure', 'neutral_fat',
            'hdl_cholesterol', 'ldl_cholesterol', 'got_ast', 'gpt_alt', 'y_gpt', 'hba1c', 'creatinine', 'axit_uric', 'diabetes', 'urine_protein', 'hematocrit',
            'hemoglobin_content', 'red_blood_cells_num', 'white_blood_cells_num', 'platelet', 'electro_cardiogram', 'electro_cardiogram_diagno', 'egfr', 'fundus_eye_check', 'fundus_eye_check_diabetes', 'medica_blood_pressure',
            'medica_blood_sugar', 'medica_fat', 'medical_history_kidney', 'health_condition', 'sleep_rest', 'waking_up_refreshed', 'weight_change', 'weight_change_up_down',
            'one_weight_change', 'one_weight_change_up_down', 'exercise_more_min', 'life_activities', 'walking_speed', 'eating_speed', 'three_meals_day', 'skip_breakfast',
            'eat_drink_before_bed', 'snack_after_dinner', 'main_main_minor', 'sweets', 'drinking_frequency', 'alcohol_consumed_num', 'smoking'
        ];

        $titleFinal= array_combine($arrayTitle, $arrayTitle2);

        $data = collect(Special_user_healths::get());
        $dataDecode = json_decode($data);
        // dd($dataDecode);

        return view('index', compact('dataDecode', 'titleFinal'));
    }

    // create new data
    public function create(Request $request)
    {
        try {
            DB::beginTransaction();

            $fileUpload = $this->storageUpload($request, 'file', 'data_healths');

            $dataOrigin = collect(Excel::toCollection(null, public_path($fileUpload['file_path'])))->first();
            // dd($dataOrigin);

            $arrayContent = [
                '年度', '受診者番号', '受診券整理番号', '利用券整理番号', '被保険者番号', 'カナ氏名', '漢字氏名', '生年月日', '性別', '年齢', '郵便番号', '住所', '方書',
                'TEL①', 'mail①', '健診実施医療機関', '健診実施年月日', 'メタボリックシンドローム判定', '保健指導レベル', '保健指導の可否', '医師診断', '医師からの指示',
                '身長', '体重', 'ＢＭＩ', '腹囲', '現病歴（具体的）', '既往歴（具体的な）', '自覚症状（所見）', '他覚症状（所見）', '収縮期血圧', '拡張期血圧', '中性脂肪',
                'HDLコレステロール', 'LDLコレステロール', 'ＧＯＴ（AST）', 'GPT（ALT）', 'γ-ＧＴＰ', 'ＨｂＡ１ｃ', 'クレアチニン', '尿酸', '尿糖', '尿蛋白', 'ヘマトクリット値',
                '血色素量', '赤血球数', '白血球数', '血小板', '心電図', '心電図（所見）', 'eGFR', '眼底検査（高血圧性変化）', '眼底検査（糖尿病性変化）', '服薬（血圧）',
                '服薬（血糖）', '服薬（脂質）', '既往歴（腎不全・人工透析）', '健康状態', '睡眠・休養', '目覚めすっきり', '20歳～体重変動', '20歳～体重変動（増減）',
                '1年間の体重変動', '1年間の体重変動（増減）', '30分以上の運動(2015～)', '日常生活活動(2015～)', '歩く速度', '食べる速さ', '1日3食', '朝食抜き(2015～)',
                '寝る前の飲食', '夕食後に間食(2015～)', '主食・主菜・副菜', '甘い物', '飲酒頻度', '飲酒量（2010年度）', '喫煙',
            ];

            $arrayEnglish = [
                'year', 'patient_num', 'ticket_ref_num', 'use_ticket_ref_num', 'insured_num', 'kana_name', 'kanji_name', 'date_of_birth', 'sex', 'age', 'postal_code', 'address', 'apartment_num',
                'phone', 'email', 'medical', 'health_checkup_date', 'metabolic_syndrome', 'health_guidance_level', 'health_guide', 'doctor_diagnosis', 'instructions_doctor',
                'height', 'body_weight', 'bmi', 'waist_circum', 'history_present_illness', 'medical_history', 'subjective_symptoms', 'objective_symptoms', 'maximum_blood_pressure', 'minimum_blood_pressure', 'neutral_fat',
                'hdl_cholesterol', 'ldl_cholesterol', 'got_ast', 'gpt_alt', 'y_gpt', 'hba1c', 'creatinine', 'axit_uric', 'diabetes', 'urine_protein', 'hematocrit',
                'hemoglobin_content', 'red_blood_cells_num', 'white_blood_cells_num', 'platelet', 'electro_cardiogram', 'electro_cardiogram_diagno', 'egfr', 'fundus_eye_check', 'fundus_eye_check_diabetes', 'medica_blood_pressure',
                'medica_blood_sugar', 'medica_fat', 'medical_history_kidney', 'health_condition', 'sleep_rest', 'waking_up_refreshed', 'weight_change', 'weight_change_up_down',
                'one_weight_change', 'one_weight_change_up_down', 'exercise_more_min', 'life_activities', 'walking_speed', 'eating_speed', 'three_meals_day', 'skip_breakfast',
                'eat_drink_before_bed', 'snack_after_dinner', 'main_main_minor', 'sweets', 'drinking_frequency', 'alcohol_consumed_num', 'smoking'
            ];
            $arrFinal = [];

            // foreach ($dataOrigin[0] as $data1) {
            //     foreach ($arrayContent as $data2) {
            //         if ($data2 == $data1) {
            //             array_push($arrFinal, $data2);
            //         }
            //     }
            // }

            $data = $dataOrigin->map(function ($item) use ($arrayContent, $arrFinal) {
                foreach ($item as $keyOrigin => $valOrigin) {
                    foreach ($arrayContent as $keyContent => $valContent) {
                        if ($valContent == $valOrigin) {
                            array_push($arrFinal, $keyOrigin);
                        }
                    }
                }
                return $arrFinal;
            });

            $dataFinal = $dataOrigin->map(function ($item) use (&$data) {
                return collect($item)->only(
                    $data[0]
                )->values();
            });
            $dataFinal[1][7] = date('m/d/Y', strtotime($dataFinal[1][7]));
            $dataFinal[1][16] = date('m/d/Y', strtotime($dataFinal[1][16]));
            // dd($dataFinal[1]);
            //-------------------------------
            $arrJson = collect(array_combine($arrayEnglish, json_decode($dataFinal[1])));
            // dd($arrJson->toJson());
            //-------------------------------

            $dataCreate = [
                'user_id' => 10,
                'data_healths' => $arrJson->toJson(),
                'file_name' => $fileUpload['file_name']
            ];

            Special_user_healths::create($dataCreate);

            DB::commit();
            return redirect('/excel');
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => $e], 500);
        }
    }

    // edit
    public function edit(Request $request, $id){
        $id = json_decode(Special_user_healths::where('id', $id)->first()->id);
        $data = collect(json_decode(Special_user_healths::where('id', $id)->first()->data_healths));
        return view('edit', compact('data', 'id'));
    }

    // update
    public function update(Request $request, $id){
        $request->request->remove('_token');
        // dd(collect($request)->toJson());
        Special_user_healths::where('id', $id)->update(
            ['data_healths' => collect($request)->toJson()]
        );
        return redirect('/excel');
    }

    public function delete($id){
        Special_user_healths::where('id', $id)->delete();
        return redirect('/excel');
    }

    public function storageUpload($request, $fieldName, $foderName)
    {
        if ($request->hasFile($fieldName)) {
            $file = $request->$fieldName;
            $filenameOrigin = $file->getClientOriginalName();
            // path
            $filePath = $request->file($fieldName)->storeAs('public/' . $foderName, $filenameOrigin);

            $dataUploadTrait = [
                'file_name' => $filenameOrigin,
                'file_path' => Storage::url($filePath),
            ];
            return $dataUploadTrait;
        }
        return null;
    }
}
