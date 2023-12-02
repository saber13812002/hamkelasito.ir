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

        // Retrieve data from the source database
//        $models = LiliModel::limit(5)->offset(0)->get();
        $users = LiliUser::limit(5)->offset(0)->get();
//        dd($models);
        dd($users[0]);

        $maps = [
            ["", "job_experience"],
            ["", "skills"],
            ["", "tattoo"],
            ["", "job_experience_jpn"],
            ["", "skills_jpn"],
            ["", "tattoo_jpn"],
            ["", "instagram_id"],
            ["", "line_id"],
            ["", "youtube"],
            ["", "address"],
            ["", "nearest_station"],
            ["", "apartment"],
            ["", "zipcode"],
            ["", "state"],
            ["", "weight"],
            ["", "height"],
            ["", "bust"],
            ["", "waist"],
            ["", "hips"],
            ["", "shoes"],
            ["", "hair_color_id"],
            ["", "eye_color_id"],
            ["", "bank_name"],
            ["", "branch_name"],
            ["no", "account_no"],
            ["", "account_name"],
            ["", "account_classification_id"],
            ["", "type_of_visa"],
            ["", "valid_until"],
            ["", "other"],
            ["", "is_hybrid"],
            ["", "is_artist"],
            ["", "status"],
            ["", "sort"],
            ["", "created_at"],
            ["", "updated_at"],
            ["", "seen_at"],
            ["", "is_show_follower_count"],
            ["", "is_show_subscribe_count"],
            ["", "deleted_at"],
        ];
        $map2 = [
            ["", "name"],
            ["", "first_name"],
            ["", "last_name"],
            ["", "last_name_jpn"],
            ["", "first_name_jpn"],
            ["", "first_name_length"],
            ["", "name_jpn"],
            ["", "first_name_jpn_length"],
            ["", "bio"],
            ["", "bio_jpn"],
            ["", "email"],
            ["", "email_verified_at"],
            ["", "model_verified_at"],
            ["", "model_updated_unverified"],
            ["", "model_updated_not_appended"],
            ["", "cell_phone"],
            ["", "city"],
            ["", "country_id"],
            ["", "ethnic_id"],
            ["", "gender_id"],
            ["", "birthday"],
            ["", "corporate"],
            ["", "unique_id"],
            ["", "model_id"],
            ["", "password"],
            ["", "api_token"],
            ["", "google_id"],
            ["", "remember_token"],
            ["", "created_at"],
            ["", "updated_at"],
            ["", "seen_at"],
            ["", "is_model"],
            ["", "age"],
            ["", "deleted_at"],
        ];

// Iterate over each row and save it in the destination database
        foreach ($models as $row) {
            // Create a new instance of the destination model
            $destinationModel = new Member();

            // Set the attributes of the destination model with values from the source model
            foreach ($maps as $map)
                $destinationModel->$map[0] = $row->$map[1];
            // ...

            // Save the destination model instance to the destination database
            $destinationModel->save();
        }
    }
}
