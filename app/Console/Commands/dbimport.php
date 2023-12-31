<?php

namespace App\Console\Commands;

use App\Models\LiliModel;
use App\Models\LiliUser;
use App\Models\Member;
use Illuminate\Console\Command;

class dbimport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:dbimport';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $models = LiliModel::limit(1)->offset(0)->get();
        $users = LiliUser::limit(5)->offset(0)->get();
//        dd($models);
//        dd($users[0]);

        $maps = [
//            ["", "job_experience"],
            ["skills_text", "skills"],
//            ["", "tattoo"],
//            ["", "job_experience_jpn"],
//            ["", "skills_jpn"],
//            ["", "tattoo_jpn"],
//            ["", "instagram_id"],
//            ["", "line_id"],
//            ["", "youtube"],
            ["address", "address"],
//            ["", "nearest_station"],
//            ["", "apartment"],
            ["zipcode", "zipcode"],
            ["state", "state"],
            ["weight", "weight"],
            ["height", "height"],
            ["bust", "bust"],
            ["waist", "waist"],
            ["hips", "hips"],
//            ["", "shoes"],
//            ["current_hair_color", "hair_color_id"],
//            ["", "eye_color_id"],
//            ["", "bank_name"],
//            ["", "branch_name"],
//            ["no", "account_no"],
//            ["", "account_name"],
//            ["", "account_classification_id"],
//            ["", "type_of_visa"],
//            ["", "valid_until"],
//            ["", "other"],
            ["are_you_mixed", "is_hybrid"],
//            ["actor_actress_type", "is_artist"],
//            ["", "status"],
//            ["", "sort"],
//            ["", "created_at"],
//            ["", "updated_at"],
//            ["", "seen_at"],
//            ["", "is_show_follower_count"],
//            ["", "is_show_subscribe_count"],
//            ["", "deleted_at"],
        ];
        $maps2 = [
//            ["", "name"],
            ["name", "first_name"],
            ["family", "last_name"],
            ["last_name_furigana", "last_name_jpn"],
            ["first_name_furigana", "first_name_jpn"],
//            ["", "first_name_length"],
//            ["", "name_jpn"],
//            ["", "first_name_jpn_length"],
//            ["biography", "bio"],
//            ["", "bio_jpn"],
//            ["", "email"],
//            ["", "email_verified_at"],
//            ["", "model_verified_at"],
//            ["", "model_updated_unverified"],
//            ["", "model_updated_not_appended"],
            ["mobile_number", "cell_phone"],
//            ["", "city"],
//            ["", "country_id"],
//            ["", "ethnic_id"],
//            ["", "gender_id"],
            ["birthday", "birthday"],
//            ["", "corporate"],
//            ["", "unique_id"],
//            ["", "model_id"],
//            ["", "password"],
//            ["", "api_token"],
//            ["", "google_id"],
//            ["", "remember_token"],
//            ["", "created_at"],
//            ["", "updated_at"],
//            ["", "seen_at"],
//            ["", "is_model"],
//            ["", "age"],
//            ["", "deleted_at"],
        ];

        foreach ($models as $row) {
            $destinationModel = new Member();

            foreach ($maps as $map) {
                $destinationModel[$map[0]] = $row[$map[1]];
            }
            foreach ($maps2 as $map) {
                $destinationModel[$map[0]] = $row[$map[1]];
            }
            $destinationModel->save();
        }
    }
}
