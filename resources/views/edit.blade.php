<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Edit</title>
    <style>
        .one label{
            width: 160px;
        }
        .two label{
            width: 200px;
        }
        .three label{
            width: 220px;
        }
        .conat{
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="conat">
        <form action="{{ route('excel.update', [$id]) }}" method="post">
            @csrf
            <div class="col-md-12">
                <div class="col-md-4 one">
                    <label for="fname">Year:</label>
                    <input type="text" id="fname" name="year" value="{{ $data['year'] }}"><br>
                    <label for="fname">patient_num:</label>
                    <input type="text" id="fname" name="patient_num" value="{{ $data['patient_num'] }}"><br>
                    <label for="fname">ticket_ref_num:</label>
                    <input type="text" id="fname" name="ticket_ref_num" value="{{ $data['ticket_ref_num'] }}"><br>
                    <label for="fname">use_ticket_ref_num:</label>
                    <input type="text" id="fname" name="use_ticket_ref_num" value="{{ $data['use_ticket_ref_num'] }}"><br>
                    <label for="fname">insured_num:</label>
                    <input type="text" id="fname" name="insured_num" value="{{ $data['insured_num'] }}"><br>
                    <label for="fname">kana_name:</label>
                    <input type="text" id="fname" name="kana_name" value="{{ $data['kana_name'] }}"><br>
                    <label for="fname">kanji_name:</label>
                    <input type="text" id="fname" name="kanji_name" value="{{ $data['kanji_name'] }}"><br>
                    <label for="fname">date_of_birth:</label>
                    <input type="text" id="fname" name="date_of_birth" value="{{ $data['date_of_birth'] }}"><br>
                    <label for="fname">sex:</label>
                    <input type="text" id="fname" name="sex" value="{{ $data['sex'] }}"><br>
                    <label for="fname">age:</label>
                    <input type="text" id="fname" name="age" value="{{ $data['age'] }}"><br>
                    <label for="fname">postal_code:</label>
                    <input type="text" id="fname" name="postal_code" value="{{ $data['postal_code'] }}"><br>
                    <label for="fname">address:</label>
                    <input type="text" id="fname" name="address" value="{{ $data['address'] }}"><br>
                    <label for="fname">apartment_num:</label>
                    <input type="text" id="fname" name="apartment_num" value="{{ $data['apartment_num'] }}"><br>
                    <label for="fname">phone:</label>
                    <input type="text" id="fname" name="phone" value="{{ $data['phone'] }}"><br>
                    <label for="fname">email:</label>
                    <input type="text" id="fname" name="email" value="{{ $data['email'] }}"><br>
                    <label for="fname">medical:</label>
                    <input type="text" id="fname" name="medical" value="{{ $data['medical'] }}"><br>
                    <label for="fname">health_checkup_date:</label>
                    <input type="text" id="fname" name="health_checkup_date" value="{{ $data['health_checkup_date'] }}"><br>
                    <label for="fname">metabolic_syndrome:</label>
                    <input type="text" id="fname" name="metabolic_syndrome" value="{{ $data['metabolic_syndrome'] }}"><br>
                    <label for="fname">health_guidance_level:</label>
                    <input type="text" id="fname" name="health_guidance_level" value="{{ $data['health_guidance_level'] }}"><br>
                    <label for="fname">health_guide:</label>
                    <input type="text" id="fname" name="health_guide" value="{{ $data['health_guide'] }}"><br>
                    <label for="fname">doctor_diagnosis:</label>
                    <input type="text" id="fname" name="doctor_diagnosis" value="{{ $data['doctor_diagnosis'] }}"><br>
                    <label for="fname">instructions_doctor:</label>
                    <input type="text" id="fname" name="instructions_doctor" value="{{ $data['instructions_doctor'] }}"><br>
                    <label for="fname">height:</label>
                    <input type="text" id="fname" name="height" value="{{ $data['height'] }}"><br>
                    <label for="fname">body_weight:</label>
                    <input type="text" id="fname" name="body_weight" value="{{ $data['body_weight'] }}"><br>
                    <label for="fname">bmi:</label>
                    <input type="text" id="fname" name="bmi" value="{{ $data['bmi'] }}"><br>
                    <label for="fname">waist_circum:</label>
                    <input type="text" id="fname" name="waist_circum" value="{{ $data['waist_circum'] }}"><br>


                </div>
                <div class="col-md-4 two">
                    <label for="fname">history_present_illness:</label>
                    <input type="text" id="fname" name="history_present_illness" value="{{ $data['history_present_illness'] }}"><br>
                    <label for="fname">medical_history:</label>
                    <input type="text" id="fname" name="medical_history" value="{{ $data['medical_history'] }}"><br>
                    <label for="fname">subjective_symptoms:</label>
                    <input type="text" id="fname" name="subjective_symptoms" value="{{ $data['subjective_symptoms'] }}"><br>
                    <label for="fname">objective_symptoms:</label>
                    <input type="text" id="fname" name="objective_symptoms" value="{{ $data['objective_symptoms'] }}"><br>
                    <label for="fname">maximum_blood_pressure:</label>
                    <input type="text" id="fname" name="maximum_blood_pressure" value="{{ $data['maximum_blood_pressure'] }}"><br>
                    <label for="fname">minimum_blood_pressure:</label>
                    <input type="text" id="fname" name="minimum_blood_pressure" value="{{ $data['minimum_blood_pressure'] }}"><br>
                    <label for="fname">neutral_fat:</label>
                    <input type="text" id="fname" name="neutral_fat" value="{{ $data['neutral_fat'] }}"><br>
                    <label for="fname">hdl_cholesterol:</label>
                    <input type="text" id="fname" name="hdl_cholesterol" value="{{ $data['hdl_cholesterol'] }}"><br>
                    <label for="fname">ldl_cholesterol:</label>
                    <input type="text" id="fname" name="ldl_cholesterol" value="{{ $data['ldl_cholesterol'] }}"><br>
                    <label for="fname">got_ast:</label>
                    <input type="text" id="fname" name="got_ast" value="{{ $data['got_ast'] }}"><br>
                    <label for="fname">gpt_alt:</label>
                    <input type="text" id="fname" name="gpt_alt" value="{{ $data['gpt_alt'] }}"><br>
                    <label for="fname">y_gpt:</label>
                    <input type="text" id="fname" name="y_gpt" value="{{ $data['y_gpt'] }}"><br>
                    <label for="fname">hba1c:</label>
                    <input type="text" id="fname" name="hba1c" value="{{ $data['hba1c'] }}"><br>
                    <label for="fname">creatinine:</label>
                    <input type="text" id="fname" name="creatinine" value="{{ $data['creatinine'] }}"><br>
                    <label for="fname">axit_uric:</label>
                    <input type="text" id="fname" name="axit_uric" value="{{ $data['axit_uric'] }}"><br>
                    <label for="fname">diabetes:</label>
                    <input type="text" id="fname" name="diabetes" value="{{ $data['diabetes'] }}"><br>
                    <label for="fname">urine_protein:</label>
                    <input type="text" id="fname" name="urine_protein" value="{{ $data['urine_protein'] }}"><br>
                    <label for="fname">hematocrit:</label>
                    <input type="text" id="fname" name="hematocrit" value="{{ $data['hematocrit'] }}"><br>
                    <label for="fname">hemoglobin_content:</label>
                    <input type="text" id="fname" name="hemoglobin_content" value="{{ $data['hemoglobin_content'] }}"><br>
                    <label for="fname">red_blood_cells_num:</label>
                    <input type="text" id="fname" name="red_blood_cells_num" value="{{ $data['red_blood_cells_num'] }}"><br>
                    <label for="fname">white_blood_cells_num:</label>
                    <input type="text" id="fname" name="white_blood_cells_num" value="{{ $data['white_blood_cells_num'] }}"><br>
                    <label for="fname">platelet:</label>
                    <input type="text" id="fname" name="platelet" value="{{ $data['platelet'] }}"><br>
                    <label for="fname">electro_cardiogram:</label>
                    <input type="text" id="fname" name="electro_cardiogram" value="{{ $data['electro_cardiogram'] }}"><br>
                    <label for="fname">electro_cardiogram_diagno:</label>
                    <input type="text" id="fname" name="electro_cardiogram_diagno" value="{{ $data['electro_cardiogram_diagno'] }}"><br>
                    <label for="fname">egfr:</label>
                    <input type="text" id="fname" name="egfr" value="{{ $data['egfr'] }}"><br>
                </div>
                <div class="col-md-4 three">
                    <label for="fname">fundus_eye_check:</label>
                    <input type="text" id="fname" name="fundus_eye_check" value="{{ $data['fundus_eye_check'] }}"><br>
                    <label for="fname">fundus_eye_check_diabetes:</label>
                    <input type="text" id="fname" name="fundus_eye_check_diabetes" value="{{ $data['fundus_eye_check_diabetes'] }}"><br>
                    <label for="fname">medica_blood_pressure:</label>
                    <input type="text" id="fname" name="medica_blood_pressure" value="{{ $data['medica_blood_pressure'] }}"><br>
                    <label for="fname">medica_blood_sugar:</label>
                    <input type="text" id="fname" name="medica_blood_sugar" value="{{ $data['medica_blood_sugar'] }}"><br>
                    <label for="fname">medica_fat:</label>
                    <input type="text" id="fname" name="medica_fat" value="{{ $data['medica_fat'] }}"><br>
                    <label for="fname">medical_history_kidney:</label>
                    <input type="text" id="fname" name="medical_history_kidney" value="{{ $data['medical_history_kidney'] }}"><br>
                    <label for="fname">health_condition:</label>
                    <input type="text" id="fname" name="health_condition" value="{{ $data['health_condition'] }}"><br>
                    <label for="fname">sleep_rest:</label>
                    <input type="text" id="fname" name="sleep_rest" value="{{ $data['sleep_rest'] }}"><br>
                    <label for="fname">waking_up_refreshed:</label>
                    <input type="text" id="fname" name="waking_up_refreshed" value="{{ $data['waking_up_refreshed'] }}"><br>
                    <label for="fname">weight_change:</label>
                    <input type="text" id="fname" name="weight_change" value="{{ $data['weight_change'] }}"><br>
                    <label for="fname">weight_change_up_down:</label>
                    <input type="text" id="fname" name="weight_change_up_down" value="{{ $data['weight_change_up_down'] }}"><br>
                    <label for="fname">one_weight_change:</label>
                    <input type="text" id="fname" name="one_weight_change" value="{{ $data['one_weight_change'] }}"><br>
                    <label for="fname">one_weight_change_up_down:</label>
                    <input type="text" id="fname" name="one_weight_change_up_down" value="{{ $data['one_weight_change_up_down'] }}"><br>
                    <label for="fname">exercise_more_min:</label>
                    <input type="text" id="fname" name="exercise_more_min" value="{{ $data['exercise_more_min'] }}"><br>
                    <label for="fname">life_activities:</label>
                    <input type="text" id="fname" name="life_activities" value="{{ $data['life_activities'] }}"><br>
                    <label for="fname">walking_speed:</label>
                    <input type="text" id="fname" name="walking_speed" value="{{ $data['walking_speed'] }}"><br>
                    <label for="fname">eating_speed:</label>
                    <input type="text" id="fname" name="eating_speed" value="{{ $data['eating_speed'] }}"><br>
                    <label for="fname">three_meals_day:</label>
                    <input type="text" id="fname" name="three_meals_day" value="{{ $data['three_meals_day'] }}"><br>
                    <label for="fname">skip_breakfast:</label>
                    <input type="text" id="fname" name="skip_breakfast" value="{{ $data['skip_breakfast'] }}"><br>
                    <label for="fname">eat_drink_before_bed:</label>
                    <input type="text" id="fname" name="eat_drink_before_bed" value="{{ $data['eat_drink_before_bed'] }}"><br>
                    <label for="fname">snack_after_dinner:</label>
                    <input type="text" id="fname" name="snack_after_dinner" value="{{ $data['snack_after_dinner'] }}"><br>
                    <label for="fname">main_main_minor:</label>
                    <input type="text" id="fname" name="main_main_minor" value="{{ $data['main_main_minor'] }}"><br>
                    <label for="fname">sweets:</label>
                    <input type="text" id="fname" name="sweets" value="{{ $data['sweets'] }}"><br>
                    <label for="fname">drinking_frequency:</label>
                    <input type="text" id="fname" name="drinking_frequency" value="{{ $data['drinking_frequency'] }}"><br>
                    <label for="fname">alcohol_consumed_num:</label>
                    <input type="text" id="fname" name="alcohol_consumed_num" value="{{ $data['alcohol_consumed_num'] }}"><br>
                    <label for="fname">smoking:</label>
                    <input type="text" id="fname" name="smoking" value="{{ $data['smoking'] }}"><br>
                </div>
            </div>
            <button class="btn btn-primary" style="float: right; margin-right: 280px; margin-top: 50px">Save changes</button>
        </form>
    </div>
</body>

</html>
