<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEmailVerificationToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {
            $table->string('confirmation_code',100)->nullable();
            $table->tinyInteger('confirmed')->nullable();           
            $table->string('refer',100)->nullable();             
            $table->string('timezone', 100)->default('UTC');
            $table->string('locale', 10)->nullable();
            $table->datetime('user_disabled')->nullable();
            $table->string('invite_code', 45)->nullable();
            $table->smallInteger('allowed_to_invite')->notNull()->default(0);
            $table->string('mobileCountryCode',20)->nullable(); 
            $table->string('birthday',20)->nullable();
            $table->string('profileImage',200)->nullable();
            $table->tinyInteger('profileImageVerified')->nullable();
            $table->string('gender',6)->nullable();
            $table->string('university',60)->nullable(); 
            $table->string('employer',100)->nullable();
            $table->string('country',30)->nullable();
            $table->string('city',50)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
            $table->dropColumn('confirmation_code');
            $table->dropColumn('confirmed');
            $table->dropColumn('refer');
            $table->dropColumn('timezone');
            $table->dropColumn('locale');
            $table->dropColumn('user_disabled');
            $table->dropColumn('invite_code');
            $table->dropColumn('allowed_to_invite');     
            $table->dropColumn('mobileCountryCode');
            $table->dropColumn('birthday');
            $table->dropColumn('profileImage');
            $table->dropColumn('profileImageVerified');
            $table->dropColumn('gender');
            $table->dropColumn('university');
            $table->dropColumn('employer');
            $table->dropColumn('country'); 
            $table->dropColumn('city');            
        });
    }
}
