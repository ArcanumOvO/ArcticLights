<?php

use Illuminate\Database\Migrations\Migration;

class EditUsersData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $users = \App\Models\User::query()->get(['id', 'sex'])->all();
        foreach ($users as $user) {
            $sex = mb_strtolower($user->sex);
            if (preg_match('/ve;|уж|м/iu', $sex)) {
                $user->sex = 'm';
            } else if (preg_match('/;ty|ен|ж|F/iu', $sex)) {
                $user->sex = 'f';
            }
            $user->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
