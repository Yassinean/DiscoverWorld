    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        /**
         * Run the migrations.
         */
        public function up(): void
        {
            Schema::create('recits', function (Blueprint $table) {
                $table->bigIncrements('idRecits');
                $table->string('title');
                $table->text('description');
                $table->string('photo');
                $table->string('aventure');
                $table->string('destination');
                $table->date('date_created');
                $table->date('date_created');
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('recits');
        }
    };