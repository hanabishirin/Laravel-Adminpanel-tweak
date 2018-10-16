<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMLSPropertyRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_l_s_property_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('listing_id')->comment('L_ListingID, mls main id used for listings');


            //room details
            $table->text('r1f')->nullable()->comment('LM_char5_7, room 1 floor located');
            $table->text('r1t')->nullable()->comment('LM_Char10_25, room 1 type');
            $table->text('r1w')->nullable()->comment('LM_char5_8, room 1 dimension 1');
            $table->text('r1l')->nullable()->comment('LM_char5_9, room 1 dimension 2');

            $table->text('r2f')->nullable()->comment('LM_char5_10, room 2 floor located');
            $table->text('r2t')->nullable()->comment('LM_char5_11, room 2 type');
            $table->text('r2w')->nullable()->comment('LM_char5_12, room 2 dimension 1');
            $table->text('r2l')->nullable()->comment('LM_char5_13, room 2 dimension 2');

            $table->text('r3f')->nullable()->comment('LM_char5_14 , room 3 floor located');
            $table->text('r3t')->nullable()->comment('LM_char5_15 , room 3 type');
            $table->text('r3w')->nullable()->comment('LM_char5_16 , room 3 dimension 1');
            $table->text('r3l')->nullable()->comment('LM_char5_17 , room 3 dimension 2');

            $table->text('r4f')->nullable()->comment('LM_char5_18 , room 4 floor located');
            $table->text('r4t')->nullable()->comment('LM_char5_19 , room 4 type');
            $table->text('r4w')->nullable()->comment('LM_char5_20 , room 4 dimension 1');
            $table->text('r4l')->nullable()->comment('LM_char5_21 , room 4 dimension 2');

            $table->text('r5f')->nullable()->comment('LM_char5_22 , room 5 floor located');
            $table->text('r5t')->nullable()->comment('LM_char5_23 , room 5 type');
            $table->text('r5w')->nullable()->comment('LM_char5_24 , room 5 dimension 1');
            $table->text('r5l')->nullable()->comment('LM_char5_25 , room 5 dimension 2');

            $table->text('r6f')->nullable()->comment('LM_char5_26 , room 6 floor located');
            $table->text('r6t')->nullable()->comment('LM_char5_27 , room 6 type');
            $table->text('r6w')->nullable()->comment('LM_char5_28 , room 6 dimension 1');
            $table->text('r6l')->nullable()->comment('LM_char5_29 , room 6 dimension 2');

            $table->text('r7f')->nullable()->comment('LM_char5_30 , room 7 floor located');
            $table->text('r7t')->nullable()->comment('LM_char5_31 , room 7 type');
            $table->text('r7w')->nullable()->comment('LM_char5_32 , room 7 dimension 1');
            $table->text('r7l')->nullable()->comment('LM_char5_33 , room 7 dimension 2');

            $table->text('r8f')->nullable()->comment('LM_char5_34 , room 8 floor located');
            $table->text('r8t')->nullable()->comment('LM_char5_35 , room 8 type');
            $table->text('r8w')->nullable()->comment('LM_char5_36 , room 8 dimension 1');
            $table->text('r8l')->nullable()->comment('LM_char5_37 , room 8 dimension 2');

            $table->text('r9f')->nullable()->comment('LM_char5_38 , room 9 floor located');
            $table->text('r9t')->nullable()->comment('LM_char5_39 , room 9 type');
            $table->text('r9w')->nullable()->comment('LM_char5_40 , room 9 dimension 1');
            $table->text('r9l')->nullable()->comment('LM_char5_41 , room 9 dimension 2');

            $table->text('r10f')->nullable()->comment('LM_char5_42 , room 10 floor located');
            $table->text('r10t')->nullable()->comment('LM_char5_43 , room 10 type');
            $table->text('r10w')->nullable()->comment('LM_char5_44 , room 10 dimension 1');
            $table->text('r10l')->nullable()->comment('LM_char5_45 , room 10 dimension 2');

            $table->text('r11f')->nullable()->comment('LM_char5_46 , room 11 floor located');
            $table->text('r11t')->nullable()->comment('LM_char5_47 , room 11 type');
            $table->text('r11w')->nullable()->comment('LM_char5_48 , room 11 dimension 1');
            $table->text('r11l')->nullable()->comment('LM_char5_49 , room 11 dimension 2');

            $table->text('r12f')->nullable()->comment('LM_char5_50 , room 12 floor located');
            $table->text('r12t')->nullable()->comment('LM_char5_51 , room 12 type');
            $table->text('r12w')->nullable()->comment('LM_char5_52 , room 12 dimension 1');
            $table->text('r12l')->nullable()->comment('LM_char5_53 , room 12 dimension 2');

            $table->text('r13f')->nullable()->comment('LM_char5_54 , room 13 floor located');
            $table->text('r13t')->nullable()->comment('LM_char5_55 , room 13 type');
            $table->text('r13w')->nullable()->comment('LM_char5_56 , room 13 dimension 1');
            $table->text('r13l')->nullable()->comment('LM_char5_57 , room 13 dimension 2');

            $table->text('r14f')->nullable()->comment('LM_char5_58 , room 14 floor located');
            $table->text('r14t')->nullable()->comment('LM_char5_59 , room 14 type');
            $table->text('r14w')->nullable()->comment('LM_char5_60 , room 14 dimension 1');
            $table->text('r14l')->nullable()->comment('LM_Char10_26  , room 14 dimension 2');

            $table->text('r15f')->nullable()->comment('LM_Char10_27 , room 15 floor located');
            $table->text('r15t')->nullable()->comment('LM_char10_28 , room 15 type');
            $table->text('r15w')->nullable()->comment('LM_char10_29 , room 15 dimension 1');
            $table->text('r15l')->nullable()->comment('LM_char10_30 , room 15 dimension 2');

            $table->text('r16f')->nullable()->comment('LM_char10_31 , room 16 floor located');
            $table->text('r16t')->nullable()->comment('LM_char10_32 , room 16 type');
            $table->text('r16w')->nullable()->comment('LM_char10_33 , room 16 dimension 1');
            $table->text('r16l')->nullable()->comment('LM_char10_34 , room 16 dimension 2');

            $table->text('r17f')->nullable()->comment('LM_char10_35 , room 17 floor located');
            $table->text('r17t')->nullable()->comment('LM_char10_36 , room 17 type');
            $table->text('r17w')->nullable()->comment('LM_char10_37 , room 17 dimension 1');
            $table->text('r17l')->nullable()->comment('LM_char10_38 , room 17 dimension 2');

            $table->text('r18f')->nullable()->comment('LM_char10_39 , room 18 floor located');
            $table->text('r18t')->nullable()->comment('LM_char10_40 , room 18 type');
            $table->text('r18w')->nullable()->comment('LM_char10_41 , room 18 dimension 1');
            $table->text('r18l')->nullable()->comment('LM_char10_42 , room 18 dimension 2');

            $table->text('r19f')->nullable()->comment('LM_char10_43 , room 19 floor located');
            $table->text('r19t')->nullable()->comment('LM_char10_44 , room 19 type');
            $table->text('r19w')->nullable()->comment('LM_char10_45 , room 19 dimension 1');
            $table->text('r19l')->nullable()->comment('LM_char10_46 , room 19 dimension 2');

            $table->text('r20f')->nullable()->comment('LM_char10_47 , room 20 floor located');
            $table->text('r20t')->nullable()->comment('LM_char10_48 , room 20 type');
            $table->text('r20w')->nullable()->comment('LM_char10_49 , room 20 dimension 1');
            $table->text('r20l')->nullable()->comment('LM_char10_50 , room 20 dimension 2');

            $table->text('r21f')->nullable()->comment('LM_char10_51 , room 21 floor located');
            $table->text('r21t')->nullable()->comment('LM_char10_52 , room 21 type');
            $table->text('r21w')->nullable()->comment('LM_char10_53 , room 21 dimension 1');
            $table->text('r21l')->nullable()->comment('LM_char10_54 , room 21 dimension 2');

            $table->text('r22f')->nullable()->comment('LM_char10_55 , room 22 floor located');
            $table->text('r22t')->nullable()->comment('LM_char10_56 , room 22 type');
            $table->text('r22w')->nullable()->comment('LM_char10_57 , room 22 dimension 1');
            $table->text('r22l')->nullable()->comment('LM_char10_58 , room 22 dimension 2');

            $table->text('r23f')->nullable()->comment('LM_char10_59 , room 23 floor located');
            $table->text('r23t')->nullable()->comment('LM_char10_60 , room 23 type');
            $table->text('r23w')->nullable()->comment('LM_char10_61 , room 23 dimension 1');
            $table->text('r23l')->nullable()->comment('LM_char10_62 , room 23 dimension 2');

            $table->text('r24f')->nullable()->comment('LM_char10_63 , room 24 floor located');
            $table->text('r24t')->nullable()->comment('LM_char10_64 , room 24 type');
            $table->text('r24w')->nullable()->comment('LM_char10_65 , room 24 dimension 1');
            $table->text('r24l')->nullable()->comment('LM_char10_66 , room 24 dimension 2');

            $table->text('r25f')->nullable()->comment('LM_char10_67 , room 25 floor located');
            $table->text('r25t')->nullable()->comment('LM_char10_68 , room 25 type');
            $table->text('r25w')->nullable()->comment('LM_char10_69 , room 25 dimension 1');
            $table->text('r25l')->nullable()->comment('LM_char10_70 , room 25 dimension 2');

            $table->text('r26f')->nullable()->comment('LM_Char25_4 , room 26 floor located');
            $table->text('r26t')->nullable()->comment('LM_Char25_5 , room 26 type');
            $table->text('r26w')->nullable()->comment('LM_Char25_6 , room 26 dimension 1');
            $table->text('r26l')->nullable()->comment('LM_Char25_7 , room 26 dimension 2');

            $table->text('r27f')->nullable()->comment('LM_Char25_8 , room 27 floor located');
            $table->text('r27t')->nullable()->comment('LM_Char25_9 , room 27 type');
            $table->text('r27w')->nullable()->comment('LM_Char25_10 , room 27 dimension 1');
            $table->text('r27l')->nullable()->comment('LM_Char25_11 , room 27 dimension 2');

            $table->text('r28f')->nullable()->comment('LM_Char25_12 , room 28 floor located');
            $table->text('r28t')->nullable()->comment('LM_Char25_13 , room 28 type');
            $table->text('r28w')->nullable()->comment('LM_Char25_14 , room 28 dimension 1');
            $table->text('r28l')->nullable()->comment('LM_Char25_15 , room 28 dimension 2');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_l_s_property_rooms');
    }
}
